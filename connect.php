<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$w=$_POST['d'];
$m=$_POST['e'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query1="SELECT * FROM user WHERE name='$x' AND password='$z'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($x=="" || $y=="")
{
    echo"fill all";
}
else
{
if($con>0)
{
    echo"u have already regesterd";
}
else
{
$query="INSERT INTO user (name,email,password,phone,city) VALUES ('$x','$y','$z','$w','$m')";
mysql_query($query);
echo"ho gya";
}
}



?>