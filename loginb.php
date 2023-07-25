<?php
session_start();
if(true)
{
  include("connect.php");
  $email= $_POST['email'];
  $_SESSION['email'] = $email;



  if($conn)
{ 
  $sql="SELECT * FROM `users` where email='$email'";
  $res = $conn->query($sql);
  $num=mysqli_num_rows($res);
  $row=mysqli_fetch_array($res);
  $_SESSION['dsgn'] = $row['designation'];
  if($num==1) // user valid redirect to home
  {   $_SESSION['email']=$email;
      $_SESSION['status']="login successful";
      if($row['role']=="admin")
      { $_SESSION['role']="admin";
        echo 1;
      }
     else
     {
      $_SESSION['role']="user";
      echo 0;
     }
  }
  else{
    echo "alert('no match found')";
  }
}
}
else{
      echo "failed";
}

?>

