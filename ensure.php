<?
function ensure_logged_in(){
	if(!isset($_SESSION))
		session_start();
	if(!isset($_SESSION['id']))
	{
		$_SESSION['flash'] = "게시판은 로그인후 사용가능합니다.";
		header("Location:login.html");
	}
}
?>