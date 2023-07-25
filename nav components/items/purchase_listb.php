<?php

    include 'config.php';
    $sql = "SELECT item,SUM(count) As `total_count`,`desc`,`category`,`department` FROM `complaint` where `status` = \"approved\" GROUP BY `item`,`desc`;";
    $result = $conn->query($sql);
    
    while($data = $result->fetch_assoc())
    { ?>
    <tr>
     <td><?php echo $data['item'] ?> </td>
     <td><?php echo $data['desc'] ?>  </td>
     <td><?php echo $data['total_count'] ?> </td>
     <td><?php echo $data['department'] ?>  </td>
     <td><?php echo $data['category'] ?>  </td>
  </tr>


<?php } ?>



