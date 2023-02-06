<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form2.css">
	<title>Login</title>
</head>
<body>
<form action = "handle_post.php" method = "post">
<fieldset>
    <legend>
        Post Form Handling
    </legend>
    <p><label>Name: <input type="text" name="name" value="" size="20" maxlength="40"/></label></p>
    <p><label>Email: <input type="text" name="email" value="" size="20" maxlength="40"/></label></p>
    <p><label>Car Choice:
        <input type="radio" name="car" value="Volvo"/>Volvo
        <input type="radio" name="car" value="BMW"/>BMW
        <input type="radio" name="car" value="Golf"/>Golf
    </label></p>
    <p><label>Companies:
        <select name="companies">
            <option value="VMC">Volvo Manufacturing Company</option>
            <option value="BMW">Bavarian Engine Works</option>
            <option value="Golf">Volkswagen company</option>
        </select>
    </label></p>
</fieldset>
</form>



</body>