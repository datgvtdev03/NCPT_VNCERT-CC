<?php 
$errors = '';
$myemail = 'vuanhtu0711@gmail.com';
if(empty($_POST['name'])  ||
   empty($_POST['phone']) ||
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Yêu cầu đầy đủ thông tin!";
}

$name = $_POST['name']; 
$phone = $_POST['phone']; 
$email_address = $_POST['email']; 
$message = $_POST['message'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Địa chỉ email không hợp lệ";
}


if( empty($errors))
{
	
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message from user $name. \n".
	" Here are the details:\n Name: $name \n Phone number: $phone \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	
	header('Location: contactForm.html');
	
} 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);

?>


</body>
</html>