<?
	$query2="SELECT schoolnum from member where id='".$_SESSION['id']."'";
	$row2=mysql_query($query2);
	$result=mysql_result($row2,0,0);

	switch($result){
		case 9 :
	
	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�'){

				switch($row[4]){
					case '����' : $��=1; 
						break;
					case '�ι�����' : $�ΰ�=1; 
						break;
					case '��ȸ����' : $���=1; 
						break;
					case '�ڿ�����' : $�ڰ�=1; 
						break;
					case '������ü��' : $��ü=1; 
						break;									
						}
				}

		if($row[1]=='�ⱳ'){
				switch($row[4]){					
					case '�۾���' : $��=1; 
						break;
					case '�ǿ뿵��' : $�ǿ�=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�' || $row[1]=='�ϱ�' || $row[1]=='�ⱳ'){
			$�ѱ�������+=$row[2];
			}

		if($row[1]=='����' || $row[1]=='����'){
			$����������+=$row[2];
			}

		$������+=$row[2];
	}
	break;

	case 10:

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�'){

				switch($row[4]){
					case '����' : $��=1; 
						break;
					case '�ι�����' : $�ΰ�=1; 
						break;
					case '��ȸ����' : $���=1; 
						break;
					case '�ڿ�����' : $�ڰ�=1; 
						break;
					case '������ü��' : $��ü=1; 
						break;									
						}
				}

		if($row[1]=='�ⱳ'){
				switch($row[4]){					
					case '�۾���' : $��=1; 
						break;
					case '���翵��' : $����=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�' || $row[1]=='�ϱ�' || $row[1]=='�ⱳ'){
			$�ѱ�������+=$row[2];
			}

		if($row[1]=='����' || $row[1]=='����'){
			$����������+=$row[2];
			}
		if($row[1]=='����'){
			$����������+=$row[2];
			}
			

		$������+=$row[2];
	}
	break;
	
	case 11:

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�'){

				switch($row[4]){
					case '����' : $��=1; 
						break;
					case '�ι�����' : $�ΰ�=1; 
						break;
					case '��ȸ����' : $���=1; 
						break;
					case '�ڿ�����' : $�ڰ�=1; 
						break;
					case '������ü��' : $��ü=1; 
						break;									
						}
				}

		if($row[1]=='�ⱳ'){
				switch($row[4]){					
					case '�۾���' : $��=1; 
						break;
					case '���翵��' : $����=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�' || $row[1]=='�ϱ�' || $row[1]=='�ⱳ'){
			$�ѱ�������+=$row[2];
			}

		if($row[1]=='����' || $row[1]=='����'){
			$����������+=$row[2];
			}
		if($row[1]=='����'){
			$����������+=$row[2];
			}
			

		$������+=$row[2];
	}
	break;

	case 12:
	
	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�'){

				switch($row[4]){
					case '����' : $��=1; 
						break;
					case '�ι�����' : $�ΰ�=1; 
						break;
					case '��ȸ����' : $���=1; 
						break;
					case '�ڿ�����' : $�ڰ�=1; 
						break;
					case '������ü��' : $��ü=1; 
						break;									
						}
				}

		if($row[1]=='�ⱳ'){
				switch($row[4]){					
					case '�۾���1' : $��=1; 
						break;
					case '���п���1' : $�뿵=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='�ٱ�' || $row[1]=='�ϱ�' || $row[1]=='�ⱳ'){
			$�ѱ�������+=$row[2];
			}

		if($row[1]=='����' || $row[1]=='����'){
			$����������+=$row[2];
			}
		if($row[1]=='����'){
			$����������+=$row[2];
			}
			

		$������+=$row[2];
	}
	break;

	}
?>