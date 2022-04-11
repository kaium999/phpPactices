<?php
	include("class/function.php");
	$object= new conApp();
	session_start();
	$admin_id=$_SESSION['adminId'];
	if($admin_id==NULL){
		header("Location:index.php");
	}
	if(isset($_GET['adminlogout'])){
		if($_GET['adminlogout']='logout'){
			$object->adminLogOut();
		}
	}

?>


<?php
	include_once("includes/head.php");

?>
    <body class="sb-nav-fixed">
		
        <?php
			include_once("includes/tem_top_nav.php");
		?>
		
        <div id="layoutSidenav">
         <?php
			include_once("includes/side_nav.php");
		 ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid"></div>
                        <?php
							if(isset($view)){
								if($view=="deshboard"){
									include("view/deshboard_view.php");
								}elseif($view=="AddPost"){
									include("view/add_post_view.php");
								}elseif($view=="ManagePost"){
									include("view/manage_post_view.php");
								}elseif($view=="AddCatagory"){
									include("view/add_catagory_view.php");
								}elseif($view=="ManageCatagory"){
									include("view/manage_catagory_view.php");
								}elseif($view=="Catagory_edit"){
									include("view/Catagory_edit_view.php");
								}elseif($view=="manage_post_edit"){
									include("view/manage_post_edit_view.php");
								}
							};
						
						?>
                </main>
                <?php
					include_once("includes/tem_footer.php");
				
				?>
            </div>
        </div>
		<?php
			include_once("includes/footer_script.php");
		?>
    </body>
</html>
