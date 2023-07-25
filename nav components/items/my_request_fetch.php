<?php

 include 'config.php';
 session_start();
 $email=$_SESSION['email'];
 $sql = "SELECT * FROM `complaint` where `email` = '$email'";
 $result = $conn->query($sql);

 if(mysqli_num_rows($result)==0)
 {
    echo"No Requests";
 }
 else
 {
 while($data=$result->fetch_assoc())
 {?>
 <tr>
     
     <td><?php echo $data['item'] ?> </td>
     <td><?php echo $data['count'] ?> </td>
     <td><?php echo $data['category'] ?>  </td>
     <td><?php echo $data['desc'] ?>  </td>
     <td><?php echo $data['date'] ?>  </td>
     <td><?php echo $data['status'] ?>  </td>
     <?php 
         if($data['status']=='pending')
      {?>   
     <td><button id="edit" class="edit" data-id = "<?php echo $data['id'] ?>"> EDIT</button></td>
     <?php
   } 
   else{
      ?>
            <td><?php echo "your request was approved on ",$data['approval_details']," please contact admin for any change" ?></td>
      <?php } ?>
   </tr>
 <?php
  }}
 ?>
 