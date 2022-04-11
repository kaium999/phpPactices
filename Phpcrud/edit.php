<?php
	include("function.php");
	$obConApp=new conApp();
	
	$employee= $obConApp->displaydata();
	if(isset($_GET['status'])){
		if($_GET['status']='edit'){
			$id=$_GET['id'];
			$returndata=$obConApp->displaydataUpdate($id);
			
		}
	}
	if(isset($_POST['update_info'])){
		$mesg=$obConApp->updateData($_POST);
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

    <title>Php Crud Program</title>
  </head>
  <body>
	
	<div class="container m-4 p-4 shadow">
		<h2 > <a style="text-decoration:none;" >Allah R dan Employee</h2>
		<form class="form" action=" " method="post" enctype="multipart/form-data">
		
			<?php if(isset($mesg)){echo $mesg;}?>
			
			<input class="form-control mb-2" type="text" name="u_e_name" value="<?php echo $returndata['ep_name'];?>"><br>
			<input class="form-control mb-2" type="text" name="u_e_num" value="<?php echo $returndata['ep_num'];?>"><br>
			<label for="image">Upload Your Image</label>
			<input class="form-control mb-2" type="file" name="u_e_image" value="<?php echo $returndata['ep_image'];?>">
			<input type="hidden" name="e_id" value="<?php echo $returndata['id'];?>">
			<input type="submit" value="Update Data" name="update_info" class="form-control bg-warning">
		
		
		</form>
	</div >
	
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