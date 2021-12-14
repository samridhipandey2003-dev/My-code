<?php

#echo getType($_REQUEST);
#print_r($_REQUEST); #super globle variable (predefined in PHP)

$name = $_REQUEST['name'];
echo $name;
$a1=10;
$a2=10;

printf("\n%d",$a1+$a2,$name);
printf("\n%d",$a1-$a2,$name);
printf("\n%d\n",$a1*$a2,$name);
printf("\n%d",$a1/$a2,$name);
?>