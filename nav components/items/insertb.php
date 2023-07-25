<?php
 include 'config.php';

 $p_name=$_POST["productname"];
 $sno=$_POST["sno"];
 $pcode=$_POST["productcode"];
 $cat=$_POST["ctg"];
 $count=$_POST["count"];
 $price=$_POST["price"];
 $loc=$_POST["loc"];
 $dop=$_POST["dop"];
 $fund = $_POST["fund"];
 $wp=$_POST["wp"];
 $sd=$_POST["sd"];
 $spec=$_POST["specs"];



  $sql = "INSERT INTO `items` ( `product name`, `serial no`, `product code`, `category`, `location`, `count`, `price`, `date of purchase`, `warranty period`,`fund`, `seller details`, `specs`) VALUES ('$p_name', '$sno', '$pcode', '$cat','$loc', '$count','$price','$dop', '$wp','$fund','$sd','$spec')";
  
 $result=mysqli_query($conn,$sql) or die ("sql query failed");
?>