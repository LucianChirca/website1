<?php
$to_email = 'lucian.chirca@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply@sukacok.com';
mail($to_email,$subject,$message,$headers);
?>
