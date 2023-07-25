<!DOCTYPE html>
<html>
<head>
<?php
 session_start();
 if($_SESSION['role']=='admin')
 {include ('../../home screen/adminnav.php');}
 else
 {
    include ('../../home screen/usernav.php');
 }
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="report.css?<?php echo time(); ?>" />>
<div id="form">
   
    <form>
     <h2 id="head">Request Form </h2> <br>
    <label for="Department"> Department </label>
    <input type="text" name="Department" id="Department" placeholder="Department"><br><br>
    <label for="date" id="date">Date of Request</label>
    <input type="date" name="date" id="date"><br><br>
    <label for="Item"> Item #</label>
    <input type="text" name="Item" id="Item" placeholder="Item"><br><br>
    <label for="Item_description">Item description</label>
    <textarea name="Item_description" row="20" placeholder="Item_description"></textarea><br><br>
    <br><br>
    <button type="submit">submit</button>
</form>
</div>
</head>
</html>