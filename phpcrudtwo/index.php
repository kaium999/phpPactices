<?php
	include("function.php");
	   $object=new sapp();
	if(isset($_POST['add_info'])){
		$message =$object->Stuaddinfo($_POST);
		
	}
	$returndata=$object->dispalyData();

    if(isset($_GET['status'])){
		if($_GET['status']='delete'){
			$delete_id=$_GET['id'];
			$return_delete=$object->delete_data($delete_id);
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

    <title>Php Crud Two Demo</title>
  </head>
  <body>
	<div class="container m-4 p-4 shadow">
		<form class="form" action="" method="POST">
		<?php if(isset($message)){echo $message;}?>
		<h1>Php Crud Two Demo</h1>
		
		<input class="form-control mb-2" type="text" name="ss_name" placeholder="Enter Your Name"><br>
		<input class="form-control mb-2" type="text" name="ss_address" placeholder="Enter Your Address"><br>
		<input class="form-control mb-2" type="text" name="ss_mobi_num" placeholder="Enter Your Mobile Number"><br>
		<input class="form-control mb-2" type="text" name="ss_department" placeholder="Enter Your Department"><br>
		<input type="submit" value="Add Information" name="add_info" class="form-control bg-warning">
		</form>
	</div>
	
	
	
	<div class="container m-4 p-4 shadow">
		<table class="table table-responsive">
			<thead>
				<tr>
				<th>ID</th>
				<th>Student Name</th>
				<th>Student Address</th>
				<th>Student Mobile</th>
				<th>Student Department</th>
				<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<tr>
			<?php while($student_data=mysqli_fetch_assoc($returndata)){?>
				<td><?php echo $student_data['id'];?></td>
				<td><?php echo $student_data['s_name'];?></td>
				<td><?php echo $student_data['s_address'];?></td>
				<td><?php echo $student_data['s_mobi_num'];?></td>
				<td><?php echo $student_data['s_department'];?></td>
				<td><a href="update.php?status=edit&&id=<?php echo $student_data['id'];?>" >Edit</a>
					<a href="?status=delete&& id=<?php echo $student_data['id'];?>">Delete</a>
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