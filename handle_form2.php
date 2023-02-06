<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form_two</title>
	<style type="text/css">
		.error{
			color:  red;
			font-weight: bold;
		}
	</style>
</head>
<body>
<?php //validating form data using empty() function
// Validate the Username:
if (!empty($_REQUEST['user_name'])) {
	$Username = $_REQUEST['user_name'];
 } else{
 	$Username = NULL;
 	echo '<p class="error">You forgot to enter your user name!</p>';
 }

// Validating the email address
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else{
	$email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
} 

// Validating the comments
if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else{
	$comments = NULL;
	echo '<p class="error">You forgot to comment please!</p>';
}

// Validating the gender section
if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
	if ($gender == 'M') {
		echo '<p><b>Good Day, Sir</b></p>';
	} elseif($gender == 'F'){
		echo '<p><b>Good Day, Madam</b></p>';
	} elseif($gender == 'O'){
		echo '<p><b>Good Day, Homo</b></p>';
	} else{ //Not selected gender:
		$gender = NULL;
		echo '<p class="error"><b>You must have a gender please</b></p>';
	}

} else{ //$_REQUEST['gender'] is not set
	$gender = NULL;
	echo '<p class="error">You forgot to choose a gender!</p>';
}

//if everything is ok:
if ($Username && $email && $gender && $comments) {
	echo "<p> Thank you very much, <b>$Username</b> for your comments: <br> 
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>. Greetings</p>";
} else{//Missing form value
	echo '<p class="error">Go back and fill any missing field in the form</p>';
}

?>
</body>
</html>