
<?PHP 
    include_once("connection.php"); 

    if(
        isset($_POST['requesteID'])
       ) 
    {
        $requesteID = $_POST['requesteID'];
  

        $query1 = "DELETE FROM `Requests` WHERE  `requesteID`='$requesteID' ";
      

     }


     

            $result = mysqli_query($conn, $query1);    
           


 
?>
