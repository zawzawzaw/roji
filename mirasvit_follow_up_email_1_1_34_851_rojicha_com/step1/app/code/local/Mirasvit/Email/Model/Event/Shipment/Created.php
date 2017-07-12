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



class Mirasvit_Email_Model_Event_Shipment_Created extends Mirasvit_Email_Model_Event_Abstract
{
    const EVENT_CODE = 'shipment_created';

    /**
     * @inheritdoc
     */
    public function getEventsGroup()
    {
        return Mage::helper('email')->__('Shipment');
    }

    /**
     * @inheritdoc
     */
    public function getEvents()
    {
        $result = array();

        $result[self::EVENT_CODE] = __('New shipment created');

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function findEvents($eventCode, $timestamp)
    {
        $events   = array();
        $fromDate = date('Y-m-d H:i:s', $timestamp);
        $resource = Mage::getSingleton('core/resource');
        $read     = $resource->getConnection('core_read');

        $select = $read->select()->from(array('shipment' => $resource->getTableName('sales/shipment')), array(
                'shipment_id' => 'entity_id',
                'store_id',
                'order_id',
                'customer_id',
                'created_at'
            ))->joinLeft(
                array('order' => $resource->getTableName('sales/order')),
                'shipment.order_id = order.entity_id',
                array(
                    'customer_name' => 'CONCAT_WS(" ", order.customer_firstname, order.customer_lastname)',
                    'customer_email' => 'order.customer_email',
                )
            )
            ->where('shipment.created_at > ?', $fromDate);

        $shipments = $read->fetchAll($select);
        foreach ($shipments as $shipment) {
            $shipment['time'] = strtotime($shipment['created_at']);
            $events[] = $shipment;
        }

        return $events;
    }
}