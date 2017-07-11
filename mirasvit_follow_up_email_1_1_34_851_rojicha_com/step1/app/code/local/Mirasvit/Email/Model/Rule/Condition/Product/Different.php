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



class Mirasvit_Email_Model_Rule_Condition_Product_Different extends Mage_Rule_Model_Condition_Combine
{
    const OPERATOR_SAME = '=';
    const OPERATOR_DIFF = '!=';
    const VALUE_OPERATOR_MORE = '>';
    const VALUE_OPERATOR_LESS = '<';
    const VALUE_OPERATOR_EQUAL = '==';
    const VALUE_OPERATOR_ALL = 'all';
    const AGGREGATOR_ALL = 'all';
    const AGGREGATOR_ANY = 'any';

    public function __construct()
    {
        parent::__construct();

        $this->loadValueOperatorOptions();

        $this->setType('email/rule_condition_product_different');
        $this->setOperator(self::OPERATOR_DIFF);
    }

    public function getNewChildSelectOptions()
    {
        $productCondition = Mage::getModel('email/rule_condition_product');
        $productAttributes = $productCondition->loadAttributeOptions()->getAttributeOption();
        $attributes = array();
        foreach ($productAttributes as $code => $label) {
            if (strpos($code, 'quote_item_') === false) {
                $attributes[] = array('value' => 'email/rule_condition_product|'.$code, 'label' => $label);
            }
        }

        $conditions = array();
        $conditions = array_merge_recursive($conditions, array(
            array(
                'label' => Mage::helper('catalog')->__('Product Attribute'),
                'value' => $attributes,
            ),
        ));

        return $conditions;
    }

    public function loadAttributeOptions()
    {
        $productAttributes = Mage::getResourceSingleton('catalog/product')
            ->loadAllAttributes()
            ->getAttributesByCode();

        $attributes = array();
        foreach ($productAttributes as $attribute) {
            /* @var $attribute Mage_Catalog_Model_Resource_Eav_Attribute */
            if (!$attribute->isAllowedForRuleCondition()
                || !$attribute->getDataUsingMethod('is_used_for_promo_rules')
            ) {
                continue;
            }
            $attributes[$attribute->getAttributeCode()] = $attribute->getFrontendLabel();
        }

        asort($attributes);
        $this->setAttributeOption($attributes);

        return $this;
    }

    /**
     * Add attribute when loading array
     *
     * @param array $arr
     * @param string $key
     *
     * @return $this
     */
    public function loadArray($arr, $key = 'conditions')
    {
        if (isset($arr['operator'])) {
            $this->setData('operator', $arr['operator']);
        }

        if (isset($arr['attribute'])) {
            $this->setData('attribute', $arr['attribute']);
        }

        if (isset($arr['value_operator'])) {
            $this->setData('value_operator', $arr['value_operator']);
        }

        return parent::loadArray($arr, $key);
    }

    public function loadOperatorOptions()
    {
        $this->setOperatorOption(array(
            self::OPERATOR_SAME => Mage::helper('email')->__('Same'),
            self::OPERATOR_DIFF => Mage::helper('email')->__('Different'),
        ));

        return $this;
    }

    public function loadValueOptions()
    {
        $this->setValueOption(array());
        return $this;
    }

    public function getValueElementType()
    {
        return 'text';
    }

    public function loadValueOperatorOptions()
    {
        $this->setValueOperatorOption(array(
            self::VALUE_OPERATOR_EQUAL => Mage::helper('email')->__('Equal To'),
            self::VALUE_OPERATOR_MORE  => Mage::helper('email')->__('More Than'),
            self::VALUE_OPERATOR_LESS  => Mage::helper('email')->__('Less Than'),
            self::VALUE_OPERATOR_ALL   => Mage::helper('email')->__('All'),
        ));

        return $this;
    }

    public function getValueOperatorName()
    {
        return $this->getValueOperatorOption($this->getValueOperator());
    }

