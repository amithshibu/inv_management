<?php
  
    include 'connect.php';
    $email=$_POST['email'];
    $query="DELETE FROM `users` where email='$email' ";
    if(mysqli_query($conn,$query))
    {
        echo 1;
    }
    else{
        echo 0;
    };
        



?>