<?php
 include 'config.php';
 $id=$_POST['id'];
 $sql = "UPDATE `complaint` SET `status` = 'approved' , `approval_details` = NOW() WHERE `complaint`.`id` = '$id';";
 $result = $conn->query($sql);

 if($result)
 {
    echo("Request approved");
 }


?>