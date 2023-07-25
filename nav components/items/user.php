<?php
 include('.adminnav.php');
 include('config.php');
 $query="select * from `users`";
 $result=mysqli_query($conn,$query);
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="userstyle.css?v=<?php echo time(); ?>">
<script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
<script  src="userajax.js"></script>

</head>

<body>
<div class="heading">
    <h> USERS </h>
</div>
<div class="table-container">
<table id="users">
    <tr>
        <th> email address </th>
        <th> user name</th>
        <th> designation </th>
        <th> role </th>
        <th> Actions </th>

    </tr>
    
     <?php
      if(!mysqli_num_rows($result))
      {?> <td> No Users </td>
      <?php }
      else
    {
     // LOOP TILL END OF DATA
     while($row=$result->fetch_assoc())
     { $email=$row['email'];
 ?>
    <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['role'];?></td>
                <td> <form method="post" action="user.php">
                    <input type="hidden" name="id" value="<?php echo $row['email'];?>"/>
                    <button name="reject" id="reject" class="reject" data-email='<?php echo "$email"; ?>' >DELETE</button></td>
            </tr>
            <?php
                }
            }
            ?>
</table>

</div>
</body>
</html>