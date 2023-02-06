<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form2.css">
	<title>Post Array</title>
</head>
<body>
<?php #this php script handles data from post_form.php file
//Requesting data using a more accurate post method

$name = $_POST['name']; //handle names of client
$email = $_POST['email']; //handle client email
$carChoice = $_POST['car']; //select a car of your choice
$company = $_POST['companies'] //select car company

echo 'Please <b>$name</b> with email address <b>$email</b>, 
you have chosen <b>$car</b> of <b>$company</b> as your best choice.<p>Thank you very much</P> ';



?>



</body>
