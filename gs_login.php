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
		$_SESSION['flash']="$name ���� �����Ͽ����ϴ�.";
		header("Location: gsinmi.html"); 

	}
	else
	{
		$_SESSION['flash']="�α��ο� �����Ͽ����ϴ�. �ٽ� �Է��ϼ���.";
		header("Location: gs_login.html");
	}
		

?>
		