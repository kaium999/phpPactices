<?php

	if(isset($_POST['submit_btn'])){
		$username=$_POST['user_name'];
		$Email=$_POST['email'];
		$Password=$_POST['password'];
		
	}

?>

<html>
	<head>
		<title>Form In Php</title>
	</head>
	<body>
		<h3>User Name is:<?php echo"$username" ?></h3>
		<h3>Email  is:<?php echo "$Email" ?></h3>
		<h3>Password is:<?php echo "$Password" ?>
		<form action="" method="post">
			<label>UserName:</label></br>
			<input type="text" name="user_name"></input><br>
			<label>Email:</label></br>
			<input type="text" name="email"></input><br>
			<label>password:</label></br>
			<input type="text" name="password"></input><br><br>
			<input type="submit" value="submit value" name="submit_btn"></input>
		</form>
	</body>



</html>