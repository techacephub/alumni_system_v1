<?php
include('db.php');
 //checking if user enter value
 if(!empty($_POST['Department'])){

    $dept = mysqli_real_escape_string($conn,trim($_POST['Department']));
       $sql=mysqli_query($conn,'INSERT INTO `department`(`Department_id`, `Department`) VALUES ($dept) ');
     if($sql){
    
     }
     exit();
}

?>