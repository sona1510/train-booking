<?php
session_start();
$w=$_SESSION['name'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query="SELECT * FROM booking WHERE name='komal'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
while($row)
{
    echo"<table border='5'>";
    echo"<tr>";
    echo"<td>".$row[0]."</td>";
    echo"<td>".$row[1]."</td>";
    echo"<td>".$row[2]."</td>";
    echo"<td>".$row[3]."</td>";
    echo"<td>".$row[4]."</td>";
    echo"<td>".$row[5]."</td>";
    echo"<td>".$row[6]."</td>";
    echo"<td>".$row[7]."</td>";
    echo"<td>".$row[8]."</td>";
    echo"</tr>";
    echo"</table>";
}


?>