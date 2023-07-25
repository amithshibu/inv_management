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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"></script>
    <link rel="stylesheet" href="purchase_list.css"/>
    <title>Document</title>

</head>
<nav class="navbar navbar-light" style="background-color:#088395; height: 78px;">
<div class="heading_container">
  <h class="header">Purchase List</h>
</div>
</nav>
<body>

<div class="print_btn"><button class="print" id="print">print</button></div>
<div class=" table-responsive">
<table class="table table-striped align-middle" id="table">
  <thead>
    <tr>
      
      <th scope="col">Item Name</th>
      <th scope="col">description</th>
      <th scope="col">Count</th>
      <th scope="col">Department</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody id="t-body">




  </tbody>
</table>
</div>
    
</body>
<script>
    $(document).ready(function()
    {
        $.ajax({
            url:"purchase_listb.php",
            success:function(data)
            {
               $("#t-body").html(data);
            }
        }),
        
              $("#print").click(function()
              {
                $("#table").printArea()
              })
        })

        
    
</script>
</html>
