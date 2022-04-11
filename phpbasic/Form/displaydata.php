<?php

	if(isset($_POST['submit_btn'])){
		$username=$_POST['user_name'];
		$Email=$_POST['email'];
		$Password=$_POST['password'];
		
	}

?>
<html>
	<head>
		<title>This is display Page</title>
	</head>
	<body>
		<h3>Your User Name:<?php echo "$username"?></h3>
		<h3>Your Email Address:<?php echo "$Email"?></h3>
		<h3>Your Password:<?php echo "$Password"?></h3>
	
	</body>

</html>