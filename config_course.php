<?php 
$servername = "";
$username = "id18169314_caeserdb";
$password = "t4SL[v<9eJ)<a75s";
$dbname = "id18169314_coursedb";
$conn = mysqli_connect($servername, $username,$password,$dbname);
mysqli_set_charset($conn , 'UTF8');
if (!$conn) 
    {
     die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>