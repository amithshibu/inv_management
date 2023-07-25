<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include('./adminnav.php');
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href ="reportrequest.css">
    <title>Document</title>
</head>
<body>
<div class="table-container table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">item</th>
      <th scope="col">item count</th>
      <th scope="col">category</th>
      <th scope="col">Description</th>
      <th scope="col">date of request</th>
      <th scope="col">email</th>
      <th scope="col">phone number</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody id="table-body">
   
  </tbody>
</table>
</div>
</body>
<script>
        $(document).ready(function()
        {
            $.ajax({
                url:"requestfetch.php",
                success:function(data)
                {
                    $("#table-body").html(data);
                
                    $(".approve").on('click',function(e)
                  { const id = $(this).attr("data-id")
                    e.preventDefault();
                    console.log("button clicked");
                    console.log(id);
                    $.ajax({
                    url:"requestapproval.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data)
                    {
                        alert(data);

                        $.ajax({

                          url:"requestfetch.php",
                success:function(data)
                {
                  $("#table-body").html(data);
                }
                          
                        })
                    }
                  })
                    }),
                 
                    $(".reject").on('click',function(e)
                  { const id = $(this).attr("data-id")
                    e.preventDefault();
                    console.log("button clicked");
                    console.log(id);
                    $.ajax({
                    url:"request_decline.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data)
                    {
                        alert(data);

                        $.ajax({

                          url:"requestfetch.php",
                success:function(data)
                {
                  $("#table-body").html(data);
                }
                          
                        })
                    }
                  })
                    })

                  
              } 
            })
            $(window).on('resize', function() {
              if($(window).width() < 900) {
              $("#nav-container").addClass('close')
              }
              else{
                $("#nav-container").removeClass('close')
                }
                })
          }
          
        );

       


  </script>
</html>