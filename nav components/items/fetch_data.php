<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM `items` WHERE status = '1'
	";
	if(isset($_POST["category"]))
	{
		$category_filter = implode("','", $_POST["category"]);
		$query .= "
		 AND `category` IN('".$category_filter."')
		";
	}
	if(isset($_POST["fund"]))
	{
		$fund_filter = implode("','", $_POST["fund"]);
		$query .= "
		 AND `fund` IN('".$fund_filter."')
		";
	}
	if(isset($_POST["location"]))
	{
		$location_filter = implode("','", $_POST["location"]);
		$query .= "
		 AND `location` IN('".$location_filter."')
		";
	}

	$statement = $conn->query($query);
	$result = $statement->fetch_all(MYSQLI_ASSOC);
	$total_row = mysqli_num_rows($statement);
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-4 col-md-4 card">
				<div class="in-card" style=" padding:16px; margin-bottom:16px; height:250px;">
					<p align="center" class="product_name"><strong><a href="#">'. $row['product name'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" > $'. $row['price'] .'</h4>
					Category : '. $row['category'] .' <br />
					Fund : '. $row['fund'] .'<br />
					Location : '. $row['location'] .' <br/> 
					Warranty period : '. $row['warranty period'] .' year <br/> 
					date of purchase: '. $row['date of purchase'] .' </p>

				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>