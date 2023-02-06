<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>HTML Form</title>
</head>
<body>
<h1>This is my nice form</h1>
<div class="form">
<form action="mygoodform.php" autocomplete="off" target="_blank">
<label for="fname">First Name:</label><br><br>
<input type="text" name="fname" value=""><br><br>
<label for="lname">Last Name:</label><br><br>
<input type="text" name="lname" value=""><br><br>
<label for="others">Other Names:</label><br><br>
<input type="text" name="others" value=""><br><br>
<label for="age">Age:</label><br><br>
<input type="text" name="DoB" value=""><br><br>
<label for="origin">Residence:</label><br><br>
<input type="text" name="Residence" value="" required><br><br>
<label for="gender">Gender:</label><br><br>
<input type="radio" name="male" value="male">Male<br><br>
<input type="radio" name="female" value="female">Female<br><br>
<input type="radio" name="others" value="others">Others<br><br>
<label for="Courses">Faculty Departments:</label><br><br>
<select name="Scientific courses">
	<optgroup label="Faculty Of Science">
	<option>Diploma in computer science</option>
	<option>Information Technology and Computing</option>
	<option>Information Systems</option>
	<option>Food and Nutrition</option>
	<optgroup label="Faculty Of Engineering">
	<option>Electrical engineering</option>
	<option>Mechanical engineering</option>
	<option>Civil Engineering</option>
	<option>Telecommunication Engineering</option>
	</optgroup>
</select><br><br>
<textarea placeholder="Comments"></textarea>
<input type="submit" value="submit">
</div>
</body>
</html>>