<?php
class Manic_Discovertea_IndexController extends Mage_Core_Controller_Front_Action
{
   	public function indexAction() {
   		header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
		header('Access-Control-Allow-Methods: GET');
		header('Access-Control-Max-Age: 1000');
		header('Access-Control-Allow-Headers: Content-Type');

   		$product_id = $this->getRequest()->getParams('id');
 		$product=Mage::getModel('catalog/product')->load($product_id);

 		$allProducts = $product->getData();

 		unset($allProducts['type_selections']);

 		echo json_encode($allProducts, JSON_UNESCAPED_SLASHES); 		    
	}

	public function connectAction() {		

		//Basic parameters that need to be provided for oAuth authentication
	    //on Magento
	    // $params = array(
	    //     'siteUrl' => 'http://test.gryphontea.com/magento/oauth',
	    //     'requestTokenUrl' => 'http://test.gryphontea.com/magento/oauth/initiate',
	    //     'accessTokenUrl' => 'http://test.gryphontea.com/magento/oauth/token',
	    //     'authorizeUrl' => 'http://test.gryphontea.com/magento/admin/index.php/oauth_authorize',//This URL is used only if we authenticate as Admin user type
	    //     'consumerKey' => '678c0d8c77bd8d473c92a85e27906d00',//Consumer key registered in server administration
	    //     'consumerSecret' => '753fedef49d9eeb9f271b19aff7f6d8b',//Consumer secret registered in server administration
	    //     'callbackUrl' => 'http://test.gryphontea.com/magento/discovertea/index/callback',//Url of callback action below
	    // );

	    // // Initiate oAuth consumer with above parameters
	    // $consumer = new Zend_Oauth_Consumer($params);
	    // // Get request token
	    // $requestToken = $consumer->getRequestToken();
	    // // Get session
	    // $session = Mage::getSingleton('core/session');
	    // // Save serialized request token object in session for later use
	    // $session->setRequestToken(serialize($requestToken));
	    // // Redirect to authorize URL
	    // $consumer->redirect();

	    $order = Mage::getSingleton('sales/order'); 
		$order->loadByIncrementId(145000288);
		$_items = $order->getAllItems();
		$all_order_items = [];
		$currency_code = Mage::app()->getStore()->getCurrentCurrencyCode();

		foreach($_items as $_item) {
			$all_order_items['id'] = $_item->getItemId();
			$product = Mage::getModel('catalog/product')->load($all_order_items['id']);
			$categoryIds = $product->getCategoryIds();
			$categoryName = '';
			if (isset($categoryIds[0])){
				$category = Mage::getModel('catalog/category')->setStoreId(Mage::app()->getStore()->getId())->load($categoryIds[0]);
				$categoryName = $category->getName();
			}
			$all_order_items['name'] = $_item->getName();
			$all_order_items['sku'] = $_item->getSku();
			$all_order_items['category'] = $categoryName;
			$all_order_items['price'] = number_format(abs($_item->getPrice()),2);			
			$all_order_items['currency'] = $currency_code;
			$all_order_items['quantity'] = number_format(abs($_item->getQtyOrdered()),2);
			$all_order_items['date'] = $_item->getCreatedAt();
		}

		print_r(json_encode($all_order_items));

		exit();

	    return;
	}

	public function callbackAction() {

	    //oAuth parameters
	    $params = array(
	        'siteUrl' => 'http://test.gryphontea.com/magento/oauth',
	        'requestTokenUrl' => 'http://test.gryphontea.com/magento/oauth/initiate',
	        'accessTokenUrl' => 'http://test.gryphontea.com/magento/oauth/token',
	        'consumerKey' => '678c0d8c77bd8d473c92a85e27906d00',
	        'consumerSecret' => '753fedef49d9eeb9f271b19aff7f6d8b'
	    );

	    // Get session
	    $session = Mage::getSingleton('core/session');
	    // Read and unserialize request token from session
	    $requestToken = unserialize($session->getRequestToken());
	    // Initiate oAuth consumer
	    $consumer = new Zend_Oauth_Consumer($params);
	    // Using oAuth parameters and request Token we got, get access token
	    $acessToken = $consumer->getAccessToken($_GET, $requestToken);
	    // Get HTTP client from access token object
	    $restClient = $acessToken->getHttpClient($params);
	    // Set REST resource URL
	    $restClient->setUri('http://test.gryphontea.com/magento/api/rest/products');
	    // In Magento it is neccesary to set json or xml headers in order to work
	    $restClient->setHeaders('Accept', 'application/json');
	    // Get method
	    $restClient->setMethod(Zend_Http_Client::GET);
	    //Make REST request
	    $response = $restClient->request();
	    // Here we can see that response body contains json list of products
	    Zend_Debug::dump($response);

	    return;
	}

