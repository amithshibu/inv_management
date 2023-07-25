<!DOCTYPE html>
<html>
<head>
<?php
 session_start();
 if($_SESSION['role']=='admin')
 {include ('./adminnav.php');}
 else
 {
    include ('./usernav.php');
 }
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body>
<div id="form">
   
    <form>
     <h2 id="head" align="center">Request Form </h2> <br>
     <label for="email">Email </label>
     <input type="email" name="email" id="email" placeholder="enter your email" required>
     <label for="number">Phone Number </label>
     <input type="text" id="number" name="number" placeholder="phone no" required>
     <label for="category"> Category</label>
     <select name="category" id="category">
        <option value ="staffroom">Staffroom</option>
        <option value ="classroom">Classroom</option>
        <option value ="labortary">Laboratory</option>
    </select><br><br>
    <label for="date">Date of Request</label>
    <input type="date" name="date" id="date">
    <label for="item"> Item #</label>
    <input type="text" name="item" id="item" placeholder="Item">
    <label for = "count">Item Count</label>
    <input type="text" name="count" id="count" placeholder="item count" required>
    <label for = "count">Department</label>
    <select name="dept" id="dept" placeholder="name of department" required>
        <option value="cs">Computer Science And Engineering(CSE)</option>
        <option value="ec">Electronics and Communication(EC)</option>
        <option value="ce">Civil Engineering(CE)</option>
        <option value="it">Information Technology(IT)</option>
    </select>
    <label for="Item_description">Item description</label>
    <textarea name="Item_description" row="20" id="item_description" placeholder="Item_description"></textarea><br><br>
    <br><br>
    <button type="submit">submit</button>
</form>
</div>
</body>
  <script>
        $(document).ready(
            function()
            {
                $("#form").on('submit',function(e)
                {
                    e.preventDefault()
                    const email=$("#email").val();
                    const number=$("#number").val();
                    const category=$("#category option:selected").val();
                    const item = $("#item").val();
                    const date=$("#date").val();
                    const desc=$("#item_description").val();
                    const count=$("#count").val();
                    const dept = $("#dept").val();
                    
                    $.ajax({
                        url:'reportb.php',
                        type:"POST",
                        data:{email:email,number:number,category:category,date:date,item:item,desc:desc,count:count,dept:dept},
                        success:function(data)
                        {
                            alert(data)
                        }
                    })
                })
            }
        )
        $(window).on('resize', function() {
    if($(window).width() < 900) {
        $("#nav-container").addClass('close')
    }else{
      $("#nav-container").removeClass('close')
    }
})
  </script>
</html>