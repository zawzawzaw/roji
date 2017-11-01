<?php 
require 'app/Mage.php';
Mage::app('admin')->setUseSessionInUrl(false);

$collection = Mage::getModel('newsletter/subscriber')->getCollection()
    // ->setPageSize(10)
    ->setOrder('subscriber_id', 'desc');

foreach ($collection as $subscriber) {
    $subscribers = $subscriber->getData();
    echo $subscribers['subscriber_email'] . '<br>';
}

// $name = 'zaw';
// $email = 'zawzawzaw@gmail.com';
// $title = $_POST['post_title'];
// $permalink = $_POST['guid'];
// $to[] = sprintf( '%s <%s>', $name, $email );
// $subject = sprintf( 'Published: %s', $title );
// $message = sprintf ('Congratulations, %s! Your article “%s” has been published.' . "\n\n", $name, $title );
// $message .= sprintf( 'View: %s', $permalink );
// $headers[] = '';

// mail($email, $subject, $message);
?>