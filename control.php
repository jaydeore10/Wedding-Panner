<?php
include("model.php");

$ob=new model();

//services view
$service=$ob->services_view();

//decoration view details
if(isset($_REQUEST['srid']))
{
	$srd=$_REQUEST['srid'];
	$dec=$ob->deco_view($srd);
}


//cart order count
$cont=$ob->cart_count();

//cart price total
$cart_price=$ob->cart_price_count();

//delete cart data
if(isset($_REQUEST['cartdel']))
{
	$id=$_REQUEST['cartdel'];
	$ob->cart_data_delete($id);
}

//status confirm cart data
if(isset($_REQUEST['stat']))
{
	$id=$_REQUEST['stat'];
	$ob->cart_confirm($id);
}

//order table
if(isset($_REQUEST['prid']))
{
	$id=$_REQUEST['prid'];
	$nam=$_REQUEST['nam'];
	$ds=$_REQUEST['dess'];
	$pr=$_REQUEST['price'];
	//session_start();
	$user=$_SESSION['uname'];
	$ob->order_table($id,$nam,$ds,$pr,$user);
}


//user login
if(isset($_REQUEST['login_sub']))
{
	$u=$_REQUEST['user'];
	$p=$_REQUEST['pass'];
	$ob->user_login($u,$p);
}

//contact form submit
if(isset($_REQUEST['contact_sub']))
{
	$nm=$_REQUEST['name'];
	$em=$_REQUEST['email'];
	$ds=$_REQUEST['desc'];
	$ob->contact_sub($nm,$em,$ds);
}

//state view
$state=$ob->state_view();

//state view
$city=$ob->city_view();

//reg_sub
if(isset($_REQUEST['reg_sub']))
{
	$fnm=$_REQUEST['fname'];
	$em=$_REQUEST['email'];
	$mo=$_REQUEST['mob'];
	$gen=$_REQUEST['gender'];
	$unm=$_REQUEST['uname'];
	$ps=$_REQUEST['pass'];
	$st=$_REQUEST['state'];
	$ct=$_REQUEST['city'];
	
	$ob->reg_user($fnm,$em,$mo,$gen,$unm,$ps,$st,$ct);
}

?>