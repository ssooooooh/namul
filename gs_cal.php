$query2="SELECT * from 013info";
	$rows=mysql_query($query2);	
	
	$here=0;	

	while($here<mysql_num_rows($rows)){	
		
		$k="a_".$here;		
		if(isset($k)){	

				while($row=mysql_fetch_row($rows)){

					if($row[0]==$k){					
						$sql = "insert into ".$_SESSION['id']." (subject ,type, number)";	
						$sql.= "values('".$k."','".$row[1]."','".$row[2]."')";
						mysql_query($sql);
						break;
					}
				}
		}	
		$here++;		
	}	

	if($핵교!='없음'){			
			$sql = "insert into ".$_SESSION['id']." (subject ,type, number, subtype)"; 
			$sql.= "values('".$핵교."','".핵교."','".$핵교_학점."','".$이수."')";
			mysql_query($sql);
	}

	if($일교!='없음'){
			$sql = "insert into ".$_SESSION['id']." (subject ,type, number)"; 
			$sql.= "values('".$일교."','".일교."','".$일교_학점."')";
			mysql_query($sql);
	}

	if($기교!='없음'){
			$sql = "insert into ".$_SESSION['id']." (subject ,type, number,subtype)"; 
			$sql.= "values('".$기교."','".기교."','".$기교_학점."','".$이수2."')";
			mysql_query($sql);
	}

	$언교=0;
	$인과=0;
	$사과=0;
	$자과=0;
	$예체=0;
	$글=0;
	$실영=0;
	$교영=0;
	$대영=0;

	$총지교학점=0;
	$총교양학점=0;
	$총전공학점=0;
	$총학점=0;

	$query = "SELECT * FROM ".$_SESSION['id']." ";
	$rows=mysql_query($query);	

	include("gs_cal_switch.php");