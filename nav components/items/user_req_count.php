<?php
 include('config.php');
 $query="select * from `users` where status='pending'";
 $result=$conn->query($query);

 echo mysqli_num_rows($result);

 ?>