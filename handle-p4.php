<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$num = $_REQUEST['num'];
echo $name;
echo "<br>";
printf("Name : %s",$name);
echo "<br>";
printf("Email : %s",$email);
echo "<br>";
printf("Password : %s ",$pass);
echo "<br>";
printf("Mobile No. : %s",$num);

?>