<?php
    include('config.php');
    $query="SELECT SUM(`count`) AS `total_items`,SUM(`price`) AS `total_price`,`category` FROM `items` GROUP BY `category`;";
    $result=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
        {   
            echo $row['total_price'];
            echo "$ ";
            echo $row['total_items'];
            echo "$ ";
            
        }
    }



?>