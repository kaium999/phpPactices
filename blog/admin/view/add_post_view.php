<?php

	$catagoryName=$object->displayCatagory();
	if(isset($_POST['add_post'])){
		$masg=$object->addPost($_POST);
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

    <title>Add Post</title>
  </head>
  <body>
		<?php if(isset($masg)){ echo $masg;}?>
	<div class="container m-4 p-4 shadow">
		<form class="form" action="" method="POST">
			<div class="form-group">
				<label class="mb-1" for="post-title">Post Title</label><br>
				<input type="text" name="post_title" class="form-control py-4" id="post_title">
			
			</div>
				<div class="form-group">
				<label class="mb-1" for="post-content">Post content </label><br>
				<textarea class="form-control" name="post-content" id="post-content" cols="30" rows="10"></textarea>
			</div>
				<div class="form-group">
				<label class="mb-1" for="select_catagory">Select Catagory</label>
				<select class="form-control" name="post_catagory" id="post_catagory">
					<?php while($catagory=mysqli_fetch_assoc($catagoryName)){?>
					<option value="<?php echo $catagory['id'];?>"><?php echo $catagory['cat_name'];?></option>
					<?php }?>
				</select>
			
			</div>
			<div class="form-group">
				<label class="mb-1" for="post_summary">Post summary</label><br>
				<input type="text" name="post_summay" class="form-control py-4" id="post_title">
			
			</div>
			<div class="form-group">
				<label class="mb-1" for="post_tag">Post Tag</label><br>
				<input type="text" name="post_tag" class="form-control py-4" id="post_title">
			
			</div>
				<div class="form-group">
				<label class="mb-1" for="select_status">Select Status</label><br>
				<select class="form-control" name="select_status" id="select_status">
					<option value="1">Published</option>
					<option value="0">Unpublished</option>
				
				</select>
			
			</div><br>
			<div class="form-group">
				
				<input type="submit" name="add_post" class="from-control btn btn-block btn-primary"value="Add Post">
			
			</div>
		
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