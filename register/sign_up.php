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

include("connection.php");

if (array_key_exists("email",$_POST) and (array_key_exists("password",$_POST))){
    
    $query = "select * from `users` where `email` ='".mysqli_real_escape_string($link,$_POST["email"])."'";
    
    $result=mysqli_query($link,$query);

    if (mysqli_num_rows($result)>0){

        echo "This email is alredy registered";

    }else{

        $query = "insert into `users`(`email`,`password`) values ('".mysqli_real_escape_string($link, $_POST["email"])."','".mysqli_real_escape_string($link, $_POST["password"])."')";

        if (mysqli_query($link, $query)){

            $query = "update `users` set `password`= '".(md5(md5(mysqli_insert_id($link)).$_POST["password"]))."' where `id` = ".mysqli_insert_id($link)." limit 1";

            mysqli_query($link, $query);
            
            $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' limit 1";
            
            $result = mysqli_query($link, $query);
            
            $row = mysqli_fetch_array($result);

            $_SESSION["id"]= $row["id"];
            
            //echo $row["id"];

           

            

            //setcookie("id",$row["id"],time()+60*24*24*365);
            
            
            header("Location: login.php");
        }
        else{

            echo ("There was some error. Please try again later!");
        }
    }
}
?>