<?php
	class Car{
		public $a,$b,$c;
		
		function sum(){
			$this->c=$this->a+$this->b;
			return $this->c;
		}
		function sub(){
			$this->c=$this->a-$this->b;
			return $this->c;
		}
		
	}
	$c1=new Car();
	$c1->a=100;
	$c1->b=10;
	
	$c2=new Car();
	$c2->a=500;
	$c2->b=10;
	
	echo "Sum value is:".$c1->sum()."\n";
	echo "Sub value is:".$c2->sub();




?>