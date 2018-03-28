<?php
require_once 'app/Mage.php';

umask(0);

Mage::app('default');

Mage::getSingleton('core/session', array('name' => 'frontend'));

$servername = "localhost";
$username = "roji_dbuser";
$password = "!RWE_[BN6nxO";
$dbname = "roji_db";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM `rewardpoints_referral` WHERE `rewardpoints_referral_status` = :value"); 
$stmt->execute(array(':value' => 0));

for($i=0; $row = $stmt->fetch(); $i++){
  $recepient_email = $row['rewardpoints_referral_email'];
  $recepient_name = $row['rewardpoints_referral_name'];
  $sender_id = $row['rewardpoints_referral_parent_id'];

  $customer = Mage::getModel('customer/customer')
    ->load($sender_id); // insert customer ID

  foreach ($customer->getAddresses() as $address)
  {
      $data = $address->toArray();
      $sender_name = $data['firstname'];
  }

  // if($recepient_email=="zawzawzaw@gmail.com")
    sendEnquiry($recepient_email, $recepient_name, $sender_name);
}


function sendEnquiry($recepient_email, $recepient_name, $sender_name)
{
  // $customer = Mage::getSingleton('customer/session')->getCustomer();

  $storeId = 1; // Enter you new template ID
  $templateId = 14; // Enter you new template ID
  $senderName = Mage::getStoreConfig('trans_email/ident_support/name');  //Get Sender Name from Store Email Addresses
  $senderEmail = Mage::getStoreConfig('trans_email/ident_support/email');  //Get Sender Email Id from Store Email Addresses
  $sender = array('name' => $senderName,
              'email' => $senderEmail);

  // Set recepient information
  $recepientEmail = $recepient_email;
  $recepientName = $recepient_name;      

  // Get Store ID     
  $store = Mage::app()->getStore()->getId();

  // Set variables that can be used in email template
  // $vars = array('customerName' => $customer->getName());  
  $vars = array('referrer_name'=>$sender_name);


  // Send Transactional Email
  Mage::getModel('core/email_template')
      ->sendTransactional($templateId, $sender, $recepientEmail, $recepientName, $vars, $storeId);

  // Mage::getSingleton('core/session')->addSuccess($this->__('We Will Contact You Very Soon.'));
}
?>