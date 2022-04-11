<?php
	class conApp{
		private $con;
		
		public function __construct(){
			#database host,#database user#database pass#database name
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$databaseName="phpcrud";
			$this->con=mysqli_connect($dbhost,$dbuser,$dbpass,$databaseName);
			if(!$this->con){
				die("Database Connection Error!!!");
			}
		}
		function adddata($info){
			$ename=$info['e_name'];
			$enum=$info['e_num'];
			$image=$_FILES['e_image']['name'];
			$tmp_name=$_FILES['e_image']['tmp_name'];
			
			$query="insert into employee(ep_name,ep_num,ep_image)values('$ename','$enum','$image')";
			if(mysqli_query($this->con,$query)){
				move_uploaded_file($tmp_name,"upload/".$image);
				return"Successfully Inserted!!!!";
			}
		}
		function displaydata(){
			$query="select *from employee";
			if(mysqli_query($this->con,$query)){
				$returndata=mysqli_query($this->con,$query);
				return $returndata;
			}
		}
		function displaydataUpdate($id){
			$query="select *from employee where id=$id";
			if(mysqli_query($this->con,$query)){
				$returndata=mysqli_query($this->con,$query);
				$employeeData=mysqli_fetch_assoc($returndata);
				return $employeeData;
			}
		}
		function updateData($data){
			//
			$uname=$data['u_e_name'];
			$unum=$data['u_e_num'];
			$uid=$data['e_id'];
			$eimage=$_FILES['u_e_image']['name'];
			$tmp_name=$_FILES['u_e_image']['tmp_name'];
			
			$query="UPDATE employee SET ep_name='$uname',ep_num='$unum',ep_image='$eimage' WHERE id='$uid'";
			if(mysqli_query($this->con,$query)){
				move_uploaded_file($tmp_name,"upload/".$eimage);
				return "information Update Seccessfull";
			}
		}
		public function delete_Data($delete_id){
			$query="DELETE FROM employee WHERE id=$delete_id";
			if(mysqli_query($this->con,$query)){
				return"Delete Successfully";
			}
		}		
		
		
	}



?>