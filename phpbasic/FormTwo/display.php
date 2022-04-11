<?php
	if(isset($_POST['submit_btn'])){
		
		$userName=$_POST["sname"];
		$userEmail=$_POST["semail"];
		$userAddress=$_POST["sadd"];
		$userMobile=$_POST["smb"];
		$userPassword=$_POST["spa"];
	}


?>
<html>
	<head>
		<title>This Is Reult Page</title>
	</head>
	<body>
		<h3>This Is Your Result.>>>>>>>>>>></h3>
	
			<h4>Your Name is:<?php echo"$userName"?></h4><br><br>
			<h4>Your Email is:<?php echo"userEmail"?></h4><br><br>
			<h4>Your Address is:<?php echo"$userAddress"?></h4><br><br>
			<h4>Your Mobile Number is:<?php echo"$userMobile"?></h4><br><br>
			<h4>Your Password is:<?php echo"$userPassword"?></h4>
		
		
	
	</body>
</html>