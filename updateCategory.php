
<?PHP 
    include_once("connection.php"); 

    if(isset($_POST['NameCategory']) &&
        isset($_POST['idCategory']) 
         ) {
      
        $NameCategory = $_POST['NameCategory'];
        $idCategory = $_POST['idCategory'];

        $upload_folder="Category";
       

    $query = "UPDATE `Catogory` SET `Name`='$NameCategory'WHERE `categoryID`=$idCategory;";


     
         $result = mysqli_query($conn, $query);

        echo "uploaded";
        }
    
?>
