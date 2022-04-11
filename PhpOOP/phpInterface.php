<?php
	interface parant{
		function cal($variableOne,$variableTwo);
		
	}
	interface parantTwo{
		function mini($c,$d);
	}
	class Child implements parant,parantTwo{
			function cal($a,$b){
				echo $a+$b;
			}
			/*function sub($c,$d){
				echo $c-$d;
			}*/
			 function mini($c,$d){
				echo $c-$d;
			}
		
	}
	$ob1=new Child();
	$ob1->cal(50,30);
	//$ob1->sub(40-30);
	echo "<br>";
	$ob1->mini(40,10);




?>