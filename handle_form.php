<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Handling</title>
</head>
<body>
<?php 
#handling the form data from form2.php
$Username = $_REQUEST['user_name'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$comments = $_REQUEST['comments'];

//Creating the gender variable
if(isset($_REQUEST['gender'])) {
    $gender = $_REQUEST['gender'];
} else{
    $gender = NULL;
}

//This prints the submitted information
echo "<p> Thank you very much, <b>$Username</b> aged <b>$age</b> for your comments: <br> 
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>. Greetings</p>";

//Printing a message based upon gender value:
if($gender == 'M'){
    echo '<p>Thank you, <b>Sir</b></p>';
} elseif($gender == 'F'){
    echo '<p>Thank you, <b>Madam</b></p>';
} elseif($gender == 'O'){
    echo '<p>Thank you, <b>whatsoever</b></p>';
} else{
    echo '<p>But you did not choose any gender</p>';
}

?>
</body>
</html>