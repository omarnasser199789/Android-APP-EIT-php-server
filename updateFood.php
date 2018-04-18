
<?PHP 
    include_once("connection.php"); 

    if(
        isset($_POST['ImageFood'])&&
        isset($_POST['NameFood'])&&
        isset($_POST['Description'])&&
        isset($_POST['PriceFood'])&&
        isset($_POST['Discount'])&&
        isset($_POST['FoodID'])
       ) 
    {
        $ImageFood = $_POST['ImageFood'];
        $NameFood = $_POST['NameFood'];
        $Description = $_POST['Description'];
        $PriceFood = $_POST['PriceFood'];
        $Discount = $_POST['Discount'];
        $FoodID = $_POST['FoodID'];
    

     $upload_folder="Food";
     $path="$upload_folder/".time().".jpeg";

     if(file_put_contents($path,base64_decode($ImageFood))!=false){



// UPDATE `Food` SET `FK_CtategoryID`=3,`Name`='hhhh',`Image`='fffff',`Description`='ggggg',`Price`='ttt',`Discount`='hh',`base64`='yhyh' WHERE `FoodID`=1


        $query1 = " UPDATE `Food` SET `Name`='$NameFood',`Image`='https://omarnaser.000webhostapp.com/AndroidEitServerPHP/$path',`Description`='$Description',`Price`='$PriceFood',`Discount`='$Discount',`base64`='$ImageFood' WHERE `FoodID`=$FoodID";


//$query1 = " UPDATE `Food` SET  `Name`='$NameFood',`Description`='$Description',`Price`='$PriceFood',`Discount`='$Discount' WHERE `FoodID`=$FoodID";



 echo "$ImageFood"; 

      

     }


     

            $result = mysqli_query($conn, $query1);    
            

}
 
?>
