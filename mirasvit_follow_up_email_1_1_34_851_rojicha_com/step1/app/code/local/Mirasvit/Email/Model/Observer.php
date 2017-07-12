<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Follow Up Email
 * @version   1.1.34
 * @build     851
 * @copyright Copyright (C) 2017 Mirasvit (http://mirasvit.com/)
 */



class Mirasvit_Email_Model_Observer extends Varien_Object
{
    public function __construct()
    {
        parent::__construct();
        // Solve error "Call to a member function 'getFullActionName()' on a non object".
        // Actually this method shouldn't be called in crontab context(area).
        Mage::app()->getFrontController()->setAction(
            new Mage_Adminhtml_Controller_Action(Mage::app()->getRequest(), Mage::app()->getResponse())
        );
    }

    public function sendQueue($observer)
    {
        $queueCollection = Mage::getModel('email/queue')->getCollection()
            ->addReadyFilter()
            ->setOrder('scheduled_at', 'ASC')
            ->setPageSize(10);

        foreach ($queueCollection as $item) {
            try {
                $item->send();
            } catch (Exception $e) {
                $item->error($e->__toString());
            }
        }
    }

    public function checkEvents()
    {
        Mage::getModel('email/service_eventGenerateService')->generate(Mage::helper('email/event')->getActiveEvents());

        $triggers = Mage::getModel('email/trigger')->getCollection()
            ->addActiveFilter();

        foreach ($triggers as $trigger) {
            $trigger->processNewEvents();
        }

        return true;
    }

    public function onEmailQueueGetContentAfter($observer)
    {
        $queue = $observer->getQueue();

        Mage::helper('email')->prepareQueueContent($queue);
    }

    public function deleteExpiredCoupons()
    {
        $coupons = Mage::getModel('salesrule/coupon')->getCollection()
            ->addFieldToFilter('code', array('like' => 'EML%'))
            ->addFieldToFilter('expiration_date', array(
                'neq' => '0000-00-00 00:00:00',
            ))
            ->addFieldToFilter('expiration_date', array(
                'lteq' => Mage::getSingleton('core/date')->gmtDate(),
            ));

        foreach ($coupons as $coupon) {
            $coupon->delete();
        }

        return $this;
    }

    public function clearOldData()
    {
        $monthAgo = date('Y-m-d H:i:s', Mage::getSingleton('core/date')->gmtTimestamp() - 30 * 24 * 60 * 60);

        # Step 1. Remove old events
        $collection = Mage::getModel('email/event')->getCollection()
            ->addFieldToFilter('updated_at', array('lt' => $monthAgo));

        foreach ($collection as $event) {
            $event->delete();
        }

        # Step 2. Remove old mails
        $collection = Mage::getModel('email/queue')->getCollection()
            ->addFieldToFilter('status', array('neq' => Mirasvit_Email_Model_Queue::STATUS_PENDING))
            ->addFieldToFilter('scheduled_at', array('lt' => $monthAgo));

        foreach ($collection as $queue) {
            $queue->delete();
        }
    }

    /**
     * Schedule new queue if chain's frequency type is EVERY.
     *
     * @param Varien_Event_Observer $observer
     */
    public function onQueueDelivery(Varien_Event_Observer $observer)
    {
        /** @var Mirasvit_Email_Model_Queue $queue */
        $queue = $observer->getData('queue');
        $chain = $queue->getChain();

        if ($chain
            && $chain->getId()
            && $chain->getFrequencyType() == Mirasvit_Email_Model_System_Source_Chain_FrequencyType::FREQUENCY_EVERY
        ) {
            $queue = clone $queue;
            // If frequency is not set, set it to every period (every day/week/month/year)
            if (!$chain->getFrequency(false)) {
                $chain->setFrequency(1);
            }
            // get queue scheduled at date for next time.
            $scheduledAt    = strtotime($queue->getScheduledAt()) + $chain->getFrequency();
            // add general chain delay
            $scheduledAt    = $chain->getScheduledAt($scheduledAt);
            $gmtScheduledAt = date('Y-m-d H:i:s', $scheduledAt);

            $queue->setId(null) // update cloned values
                ->setSentAt(null)
                ->setCreatedAt(null)
                ->setStatus(Mirasvit_Email_Model_Queue::STATUS_PENDING)
                ->setScheduledAt($gmtScheduledAt)
                ->save();
        }
    }
}
