<?
	if(!isset($_SESSION)) 
	session_start();

	session_destroy();
	session_regenerate_id(TRUE);
	session_start();

	$_SESSION['flash']="���������� �α׾ƿ� �Ǿ����ϴ�.";
	header("Location: gs_login.html");
	
?>