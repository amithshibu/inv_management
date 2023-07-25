<!DOCTYPE html>
<html>
<head>
<?php
 session_start();
 $id=$_GET['id'];
 $_SESSION["id"]=$id;
 include 'config.php';

 if($_SESSION['role']=='admin')
 {include ('./adminnav.php');}
 else
 {
    include ('./usernav.php');
 }

 $sql="SELECT * FROM `complaint` where `id` = '$id'";
 $result = $conn->query($sql);
 $data=$result->fetch_assoc()
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body>
<div id="form">
   
    <form>
     <h2 id="head">Request Form </h2> <br>
     <label for="email">Email </label>
     <input type="email" name="email" id="email" value="<?php echo $data['email'];?>" placeholder="enter your email" required>
     <label for="number">Phone Number </label>
     <input type="text" id="number" name="number" value="<?php echo $data['phone'];?>" placeholder="phone no" required>
     <label for="category"> Category</label>
     <select name="category" id="category">
        <option value ="staffroom">Staffroom</option>
        <option value ="classroom">Classroom</option>
        <option value ="labortary">Laboratory</option>
    </select><br><br>
    <label for="date">Date of Request</label>
    <input type="date" name="date" id="date" value="<?php echo $data['date'];?>">
    <label for="item"> Item #</label>
    <input type="text" name="item" id="item" value="<?php echo $data['item'];?>" placeholder="Item">
    <label for = "count">Item Count</label>
    <input type="text" name="count" id="count" value="<?php echo $data['count'];?>" placeholder="item count" required>
    <label for="Item_description">Item description</label>
    <textarea name="Item_description" row="20" id="item_description" placeholder="Item_description"><?php echo $data['desc'];?></textarea><br><br>
    <br><br>
    <button type="submit">UPDATE</button>
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
                    
                    $.ajax({
                        url:'reportupdate.php',
                        type:"POST",
                        data:{email:email,number:number,category:category,date:date,item:item,desc:desc,count:count},
                        success:function(data)
                        {
                            alert(data)
                            location.href="my_request.php";
                        }
                    })
                })
            }
        )

  </script>

</html> 