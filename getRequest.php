	<?php
	include_once("connection.php"); 

		if( isset($_POST['Phone']) ) { 
	       
	        $Phone = $_POST['Phone'];
	    }

	   

   //echo "$foodID";
	$query ="SELECT * FROM `Requests` WHERE `Phone`='$Phone';";

	$result = mysqli_query($conn, $query);
	
while ($row=mysqli_fetch_assoc($result)) {

    $data[]=$row;
 } 
echo json_encode($data);
	?>