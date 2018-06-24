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
		
		case '일반졸업':	
			echo $_SESSION['id']."님의 일반졸업요건<br><br><br> ";
			include("normal.php");			
			break;		
		case '서울어코드':	
					
			echo $_SESSION['id']."님의 서울어코드졸업요건<br><br><br> ";
			
			include("acord.php");	
			break;
	}
?>