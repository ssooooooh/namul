<?
	if(!isset($_SESSION)) { session_start(); }
	include("gs_db.php");
	ensure_logged_in();
	//include("gs_cal.php");
	
	
	
	include("gs_main_switch.php");







?>