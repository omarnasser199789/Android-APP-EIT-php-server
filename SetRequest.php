	<?php
	include_once("connection.php"); 

		if( isset($_POST['Phone']) ) { 
	       
	        $Phone = $_POST['Phone'];
	    }

	    if( isset($_POST['Name']) ) { 
	       
	        $Name = $_POST['Name'];
	    }
	    if( isset($_POST['Addres']) ) { 
	       
	        $Addres = $_POST['Addres'];
	    }

	    if( isset($_POST['Tooal']) ) { 
	       
	        $Tooal = $_POST['Tooal'];
	    }
	    if( isset($_POST['Status']) ) { 
	       
	        $Status = $_POST['Status'];
	    }

	    if( isset($_POST['Requeste']) ) { 
	       
	        $Requeste = $_POST['Requeste'];
	    }




   echo "omar";
	$query ="INSERT INTO `Requests`(`Phone`, `Name`, `Address`, `Tooal`, `Status`, `Requests`) VALUES ('$Phone','$Name','$Addres','$Tooal','$Status','$Requeste')";

	$result = mysqli_query($conn, $query);
	if(! $result){

	    //die("Error in query");
	}

	?>