<?
if(!isset($_SESSION)) session_start();
include("gs_db.php");
ensure_logged_in();
delete_record($_POST['num'], $_POST['passwd']);
?>