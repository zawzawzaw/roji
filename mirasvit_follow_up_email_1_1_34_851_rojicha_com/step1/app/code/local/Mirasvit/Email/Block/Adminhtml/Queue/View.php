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


class Mirasvit_Email_Block_Adminhtml_Queue_View extends Mage_Adminhtml_Block_Template
{
    public function _prepareLayout()
    {
        $this->setTemplate('mst_email/queue/view.phtml');

        return parent::_prepareLayout();
    }

    public function getModel()
    {
        return Mage::registry('current_model');
    }

    public function getHeaderText()
    {
        return Mage::helper('email')->__("Email to '%s'", $this->htmlEscape($this->getModel()->getRecipientEmail()));
    }

    public function getPreviewUrl()
    {
        return $this->getUrl('*/*/drop', array('_current' => true));
    }

    public function getBackUrl()
    {
        return $this->getUrl('adminhtml/email_queue/index');
    }

    /**
     * Get email queue argument value.
     *
     * @param string $key
     * @param mixed  $value
     * @param array  $args
     *
     * @return string
     */
    public function getArgumentValue($key, $value, $args)
    {
        $link   = false;
        $label  = false;
        $result = $value;

        switch($key) {
            case 'order_id':
                $order = Mage::getModel('sales/order')->load($value);
                $link  = $this->getUrl('*/sales_order/view', array('order_id' => $value));
                $label = $order->getIncrementId();
                break;
            case 'customer_name':
                if (isset($args['customer_id']) && $args['customer_id']) {
                    $link  = $this->getUrl('*/customer/edit', array('id' => $args['customer_id']));
                    $label = $args['customer_name'];
                }
                break;
            default:
                $result = is_object($value) ? $value->getId() : $value;
        }

        if ($link) {
            $result = sprintf('<a href="%s">%s</a>', $link, $label);
        }

        return $result;
    }
}