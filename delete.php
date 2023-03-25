<?php

	$t=$_POST['t'];
	
	$con=pg_connect("host=localhost user=rohit password=root123 dbname=rmd") or die("Unable to Connect Database");

	$qry="select * from teacher where tno=$t";

	$rs=pg_query($con,$qry) or die("Problem in select query!!");

	$cnt=pg_num_rows($rs);

	if($cnt==0)
	{
		die("No record found for Roll Num $r !!!!");
	}
	
	$qry="delete from teacher where tno=$t";
	
	$rs=pg_query($con,$qry) or die("Problem in select query!!");
	
	pg_close($con);

	echo"Deleted Successfully";



?>
