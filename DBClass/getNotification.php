<?php

 //include 'DB.php';
 include_once("connection.php");

 //$db = DB::getInstance();


if( isset($_POST['NumberUser']))
		{ 
	       
	        $NumberUser = $_POST['NumberUser'];
	       
	        // $response = $db->table('Notification')->get();;
        	// echo $response;



    $query ="SELECT * FROM `Notification` WHERE `FK_User`='$NumberUser'";

    $result = mysqli_query($conn, $query);
    if(! $result){

        die("Error in query");
    }

    while ($row=mysqli_fetch_assoc($result)) {

        $data[]=$row;
     } 
    echo json_encode($data);
	       
	   	}

	




?>