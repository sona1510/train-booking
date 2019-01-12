<?php
session_start();
$p=$_POST['x'];
$q=$_POST['y'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");


if($p==""||$q=="")
{
    echo"fill all";
    //echo"<a href="form.php">click here </a>";
    echo"<a href='form.php'>click here</a>";
}

else
{
$query1="SELECT * FROM user WHERE name='$p' AND password='$q'";
$result=mysql_query($query1);
$con=mysql_num_rows($result);
if($con==0)
{
    echo"u havent regestered";
    //echo"<a href="form.php">click here</a>";
    echo"<a href ='form.php'>click here</a>"; 
}
else
{
    $_SESSION['name']=$p;
    $_SESSION['password']=$q;
    //header("location:welcome.php");
    //header("location:see.php");
    echo"<a href ='welcome.php'>UR SUCCUSESFULLY LOGIN CLICK HERE TO  UR HOME PAGE</a>";
   

   
}



}




?>