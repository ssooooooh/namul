<?

	if(!isset($_SESSION)){ session_start(); }

	include("db.php");
	$id=$_POST['id'];
	$passwd=$_POST['passwd'];
	$name=NULL;

	if(is_passwd_correct($id, $passwd, $name))
	{

		$_SESSION['id']=$id;
		$_SESSION['name']=$name;
		$_SESSION['flash']= "$name ���� �����Ͽ����ϴ�. ";
		header("Location:main.html");
	

	}
	else
	{

		$_SESSION['flash']="�α��ο� �����Ͽ����ϴ�. ";
		header("Location:login.html");

	}
?>