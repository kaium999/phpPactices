<?php 
	if(isset($_GET['status'])){
		if($_GET['status']='edit'){
			$p_id=$_GET['id'];
			$P_data=$object->updateDisplayPost($p_id);
		}
	}
	if(isset($_POST['add_info'])){
		$meag=$object->editPost($_POST);
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

    <title>Post Edit Page</title>
  </head>
  <body>
  <?php if(isset($meag)){ echo $meag;}?>
	<div class="container m-4 p-4 shadow">
		<form class="form" action="" method="POST">
		<h1>Post Edit Page</h1>
		
		<input class="form-control mb-2" type="hidden" name="post_U_id" value="<?php echo$P_data['post_id'] ;?>"></br>
		
		<label>Update Your Post Title</label>
		<input class="form-control mb-2" type="text" name="post_U_title" value="<?php echo $P_data['post_title'] ;?>"></br>
		
		<label>Update Your Post Content</label>
		<input class="form-control mb-2" type="text" name="post_U_content" value="<?php echo $P_data['post_content'] ;?>"></br>
		
		<label>Update Your Post Author</label>
		<input class="form-control mb-2" type="text" name="post_U_author" value="<?php echo $P_data['post_author'] ;?>"></br>
		<label>Update Your Post Date</label>
		<input class="form-control mb-2" type="text" name="post_U_date" value="<?php echo$P_data['post_date'] ;?>"></br>
		
		
		<label>Update Your Post summary</label>
		<input class="form-control mb-2" type="text" name="post_U_summary" value="<?php echo $P_data['post_summary'] ;?>"></br>
		
		<label>Update Your Post Tag</label>
		<input class="form-control mb-2" type="text" name="post_U_tag" value="<?php echo$P_data['post_tag'] ;?>"></br>
			<label>Update Your Catagory Name</label>
		<input class="form-control mb-2" type="text" name="catagory_U_name" value="<?php echo$P_data['cat_name'] ;?>"></br>
		
		
		
		
		<input type="submit" value="Add Information" name="add_info" class="form-control bg-warning">
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