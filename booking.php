<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$k=$_SESSION['name'];
//$l=$_SESSION['password']
$query="SELECT * FROM `booking` WHERE `name`='$k'";
$result=mysql_query($query);
echo"<table border='5'>";
    echo"<tr>";
    echo"<td>".train_no."</td>";
    echo"<td>".date."</td>";
    echo"<td>".toatal_cost."</td>";
    echo"<td>".name."</td>";
    echo"<td>".from."</td>";
    echo"<td>".to."</td>";
    echo"<td>".train_name."</td>";
    echo"<td>".email_id."</td>";
    echo"<td>".pnrno."</td>";
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
    echo"<td>".$row[8]."</td>";
    echo"</tr>";
   
}
 echo"</table>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body align="center">
<form method="POST" action="cancel.php">
enter pnr no. to cancle the train:<br>
<input type="text" name="o" size="30"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>
    
</body>
</html>