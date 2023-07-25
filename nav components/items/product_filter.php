<?php 

//index.php

include('database_connection.php');

 session_start();
 if($_SESSION['role']=='admin')
 {include ('./adminnav.php');}
 else
 {
    include ('./usernav.php');
 }


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js_productfilter/jquery-1.10.2.min.js"></script>
    <script src="js_productfilter/jquery-ui.js"></script>
    <script src="js_productfilter/bootstrap.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    
    <div class="container">
        <div class="filter"><img src="filter.png" height="20px"width="20px"><h5 class="filter-h">Filters</h5></div>
            <div class="row row1">
        	<br />
        	<br />
                <div class="list-group g1">
					<h3 align="center">Category</h3>
                    <div style="height: fit-content; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT `category` FROM `items` ORDER BY `id` DESC";
                    $r = $conn->query($query);
                    $result = $r->fetch_all(MYSQLI_ASSOC);
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector category" value="<?php echo $row['category']; ?>"  > <?php echo $row['category']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group g2">
					<h3 align="center">Fund</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT `fund` FROM `items`;
                    ";
                    $statement = $conn->query($query);
                    $result = $statement->fetch_all(MYSQLI_ASSOC);
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector fund" value="<?php echo $row['fund']; ?>" > <?php echo $row['fund']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				<div class="list-group g3">
					<h3 align="center">Locations</h3>
					<?php
                    $query = "
                    SELECT DISTINCT `location` FROM `items`;
                    ";
                    $statement = $conn->query($query);
                    $result = $statement->fetch_all(MYSQLI_ASSOC);
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector location" value="<?php echo $row['location']; ?>"  > <?php echo $row['location']; ?></label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row row2 filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var category = get_filter('category');
        var fund = get_filter('fund');
        var location = get_filter('location');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action,category:category,fund:fund,location:location},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        console.log(filter);
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('.filter').click(function()
    {
        $('.row1').toggle();
    })

});
</script>

</body>

</html>
