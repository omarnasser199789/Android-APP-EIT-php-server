
<?PHP 
    include_once("connection.php"); 
    if(
        isset($_POST['Phone']) && 
        isset($_POST['Password'])
      ) 
    { 
        $Phone = $_POST['Phone'];
         $Password = $_POST['Password'];
       
        $query = "SELECT *  FROM User ". 
        " WHERE  `Number`='$Phone'AND `Password`= '$Password';"; 
        
        $result = mysqli_query($conn, $query);
        
        // if($result->num_rows > 0){
        //    echo "success";
        //    exit;
        // } 
        // else{ 
        //     exit; 
        // } 


        while (
            $row=mysqli_fetch_assoc($result)
               ) 
        {

         $data[]=$row;
        } 
        echo json_encode($data);

    } 
?>
