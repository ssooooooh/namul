<?
	include("ensure.php");
	ensure_logged_in();
	include("db.php");
	gongji_delete_record($_REQUEST['num']);
?>
