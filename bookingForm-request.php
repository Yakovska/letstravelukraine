<?	
$name 			= $_POST["name"];
$email 			= $_POST["email"];
$phone 			= $_POST["phone"];
$qty	 			= $_POST["qty"];
$country		= $_POST["country"];
$date 			= $_POST["date"];
$dayQty 		= $_POST["dayQty"];
$firstVisit	= $_POST["firstVisit"];
$tour				= $_POST["tour"];
$message		= $_POST["message"];
$userMessage = $_POST["userMessage"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to 	= "letstravelukraine@gmail.com, irayakovskaya@gmail.com";

$admin_message = "
	<br>Name: $name, 
	<br> E-mail: $email, 
	<br> Phone: $phone,
	<br> The number of Tourists: $qty,
	<br> Country: $country,
	<br> Tour date: $date,
	<br> The number of tour days: $dayQty,
	<br> This is my first visit to Ukraine - $firstVisit, 
	<br> Tours: $tour,
	<br> Message: $userMessage";
	
mail($to, "New message from site 'Let's Travel Ukraine' ", $admin_message, $headers);
//$headers - заголовки, стандартно
$messages = array("message" => "Thank you for your message, we will contact you soon");
print json_encode($messages);
exit;
?>