    /**
     * Retrieve Condition Operator element Instance
     * If the operator value is empty - define first available operator value as default
     *
     * @return Varien_Data_Form_Element_Select
     */
    public function getValueOperatorElement()
    {
        $options = $this->getValueOperatorOption();
        if (is_null($this->getValueOperator())) {
            foreach ($options as $key => $option) {
                $this->setValueOperator($key);
                break;
            }
        }

        $elementId   = sprintf('%s__%s__value_operator', $this->getPrefix(), $this->getId());
        $elementName = sprintf('rule[%s][%s][value_operator]', $this->getPrefix(), $this->getId());
        $element     = $this->getForm()->addField($elementId, 'select', array(
                'name'          => $elementName,
                'values'        => $options,
                'value'         => $this->getValueOperator(),
                'value_name'    => $this->getValueOperatorName(),
            ))
            ->setRenderer(Mage::getBlockSingleton('rule/editable'));

        return $element;
    }

    /**
     * {@inheritDoc}
     */
    public function asHtml()
    {
        return $this->getTypeElementHtml()
            . Mage::helper('email')->__('If %s %s of %s %s found while %s of these conditions match:',
                $this->getValueOperatorElement()->getHtml(),
                $this->getValueElementHtml(),
                $this->getOperatorElementHtml(),
                $this->getAttributeElementHtml(),
                $this->getAggregatorElement()->getHtml()
            )
            . $this->getRemoveLinkHtml();
    }

    /**
     * {@inheritDoc}
     */
    public function validate(Varien_Object $object)
    {
        $count      = 0;
        $isValid    = true;
        $value      = $this->getValue();
        $operator   = $this->getValueOperator();
        $collection = $this->getCollection($object);

        // Collect attribute values for each product
        if (count($collection)) {
            $values = array();
            foreach ($collection as $item) {
                if (parent::validate($item)) {
                    $product = $item->getProduct();
                    if (!$product) {
                        continue;
                    }

                    $count++;
                    $attrValue = $product->getData($this->getAttribute());
                    if (!$attrValue && $product->getTypeId() == Mage_Catalog_Model_Product_Type_Configurable::TYPE_CODE) {
                        $children = $item->getChildrenItems();
                        if (is_array($children) and isset($children[0])) {
                            $child = $children[0];
                            if ($child && $child->getProduct()) {
                                $attrValue = $child->getProduct()->getData($this->getAttribute());
                            }
                        }
                    }

                    $values[] = $attrValue;
                }
            }
            $values = array_filter($values);
            if (!count($values)) {
                return false;
            }

            $countUnique = count(array_unique($values));
            // Validate result
            if ($this->getOperator() == self::OPERATOR_DIFF) {
                $validatedValue = $countUnique;
            } else {
                $validatedValue = $count - $countUnique + 1; // Calculate count of similar values
            }

            if ($operator == self::VALUE_OPERATOR_ALL) { // If ALL - $validatedAvalue should be compared with count of all products
                $value = $count;
            }

            $isValid = $this->compareValues($operator, $validatedValue, $value);
        }

        return $isValid;
    }

    /**
     * Compare validatedValue over value depending on given operator.
     *
     * @param string     $operator
     * @param int        $validatedValue
     * @param int|string $value
     *
     * @return bool
     */
    private function compareValues($operator, $validatedValue, $value)
    {
        $result = true;
        switch($operator) {
            case self::VALUE_OPERATOR_MORE:
                $result = $validatedValue > $value;
                break;
            case self::VALUE_OPERATOR_LESS:
                $result = $validatedValue < $value;
                break;
            case self::VALUE_OPERATOR_EQUAL:
                $result = $validatedValue == $value;
                break;
        }

        return $result;
    }

    /**
     * Retrieve collection associated with validated object.
     * It can be collection or quote or order items.
     *
     * @param Varien_Object $object
     *
     * @return array|Mage_Sales_Model_Resource_Quote_Item_Collection|Mage_Sales_Model_Resource_Order_Item_Collection
     */
    private function getCollection(Varien_Object $object)
    {
        $collection = array();
        if ($object->getData('quote_id')) {
            $quote = Mage::getModel('sales/quote')->setSharedStoreIds(array_keys(Mage::app()->getStores()))
                ->load($object->getData('quote_id'));
            $collection = $quote->getAllVisibleItems();
        } elseif ($object->getData('order_id')) {
            $order = Mage::getModel('sales/order')->load($object->getData('order_id'));
            $collection = $order->getAllVisibleItems();
        }

        return $collection;
    }

    /**
     * {@inheritDoc}
     */
    public function asArray(array $arrAttributes = array())
    {
        $out = parent::asArray();
        $out['value_operator'] = $this->getValueOperator();

        return $out;
    }
}
