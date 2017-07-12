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



class Mirasvit_Email_IndexController extends Mage_Core_Controller_Front_Action
{
    public function subscribeAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            $queue = Mage::getModel('email/queue')->loadByUniqKeyMd5($code);

            if (!$queue) {
                Mage::getSingleton('core/session')->addError($this->__('Wrong subscription link'));
                $this->getResponse()->setRedirect($this->_getUrl('/', true));

                return;
            }

            Mage::getSingleton('email/unsubscription')->subscribe($queue->getRecipientEmail(true), $queue->getTriggerId());

            Mage::getSingleton('core/session')->addSuccess($this->__('You have been successfully subscribed.'));

            if ($to = $this->getRequest()->getParam('to')) {
                if (base64_decode($to)) {
                    $to = base64_decode($to);
                }

                $this->getResponse()->setRedirect($this->_getUrl($to));
                return;
            }
        }

        $this->getResponse()->setRedirect($this->_getUrl('/', true));
    }

    public function unsubscribeAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            $queue = Mage::getModel('email/queue')->loadByUniqKeyMd5($code);

            if (!$queue) {
                Mage::getSingleton('core/session')->addError($this->__('Wrong unsubscription link'));
                $this->getResponse()->setRedirect($this->_getUrl('/', true));

                return;
            }

            Mage::getSingleton('email/unsubscription')->unsubscribe($queue->getRecipientEmail(true), $queue->getTriggerId());

            Mage::getSingleton('core/session')->addSuccess($this->__('You have been successfully unsubscribed from receiving these emails.'));

            if ($to = $this->getRequest()->getParam('to')) {
                if (base64_decode($to)) {
                    $to = base64_decode($to);
                }

                $this->getResponse()->setRedirect($this->_getUrl($to));
                return;
            }
        }

        $this->getResponse()->setRedirect($this->_getUrl('/', true));
    }

    public function unsubscribeAllAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            $queue = Mage::getModel('email/queue')->loadByUniqKeyMd5($code);

            if (!$queue) {
                Mage::getSingleton('core/session')->addError($this->__('Wrong unsubscription link'));
                $this->getResponse()->setRedirect($this->_getUrl('/', true));

                return;
            }

            Mage::getSingleton('email/unsubscription')->unsubscribe($queue->getRecipientEmail(true), null);

            Mage::getSingleton('core/session')->addSuccess($this->__('You have been successfully unsubscribed from receiving these emails.'));

            if ($to = $this->getRequest()->getParam('to')) {
                if (base64_decode($to)) {
                    $to = base64_decode($to);
                }

                $this->getResponse()->setRedirect($this->_getUrl($to));
                return;
            }
        }

        $this->getResponse()->setRedirect($this->_getUrl('/', true));
    }

    public function unsubscribeNewsletterAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            $queue = Mage::getModel('email/queue')->loadByUniqKeyMd5($code);

            if (!$queue) {
                Mage::getSingleton('core/session')->addError($this->__('Wrong unsubscription link'));
                $this->getResponse()->setRedirect($this->_getUrl('/', true));

                return;
            }

            Mage::getSingleton('email/unsubscription')->unsubscribe($queue->getRecipientEmail(true), null);
            Mage::getSingleton('email/unsubscription')->unsubscribeNewsletter($queue->getRecipientEmail(true));

            Mage::getSingleton('core/session')->addSuccess($this->__('You have been successfully unsubscribed from receiving these emails.'));

            if ($to = $this->getRequest()->getParam('to')) {
                if (base64_decode($to)) {
                    $to = base64_decode($to);
                }

                $this->getResponse()->setRedirect($this->_getUrl($to));
                return;
            }
        }

        $this->getResponse()->setRedirect($this->_getUrl('/', true));
    }

    public function restoreCartAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            Mage::helper('email/frontend')->loginCustomerByQueueCode($code);

            if (Mage::helper('email/frontend')->restoreCartByQueueCode($code)) {
                $this->getResponse()->setRedirect($this->_getUrl('checkout/cart', true));

                return;
            }
        }

        Mage::getSingleton('core/session')->addError($this->__('The cart for restore not found.'));
        $this->getResponse()->setRedirect($this->_getUrl('/', true));
    }

    public function resumeAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            Mage::helper('email/frontend')->loginCustomerByQueueCode($code);
        }

        if ($to = $this->getRequest()->getParam('to')) {
            if (base64_decode($to)) {
                $to = base64_decode($to);
            }

            $this->getResponse()->setRedirect($this->_getUrl($to));
        } else {
            $this->getResponse()->setRedirect($this->_getUrl('/', true));
        }
    }

    public function viewAction()
    {
        if (($queueId = $this->getRequest()->getParam('queue_id')) || ($code = $this->getRequest()->getParam('code'))) {
            if ($queueId) {
                $queue = Mage::getModel('email/queue')->load($queueId);
            } else {
                $queue = Mage::getModel('email/queue')->getCollection()
                    ->addFieldToFilter('uniq_key_md5', $code)
                    ->addFieldToFilter('status', Mirasvit_Email_Model_Queue::STATUS_DELIVERED)
                    ->getFirstItem();
            }

            if (!$queue) {
                Mage::getSingleton('core/session')->addError($this->__('The email not found.'));
                $this->getResponse()->setRedirect($this->_getUrl('/', true));

                return;
            }

            $this->getResponse()->setBody($queue->getContent());
        } else {
            Mage::getSingleton('core/session')->addError($this->__('The cart for restore not found.'));
            $this->getResponse()->setRedirect($this->_getUrl('/', true));
        }
    }

    public function captureAction()
    {
        $type = $this->getRequest()->getParam('type');
        $value = $this->getRequest()->getParam('value');

        $quote = Mage::getModel('checkout/cart')->getQuote();
        if ($quote->getBillingAddress() && $quote->getBillingAddress()->getId()) {
            $billing = $quote->getBillingAddress();
            $billing->setData($type, $value)
                ->save();
        }

        $this->getResponse()->setBody('ok');
    }

    public function imageAction()
    {
        $length = 0;
        $path = $this->getRequest()->getParam('path');
        $size = $this->getRequest()->getParam('size');
        $type = $this->getRequest()->getParam('type', 'image');

        $url = Mage::helper('catalog/image')
            ->init(Mage::getModel('catalog/product'), $type, $path);

        if (intval($size) > 0) {
            $url = $url->resize(intval($size));
        }

        $urlParts = parse_url($url->__toString());
        // Remove base path from $urlParts to ignore duplicate of a base path, getBaseDir() already includes it
        $path = Mage::getBaseDir() . str_replace($this->getRequest()->getBaseUrl(), '', $urlParts['path']);

        $info = pathinfo($path);
        $ext = $info['extension'];
        $length = filesize($path);

        $this->getResponse()
            ->setHeader('Content-Type', 'image/'.$ext)
            ->setHeader('Content-Length', $length)
            ->setBody(file_get_contents($path));
    }

    protected function _getUrl($url, $full = false)
    {
        $params = array();
        foreach ($this->getRequest()->getParams() as $key => $value) {
            if (strpos($key, 'utm_') !== false) {
                $params[$key] = $value;
            }
        }

        if ($full) {
            $url = Mage::getUrl($url, array('_query' => $params));
        } else {
            $query = http_build_query($params);

            if ($query) {
                if (strpos($url, '?') !== false) {
                    $url .= '&'.$query;
                } else {
                    $url .= '?'.$query;
                }
            }
        }

        // Place hash to the end of URL
        if (($hashPos = strpos($url, '#')) && strpos($url, '?') > $hashPos) {
            $fragment = substr($url, $hashPos, strpos($url, '?') - $hashPos);
            $url = str_replace($fragment, '', $url).$fragment;
        }

        return $url;
    }

    public function addToCartAction()
    {
        if ($code = $this->getRequest()->getParam('code')) {
            Mage::helper('email/frontend')->loginCustomerByQueueCode($code);
        }

        if ($id = $this->getRequest()->getParam('id')) {
            $product = Mage::getModel('catalog/product')->load($id);
            if ($product) {
                $url = Mage::helper('checkout/cart')->getAddUrl($product);
                $this->getResponse()->setRedirect($this->_getUrl($url));
            }
        } else {
            $this->getResponse()->setRedirect($this->_getUrl('/', true));
        }
    }
}
