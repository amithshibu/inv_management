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
<script src="delete ajax.js" ></script>
<script src="search.js"></script>
<link rel="stylesheet" href="update.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="boxContainer">
        <table class="elementscontainer">
            <tr>
                <td>
                    <input type="text" id="search" class="search" placeholder="Search.." autocomplete="off">
                </td>
                <td>
                    <a href="#"><i class="material-icons">search</i></a>
                </td>
            </tr>

        </table>
    </div>
    <div id="table-data">
    </div>
    <div class="table-container table-responsive">
    <table class="table table-striped table-dark" id="table">
    <thead>
        <tr class="trow">
            <th scope="col">id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Serial No</th>
            <th scope="col">Product Code</th>
            <th scope="col">Category</th>
            <th scope="col">Location</th>
            <th scope="col">Fund</th>
            <th scope="col">Count</th>
            <th scope="col">Price</th>
            <th scope="col">Date of Purchase</th>
            <th scope="col">Warranty Period</th>
            <th scope="col">Seller Details</th>
            <th scope="col">specification</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
  </thead>
        <tbody id="my-data">
 
        </tbody>

    </table>
  <!--MODAL WINDOW-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--ajax js -->
<script>
 $(document).ready(function()
 {
   function loaddata()
   {
    $.ajax({
        url:"updateb.php",
        type:"GET",
        success:function(data,status)
        {
            $('#my-data').html(data);
        }

    })
  }
loaddata();

        })

    $(window).on('resize', function() {
    if($(window).width() < 900) {
        $("#nav-container").addClass('close')
    }else{
      $("#nav-container").removeClass('close')
    }
})

</script>
</body>
</html>