<?php

	$n=$_GET['n'];
	$a=array("Rohit","WNS","BCS");
	$msg="List of Names: <br>";

	foreach($a as $v)
	{
		$s=substr($v,0,strlen($n));

		if($s===$n)
		{	
			$msg = $msg. "$v<br>";
		}

	}
	echo $msg;

?>