  public function deletecartitemAction() {
    $productId = $this->getRequest()->getPost('item_id', array());
    $cartHelper = Mage::helper('checkout/cart');
    $items = $cartHelper->getCart()->getItems();    

    foreach ($items as $item) 
    {
      $each_item_id = $item->getItemId();
      $each_product_id = $item->getProduct()->getId();

      if($productId == $each_product_id) {        
        $cartHelper->getCart()->removeItem($each_item_id)->save();
        break;
      }
    }

    return;
  }

	public function cartpreviewAction() {

    header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type');
   		
		$cart = Mage::getModel('checkout/cart')->getQuote();
		$cartQty =  Mage::helper('checkout/cart')->getSummaryCount();
		$cartTotal = Mage::getSingleton('checkout/cart')->getQuote()->getSubtotal();

		$all_items = array();
		
		if ($cartQty>0):
			foreach ($cart->getAllItems() as $key => $item):
          $storeId = Mage::app()->getStore()->getStoreId();
			    $productId = $item->getProduct()->getId();
          $productName = $item->getProduct()->getName();
          $productNameInColor = Mage::getResourceModel('catalog/product')->getAttributeRawValue($productId, 'product_name_in_color', $storeId);
			    $productPrice = Mage::helper('core')->formatPrice($item->getProduct()->getPrice(), true);
			    $productQty = $item->getQty();
			    $price = $item->getRowTotal();
			    $productImage = $item->getProduct()->getData();	

			    $product_data = Mage::getModel('catalog/product')->load($productId);			    

			    $all_items[$productId]['id'] = $productId;
          $all_items[$productId]['name'] = $productName;
			    $all_items[$productId]['name_in_color'] = $productNameInColor;
			    $all_items[$productId]['price'] = $productPrice;
			    $all_items[$productId]['qty'] = $productQty;			    
			    $all_items[$productId]['row_price'] = Mage::helper('core')->formatPrice($price, true);
			    $all_items[$productId]['image'] = $product_data->getImageUrl();

			endforeach;  											
		endif;

    // $sessionCustomer = Mage::getSingleton("customer/session");

    if(Mage::getSingleton('customer/session')->isLoggedIn()) {
      $login_status = true;
    } else {
      $login_status = false;
    }

    if(empty($cartQty)) $cartQty = 0;
		
    $all_cart_data['login_status'] = $login_status;
		$all_cart_data['cart_qty'] = $cartQty;
		$all_cart_data['cart_total'] = Mage::helper('core')->formatPrice($cartTotal, true);
		$all_cart_data['cart_items'] = $all_items;

		echo json_encode($all_cart_data, JSON_UNESCAPED_SLASHES);

	}	

