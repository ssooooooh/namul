<?
	$connect=mysql_connect("localhost","root","apmsetup");

	mysql_select_db('db_ip',$connect);		
	

	$sql = "insert into member (id, name, passwd, gender, schoolnum)";
	$sql.= "values('".$_POST['id']."','".$_POST['name']."','".$_POST['passwd']."','".$_POST['gender']."','".$_POST['schoolnum']."')";

	$result = mysql_query($sql);

	$sql2 = "create table ".$_POST['id']." (";
	$sql2.= "subject char(50), type char(10), number int, graduation char(50), subtype char(50), primary key(subject) )";

	mysql_query($sql2);

	
	header("Location: gsinmi.html");

	mysql_close($connect);
?>