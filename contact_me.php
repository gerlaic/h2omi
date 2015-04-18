<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['subject']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

//db lines

//connect to CN db
$dsn = "mysql:host=localhost;dbname=a0208102102";
$db = new PDO($dsn,'a0208102102','75623203');

/*query code:
INSERT INTO  `contacts` (  `uid` ,  `name` ,  `email` ,  `subject` ,  `message` ,  `date` ) 
VALUES (
NULL ,  'test2',  'test2',  'teste2',  'msgmsg', CURDATE( )
);
*/

$db->query("SELECT * FROM 'INSERT INTO  `contacts` (  `uid` ,  `name` ,  `email` ,  `subject` ,  `message` ,  `date` ) 
	VALUES (
		NULL ,  '$name',  '$email',  '$subject',  '$message', CURDATE( ));");

return true;


/*
// create email body and send it	
$to = 'co2.gerlaic@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "H2OMI WEBSITE MAIL:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "MSG From H2OMI.com.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: co2.gerlaic@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
*/


?>0