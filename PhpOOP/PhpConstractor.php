<?php

	class Bus{
		public $id;
		public $name;
		public $model;
		public $Reg;
		
	function __construct($id, $name, $model, $Reg){
		$this->id=$id;
		$this->name=$name;
		$this->model=$model;
		$this->Reg=$Reg;
	}
	function show(){
		echo"The Id Is:".$this->id;
		echo"The name Is:".$this->name;
		echo"The model Is:".$this->model;
		echo"The Reg Is:".$this->Reg;
		//echo $this->id;
	} 
		
	}
	$bus1= new Bus(1234,"TATA","2012","2016");
	$bus1->show();


?>