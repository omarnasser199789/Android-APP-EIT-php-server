    <?php
    include_once("connection.php"); 

    $rec_limit = 2;

   $sql = "SELECT count(*) FROM `Catogory` ";

$retval = mysqli_query($conn, $sql);
if(! $retval){

    die("Error in query");
}


      $roww = mysqli_fetch_assoc($result);
      $rec_count = $row[0];

    if( isset($_GET{'page'} ) ) 
    {
            $page = $_GET{'page'};
            
           if( $page==1){
                $offset = 0;
            $rec_limit=2;
               
           } 
            if( $page==2){
                $offset = 2;
            $rec_limit=5;
               
           }
           
    }else 
    {
        
            $offset = 0;
            $rec_limit=4;
            
    }





    $query ="SELECT * FROM `Catogory` LIMIT $offset, $rec_limit ";

    $result = mysqli_query($conn, $query);
    if(! $result){

        die("Error in query");
    }

    while ($row=mysqli_fetch_assoc($result)) {

        $data[]=$row;
     } 
    echo json_encode($data);

    ?>