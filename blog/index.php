<?php
	include("admin/class/function.php");
	$object=new conApp();
	$displayCatagory=$object->displayCatagory();

?>

<?php
	include_once("includes/header.php");

?>
<body>
	
   <?php
		include_once("includes/preloader.php");
   ?>
   <?php
		include_once("includes/body_header.php");
   
   ?>

   <?php
		include_once("includes/Banner.php");
		
   ?>



   <?php
		include_once("includes/call_to_action.php");
		
   ?>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
           <?php
				include_once("includes/blogPost.php");
		   ?>
         <?php
				include_once("includes/sideBar.php");
		   ?>
        </div>
      </div>
    </section>
           <?php
				include_once("includes/footer.php");
		   ?>
    


  
           <?php
				include_once("includes/script.php");
		   ?>

  </body>
</html>