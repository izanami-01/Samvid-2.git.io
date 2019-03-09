<?php



//if (array_key_exists("id",$_COOKIE)){
    
    //$_SESSION["id"]=$_COOKIE["id"];
    
    /*print_r($_COOKIE);
    
    print_r($_SESSION);*/
    
    

//}

if (array_key_exists("id",$_SESSION)){
    
    /*print_r($_COOKIE);
    
    print_r($_SESSION);*/
    
    $logout="<a href='../register/log_out.php' style='text-decoration: none!important;'>Log Out!</a>";
    
}
else {
    
    header("Location: ../index.html");
}








?>