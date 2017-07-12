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



class Mirasvit_Email_Model_System_Source_Chain_Range
{
    const RANGE_DAY   = 'day';
    const RANGE_WEEK  = 'week';
    const RANGE_MONTH = 'month';
    const RANGE_YEAR  = 'year';

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            self::RANGE_DAY   => Mage::helper('email')->__('day(s)'),
            self::RANGE_WEEK  => Mage::helper('email')->__('week(s)'),
            self::RANGE_MONTH => Mage::helper('email')->__('month(s)'),
            self::RANGE_YEAR  => Mage::helper('email')->__('year(s)'),
        );
    }
}
