<?
	include("ensure.php");
	ensure_logged_in();
	include("db.php");
	delete_record($_POST['num'],$_POST['passwd']);
?>
