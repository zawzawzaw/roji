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


class Mirasvit_Email_Block_Adminhtml_Event extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_event';
        $this->_blockGroup = 'email';
        $this->_headerText = __('Event Log');
        parent::__construct();

        $this->_removeButton('add');

        $this->_addButton('check_events', array(
            'label'   => Mage::helper('email')->__('Check Events'),
            'onclick' => "window.location.href='".Mage::helper("adminhtml")->getUrl('*/*/check')."'",
            'class'   => '',
        ), -100);

        return $this;
    }
}