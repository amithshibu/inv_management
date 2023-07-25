<!DOCTYPE html>
<html lang="en">
<head>
<?php
  session_start();
  if($_SESSION['role'] == 'admin')
  {
    include 'adminnav.php';
  }
  else
  {
    include 'usernav.php';
  }


?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="card_category.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <!-- As a heading -->
<nav class="navbar nv">
  <span class="navbar-brand mb-0 h1">CATEGORIES</span>
</nav>


 <div class="container">
    
    <div class="card card-1 ">       
        <div class="card-body">
            <div class="title-div">
                <h5 class="card-title">Classroom</h5>
            </div>
          <p class="card-text">
            <span>Total Items :</span><span id="class_count"></span>
            <br><span>Total Amount Spend :</span><span id="class_amount"></span>
          </p>
          
        </div>
    </div>

    <div class="card card-2 " >       
        <div class="card-body">
            <div class="title-div">
                <h5 class="card-title">LAB</h5>
            </div>
            <p class="card-text">
            <span>Total Items :</span><span id="lab_count"></span>
            <br><span>Total Amount Spend :</span><span id="lab_amount"></span>
          </p>
          
        </div>
    </div>



    <div class="card card-3">
        
        <div class="card-body">
            <div class="title-div">
                <h5 class="card-title">Others</h5>
            </div>
            <p class="card-text">
            <span>Total Items :</span><span id="others_count"></span>
            <br><span>Total Amount Spend :</span><span id="others_amount"></span>
          </p>
        </div>
    </div>

    <div class="card card-4">    
        <div class="card-body">
            <div class="title-div">
                <h5 class="card-title">Staffroom</h5>
            </div>
            <p class="card-text">
            <span>Total Items :</span><span id="staffroom_count"></span>
            <br><span>Total Amount Spend :</span><span id="staffroom_amount"></span>
          </p>
        </div>
    </div>

 </div>
    
</body>
<script>
    $(document).ready(function()
    {
        $.ajax({
            url:"card_categoryb.php",
            method:"POST",
            success:function(data)
            {
                let myarray = data.split("$")
                console.log(myarray[0])
                console.log(myarray[1])
                console.log(myarray[2])
                console.log(myarray[3])
                console.log(myarray[4])
                console.log(myarray[5])
                console.log(myarray[6])
                console.log(myarray[7])

                $("#class_amount").html(myarray[0])
                $("#class_count").html(myarray[1])
                $("#lab_amount").html(myarray[2])
                $("#lab_count").html(myarray[3])
                $("#others_amount").html(myarray[4])
                $("#others_count").html(myarray[5])
                $("#staffroom_amount").html(myarray[6])
                $("#staffroom_count").html(myarray[7])
            }
        })
        $(window).on('resize', function() {
    if($(window).width() < 900) {
        $("#nav-container").addClass('close')
    }else{
      $("#nav-container").removeClass('close')
    }
        })
    })

</script>
</html>