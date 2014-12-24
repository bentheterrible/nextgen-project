<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body style="border: .4em solid #ff4500;">
		<img src="http://i.imgur.com/65yJIWh.png" style="margin-bottom:1em; margin-right: -.5em; width:100%;" />
		<form action="/bt/php/form-handler.php" method="post">
			<label for="first_name">First Name:</label>
				<input type="text" name="first_name" placeholder="Legal First Name" />
			<label for="last_name">Last Name:</label>
				<input type="text" name="last_name" placeholder="Legal Last Name" />
			<label for="email">Email:</label>
				<input type="email" name="email" placeholder="eg. example@address.com" />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>
