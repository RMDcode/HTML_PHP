<?php

	$con=pg_connect("host=localhost user=rohit password=root123 dbname=rmd") or die("Unable to connect database");
	
	$qry = "select * from student";

	$rs=pg_query($con,$qry) or die("Problem in select Query");

	echo "Student Information <br> <br>";

	echo "<Table border=1>";

	echo "<TR><TH>RNO</TH><TH>NAME</TH><TH>PER</TH></TR>";

	while( $rec = pg_fetch_assoc($rs) )
	{
		$r=$rec['rno'];
		$n=$rec['name'];
		$p=$rec['per'];

		echo"<TR>";
		echo"<TD> $r </TD>";
		echo"<TD> $n </TD>";
		echo"<TD> $p </TD>";
		echo"</TR>";

	}
	pg_close($con);

?>

