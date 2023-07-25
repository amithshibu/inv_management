<?php
include 'config.php';
 $sl1=$_POST['select1'];
 $sl2=$_POST['select2'];
 $cat;
 $loc;

 if($sl1=='category')
 {
   if($sl2=='classroom')
   {
       $cat='classroom';
   }
   else if($sl2=='lab')
   {
      $cat='lab';
   }
   else if($sl2=='staffroom')
   {
      $cat='staffroom';
   }

   $sql="SELECT * FROM `items` where `category`='$cat'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)==0)
{
   echo"No Data To Fetch";
}
else
{
while($data=$result->fetch_assoc())
{?>
<tr>
    <td><?php echo $data['id'] ?> </td>
    <td><?php echo $data['product name'] ?>  </td>
    <td><?php echo $data['serial no'] ?>  </td>
    <td><?php echo $data['product code'] ?>  </td>
    <td><?php echo $data['category'] ?>  </td>
    <td><?php echo $data['location'] ?>  </td>
    <td><?php echo $data['fund'] ?>  </td>
    <td><?php echo $data['count'] ?>  </td>
    <td><?php echo $data['price'] ?>  </td>
    <td><?php echo $data['date of purchase'] ?>  </td>
    <td><?php echo $data['warranty period'] ?>  </td>
    <td><?php echo $data['seller details'] ?>  </td>
    <td><?php echo $data['specs'] ?>  </td>

</tr>
<?php
 }}}
?>

<?php
  

   if($sl1=='location')
 {
   if($sl2=='dsa')
   {
       $loc="dsa lab";
   }
   else if($sl2=='dbms')
   {
       $loc="dbms lab";
   }
   else if($sl2=='csa')
   {
      $loc="cs-a";
   }
   else if($sl2=='csb')
   {
      $loc="cs-b";
   }
   else if($sl2=='prjlab')
   {
     $loc="project lab";
   }

   $sql="SELECT * FROM `items` where `location`='$loc'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)==0)
{
   echo"No Data To Fetch";
}
else
{
while($data=$result->fetch_assoc())
{?>
<tr>
    <td><?php echo $data['id'] ?> </td>
    <td><?php echo $data['product name'] ?>  </td>
    <td><?php echo $data['serial no'] ?>  </td>
    <td><?php echo $data['product code'] ?>  </td>
    <td><?php echo $data['category'] ?> </td>
    <td><?php echo $data['location'] ?>  </td>
    <td><?php echo $data['fund'] ?>  </td>
    <td><?php echo $data['count'] ?>  </td>
    <td><?php echo $data['price'] ?>  </td>
    <td><?php echo $data['date of purchase'] ?>  </td>
    <td><?php echo $data['warranty period'] ?>  </td>
    <td><?php echo $data['seller details'] ?>  </td>
    <td><?php echo $data['specs'] ?>  </td>

</tr>
<?php
 }}}
?>





