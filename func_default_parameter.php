<?php
	function display($a, $b=10)
	{
		echo"value of a = $a";
		echo"value of b = $b";
	}
	display(5);		//a=5 b=10
	display(5,2);		//a=5 b=2
	display(6,11);		//a=6,b=11
	display($b);		//b=5
	
?>
