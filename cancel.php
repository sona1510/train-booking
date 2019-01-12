<?php
session_start();
$j=$_POST['o'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");

$r2=mysql_query("SELECT `seats` FROM booking WHERE `pnr`=$j");
$result=mysql_fetch_array($r2);
$m=$result[seats];
$r3=mysql_query("SELECT `tno` FROM booking WHERE `pnr`=$j");
$result4=mysql_fetch_array($r3);
$r4=$result4[tno];
$k=mysql_query("SELECT `seats` FROM trans WHERE `tno`='$r4'");
$k2=mysql_fetch_array($k);
$k3=$k2[seats];
$r7=mysql_query("UPDATE `trans` SET `seats`=$k3+$m WHERE `tno`='$r4'");
//mysql_query($query);
$r=mysql_query("DELETE FROM booking WHERE `pnr`=$j");
echo"ho gya delete";








?>