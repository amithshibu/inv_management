<!DOCTYPE html>
<?php
 include('connect.php');
 $query="select * from `users` where status='pending'";
 $result=mysqli_query($conn,$query);
?>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="pendingstyle.css?v=<?php echo time(); ?>">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="table-wrap">

    <table class="table table-striped" id="users">
        <thead>
          <tr>
            <th scope="col">Email Address</th>
            <th scope="col">User Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Role</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
     // LOOP TILL END OF DATA
     while($row=$result->fetch_assoc())
     {
 ?>
    <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['role'];?></td>
                <td> <form method="post" action="userreg.php">
                    <input type="hidden" name="id" value="<?php echo $row['email'];?>"/>
                    <input type="submit" name="approve" value="accept" id="approve">
                     <input type="submit" name="reject" value="reject" id="reject"></td>
            </tr>
            <?php
                }
            ?>




        </tbody>
      </table>
</div>

<?php
    if(isset($_POST['approve']))
    {
        include('connect.php');
        $id=$_POST['id'];
        $query="update `users` set status='approved' where email='$id' ";
        $result=mysqli_query($conn,$query);
        

    }
    if(isset($_POST['reject']))
    {
        include('connect.php');
        $id=$_POST['id'];
        $query="DELETE FROM `users` where email='$id' ";
        $result=mysqli_query($conn,$query);
        

    }
    ?>