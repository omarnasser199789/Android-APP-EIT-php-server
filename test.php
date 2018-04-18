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
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
    }else 
    {
            $page = 0;
            $offset = 0;
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