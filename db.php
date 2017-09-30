<?php 
session_start();
error_reporting(0);
ini_set('display_errors', 1);

	
if(!isset($_SESSION['cart_num']) || !isset($_SESSION['cart_array'])) {
  $_SESSION['cart_num']=0;
   $_SESSION['cart_array']=array(); 
   
} 


include("master_config.php");
	
	$con = mysql_connect("localhost",$mc_dbuser,$mc_dbpass);
	if (!$con)	{
			die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($mc_dbname, $con);
	

function pro_status ($id)
{
	if (in_array(intval($id), $_SESSION['cart_array'],true))
	{
		echo 'Added!';
	}
	else
		echo 'Add to Cart';
	
}
?>