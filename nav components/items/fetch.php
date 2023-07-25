<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->


</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
    <table class="table table-striped table-dark">
    <thead>
        <tr>
      <th scope="col">e-mail</th>
      <th scope="col">Username</th>
      <th scope="col">designation</th>
      <th scope="col">Role</th>
      <th scope="col">Phone no</th>
        </tr>
  </thead>
  <tbody id="my-data">
 
  </tbody>
</table>
<!--JQUERY CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--ajax js -->
<script>
    $(document).ready(function()
    {
        $.ajax({
            type:"GET",
            url:"connect.php",
            dataType:"html",
            success:function(data)
            {
                $('#my-data').html(data)
            }
        })
    })
</script>
</body>

</html>