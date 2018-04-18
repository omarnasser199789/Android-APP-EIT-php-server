
<?PHP 
    include_once("connection.php"); 

    if( 
        isset($_POST['Name'])
        && isset($_POST['Password']) 
        && isset($_POST['Number'])
      )

         { 
        $Name = $_POST['Name'];
        $Password = $_POST['Password'];
        $Number = $_POST['Number'];


          
        $query2 = "SELECT Number FROM User WHERE Number = '$Number'";

        $result2 = mysqli_query($conn, $query2);

            if($result2->num_rows > 0){
                      echo "success";
                 } 
             else{ 
              
                 $query = "INSERT INTO `User`(`Number`, `Name`, `Password`) VALUES ('$Number','$Name','$Password');";
        
                $result = mysqli_query($conn, $query);
                   echo "success";
               
               } 


        
        
    } 
?>
