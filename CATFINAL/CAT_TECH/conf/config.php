<?php 
$link = mysqli_connect("localhost","root","","tech");

if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");
}
session_start();

?>