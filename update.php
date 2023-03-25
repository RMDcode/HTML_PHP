<?php

	$e=$_POST['e'];
	$s=$_POST['s'];
	
	$con=pg_connect("host=localhost user=rohit password=root123 dbname=rmd") or die("Unable to connect database");

	$qry="select * from teacher where tno=$e";

	$rs=pg_query($con,$qry) or die("Problem in Select query....");

	$cnt=pg_num_rows($rs);

	if($cnt==0)
	{
		die("No record found for Employee Number $e");
	}
	
	$qry="update teacher set subject='$s' where tno=$e";

	pg_query($con,$qry) or die("Problem in Update Query....");

	pg_close($con);

	echo "Updated Successfully !!! <br>";


?>
