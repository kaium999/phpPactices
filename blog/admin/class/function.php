<?php
	class conApp{
		private $con;
		
		function __construct(){
			#database host, database user, database pass, database name
			$datahost='localhost';
			$datauser='root';
			$datapassword='';
			$database_name='blog_project';
			$this->con = mysqli_connect($datahost,$datauser,$datapassword,$database_name);
			if(!$this->con){
				die("Database Connection failed");
			}
			
		}
		
		public function AdminLogIn($admin_data){
			$email_admin=$admin_data['admin_email'];
			$pass_admin=md5($admin_data['admin_password']);
			
			$query=" select * from admin_info where admin_email='$email_admin'&& admin_pass='$pass_admin'";
			
			if(mysqli_query($this->con,$query)){
				$data_admin=mysqli_query($this->con,$query);
				if($data_admin){
					header("Location:Deshboard.php");
					$admin_info=mysqli_fetch_assoc($data_admin);
					
					session_start();
					$_SESSION['adminId']=$admin_info['id'];
					$_SESSION['adminName']=$admin_info['admin_name'];
					
					
				}
				}
			}
			public function adminLogOut(){
				unset($_SESSION['adminId']);
				unset($_SESSION['adminId']);
				header("Location:index.php");
			}
			
			public function addCatagory($catagory_data){
				$catagory_name=$catagory_data['Cat_name'];
				$catagory_description=$catagory_data['Cat_description'];
				
				$query="insert into add_catagory (cat_name,cat_description) values ('$catagory_name','$catagory_description')";
				
				if(mysqli_query($this->con,$query)){
					return"Catagory Inserted Successfully";
				}
			}
			
			public function displayCatagory(){
				$query="select *from add_catagory";
				if(mysqli_query($this->con,$query)){
					$displayCatagory= mysqli_query($this->con,$query);
					return $displayCatagory;
				}
			}
			public function CatagoryUpdate($cat_id){
				$query="select *from add_catagory where id='$cat_id';";
				if(mysqli_query($this->con,$query)){
					$returnCatagory=mysqli_query($this->con,$query);
					$catagory_data=mysqli_fetch_assoc($returnCatagory);
					return $catagory_data;
				}
			}
			public function Catagory_delete($cat_id){
				$query="delete from add_catagory where id='$cat_id'";
				if(mysqli_query($this->con,$query)){
					return"Delete sucessfully";
				}
			
			}
			public function addPost($post_data){
				$Post_title=$post_data['post_title'];
				$Post_content=$post_data['post-content'];
				$Post_catagory=$post_data['post_catagory'];
				$Post_summary=$post_data['post_summay'];
				$Post_tag=$post_data['post_tag'];
				$Post_status=$post_data['select_status'];
				$query="insert into post (post_title,post_content,post_ctg,post_author,post_date,post_comment_count,post_summary,post_tag,post_status) values('$Post_title','$Post_content','$Post_catagory','Admin',now(),3,'$Post_summary','$Post_tag','$Post_catagory')";
				if(mysqli_query($this->con,$query)){
					return" Post Insertd Successfully";
				}
			}
			public function displayPost(){
				$query="select * from post_with_catagory";
				
				if(mysqli_query($this->con,$query)){
					$data_post=mysqli_query($this->con,$query);
					return $data_post;
					
				}
			}
			public function updateDisplayPost($p_id){
				$query="select * from post_with_catagory where post_id='$p_id'";
				if(mysqli_query($this->con,$query)){
					$post_data=mysqli_query($this->con,$query);
					$data_post=mysqli_fetch_assoc($post_data);
					return $data_post;
				}
			}
			public function editPost($post_data){
				$id_post=$post_data['post_U_id'];
				$title_post=$post_data['post_U_title'];
				$content_post=$post_data['post_U_content'];
				$summary_post=$post_data['post_U_summary'];
				$tag_post=$post_data['post_U_tag'];
				$name_catagory=$post_data['catagory_U_name'];
				
				$query="update post_with_catagory post_title='$title_post',post_content='$content_post',post_author='Admin',post_date='now()',post_summary='$summary_post',post_tag='$tag_post',cat_name='$name_catagory' where post_id='$id_post'";
				
				if(mysqli_query($this->con,$query)){
					return " Successfully updated";
				}
			}
			
		}
		
		
	




?>