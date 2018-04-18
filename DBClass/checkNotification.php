<?php
	include_once("connection.php"); 

		if( isset($_POST['NotificationID'])&&
			isset($_POST['NumberUser'])
			)
		{ 
	       
	        $NotificationID = $_POST['NotificationID'];
	        $NumberUser = $_POST['NumberUser'];
	       




	$query ="SELECT `view`FROM `Notification`  WHERE `id`=$NotificationID AND `FK_User`='$NumberUser'";

	 $result = mysqli_query($conn, $query);
   

    while ($row=mysqli_fetch_assoc($result)) {

        $data[]=$row;
     } 
    echo json_encode($data);
	       
	   	}

	    if(! $result){

        die("Error in query");
    }else{

	$query2 ="UPDATE `Notification` SET `view`=1 WHERE `id`=$NotificationID AND `FK_User`='$NumberUser'";

	$result2 = mysqli_query($conn, $query2);
    }
 	   
  		

	?>