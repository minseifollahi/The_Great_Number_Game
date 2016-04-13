<?php 
session_start();
$_SESSION['message'] = "";
if(!empty($_POST['number']))
{
	if($_POST['number'] > $_SESSION['random'])
	{
		$_SESSION['message'] = "Too High!";
	}
	
	else if($_POST['number'] < $_SESSION['random'])
	{
		$_SESSION['message'] = "Too Low!";
	}
	else
	{
		$_SESSION['message'] = $_SESSION['random'] . ' was the number!';
		$_SESSION['guess'] = "finished";
	}
}
if(!empty($_SESSION['reset']))
{
	session_destroy();
}
header('Location: index.php');
?>