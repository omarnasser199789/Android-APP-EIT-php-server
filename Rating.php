<?php
	include_once("connection.php"); 

		if( isset($_POST['comment'])&&
			isset($_POST['userphone'])&&
			isset($_POST['foodid'])&&
			isset($_POST['ratevalue'])
			)
		{ 
	       
	        $comment = $_POST['comment'];
	        $userphone = $_POST['userphone'];
	        $foodid = $_POST['foodid'];
	       $ratevalue = $_POST['ratevalue'];
	   	}

	   
 	   	$queryOK="SELECT * FROM `Rating` WHERE `user_number`='$userphone' AND `foodnID`=$foodid;";


   $result = mysqli_query($conn, $queryOK);

  			if($result->num_rows > 0)
  			{
  				
 
			$query1 ="UPDATE `Rating` SET `value`=$ratevalue,`comments`='$comment' WHERE `user_number`='$userphone' AND `foodnID`=$foodid;";

 				$result = mysqli_query($conn, $query1);
  			}else
  			{
 			$query2 ="INSERT INTO `Rating` (`user_number`, `value`, `comments`, `foodnID`) VALUES ('$userphone', $ratevalue, '$comment', '$foodid');";

                 $result = mysqli_query($conn, $query2);

  			}
  		

	?>