<?php


$r=$_POST['r'];
$n=$_POST['n'];
$p=$_POST['p'];

$con=pg_connect("host=localhost user=rohit password=root123 dbname=rmd") or die("Unable to connect database");

$qry="insert into student values($r,'$n',$p)";


pg_query($con,$qry) or die("Unable to insert");

pg_close($con);

echo "Record is added Successfully!!";


?>
