<?php

	function add( &$a )
	{
		$a=$a+2;
	}
	$x=2;
	add($x);	//reference of '$x' is in '$a' now.
	echo "$x"; 	//4 "$x is changed by $a in add()"


?>
