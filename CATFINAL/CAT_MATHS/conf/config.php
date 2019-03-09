<?php 
$link = mysqli_connect("localhost","root","","quizmaths");

if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");
}
session_start();

?>