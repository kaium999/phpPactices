<?php
	trait base{
		function hello(){
			echo "Say hello EveryOne!!!!!!!";
		}
		
	}
	trait bye{
		function sayBye(){
			echo"everyOne Say bye!!!!!";
		}
	}
	class childOne{
		use base,bye;
	}
	class childTwo{
		use base,bye;
	}

	class childThree{
		use base,bye;
	}

	$c1=new childOne();
	$c2=new childTwo();
	$c3=new childThree();
	/*$c1->hello();
	echo"<br>";
	$c2->hello();
	echo"<br>";
	$c3->hello();*/
	$ar=array($c1,$c2,$c3);
	foreach($ar as $ar){
		$ar->hello();
		$ar->sayBye();
	}


?>