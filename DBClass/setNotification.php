<?php
	include_once("connection.php"); 

		if(isset($_POST['users'])&&
			isset($_POST['title'])&&
			isset($_POST['text'])&&
			isset($_POST['image'])

			
		)
		{ 
	       
	        $users = $_POST['users'];
	        $title = $_POST['title'];
	        $text = $_POST['text'];
	        $image = $_POST['image'];
	       




	$query ="INSERT INTO `Notification`(`title`, `textNotification`, `view`, `imageURL`, `FK_User`) VALUES (' $title','$text',0,'$image','$users')";

	 $result = mysqli_query($conn, $query);
   

    }

  		

	?>