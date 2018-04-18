
<?PHP 
    include_once("connection.php"); 

    if(
        isset($_POST['ImageFood'])&&
        isset($_POST['NameFood'])&&
        isset($_POST['Description'])&&
        isset($_POST['PriceFood'])&&
        isset($_POST['Discount'])&&
        isset($_POST['CategoryID'])
       ) 
    {
        $CategoryID = $_POST['CategoryID'];
        $ImageFood = $_POST['ImageFood'];
        $NameFood = $_POST['NameFood'];
        $Description = $_POST['Description'];
        $PriceFood = $_POST['PriceFood'];
        $Discount = $_POST['Discount'];
    

     $upload_folder="Food";
     $path="$upload_folder/".time().".jpeg";

     if(file_put_contents($path,base64_decode($ImageFood))!=false){


        $query1 = "INSERT INTO `Food`( `FK_CtategoryID`, `Name`, `Image`,`Description`,`Price`,`Discount`,`base64`) VALUES ($CategoryID,'$NameFood','https://omarnaser.000webhostapp.com/AndroidEitServerPHP/$path','$Description','$PriceFood','$Discount','$ImageFood')";
      

     }


     

            $result = mysqli_query($conn, $query1);    
           

}
  echo "$CategoryID";  
?>
