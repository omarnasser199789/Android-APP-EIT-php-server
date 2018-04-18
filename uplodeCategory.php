
<?PHP 
    include_once("connection.php"); 

    if(  isset($_POST['image']) &&
        isset($_POST['NameCategory']) 
         ) {
      
        $NameCategory = $_POST['NameCategory'];
        $image = $_POST['image'];

        $upload_folder="Category";
        $path="$upload_folder/".time().".jpeg";


        if(file_put_contents($path,base64_decode($image))!=false){

// INSERT INTO `Catogory`(`Name`, `Image`,  `base64`) VALUES ('hhhhh','trgrg','ghghghgh')




    $query = "INSERT INTO `Catogory`(`Name`, `Image`,  `base64`) VALUES  ('$NameCategory',
      'https://omarnaser.000webhostapp.com/AndroidEitServerPHP/$path','$image')";


     
            $result = mysqli_query($conn, $query);
        echo "uploaded";
        exit;

         }else{
          echo "uploaded_failed";
          exit;

                 }

        }else{
                 echo "image_not_in";
                 exit;

            }



 
        
       


      
    
?>
