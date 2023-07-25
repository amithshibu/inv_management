<!DOCTYPE html>
<html>
<?php 
session_start();
$id=$_GET['id'];
$_SESSION["id"]=$id;
include 'config.php';
include ('./adminnav.php');
if(!isset($_POST['submit']))
{
$sql="select * from `items` where id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$pname= $row['product name'];
$sno= $row['serial no'];
$pcode=$row['product code'];
$cat=$row['category'];
$loc=$row['location'];
$price=$row['price'];
$count=$row['count'];
$fund=$row['fund'];
$dop=$row['date of purchase'];
$wp=$row['warranty period'];
$sd=$row['seller details'];
$specs=$row['specs'];
}


?>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="updateform.css?v=<?php echo time(); ?>">
<script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>


<body>
<div class="form-container">
<form method="POST" action="test.php">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="productname">Product Name</label>
      <input type="text" class="form-control" id="productname" value="<?php echo $pname; ?>" name="productname" placeholder="Name of product">
    </div>

    
    <div class="form-group col-md-4">
      <label for="sno">Serial no</label>
      <input type="number" class="form-control" id="sno" value="<?php echo $sno; ?>" name="sno" placeholder="Enter the serial number">
    </div>
    
    


    
    <div class="form-group col-md-4">
      <label for="productcode">Product code</label>
      <input type="text" class="form-control" id="productcode" value="<?php echo $pcode; ?>" name="productcode" placeholder="Enter Product Code">
    </div>
    

    
    <div class="form-group col-md-4 cat">
     <label for="ctg"> Categories </label>
     <select id="ctg" name="ctg">
        <option value="lab">Lab</option>
        <option value="class">Class Room</option>
        <option value="staffroom">Staff Room</option>
    </select>
    </div>

    
    <div class="form-group col-md-4">
    <label for="count"> Count </label>
    <input type="number" class="count form-control" value="<?php echo $count; ?>" id="count" name="count" placeholder="enter the count">

    </div>

    
    <div class="form-group col-md-4">
    <label for="price"> Price </label>
    <input type="number" class="price form-control" value="<?php echo $price; ?>" id="price" name="price" placeholder="enter the price">
    </div>
   

    
    <div class="form-group col-md-4">
      <label for="loc">Location</label>
      <select class="form-control loc" id="loc" name="loc">
        <option value="dsa lab">Lab</option>
        <option value="dbms lab">Class Room</option>
        <option value="cs-a">CS-A</option>
        <option value="cs-b">CS-B</option>
        <option value="project lab">Project Lab</option>
      </select>
    </div>

    
    <div class="form-group col-md-4">
      <label for="dop">Date of Purchase</label>
      <input type="date" class="form-control dop" id="dop" value="<?php echo $dop; ?>" name="dop" placeholder="Enter Date of purchase">
    </div>
    

     <div class="form-row">
    <div class="form-group col-md-4">
      <label for="wp">Warranty Period</label>
      <input type="number" class="form-control wp" id="wp" value="<?php echo $wp; ?>" name="wp" placeholder="Enter Warranty Period">
    </div>

    <div class="form-group col-md-4">
      <label for="fund">Fund Category</label>
      <input type="text" class="form-control" id="fund" name="fund" value="<?php echo $fund; ?>" placeholder="Enter Fund Type"/>
    </div>

    <div class="form-group col-md-4">
        <p id="text-area"> Enter the Seller Details </p>
      <textarea name="sd" class="sd" id="sd" rows="10" cols="30">
        <?php echo $sd; ?>
      </textarea>
    </div>
    
    <div class="form-group col-md-4">
      <p id="text-area"> Enter the Specifications </p>
      <textarea name="specs" class="specs" id="specs" rows="10" cols="30">
        <?php echo $specs; ?>
      </textarea>
    </div>

    <input type="submit" name="update" id="update" class="update-btn" value="update">


</form>


</div>

</body>
<script>
  

</script>
</html>
