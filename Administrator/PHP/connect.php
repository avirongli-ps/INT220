<?php
$servername = "localhost";
$uname = "root";
$pass = "";
$db="dbmis";

$connect = mysqli_connect($servername , $uname , $pass , $db);

if(!$connect)
    {
        die ('<h2>Failed to connect to the web server. Please Check your web server!</h2>');
    }
$conn = mysqli_select_db($connect,$db);
if(!$conn)
    {
        die ('<h2>Failed to connect to the database!</h2>');
    }
