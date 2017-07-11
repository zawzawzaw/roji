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



class Mirasvit_Email_Model_Rule_Condition_Email_Trigger extends Mage_Rule_Model_Condition_Abstract
{
    const ATTRIBUTE_HAS           = '=';
    const ATTRIBUTE_DOES_NOT_HAVE = '!=';

    public function loadAttributeOptions()
    {
        $this->setAttributeOption(array(
            self::ATTRIBUTE_HAS           => Mage::helper('email')->__('Has'),
            self::ATTRIBUTE_DOES_NOT_HAVE => Mage::helper('email')->__('Does Not Have'),
        ));

        return $this;
    }

    public function loadValueOptions()
    {
        $options = Mage::getResourceModel('email/trigger_collection')
            ->addFieldToFilter('is_active', 1)
            ->toOptionHash();

        $this->setValueOption($options);

        return $this;
    }

    public function getInputType()
    {
        return 'grid';
    }

    public function getValueElementType()
    {
        return 'multiselect';
    }

    protected function _prepareValueOptions()
    {
        $hashedOptions = array();
        $selectOptions = $this->getAttributeOptions();

        $this->setData('value_select_options', $selectOptions);
        foreach ($selectOptions as $o) {
            $hashedOptions[$o['value']] = $o['label'];
        }

        $this->setData('value_option', $hashedOptions);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function asHtml()
    {
        return $this->getTypeElementHtml()
            . Mage::helper('email')->__('Recipient %s pending emails in the mail queue and the trigger %s %s',
                $this->getAttributeElementHtml(),
                $this->getOperatorElementHtml(),
                $this->getValueElementHtml()
            )
            . $this->getRemoveLinkHtml();
    }

    public function validate(Varien_Object $object)
    {
        $emails = Mage::getResourceModel('email/queue_collection')
            ->addFieldToFilter('status', Mirasvit_Email_Model_Queue::STATUS_PENDING)
            ->addFieldToFilter('trigger_id', array($this->getOperator() == '()' ? 'in' : 'nin' => $this->getValue()))
            ->addFieldToFilter('recipient_email', $object->getCustomerEmail());

        $operator = $this->getAttribute() == self::ATTRIBUTE_HAS ? '>=' : '<';
        $ifPart = $emails->getConnection()->getCheckSql("COUNT(*) {$operator} 1", 1, 0);

        $select = $emails->getSelect()
            ->reset(Zend_Db_Select::COLUMNS)
            ->columns(array(new Zend_Db_Expr($ifPart)));

        return (bool) $emails->getConnection()->fetchOne($select);
    }
}
