<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form2.css">
	<title>Post Array</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<?php #this php script handles data from post_form.php file
//Requesting data using a more accurate post method

$name = $_POST['name']; //handle names of client
$email = $_POST['email']; //handle client email
$carChoice = $_POST['car']; //select a car of your choice
$company = $_POST['companies']; //select car company

//Validating form data using post method

if(!empty($_POST['name'])){
    $name = $_POST['name']; //enter name
} else { //error message
    echo '<p class="error">You have not entered your name</p>';
}
if (!empty($_POST['email'])){ //entering email
    $email = $_POST['email'];
} else{ //error message
    echo '<p class="error">you have not entered email!</p>';
}
if(isset($_POST['car'])){
    if($carChoice == 'Volvo'){
        echo "You are a volvo fun";
    } elseif($carChoice == 'BMW'){
        echo "<P>You are a BMW fun</P>";
    } elseif($carChoice == 'Golf'){
        echo "<P>You are a Golf fun</P>";
    } else{//error message
        $carChoice = NULL;
        echo '<p class="error">Choose among the remaining cars</p>';
    }
} else{//Overall error message
    $carChoice = NULL;
    echo '<p class="error">You have to choose a car please.</p>';
}
//ensuring all the form data is validated:
if($name && $email && $carChoice && $company){ //When all info is correct
    echo "Thank you very much for your contribution";
} else{
    //error message
   echo '<p class="error">Fill in the missing fields!</p>';
}   


echo "<p>Please <b>$name</b> with email address <b>$email</b>, 
you have chosen <b>$carChoice</b> of <b>$company</b> as your best choice</p>.Thank you very much";



?>



</body>
