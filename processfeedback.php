<?php
//create short variable names
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

//set up some static information
$toadress="rockts@sina.com";

$subject="Feedback from web site";

$mailcontent="Customer name:".$name."\n";
             "Customer email:".$email."\n";
             "Customer comments".$feedback."\n";

$fromaddress="From: rockts@sina.com";

//invoke mail() function to send mail
mail($toadress, $subject, $mailcontent, $fromaddress);

?>
<html>
    <head>
        <title>Bob's Auto Parts - Feedback submitted</title>
    </head>
    <body>
        <h1>Feedback submitted</h1>
        <p>Your feeback has been sent.</p>
    </body>
</html>
