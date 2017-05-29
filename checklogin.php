<?php
header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type');
require_once 'app/Mage.php';


umask(0);

Mage::app('default');

Mage::getSingleton('core/session', array('name' => 'frontend'));

$sessionCustomer = Mage::getSingleton("customer/session");

if($sessionCustomer->isLoggedIn()) {
  echo "Logged";
} else {
   echo "Not Logged";
}
?>