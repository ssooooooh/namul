<?
	$query2="SELECT schoolnum from member where id='".$_SESSION['id']."'";
	$row2=mysql_query($query2);
	$result=mysql_result($row2,0,0);

	switch($result){
		case 9 :
	
	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교'){

				switch($row[4]){
					case '언어교과' : $언교=1; 
						break;
					case '인문과학' : $인과=1; 
						break;
					case '사회과학' : $사과=1; 
						break;
					case '자연과학' : $자과=1; 
						break;
					case '예술및체육' : $예체=1; 
						break;									
						}
				}

		if($row[1]=='기교'){
				switch($row[4]){					
					case '글쓰기' : $글=1; 
						break;
					case '실용영어' : $실영=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교' || $row[1]=='일교' || $row[1]=='기교'){
			$총교양학점+=$row[2];
			}

		if($row[1]=='전선' || $row[1]=='전필'){
			$총전공학점+=$row[2];
			}

		$총학점+=$row[2];
	}
	break;

	case 10:

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교'){

				switch($row[4]){
					case '언어교과' : $언교=1; 
						break;
					case '인문과학' : $인과=1; 
						break;
					case '사회과학' : $사과=1; 
						break;
					case '자연과학' : $자과=1; 
						break;
					case '예술및체육' : $예체=1; 
						break;									
						}
				}

		if($row[1]=='기교'){
				switch($row[4]){					
					case '글쓰기' : $글=1; 
						break;
					case '교양영어' : $교영=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교' || $row[1]=='일교' || $row[1]=='기교'){
			$총교양학점+=$row[2];
			}

		if($row[1]=='전선' || $row[1]=='전필'){
			$총전공학점+=$row[2];
			}
		if($row[1]=='지교'){
			$총지교학점+=$row[2];
			}
			

		$총학점+=$row[2];
	}
	break;
	
	case 11:

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교'){

				switch($row[4]){
					case '언어교과' : $언교=1; 
						break;
					case '인문과학' : $인과=1; 
						break;
					case '사회과학' : $사과=1; 
						break;
					case '자연과학' : $자과=1; 
						break;
					case '예술및체육' : $예체=1; 
						break;									
						}
				}

		if($row[1]=='기교'){
				switch($row[4]){					
					case '글쓰기' : $글=1; 
						break;
					case '교양영어' : $교영=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교' || $row[1]=='일교' || $row[1]=='기교'){
			$총교양학점+=$row[2];
			}

		if($row[1]=='전선' || $row[1]=='전필'){
			$총전공학점+=$row[2];
			}
		if($row[1]=='지교'){
			$총지교학점+=$row[2];
			}
			

		$총학점+=$row[2];
	}
	break;

	case 12:
	
	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교'){

				switch($row[4]){
					case '언어교과' : $언교=1; 
						break;
					case '인문과학' : $인과=1; 
						break;
					case '사회과학' : $사과=1; 
						break;
					case '자연과학' : $자과=1; 
						break;
					case '예술및체육' : $예체=1; 
						break;									
						}
				}

		if($row[1]=='기교'){
				switch($row[4]){					
					case '글쓰기1' : $글=1; 
						break;
					case '대학영어1' : $대영=1; 
						break;				
						}
				}

	}	

	
	$rows=mysql_query($query);

	while($row=mysql_fetch_row($rows)){

		if($row[1]=='핵교' || $row[1]=='일교' || $row[1]=='기교'){
			$총교양학점+=$row[2];
			}

		if($row[1]=='전선' || $row[1]=='전필'){
			$총전공학점+=$row[2];
			}
		if($row[1]=='지교'){
			$총지교학점+=$row[2];
			}
			

		$총학점+=$row[2];
	}
	break;

	}
?>