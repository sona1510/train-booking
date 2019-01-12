<?php
session_start();
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query="SELECT * FROM `trans` WHERE `from`='$x' && `to`='$y'";
$result=mysql_query($query);
//echo"komal";
echo"<table border='5'>";
echo"<tr>";
echo"<td>".from."</td>";
echo"<td>".to."</td>";
echo"<td>".tname."</td>";
echo"<td>".tno."</td>";
echo"<td>".timea."</td>";
echo"<td>".timed."</td>";
echo"<td>".cost."</td>";
echo"<td>".seats."</td>";
echo"</tr>";


while($row=mysql_fetch_array($result))
{
    echo"<tr>";
    echo"<td>".$row[0]."</td>";
    echo"<td>".$row[1]."</td>";
    echo"<td>".$row[2]."</td>";
    echo"<td>".$row[3]."</td>";
    echo"<td>".$row[4]."</td>";
    echo"<td>".$row[5]."</td>";
    echo"<td>".$row[6]."</td>";
    echo"<td>".$row[7]."</td>";
    echo"</tr>";
   
}
 echo"</table>";
$_SESSION['date']=$z;
?>
<!DOCTYPE html>
<html>
<body>
<form method="POST" action="book.php">
enter train no.to book:<br>
<input type="text" name="m" size="30"><br>
enter no. of seats:<br>
<input type="text" name="n" size="30"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>

</body>
</html>