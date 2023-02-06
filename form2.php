<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form2.css">
	<title>Login</title>
</head>
<body>
<form action="handle_form2.php" method="post">
	<fieldset><legend>
		Login to J.E Parking System
	</legend>
	<p><label>Username:<input type="text" name="user_name" size="20" maxlength="30"></label></p>
	<p><label>Email:<input type="text" name="email" size="20" maxlength="30"></label></p>
	<p><label>Gender:
		<input type="radio" name="gender" value="M"/>Male
		<input type="radio" name="gender" value="F"/>Female
		<input type="radio" name="gender" value="O"/>Others
	</label></p>
	<p><label>Age:
		<select name="age">
			<optgroup  label="Age Groups">
			<option value="0-29">Under 30</option>
			<option value="29-39">Under 40</option>
			<option value="50+">Over 50</option>
			</optgroup>
		</select>
	</label></p>
	<p><label><textarea name="comments" placeholder="comments"></textarea></label></p>	
	</fieldset>
	<p align="center"><input type="submit" name="submit" value="Login"></p>
</form>
</body>
</html>