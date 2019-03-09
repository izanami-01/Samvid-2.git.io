<?php 

include("connection.php");
$error='';
if (array_key_exists("email",$_POST) and (array_key_exists("password",$_POST))){

$query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."' limit 1";
                
$result = mysqli_query($link, $query);
                
$row = mysqli_fetch_array($result);
                
if (isset($row)) {
                     
    $hashedPassword = md5(md5($row['id']).$_POST['password']);
                        
        if ($hashedPassword == $row['password']) {
                            
            $_SESSION['id'] = $row['id'];
                    
                

            //setcookie("id", $row['id'], time() + 60*60*24*365);
                

            header("Location: admin.php");
                                
        } else {
                            
            $error .= "That email/password combination could not be found.";
                            
            }
                        
        } else {
                        
            $error .= "That email/password combination could not be found.";
                        
        }
                    
    
    }
?>