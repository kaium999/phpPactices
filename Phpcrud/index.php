<?php
	include("function.php");
	$obConApp=new conApp();
	
	if(isset($_POST['save_info'])){
		$return_message=$obConApp->adddata($_POST);
	}
	$employee= $obConApp->displaydata();
	
	if(isset($_GET['status'])){
		if($_GET['status']='delete'){
			$delete_id=$_GET['id'];
			$return=$obConApp->delete_Data($delete_id);
		}
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
		<form class="form" action="" method="post" enctype="multipart/form-data">
		
			<?php if(isset($return_message)){echo $return_message;}?>
			
			<input class="form-control mb-2" type="text" name="e_name" placeholder="Enter your name"><br>
			<input class="form-control mb-2" type="text" name="e_num" placeholder="Enter your Id"><br>
			<label for="image">Upload Your Image</label>
			<input class="form-control mb-2" type="file" name="e_image">
			<input type="submit" value="Add Information" name="save_info" class="form-control bg-warning">
		
		
		</form>
	</div >
	<div class="container m-4 p-4 shadow">
		
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>E_NUM</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
						
			</thead>
			<tbody>
				<?php while($employee_data=mysqli_fetch_assoc($employee)){?>
				<tr>
					<td><?php echo $employee_data['id'];?></td>
					<td><?php echo $employee_data['ep_name'];?></td>
					<td><?php echo $employee_data['ep_num'];?></td>
					<td><img src="/upload"<?php echo $employee_data['ep_image'];?>></td>
					<td>
						<a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $employee_data['id'];?>">Edit</a>
						<a class="btn btn-warning" href="?status=delete && id=<?php echo $employee_data['id'];?>">Delete</a>
					</td>
					
					
					
				</tr>
				<?php }?>
			</tbody>
		</table>
	
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