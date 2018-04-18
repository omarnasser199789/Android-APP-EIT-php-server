
<?PHP 
    include_once("connection.php"); 

    if(
        isset($_POST['idCategory']) 
         ) {
      
       
        $idCategory = $_POST['idCategory'];

    }

//DELETE FROM `Food` WHERE `FK_CtategoryID`=2

       $query1 = "DELETE FROM `Food` WHERE `FK_CtategoryID`=$idCategory";
    $query2 = "DELETE FROM `Catogory` WHERE `categoryID`=$idCategory";


     
            $result = mysqli_query($conn, $query1);

            if($result){

     $result2 = mysqli_query($conn, $query2);
}
        

echo "$idCategory";

    
?>
