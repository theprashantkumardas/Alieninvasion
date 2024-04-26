<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='onfo@gmail' ;
$email_subject='new form submision from alien invastion' ;
$email_body="User Name: $name. \n". 
            "User Email: $visitor_email.\n". 
            "Subject:$subject.\n". 
            "User Message: $message.\n" ;


$to='prashantdas336@gmail.com';

$headers="From:$email_fron \r\n";
$headers .="Reply-To :$visitor_email  \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact us.html");

?>
