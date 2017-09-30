<?php
include_once('db.php'); 
//unset($_SESSION['cart_array']);
if(isset($_POST['pid']) && isset($_POST['task']))
{

	if($_POST['task']=='add')
		cart_add($_POST['pid']);
	else if($_POST['task']=='remove')
		cart_remove($_POST['pid']);
	
	$_SESSION['cart_num']= count(array_filter($_SESSION['cart_array']));
	
	echo $_SESSION['cart_num'];

exit;
}
else
{
	
var_dump($_SESSION['cart_array']);
echo 'else';
}

function cart_add($pro_id)
{
	$pro_id=intval($pro_id);
	if (!in_array($pro_id, $_SESSION['cart_array'],true))
	{
		$_SESSION['cart_array'][] = $pro_id; 
	}
}

function cart_remove($item ) {
	$item=intval($item);
	$index = array_search($item, $_SESSION['cart_array']);
	if ( $index !== false ) {
		unset( $_SESSION['cart_array'][$index] );
	}
}
?>