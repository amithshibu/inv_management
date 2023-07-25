<?php
 include 'config.php';
 session_start();
 $email=$_SESSION['email'];

 $sql="SELECT * FROM `complaint` where `email` = '$email'";
 $result=$conn->query($sql);
 echo mysqli_num_rows($result);

?>