<?php
include 'config.php';
$sql="SELECT * FROM `items`";
$result=$conn->query($sql);
while($data=$result->fetch_assoc())
{ $id=$data['id'];?>
<tr class="tr">
    <td class="td"><?php echo $data['id'] ?> </td>
    <td class="td"><?php echo $data['product name'] ?>  </td>
    <td class="td"><?php echo $data['serial no'] ?>  </td>
    <td class="td"><?php echo $data['product code'] ?>  </td>
    <td class="td"><?php echo $data['category'] ?> </td>
    <td class="td"><?php echo $data['location'] ?>  </td>
    <td class="td"><?php echo $data['fund'] ?> </td>
    <td class="td"><?php echo $data['count'] ?>  </td>
    <td class="td"><?php echo $data['price'] ?>  </td>
    <td class="td"><?php echo $data['date of purchase'] ?>  </td>
    <td class="td"><?php echo $data['warranty period'] ?>  </td>
    <td class="td"><?php echo $data['seller details'] ?>  </td>
    <td class="td"><?php echo $data['specs'] ?> </td>
    <td class="td"><a href='updateform.php?id=<?php echo "$id" ?>' class="edit">Edit </a></td>
    <td class="td"><button class='delete-btn' data-id='<?php echo "$id"; ?>' class="delete">Delete </button></td>

</tr>
<?php } ?>