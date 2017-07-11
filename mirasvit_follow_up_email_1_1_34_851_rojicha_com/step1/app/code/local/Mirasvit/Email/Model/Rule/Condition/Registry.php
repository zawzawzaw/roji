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



class Mirasvit_Email_Model_Rule_Condition_Registry extends Mirasvit_Email_Model_Rule_Condition_Abstract
{
    public function loadAttributeOptions()
    {
        $attributes = array(
            'registry_exists' => Mage::helper('email')->__('Gift Registry: Exists'),
        );

        asort($attributes);
        $this->setAttributeOption($attributes);

        return $this;
    }

    public function getValueSelectOptions()
    {
        $this->_prepareValueOptions();

        if (!$this->hasData('value_select_options')) {
            switch($this->getAttribute()) {
                case 'registry_exists':
                    $options = Mage::getModel('adminhtml/system_config_source_yesno')->toOptionArray();
                    break;
                default:
                    $options = parent::getValueSelectOptions();
            }
            $this->setData('value_select_options', $options);
        }

        return $this->getData('value_select_options');
    }

    public function getInputType()
    {
        switch ($this->getAttribute()) {
            case 'registry_exists':
                return 'select';
        }

        return parent::getInputType();
    }

    public function getValueElementType()
    {
        switch ($this->getAttribute()) {
            case 'registry_exists':
                return 'select';
        }

        return parent::getValueElementType();
    }

    public function validate(Varien_Object $object)
    {
        $registry = Mage::getModel('giftr/registry')->load($object->getRegistryId());
        if ($registry->getId()) {
            $value = 1;
        } else {
            $value = 0;
        }

        return $this->validateAttribute($value);
    }
}