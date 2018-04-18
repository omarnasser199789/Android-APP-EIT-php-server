
<?PHP 
    include_once("connection.php"); 

    if(
        isset($_POST['state'])&&
        isset($_POST['requesteID'])
       ) 
    {
        $state = $_POST['state'];
        $requesteID = $_POST['requesteID'];
  

        $query1 = "UPDATE `Requests` SET `Status`='$state' WHERE `requesteID`='$requesteID' ";
      

     }


     

            $result = mysqli_query($conn, $query1);    
           


  echo "$requesteID";  
?>
