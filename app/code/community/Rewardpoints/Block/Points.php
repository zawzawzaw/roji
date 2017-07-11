<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@j2t-design.com so we can send you a copy immediately.
 *
 * @category   Magento extension
 * @package    RewardsPoint2
 * @copyright  Copyright (c) 2009 J2T DESIGN. (http://www.j2t-design.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Rewardpoints_Block_Points extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('referafriend/points.phtml');
        //->addAttributeToSort('rewardpoints_account_id', 'ASC')
        $points = Mage::getModel('rewardpoints/stats')->getCollection()
            ->addClientFilter(Mage::getSingleton('customer/session')->getCustomer()->getId());
        $points->getSelect()->order('rewardpoints_account_id DESC');

        // echo Mage::getSingleton('customer/session')->getCustomer()->getId();

        $earned_points = Mage::getModel('rewardpoints/stats')->getCollection()
            ->addClientFilter(Mage::getSingleton('customer/session')->getCustomer()->getId());
        $earned_points->getSelect()->where('points_spent = ?', 0);
        $earned_points->getSelect()->where('date_end > NOW() OR date_end IS NULL');
        $earned_points->getSelect()->where('rewardpoints_state = ?', 'complete');
        $earned_points->getSelect()->order('rewardpoints_account_id DESC');

        $spent_points = Mage::getModel('rewardpoints/stats')->getCollection()
            ->addClientFilter(Mage::getSingleton('customer/session')->getCustomer()->getId());
        $spent_points->getSelect()->where('points_spent > ?', 0);
        $spent_points->getSelect()->order('rewardpoints_account_id DESC');        

        $expired_points = Mage::getModel('rewardpoints/stats')->getCollection()
            ->addClientFilter(Mage::getSingleton('customer/session')->getCustomer()->getId());
        $expired_points->getSelect()->where('date_end < NOW()');
        $expired_points->getSelect()->order('rewardpoints_account_id DESC');

        $this->setPoints($points);
        $this->setEarnedPoints($earned_points);
        $this->setSpentPoints($spent_points);
        $this->setExpiredPoints($expired_points);
    }

    public function _prepareLayout()
    {
        parent::_prepareLayout();
        $pager = $this->getLayout()->createBlock('page/html_pager', 'rewardpoints.points')
            ->setCollection($this->getEarnedPoints());
        $this->setChild('earned_pager', $pager);
        $this->getEarnedPoints()->load();

        $pager = $this->getLayout()->createBlock('page/html_pager', 'rewardpoints.points')
            ->setCollection($this->getSpentPoints());
        $this->setChild('spent_pager', $pager);
        $this->getSpentPoints()->load();

        $pager = $this->getLayout()->createBlock('page/html_pager', 'rewardpoints.points')
            ->setCollection($this->getExpiredPoints());
        $this->setChild('expired_pager', $pager);
        $this->getExpiredPoints()->load();

        return $this;
    }

    public function getEarnedPagerHtml()
    {
        return $this->getChildHtml('earned_pager');
    }

    public function getSpentPagerHtml()
    {
        return $this->getChildHtml('spent_pager');
    }

    public function getExpiredPagerHtml()
    {
        return $this->getChildHtml('expired_pager');
    }

    public function getTypeOfPoint($_point, $referral_id = null)
    {
        $order_id = $_point->getOrderId();
        $referral_id = $_point->getRewardpointsReferralId();
        $quote_id = $_point->getQuoteId();
        $description = ($_point->getRewardpointsDescription()) ? ' - '.$_point->getRewardpointsDescription() : '';
        $description_dyn = ($_point->getRewardpointsDescription()) ? $this->__($_point->getRewardpointsDescription()) : $this->__('Event Points');
        
        $status_field = Mage::getStoreConfig('rewardpoints/default/status_used', Mage::app()->getStore()->getId());

        $toHtml = '';
        if ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_REFERRAL_REGISTRATION){
            //rewardpoints_linker
            $model = Mage::getModel('customer/customer')->load($_point->getRewardpointsLinker());
            if ($model->getName()){
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Referral registration rebates (%s)', $model->getName()).'</p></div>';
            } else {
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Referral registration rebates').'</p></div>';
            }
        } else if($referral_id){
            $referrer = Mage::getModel('rewardpoints/referral')->load($referral_id);
            $model = Mage::getModel('customer/customer')->load($_point->getRewardpointsLinker());
            //rewardpoints_referral_parent_id
            //rewardpoints_referral_child_id
            if ($referrer->getRewardpointsReferralParentId() && Mage::getSingleton('customer/session')->getCustomer() 
                    && is_object(Mage::getSingleton('customer/session')->getCustomer()) 
                    && $referrer->getRewardpointsReferralParentId() != Mage::getSingleton('customer/session')->getCustomer()->getId()
                    && ($customer_model = Mage::getModel('customer/customer')->load($referrer->getRewardpointsReferralParentId()))){
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Referral rebates (%s)',$customer_model->getName()).'</p></div>';
            } else if ($referrer->getRewardpointsReferralParentId() && Mage::getSingleton('customer/session')->getCustomer() 
                    && is_object(Mage::getSingleton('customer/session')->getCustomer()) 
                    && $model->getRewardpointsReferralChildId() != Mage::getSingleton('customer/session')->getCustomer()->getId()
                    && ($customer_model = Mage::getModel('customer/customer')->load($referrer->getRewardpointsReferralChildId()))){
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Referral rebates (%s)',$customer_model->getName()).'</p></div>';
            } else {
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Referral rebates (%s)',$referrer->getRewardpointsReferralEmail()).'</p></div>';
            }
            
            $order = Mage::getModel('sales/order')->loadByIncrementId($order_id);
            //$toHtml .=  '<div class="j2t-in-txt"><p>'.$this->__('Referral order state: %s',$this->__($order->getData($status_field))).'</p></div>';
            //$toHtml .=  '<div class="j2t-in-txt"><p>'.$this->__('Referral order (#%s) state: %s', $order_id, $this->__($order->getData($status_field))).'</p></div>';
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_REVIEW){
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Review rebates').'</p></div>';
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_DYN) {
            $toHtml .= '<div class="j2t-in-title"><p>'.$description_dyn.'</p></div>';
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_NEWSLETTER){
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Newsletter rebates').'</p></div>';
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_POLL){
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Poll participation points').'</p></div>';
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_TAG){
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Tag points').'</p></div>';
        }
        elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_GP){
            if ($_point->getRewardpointsLinker()){
                $extra_relation = "";
                $product = Mage::getModel('catalog/product')->load($_point->getRewardpointsLinker());
                if ($product_name = Mage::helper('catalog/output')->productAttribute($product, $product->getName(), 'name')){
                    $extra_relation = "<div>".$this->__('Related to product: %s', $product_name)."</p></div>";
                }
            }
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Google Plus points').'</p></div>'.$extra_relation;
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_FB){
            if ($_point->getRewardpointsLinker()){
                $extra_relation = "";
                $product = Mage::getModel('catalog/product')->load($_point->getRewardpointsLinker());
                if ($product_name = Mage::helper('catalog/output')->productAttribute($product, $product->getName(), 'name')){
                    $extra_relation = "<div>".$this->__('Related to product: %s', $product_name)."</p></div>";
                }
            }
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Facebook Like points').'</p></div>'.$extra_relation;
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_PIN){
            if ($_point->getRewardpointsLinker()){
                $extra_relation = "";
                $product = Mage::getModel('catalog/product')->load($_point->getRewardpointsLinker());
                if ($product_name = Mage::helper('catalog/output')->productAttribute($product, $product->getName(), 'name')){
                    $extra_relation = "<div>".$this->__('Related to product: %s', $product_name)."</p></div>";
                }
            }
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Pinterest points').'</p></div>'.$extra_relation;
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_TT){
            if ($_point->getRewardpointsLinker()){
                $extra_relation = "";
                $product = Mage::getModel('catalog/product')->load($_point->getRewardpointsLinker());
                
                if ($product_name = Mage::helper('catalog/output')->productAttribute($product, $product->getName(), 'name')){
                    $extra_relation = "<div>".$this->__('Related to product: %s', $product_name)."</p></div>";
                }
            }
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Twitter points').'</p></div>'.$extra_relation;
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_REQUIRED){
            $current_order = Mage::getModel('sales/order')->loadByAttribute('quote_id', $quote_id);
            $points_txt = $this->__('Points used on products for order %s', $current_order->getIncrementId());
            $toHtml .= '<div class="j2t-in-title"><p>'.$points_txt.'</p></div>';
        } elseif ($order_id == Rewardpoints_Model_Stats::TYPE_POINTS_BIRTHDAY){
            if (isset($points_name[$order_id])){
                $toHtml .= '<div class="j2t-in-title"><p>'.$points_name[$order_id].'</p></div>';
            } else {
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Birthday Month').'</p></div>';
            }
        }
        elseif ($order_id < 0){
            $points_name = array(Rewardpoints_Model_Stats::TYPE_POINTS_REVIEW => $this->__('Review rebates'), Rewardpoints_Model_Stats::TYPE_POINTS_ADMIN => $this->__('Store input %s', $description), Rewardpoints_Model_Stats::TYPE_POINTS_REGISTRATION => $this->__('Registration rebates'));
            if (isset($points_name[$order_id])){
                $toHtml .= '<div class="j2t-in-title"><p>'.$points_name[$order_id].'</p></div>';
            } else {
                $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Gift').'</p></div>';
            }
            //$toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Gift').'</p></div>';
        } else {
            $toHtml .= '<div class="j2t-in-title"><p>'.$this->__('Order: %s', $order_id).'</p></div>';
            $order = Mage::getModel('sales/order')->loadByIncrementId($order_id);
            // $toHtml .= '<div class="j2t-in-txt"><p>'.$this->__('Order state: %s',$this->__($order->getData($status_field))).'</p></div>';
        }
        
        if (Mage::getConfig()->getModuleConfig('J2t_Rewardshare')->is('active', 'true')){
            if ($order_id == J2t_Rewardshare_Model_Stats::TYPE_POINTS_SHARE){
                $toHtml = '<div class="j2t-in-title"><p>'.Mage::helper('j2trewardshare')->__('Gift (shared points)').'</p></div>';
            }
        } 

        return $toHtml;
    }
    
}