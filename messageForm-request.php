<?	
$name 			= $_POST["name"];
$email 			= $_POST["email"];
$message		= $_POST["message"];
$userMessage = $_POST["userMessage"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to 	= "irayakovskaya@gmail.com";

$admin_message = "
	<br>Name: $name, 
	<br> E-mail: $email, 
	<br> Message: $userMessage";
	
mail($to, "New message from site 'Let's Travel Ukraine' ", $admin_message, $headers);
//$headers - заголовки, стандартно
$messages = array("message" => "Thank you for your message, we will contact you soon");
print json_encode($messages);
exit;
?>