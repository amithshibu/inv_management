<?php
 session_start();
 if($_SESSION['role']=='admin')
 {include ('./adminnav.php');}
 else
 {
    include ('./usernav.php');
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="insertstyle.css?v=<?php echo time(); ?>">
<script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
<script src="insertajax.js"></script>

</head>

<body>

<div class="alert alert-success" role="alert" id ="msg">
  
</div>
<div class="heading">
  <h> Add New Item</h>
</div>
<div class="form-container">
<form id="form">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="productname">Product Name</label>
      <input type="text" class="form-control" id="productname" name="productname" placeholder="Name of product" required />
    </div>

    
    <div class="form-group col-md-4">
      <label for="sno">Serial no</label>
      <input type="number" class="form-control" id="sno" name="sno" placeholder="Enter the serial number">
    </div>
    
    


    
    <div class="form-group col-md-4">
      <label for="productcode">Product code</label>
      <input type="text" class="form-control" id="productcode" name="productcode" placeholder="Enter Product Code">
    </div>
    

    
    <div class="form-group col-md-4 cat">
     <label for="ctg"> Categories </label>
     <select id="ctg" name="ctg">
        <option value="lab">Lab</option>
        <option value="class">Class Room</option>
        <option value="staffroom">Staff Room</option>
        <option value="others">Others</optiion>
    </select>
    </div>

    

    
    <div class="form-group col-md-4">
    <label for="count"> Count </label>
    <input type="number" class="count form-control" id="count" name="count" placeholder="enter the count" required />

    </div>

    
    <div class="form-group col-md-4">
    <label for="price"> Price </label>
    <input type="number" class="price form-control" id="price" name="price" placeholder="enter the price" required />
    </div>
   

    
    <div class="form-group col-md-4">
      <label for="loc">Location</label>
      <select class="form-control loc" id="loc" name="loc">
        <option value="dsa lab">DSA LAB</option>
        <option value="dbms lab">DBMS LAB</option>
        <option value="cs-a">CS-A</option>
        <option value="cs-b">CS-B</option>
        <option value="project lab">Project Lab</option>
        <option value="not applicable">Not Applicable</option>
      </select>
    </div>

    
    <div class="form-group col-md-4">
      <label for="dop">Date of Purchase</label>
      <input type="date" class="form-control dop" id="dop" name="dop" placeholder="Enter Date of purchase">
    </div>
    

     <div class="form-row">
    <div class="form-group col-md-4">
      <label for="wp">Warranty Period</label>
      <input type="number" class="form-control wp" id="wp" name="wp" placeholder="Enter Warranty Period">
    </div>

    <div class="form-group col-md-4">
      <label for="fund">Fund Category</label>
      <input type="text" class="form-control" id="fund" name="fund" placeholder="Enter Fund Type"/>
    </div>

    <div class="form-group col-md-4">
        <p class="desc"> Enter the Seller Details </p>
      <textarea name="sd" class="sd" id="sd" rows="10" cols="30">
        
      </textarea>
    </div>
    
    <div class="form-group col-md-4">
      <p class="desc"> Enter the Specifications </p>
      <textarea name="specs" class="specs" id="specs" rows="10" cols="30">
        
      </textarea>
    </div>

    <input type="submit" name="submit" id="submit">


</form>


</div>

</body>

</html>