<?php
include('config.php');
session_start();
$email = $_SESSION['email'];




if(isset($_FILES['file']['name']))
{
   $uploaddir = "../user_images/";
   $databasedir = "user_images/";

   
       $filetoupload = $uploaddir.basename($_FILES['file']['name']);
       $databaseupload = $databasedir.basename($_FILES['file']['name']);

       if(move_uploaded_file($_FILES['file']['tmp_name'],$filetoupload))
       {
           $file = htmlspecialchars($_FILES['file']['name']);
           $query = "update `users` set `image` = '$databaseupload' where `email` = '$email'";
           $result = mysqli_query($conn,$query);

           echo "alert profile photo updated";
       }
       else{
           echo "failed to update";
       }
}
   else{
       echo "fields are empty";
   }

?>