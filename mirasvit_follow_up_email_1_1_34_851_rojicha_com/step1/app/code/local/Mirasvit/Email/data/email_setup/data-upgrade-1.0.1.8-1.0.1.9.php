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



$chainCollection = Mage::getResourceModel('email/trigger_chain_collection');
/** @var Mirasvit_Email_Model_Trigger_Chain $chain */
foreach ($chainCollection as $chain) {
    if (!$chain->getFrequencyType()) {
        $chain->setFrequencyType(Mirasvit_Email_Model_System_Source_Chain_FrequencyType::FREQUENCY_AFTER)
            ->setScheduleType($chain->getType())
            ->setRange(Mirasvit_Email_Model_System_Source_Chain_Range::RANGE_DAY)
            ->setFrequency($chain->getData('days') / 24 / 60 / 60)
            ->setHours($chain->getData('hours') / 60 / 60)
            ->setMinutes($chain->getData('minutes') / 60)
            ->save();
    }
}
