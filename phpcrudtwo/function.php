<?php
	class sapp{
		private $con;
		
		function __construct(){
			#database host, database user, database pass, database name
			$datahost='localhost';
			$datauser='root';
			$datapassword='';
			$database_name='phpcrudtwo';
			$this->con = mysqli_connect($datahost,$datauser,$datapassword,$database_name);
			if(!$this->con){
				die("Database Connection failed");
			}
			
		}
		public function Stuaddinfo($datainfo){
			$stu_name=$datainfo['ss_name'];
			$stu_address=$datainfo['ss_address'];
		    $stu_mobi_num=$datainfo['ss_mobi_num'];
			$stu_department=$datainfo['ss_department'];
			
			$query="insert into student(s_name,s_address,s_mobi_num,s_department) values ('$stu_name','$stu_address','$stu_mobi_num','$stu_department')";
			
			if(mysqli_query($this->con,$query)){
				return"successfylly Inserted";
				
			}
		}
		public function dispalyData(){
			$query="select *from student";
			if(mysqli_query($this->con, $query)){
				$returndata=mysqli_query($this->con, $query);
				return $returndata;
			}
		}
		public function displayupdatedata($id){
			$query ="select *from student where id='$id'";
			if(mysqli_query($this->con,$query)){
				$returndata=mysqli_query($this->con,$query);
				$studentdata=mysqli_fetch_assoc($returndata);
				return $studentdata;
			}
		}
		public function update_data($up_data){
			$s_id=$up_data['s_id'];
			$u_s_name=$up_data['s_u_name'];
			$u_s_address=$up_data['s_u_mobi_num'];
			$u_s_mobi_num=$up_data['s_u_mobi_num'];
			$u_s_department=$up_data['s_u_department'];
			$query="update student set s_name='$u_s_name',s_address='$u_s_address',s_mobi_num='$u_s_mobi_num',s_department='$u_s_department' where id='$s_id'";
			
			if(mysqli_query($this->con,$query)){
				return "update successfylly!!!";
			}
		}
		public function delete_data($s_id){
			$query="delete from student where id='$s_id'";
			if(mysqli_query($this->con,$query)){
				return"Delete Successfully!!!!!";
			}
		}
			
			
			
		
		
	
	
	}
	


?>