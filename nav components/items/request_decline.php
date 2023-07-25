<?php
 include 'config.php';
 $id=$_POST['id'];
 $sql = "DELETE FROM `complaint` WHERE `complaint`.`id` = '$id';";
 $result = $conn->query($sql);

 if($result)
 {
    echo("Request Rejected");
 }


?>