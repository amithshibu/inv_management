<?php

    include('config.php');
    if(isset($_POST['start_date'] ,$_POST['end_date']))
    {
        $sdate = $_POST['start_date'];
        $edate = $_POST['end_date'];

        $query = "select * from `items` where `date of purchase` between '$sdate' and '$edate'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) >0)
        {
            while($row = mysqli_fetch_array($result))
            { ?>
               <tr>
                <td style = "padding:10px;border:1px solid black;" ><?php echo $row['date of purchase']; ?> </td>
                <td style = "padding:10px;border:1px solid black;" ><?php echo $row['product name']; ?>  </td>
                <td style = "padding:10px;border:1px solid black;" ><?php echo $row['serial no']; ?>  </td>
                <td style = "padding:10px;border:1px solid black;" ><?php echo $row['count']; ?>  </td>
                <td style = "padding:10px;border:1px solid black;" ><?php echo $row['price']; ?>  </td>
              </tr>
           <?php }

           $query2 = "select SUM(price) AS total_price FROM `items` where `date of purchase` between '$sdate' and '$edate'";
           $result2 = mysqli_query($conn,$query2);
           $sum = mysqli_fetch_assoc($result2);
           echo "$ ";
           echo $sum['total_price'];
           echo "$ ";

           $query3="select SUM(price) AS price,category from `items`where `date of purchase` between '$sdate' and '$edate' GROUP BY category ORDER BY category;";
           $result3=mysqli_query($conn,$query3);
          
           while($res = mysqli_fetch_assoc($result3))
           {
                echo $res['price'];
                echo "$ ";
           }

           
        }

    }


?>

