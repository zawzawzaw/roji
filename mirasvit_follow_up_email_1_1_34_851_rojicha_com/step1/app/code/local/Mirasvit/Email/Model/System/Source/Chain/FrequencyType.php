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



class Mirasvit_Email_Model_System_Source_Chain_FrequencyType
{
    const FREQUENCY_AFTER = 'at';
    const FREQUENCY_EVERY = 'every';

    /**
     * @param mixed $option
     *
     * @return string
     */
    public function getOptionLabel($option)
    {
        $options = $this->toArray();

        return $options[$option];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            self::FREQUENCY_AFTER => Mage::helper('email')->__('After'),
            self::FREQUENCY_EVERY => Mage::helper('email')->__('Every'),
        );
    }
}
