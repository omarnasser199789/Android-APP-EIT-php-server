	<?php
	include_once("connection.php"); 

	if( isset($_POST['foodID']) ) { 
	       
	        $foodID = $_POST['foodID'];
	    }


   //echo "$foodID";
	$query ="SELECT * FROM `Food`WHERE `FoodID`=$foodID";

	$result = mysqli_query($conn, $query);
	if(! $result){

	    //die("Error in query");
	}

	while ($row=mysqli_fetch_assoc($result)) {

	    $data[]=$row;
	 } 
	echo json_encode($data);

	?>