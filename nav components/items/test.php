<?php
    session_start();
    echo $_SESSION["id"];
    $id=$_SESSION["id"];
    include 'config.php';
    $pname= $_POST['productname'];
    $sno= $_POST['sno'];
    $pcode=$_POST['productcode'];
    $cat=$_POST['ctg'];
    $loc=$_POST['loc'];
    $price=$_POST['price'];
    $count=$_POST['count'];
    $dop=$_POST['dop'];
    $wp=$_POST['wp'];
    $sd=$_POST['sd'];
    $specs=$_POST['specs'];
    $fund = $_POST['fund'];

    $sql="update `items` set `product name`='$pname', `serial no`='$sno', `product code`='$pcode',`category`='$cat', `location`='$loc', `fund` = '$fund', `price`='$price', `count`='$count', `date of purchase`='$dop', `warranty period`='$wp', `seller details`='$sd', `specs`='$specs' where `id`='$id'";
    $result=$conn->query($sql);
    echo $result;
    if($result)
    {
        header("location:update.php");
    }
    else{
           echo "data updation failed";

    }

?>