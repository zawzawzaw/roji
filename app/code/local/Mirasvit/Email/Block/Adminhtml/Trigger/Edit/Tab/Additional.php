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
 * @version   1.1.3
 * @build     735
 * @copyright Copyright (C) 2016 Mirasvit (http://mirasvit.com/)
 */


class Mirasvit_Email_Block_Adminhtml_Trigger_Edit_Tab_Additional extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareLayout()
    {
        $this->setChild('generate',
            $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setData(array(
                    'label'     => $this->__('Generate Email Queue'),
                    'onclick'   => "saveAndGenerate()",
                    'class'     => 'save'
                    ))
                );

        return parent::_prepareLayout();
    }

    protected function _prepareForm()
    {
        $model = Mage::registry('current_model');
        $form  = new Varien_Data_Form();
        $this->setForm($form);

        $additonal = $form->addFieldset('additonal', array('legend' => __('Additional')));

        $additonal->addField('generate_from', 'date', array(
            'label'        => $this->__('Generate Email Queue From'),
            'required'     => false,
            'name'         => 'generate_from',
            'image'        => $this->getSkinUrl('images/grid-cal.gif'),
            'input_format' => Varien_Date::DATETIME_INTERNAL_FORMAT,
            'format'       => Mage::app()->getLocale()->getDateTimeFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
            'time'         => true,
        ));

        $additonal->addField('schedule_strategy', 'checkbox', array(
            'label'     => $this->__('Check to schedule the emails starting from event creation date'),
            'required'  => false,
            'name'      => 'event_schedule_strategy',
            'checked'   => false,
            'value'     => Mirasvit_Email_Model_Service_EventGenerateService::SCHEDULE_STRATEGY_EVENT,
            'note'      => $this->__('By default the extension schedules the emails from generation date (current date).')
        ));

        $additonal->addField('generate', 'note', array(
            'text' => $this->getChildHtml('generate'),
            'note' => $this->__('Extension will schedule emails for all past events related with current trigger.<br>
                All scheduled emails related with current trigger will be removed.')
        ));

        return parent::_prepareForm();
    }
}
