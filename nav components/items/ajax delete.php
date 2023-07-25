<?php
include 'config.php';
$delete_id=$_POST['id'];
$sql="delete from `items`  where id='$delete_id'";
if (mysqli_query($conn,$sql))
{
    echo 1;
}
else{
    echo 0;
}


?>