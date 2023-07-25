
<?php

include 'config.php';
$search_value=$_POST["search"];
$sql="select * from `items` where `product name` like '%{$search_value}%' or `location` LIKE '{$search_value}%' or `category` LIKE '{$search_value}%' or `product code` LIKE '{$search_value}%'or `fund` LIKE '{$search_value}%' ";
$result=mysqli_query($conn,$sql);
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
if(mysqli_num_rows($result)>0)
{ ?>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Serial No</th>
      <th scope="col">Product Code</th>
      <th scope="col">Location</th>
      <th scope="col">Category</th>
      <th scope="col">Fund</th>
      <th scope="col">Count</th>
      <th scope="col">Price</th>
      <th scope="col">Date Of Purchase</th>
      <th scope="col">Warranty Period</th>
      <th scope="col">Seller Details</th>
      <th scope="col">Specs</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    <tbody>
        <?php
            while($row=mysqli_fetch_assoc($result))
            { ?>
                <tr class="tr">
                    <td class="td"><?php echo $row['id'] ?> </td>
                    <td class="td"><?php echo $row['product name'] ?>  </td>
                    <td class="td"><?php echo $row['serial no'] ?>  </td>
                    <td class="td"><?php echo $row['product code'] ?>  </td>
                    <td class="td"><?php echo $row['location'] ?>  </td>
                    <td class="td"><?php echo $row['category'] ?> </td>
                    <td class="td"><?php echo $row['fund'] ?> </td>
                    <td class="td"><?php echo $row['count'] ?>  </td>
                    <td class="td"><?php echo $row['price'] ?>  </td>
                    <td class="td"><?php echo $row['date of purchase'] ?>  </td>
                    <td class="td"><?php echo $row['warranty period'] ?>  </td>
                    <td class="td"><?php echo $row['seller details'] ?>  </td>
                    <td class="td"><?php echo $row['specs'] ?> </td>
                    <td class="td"><a href='updateform.php?id=<?php echo "$id" ?>' class="edit">Edit </a></td>
                    <td class="td"><button class='delete-btn' data-id='<?php echo "$id"; ?>' class="delete">Delete </button></td>
                </tr>
            <?php
            }


        ?>
    </tbody>
</table>

<?php
}

?>