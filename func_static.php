<?php

	function update()
	{	
		static $cnt=0;
		$cnt++;
		echo"Static counter is $cnt<br>";
	}
	$cnt=10;
	update();
	update();
	update();
	update();
	update();
	update();
	update();
	update();
	update();
	echo"Global counter is $cnt <br>";
?>