	public function subscribeAction() {
		header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
		header('Access-Control-Allow-Methods: GET');
		header('Access-Control-Max-Age: 1000');
		header('Access-Control-Allow-Headers: Content-Type');
		
		if ($this->getRequest()->isPost()) {

            // $token = $this->getRequest()->getPost('token', array());

            // $data = array(
            //   'secret' => "6LeBlykUAAAAAGpjtdoKiSaDOl_UMLtzuVHL3Lm2",
            //   'response' => $token
            // );

            // $verify = curl_init();
            // curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            // curl_setopt($verify, CURLOPT_POST, true);
            // curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
            // curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            // curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            // $response = curl_exec($verify);

            // $response_arr = json_decode($response, true);

            // if($response_arr['success']!==true) {
            //   $result['success']  = false;
            //   $result['error']    = true;
            //   $result['error_messages'] = $this->__('Invalid captcha.');
            // }

    
            $subscribe_email = $this->getRequest()->getPost('subscribe_email', array());
            $input_email = $this->getRequest()->getPost('subscribe_email', array());

            if(!filter_var($subscribe_email, FILTER_VALIDATE_EMAIL)) {
            	$result['success']  = false;
            	$result['error']    = true;
            	$result['error_messages'] = $this->__('Invalid email address.');
            }

            // if(!isset($subscribe_email) || empty($subscribe_email)) {
            // 	if(Mage::getSingleton('customer/session')->isLoggedIn()) {
	           //      $customerData = Mage::getSingleton('customer/session')->getCustomer();
	           //      $customerDataArr = $customerData->getData();
	           //      $subscribe_email = $customerDataArr['email'];
	           //  }
            // }

            // check whether customer subscribe already or not
            $subscriber = Mage::getModel('newsletter/subscriber')->loadByEmail($subscribe_email);

            $subscriberData = $subscriber->getData();

            // print_r($subscriberData['subscriber_status']); exit();

			if((int)$subscriberData['subscriber_status']!==1)
			{
			    Mage::getModel('newsletter/subscriber')->subscribe($subscribe_email);
			    $result['success']  = true;
            	$result['error']    = false;
			}else {
				$result['success']  = false;
            	$result['error']    = true;
            	$result['error_messages']    = $this->__('This email address is already a subscriber');
			}

			$this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    
        }

	}

	public function unsubscribeAction() {

		if ($this->getRequest()->isGet()) {
    
            $unsubscribe_email = $this->getRequest()->getParam('unsubscribe_email', array()); 

            // print_r($unsubscribe_email);
            $result = array();
            $result['error'] = false;

            if(!filter_var($unsubscribe_email, FILTER_VALIDATE_EMAIL)) {
            	$result['success']  = false;
            	$result['error']    = true;
            	$result['messages'] = $this->__('Invalid email address. You may close this window and try again.');
            }

            // if(!isset($subscribe_email) || empty($subscribe_email)) {
            // 	if(Mage::getSingleton('customer/session')->isLoggedIn()) {
	           //      $customerData = Mage::getSingleton('customer/session')->getCustomer();
	           //      $customerDataArr = $customerData->getData();
	           //      $subscribe_email = $customerDataArr['email'];
	           //  }
            // }

            // check whether customer subscribe already or not
            $subscriber = Mage::getModel('newsletter/subscriber')->loadByEmail($unsubscribe_email);

            $subscriberData = $subscriber->getData();

            // print_r($subscriberData);

			if($result['error']==false && !empty($subscriberData) && $subscriberData['subscriber_status']!==3)
			{
			    $subscriber->unsubscribe();
			    $result['success']  = true;
            	$result['error']    = false;
            	$result['messages']    = $this->__('Successfully unsubscribed to newsletter. You may close this window.');
			}else if($result['error']==false) {
				$result['success']  = false;
            	$result['error']    = true;
            	$result['messages']    = $this->__('This email is already unsubscribed. You may close this window. <script>setTimeout("window.close()", 5000);</script>');
			}

			$this->getResponse()->setBody($result['messages']);
    
        }

	}

	public function subscribeUnsubscribeAction() {
    	if(Mage::getSingleton('customer/session')->isLoggedIn()) {
            $customerData = Mage::getSingleton('customer/session')->getCustomer();
            $customerDataArr = $customerData->getData();
            $subscribe_email = $customerDataArr['email'];

            $subscriber = Mage::getModel('newsletter/subscriber')->loadByEmail($subscribe_email);

            $subscriberData = $subscriber->getData();

			if($subscriber->getStatus() == Mage_Newsletter_Model_Subscriber::STATUS_SUBSCRIBED)
			{
				Mage::getModel('newsletter/subscriber')->loadByEmail($subscribe_email)->unsubscribe();
			    $result['success']  = true;
            	$result['error']    = false;
            	$result['message'] = 'Successfully unsubscribed to newsletter.';
			    
			}else {				
				Mage::getModel('newsletter/subscriber')->subscribe($subscribe_email);
			    $result['success']  = true;
            	$result['error']    = false;            	
                $result['message'] = 'Successfully subscribed to newsletter.';				
			}

        }else {
        	$result['success']  = false;
        	$result['error']    = true;
        	$result['error_messages']    = $this->__('User is not logged in.');
        }

        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
	}

