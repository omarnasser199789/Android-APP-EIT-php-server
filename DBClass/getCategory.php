<?php

include 'DB.php';

$db = DB::getInstance();

if(isset($_GET['page']))
{
	$page=$_GET['page'];

	$response = $db->table('Catogory')->orderBy('categoryID', 'DESC')->paginate($page,3);
	echo $response;
}


?>