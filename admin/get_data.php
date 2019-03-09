<?php 

session_start();
$error="";

/*if (array_key_exists("logout",$_GET) and $_GET["logout"]){
    
    unset($_SESSION);
    
    setcookie("id","",time()-60*60);
    
    $_COOKIE["id"]="";

}else *///if((array_key_exists("id",$_COOKIE) and $_COOKIE["id"]) or (array_key_exists("id",$_SESSION) and  $_SESSION["id"])){
    
    //header("Location: login.php");
    
//}
if (array_key_exists("cat",$_POST)){
if ($_POST['cat']=="Apti"){
    echo('fjghdsfjkgkljfg;klfjk');
    $link = mysqli_connect("localhost","root","","quizmaths");

    if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");


}

$question=$_POST['question'];
$score=$_POST['score'];
$level=$_POST['level'];
$is_deleted=0;

$query = "insert into `questions`(`question`,`score`,`level`,`is_deleted`) values ('$question','$score','$level','$is_deleted')";


$result=mysqli_query($link,$query);
$row = mysqli_fetch_array($result);
if(isset($row)){
    
    $_SESSION['question_id']=$row['id'];
}

$qid=$_SESSION['question_id'];
$answer0=$_POST['answer0'];
$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$query = "insert into `answers`(`question_id`,`answer`,`is_correct`) values ('$qid','$answer0','1')";
mysqli_query($link,$query);

$query = "insert into `answers`(`question_id`,`answer`,`is_correct`) values ('$qid','$answer1','0')";
mysqli_query($link,$query);

$query = "insert into `answers`(`question_id`,`answer`,`is_correct`) values ('$qid','$answer2','0')";
mysqli_query($link,$query);








}else {
     $link = mysqli_connect("localhost","root","","tech");

if (mysqli_connect_error()){
    
    die("Cannot connect to database. Sorry!");
}
$question=$_POST['question'];
$score=$_POST['score'];
$level=$_POST['level'];
$is_deleted=0;



$query = "insert into `questions`(`question`,`score`,`level`,`is_deleted`) values ('$question','$score','$level','$is_deleted')";


$result=mysqli_query($link,$query);
$row = mysqli_fetch_array($result);
if(isset($row)){
    
    $_SESSION['question_id']=$row['id'];
}

$qid=$_SESSION['question_id'];
$answer0=$_POST['answer0'];
$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
echo('qid'.$qid);
echo($answer0);
$query = "insert into `answers`(`question_id`,`answer`,`is_correct`) values ('$qid','$answer0','1')";
mysqli_query($link,$query);

$query = "insert into `answers`(`question_id`,`answer`,`is_correct`) values ('$qid','$answer1','0')";
mysqli_query($link,$query);

$query = "insert into `answers`(`question_id`,`answer`,`is_correct`) values ('$qid','$answer2','0')";
mysqli_query($link,$query);

header('Location: admin.php');




}
}


?>