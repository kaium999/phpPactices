<?php

	if(isset($_POST['submit'])){
		
	  //print_r($_FILES['img_up']);
	  $file_name=$_FILES['img_up']['name'];
	  $tmp_name=$_FILES['img_up']['tmp_name'];
	  move_uploaded_file($tmp_name,"upload/".$file_name);
		
	}



?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h3>Display File</h3>
		<img src="upload/<?php if(isset($file_name)){echo $file_name;}?>" alt="">
		
	</body>
</html>