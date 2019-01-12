<?php
session_start();
$s=$_POST['m'];
$t=$_POST['n'];
$u=$_SESSION['name'];
$v=$_SESSION['date'];
$w=$_SESSION['password'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$q1=mysql_query("SELECT `tname` FROM `trans` WHERE `tno`='$s'");
$q2=mysql_query("SELECT `from` FROM `trans` WHERE tno='$s'");
$q3=mysql_query("SELECT `to` FROM `trans` WHERE tno='$s'");
$q4=mysql_query("SELECT `email` FROM `user` WHERE `password`='$w' AND `name`='$u'");
$q5=mysql_query("SELECT `cost` FROM `trans` WHERE tno='$s'");
$q7=mysql_query("SELECT `seats` FROM `trans` WHERE `tno`='$s'");

$result=mysql_fetch_array($q7);
$result1=mysql_fetch_array($q1);
$result2=mysql_fetch_array($q2);
$result3=mysql_fetch_array($q3);
$result4=mysql_fetch_array($q4);
$result5=mysql_fetch_array($q5);
$f1=$result1[tname];
$f2=$result2[from];
$f3=$result3[to];
$f4=$result4[email];
$f5=$result5[cost];
//$f1=$result1[tname];
$f=$result[seats]-$t;
$q6=$t*$f5;
$query1="UPDATE `trans` set `seats`=$f WHERE `tno`='$s'";
$query="INSERT INTO booking (`tno`,`date`,`cost`,`tname`,`name`,`from`,`to`,`email`,`seats`) VALUES ('$s','$v',$q6,'$f1','$u','$f2','$f3','$f4',$t)";
//$query="INSERT INTO booking (`tname`) VALUES ('$f1')";
mysql_query($query);
echo"inserted<br>";
//echo"value of q7is $result[seats]";
mysql_query($query1);
echo"seats up date";
?>





