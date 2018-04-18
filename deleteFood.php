
<?PHP 
    include_once("connection.php"); 

    if(
        isset($_POST['FoodID'])
       ) 
    {
        $FoodID = $_POST['FoodID'];
    

   //  $upload_folder="Food";
    // $path="$upload_folder/".time().".jpeg";

     //if(file_put_contents($path,base64_decode($ImageFood))!=false){



// UPDATE `Food` SET `FK_CtategoryID`=3,`Name`='hhhh',`Image`='fffff',`Description`='ggggg',`Price`='ttt',`Discount`='hh',`base64`='yhyh' WHERE `FoodID`=1


        $query1 = "DELETE FROM `Food` WHERE `FoodID`=$FoodID";
      

     }


     

            $result = mysqli_query($conn, $query1);    
           


  echo "$FoodID";  
?>
