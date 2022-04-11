<?php
	include("function.php");
	   $object=new sapp();
	if(isset($_GET['status'])){
		if($_GET['status']='edit'){
			$id=$_GET['id'];
			$return_data=$object->displayupdatedata($id);
		}
	}
	if(isset($_POST['update_info'])){
		$return_meg=$object->update_data($_POST);
	}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Php Crud Two Demo</title>
  </head>
  <body>
	<div class="container m-4 p-4 shadow">
		<form class="form" action="" method="POST">
		<?php if(isset($return_meg)){echo $return_meg;}?>
		<h1>Student Update Information</h1>
		
		<input class="form-control mb-2" type="hidden" name="s_id" value="<?php echo $return_data['id'];?>"><br>
		<input class="form-control mb-2" type="text" name="s_u_name" value="<?php echo $return_data['s_name'];?>"><br>
		<input class="form-control mb-2" type="text" name="s_u_address" value="<?php echo $return_data['s_address'];?>"><br>
		<input class="form-control mb-2" type="text" name="s_u_mobi_num" value="<?php echo $return_data['s_mobi_num'];?>"><br>
		<input class="form-control mb-2" type="text" name="s_u_department" value="<?php echo $return_data['s_department'];?>"><br>
		<input type="submit" value="Add Information" name="update_info" class="form-control bg-warning">
		</form>
	</div>
	
	
	
	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>