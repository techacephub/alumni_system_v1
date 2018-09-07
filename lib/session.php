<?php
session_start();

function logout(){
   $id= $_SESSION['user_id'];
unset($_SESSION['user_id']);
session_destroy();
  
}
header('Location:index.php')
?>