	public function loginCustomerAction() {
		if ($this->getRequest()->isPost()) {
    
            $id = $this->getRequest()->getParam('id', array()); 
            $first_name = $this->getRequest()->getParam('first_name', array()); 
            $last_name = $this->getRequest()->getParam('last_name', array()); 
            $email = $this->getRequest()->getParam('email', array()); 
            $gender = $this->getRequest()->getParam('gender', array()); 
            $dob = $this->getRequest()->getParam('dob', array()); 
            $_token = $this->getRequest()->getParam('_token', array()); 
            $website_id = Mage::app()->getWebsite()->getId(); 
            $store = Mage::app()->getStore();
            
            $dob=date('m/j/Y', strtotime($dob));

            if(empty($first_name) || empty($last_name) || empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

            	$result['success']  = false;
        		  $result['error']    = true;
        		  $result['error_messages']    = 'One or more of the required field(s) to sign in is missing or invalid.';

            }else {

            	////
            	//// Check on fb access token to see if user acutally logged in to facebook
            	////

              if(!empty($_token)) {
  	            $graph_url= "https://graph.facebook.com/me";
        				$param = "?access_token=" .$_token;

        			    $ch = curl_init($graph_url.$param);
        				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        				$response = curl_exec($ch);
        				$response = json_decode($response, true);

        				if($response['id']!==$id) {

        				 	$result['success']  = false;
    	        		$result['error']    = true;
    	        		$result['error_messages']    = 'Invalid access token';

                  $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));

                  return;

        				}

              }
              // else {

      					  $customer = Mage::getModel('customer/customer');
      				    $customer->setWebsiteId($website_id);
      				    $customer->loadByEmail($email);
      				    $session = Mage::getSingleton('customer/session');

      				    if ($customer->getId()) {

      				    	//// try log customer in if email address is already exist

      				        $session->setCustomerAsLoggedIn($customer);

      				        $result['success']  = true;
      			        	$result['error']    = false;

      				    }else {

      				    	//// if email address is new sign up first
      						 
      						$customer = Mage::getModel("customer/customer");
      						$customer   ->setWebsiteId($website_id)
      						            ->setStore($store)
      						            ->setFirstname($first_name)
      						            ->setLastname($last_name)
      						            ->setEmail($email)
      						            ->setGender(
      						            	Mage::getResourceModel('customer/customer')
      							            ->getAttribute('gender')
      							            ->getSource()
      							            ->getOptionId($gender)
      							        )
      							        ->setDob($dob)
      						            ->setPassword('facebook_login')
      						            ->setIsActive(1)
      		    						->setConfirmation(null);
      						 
      						try{
      						    $customer->save();

      						    //// once signed up log the user in

      						    if($customer->getId()) {
      						    	$session->setCustomerAsLoggedIn($customer);
      						    }

      						    $result['success']  = true;
      			        		$result['error']    = false;
      			        		$result['customer_id']    = $customer->getId();
      			        		
      						}
      						catch (Exception $e) {
      						    $result['success']  = false;
      			        		$result['error']    = true;
      			        		$result['error_messages']    = $e->getMessage();
      						}

      				    }

      				// }		

            }   
		    
		}else {
			$result['success']  = false;
      $result['error']    = true;
		}

		$this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
	}

	public function saveGiftMessageAction()
    {
        if ($this->getRequest()->isPost()) {
    
            $special_message = $this->getRequest()->getPost('special_message', array());
    
            if(Mage::getSingleton('customer/session')->isLoggedIn()) {
                $customerData = Mage::getSingleton('customer/session')->getCustomer();
            }
    
            Mage::getSingleton('core/session')->setSpecialMessage($special_message);
    
            $result['message'] = Mage::getSingleton('core/session')->getSpecialMessage();
            $result['success']  = true;
	    	$result['error']    = false;

            $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    
            // $giftMessage = Mage::getModel('giftmessage/message'); 
            // $giftMessage->setCustomerId($customerData->getId()); 
            // $giftMessage->setSender(''); 
            // $giftMessage->setRecipient(''); 
            // $giftMessage->setMessage($special_message); 
            // $giftObj = $giftMessage->save(); 
    
            // print_r($giftObj);
            // $order->setGiftMessageId($giftObj->getId()); 
            // $order->save(); 
    
        } 
    }
}