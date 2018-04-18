<?php

include 'DB.php';

$db = DB::getInstance();

if( isset($_POST['categoryID']) ) 
{ 
       
       $categoryID = $_POST['categoryID'];
    
}



if(isset($_POST['page']))
{
	$page=$_POST['page'];

	
}




$result = $db->table('Food')
	        ->where([ ['FK_CtategoryID',$categoryID]])
	          ->orderBy('FoodID', 'DESC')
	         ->paginate($page,3);
	          
	
echo "$result";








?>