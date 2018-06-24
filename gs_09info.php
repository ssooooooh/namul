<?
	$connect=mysql_connect("localhost","root","apmsetup");

	mysql_select_db('db_ip',$connect);		
	

	$sql = "insert into 09info (subject,type,number)";
	$sql.= "values('".$_POST['subject']."','".$_POST['type']."','".$_POST['number']."')";

	$result = mysql_query($sql);
	header("Location: gs_09info.html");
	mysql_close($connect);
?>