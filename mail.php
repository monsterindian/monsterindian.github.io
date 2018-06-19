
 
   <?php 
$ToEmail = 'krishna@fintecconsulting.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["Email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["Email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["Name"]."\r\n"; 
$MESSAGE_BODY .= "Email: ".$_POST["Email"]."\r\n"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["Message"])."\r\n"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
header("Location: http://www.fintecconsulting.com/index.html");
?>