<?php
	$dispalyCatagory=$object->displayCatagory();
	if(isset($_GET['status'])){
		if($_GET['status']='delete'){
			$cat_id=$_GET['id'];
			$object->Catagory_delete($cat_id);
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

    <title>Manage Catagory</title>
  </head>
  <body>
	<div class="container m-4 p-4 shadow">
		<table class="table table-responsive">
			<thead>
				<tr>
				<th>ID</th>
				<th>Catagory Name</th>
				<th>Catagory Description</th>
			
				<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<?php while($catagory_data=mysqli_fetch_assoc($dispalyCatagory)){?>
				<td><?php echo $catagory_data['id'];?></td>
				<td><?php echo $catagory_data['cat_name'];?></td>
				<td><?php echo $catagory_data['cat_description'];?></td>
			
				<td><a href="Catagory_edit.php?status=edit&&id=<?php echo $catagory_data['id'];?>" >Edit</a>
					<a href="?status=delete&&id=<?php echo $catagory_data['id'];?>">Delete</a>
				</td>
				</tr>
				<?php } ?>
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