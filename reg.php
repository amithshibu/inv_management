<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="regstyle.css?v=<?php echo time(); ?>">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="regf.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--jquery validation-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    

</head>
<body>
<?php
if(isset($_SESSION['msg']))
{
  echo"<div class='alert alert-success' role='alert'>".$_SESSION['msg']."</div>";
  unset($_SESSION['msg']);
}
?>

<div class="form">
<div class="title"><h> USER REGISTRATION FORM </h></div>
<form method="post"  onsubmit="return validate()" action="insert.php" name="contact-form" id="form" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      
      <label class="error"></label>
    </div>

    <div class="form-group">
      <label for="username">User Name</label>
      <input type="text" name="username" class="form-control" id="username"  placeholder="Enter username">
    </div>

    <div class="form-group">
      <label for="image">Profile Photo</label>
      <input type="file" name="image" class="form-control" id="image"  placeholder="Upload Your Image">
    </div>


    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password"  placeholder="Enter password">
    </div>

    <div class="form-group">
      <label for="password">confirm password</label>
      <input type="password" name="confirm_password" class="form-control" id="confirm_password"  placeholder="Enter password">
    </div>

    <div class="form-group">
      <label for="dsgn">designation</label>
      <select name="dsgn" class="form-control" id="dsgn">
        <option value="staff">Staff</option>
        <option value="student">Student</option>
      </select>
    </div>

    <div class="form-group">
      <label for="role">Role: </label>
      <select name="role" class="form-control" id="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>

    <div class="form-group">
      <label for="role">Phone number: </label>
      <input type="number" name="num" class="form-control" id="num" placeholder="enter phone number" required>
    </div>

    <input type="submit" id="submit" class="btn btn-primary" value="submit" onclick="validate()"></button>
</form>
</div>  

</body>
</html>

