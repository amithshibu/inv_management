<?php
         
         include("connect.php"); //database connection

         $email=$_POST['email'];//recieving username and password from login
         $pass=$_POST['password'];
         
         if($conn)
  { 
    $sql="SELECT * FROM `users` where email='$email' && `password`='$pass'";
    $res = $conn->query($sql);
    $num=mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    if($num==1) // user valid redirect to home
    {   $_SESSION['user']=$name;
        $_SESSION['status']="login successful";
        echo '<script>alert ("login succesful")</script> ';
        if($row['role']=="admin")
        { $_SESSION['role']="admin";
          header("location:.\home screen\adminhome.php");
        }
       else
       {
        $_SESSION['role']="user";
        header("location:.\home screen\userhome.php");
       }
    }
  }


  ?> 