<?php
$servername="localhost";
$username="root";
$password="mariadb";
$dbname="boarding";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
?>