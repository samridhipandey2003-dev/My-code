<?php
$n1=$_REQUEST['javascript'];
$n2=$_REQUEST['CSS'];
$n3=$_REQUEST['html'];
$n4=$_REQUEST['Database'];
$n5=$_REQUEST['PHP'];
$sum=$n1+$n2+$n3+$n4+$n5;
$per=$sum/500*100;
echo "samriddhi pandey";
echo "<br>";
printf("percentage is:%f",$per);
?>