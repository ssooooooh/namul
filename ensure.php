<?
function ensure_logged_in(){
	if(!isset($_SESSION))
		session_start();
	if(!isset($_SESSION['id']))
	{
		$_SESSION['flash'] = "�Խ����� �α����� ��밡���մϴ�.";
		header("Location:login.html");
	}
}
?>