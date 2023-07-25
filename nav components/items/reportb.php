<?php

 include 'config.php';

 $email = $_POST['email'];
 $number = $_POST['number'];
 $category =$_POST['category'];
 $date = $_POST['date'];
 $desc = $_POST['desc'];
 $item = $_POST['item'];
 $item_count = $_POST['count'];
 $dept = $_POST['dept'];

 $sql = "INSERT INTO `complaint` (`email`, `phone`, `category`,`item`,`count`, `date`, `desc`,`department`) VALUES ('$email','$number','$category','$item','$item_count','$date','$desc','$dept');";
 $result = $conn->query($sql);

 if($result)
 {
    echo "Your Request have been successfully submitted ";
 }
 else{
    echo "0";
 }





?>