<?php
  session_start();
  include 'config.php';
 $id = $_SESSION['id'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $category =$_POST['category'];
 $date = $_POST['date'];
 $desc = $_POST['desc'];
 $item = $_POST['item'];
 $item_count = $_POST['count'];

 $sql = "UPDATE `complaint` SET `email`='$email', `phone` = '$number', `category` = '$category',`item` = '$item',`count` ='$item_count', `date` = '$date', `desc` = '$desc' where `id`='$id';";
 $result = $conn->query($sql);

 if($result)
 {
    echo "Data Updated ";
 }
 else{
    echo "0";
 }
