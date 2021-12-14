<?php
$name = $_REQUEST['name'];
echo $name;
$a1=20;
$a2=10;
echo "<br>";
printf("Addition=%d",$a1+$a2,$name);
echo "<br>";
printf("Subtraction=%d",$a1-$a2,$name);
echo "<br>";
printf("Multiplication=%d",$a1*$a2,$name);
echo "<br>";
printf("Division=%d",$a1/$a2,$name);
?>