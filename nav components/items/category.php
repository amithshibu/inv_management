<!DOCTYPE html>
<html>
<?php
 session_start();
 if($_SESSION['role']=='admin')
 {include ('./adminnav.php');}
 else
 {
    include ('./usernav.php');
 }
 ?>
<head>
  <title>Table with Search Bar</title>
  <link rel="stylesheet" type="text/css" href="category.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    
    <input type="text" id="searchInput" placeholder="Search...">
    <button class="submit-btn">submit</button>
    <div>
    <table id="dataTable">
      <thead>
        <tr>
          <th>#</th>
          <th>Categories</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
              <td>Staffroom</td>
              <td>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Delete</button>
              </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Classroom</td>
          <td>
            <button class="edit-btn">Edit</button>
            <button class="delete-btn">Delete</button>
          </td>
        </tr>
        <tr>
             <td>3</td>
             <td>Laboratory</td>
              <td>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Delete</button>
              </td>
        </tr>

        <tr>
             <td>4</td>
             <td> Others</td>
              <td>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Delete</button>
              </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  </div>
</body>
</html>