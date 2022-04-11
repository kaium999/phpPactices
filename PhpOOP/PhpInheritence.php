<?php 
	 class Tansport{
			public $id;
	        public $name;
	        public $model;
			public $Reg;
			
		function __construct($id,$name,$model,$Reg){
			$this->id=$id;
			$this->name=$name;
			$this->model=$model;
			$this->Reg=$Reg;
		}
		function show(){
			echo "Id Is:".$this->id."<br>";
			echo "Id name:".$this->name."<br>";
			echo "Id Model:".$this->model."<br>";
			echo "Id Reg:".$this->Reg;
		}


	}
	class Bus extends  Tansport{
		public $Comapany_name;
		
		function __construct($id,$name,$model,$Reg,$Company_name){
			$this->id=$id;
			$this->name=$name;
			$this->model=$model;
			$this->Reg=$Reg;
			$this->Company_name=$Company_name;
			
		}
		function show(){
			echo"This is Bus Part";
			echo "Id Is:".$this->id."<br>";
			echo "Id name:".$this->name."<br>";
			echo "Id Model:".$this->model."<br>";
			echo "Id Reg:".$this->Reg."<br>";
		}
	}
	$t1=new Tansport(1234,"Savar","2016","2020");
	$t1->show();
	$b1=new Bus(5689,"Sojon","299","1234","TATA");
	$b1->show();




?>