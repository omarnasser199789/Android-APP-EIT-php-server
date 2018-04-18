<?php
	include_once("connection.php"); 

		if( isset($_POST['userphone'])&&
			isset($_POST['foodid'])
			)
		{ 
	        $userphone = $_POST['userphone'];
	        $foodid = $_POST['foodid'];
	   	}

	   
 	   	$queryOK="SELECT * FROM `Rating` WHERE `user_number`='$userphone' AND `foodnID`=$foodid;";


    $result = mysqli_query($conn, $queryOK);

  			while ($row=mysqli_fetch_assoc($result)) {

    $data[]=$row;
 } 
echo json_encode($data);

	   
	?>