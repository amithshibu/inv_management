<?php
 include 'config.php';
 $sql="SELECT * FROM `complaint` where `status` = 'pending'";
 $result=$conn->query($sql);
 echo mysqli_num_rows($result);

?>