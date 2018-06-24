<?
	if(!isset($_SESSION)) { session_start(); }


	include("gs_db.php");
	$id=$_POST['id'];
	$passwd=$_POST['passwd'];
	$name=NULL;
	if(is_passwd_correct($id,$passwd,&$name))
	{
		$_SESSION['id']=$id;
		$_SESSION['name']=$name;
		$_SESSION['flash']="$name 님이 접속하였습니다.";
		header("Location: gsinmi.html"); 

	}
	else
	{
		$_SESSION['flash']="로그인에 실패하였습니다. 다시 입력하세요.";
		header("Location: gs_login.html");
	}
		

?>
		