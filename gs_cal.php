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

	if($�ٱ�!='����'){			
			$sql = "insert into ".$_SESSION['id']." (subject ,type, number, subtype)"; 
			$sql.= "values('".$�ٱ�."','".�ٱ�."','".$�ٱ�_����."','".$�̼�."')";
			mysql_query($sql);
	}

	if($�ϱ�!='����'){
			$sql = "insert into ".$_SESSION['id']." (subject ,type, number)"; 
			$sql.= "values('".$�ϱ�."','".�ϱ�."','".$�ϱ�_����."')";
			mysql_query($sql);
	}

	if($�ⱳ!='����'){
			$sql = "insert into ".$_SESSION['id']." (subject ,type, number,subtype)"; 
			$sql.= "values('".$�ⱳ."','".�ⱳ."','".$�ⱳ_����."','".$�̼�2."')";
			mysql_query($sql);
	}

	$��=0;
	$�ΰ�=0;
	$���=0;
	$�ڰ�=0;
	$��ü=0;
	$��=0;
	$�ǿ�=0;
	$����=0;
	$�뿵=0;

	$����������=0;
	$�ѱ�������=0;
	$����������=0;
	$������=0;

	$query = "SELECT * FROM ".$_SESSION['id']." ";
	$rows=mysql_query($query);	

	include("gs_cal_switch.php");