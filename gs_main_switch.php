<?
	if(!isset($_SESSION)) { session_start(); }	

	$query5="SELECT * from member where id='".$_SESSION['id']."'";

	$rows5=mysql_query($query5);	

	$result=mysql_result($rows5,0,4);

	$query6="SELECT * from ".$_SESSION['id']." ";
	//echo $query6;
	$rows=mysql_query($query6);	

	$grad_type=$_POST['grad'];
	//echo $grad_type;	

	switch($grad_type){
		
		case '�Ϲ�����':	
			echo $_SESSION['id']."���� �Ϲ��������<br><br><br> ";
			include("normal.php");			
			break;		
		case '������ڵ�':	
					
			echo $_SESSION['id']."���� ������ڵ��������<br><br><br> ";
			
			include("acord.php");	
			break;
	}
?>