<?
	
$count1=0;
$count2=0;
$count3=0;
$count4=0;


	

switch($result){
	case 9:
	case 10:

	echo "총학점 : ".$총학점."<br>";
	if($총학점>=132){
		echo "* 일반 졸업요건에 필요한 총학점 132학점이 충족되었습니다";
	}else{
		$rest=132-$총학점;
		echo "* 일반 졸업요건에 필요한 총학점 중 ".$rest."학점이 부족합니다";
	}
	echo "<br><br>";
	echo "* 세부사항 *";
	
	$sum=$언교+$인과+$사과+$자과+$예체+$글+$실영;
	echo "<br><br>---------------------------교양 별 이수 여부------------------------------------<br>";
	if($sum==7){
		echo "* 일반졸업요건에 필요한 교양을 각 분야별로 모두 이수하였습니다<br><br>";
	}else{		
		echo"========================================<br>";
		if($언교==0) echo "언어교과영역<br>";
		if($인과==0) echo "인문과학영역<br>";
		if($사과==0) echo "사회과학영역<br>";
		if($자과==0) echo "자연과학영역<br>";
		if($예체==0) echo "예술및체육영역<br>";
		if($글==0) echo "글쓰기영역<br>";
		if($실영==0) echo "실용영어<br>";
		echo"========================================<br>";
		echo"  부문을 추가로 들으셔야합니다<br><br>";
	}

	echo "-------------------------총 교양학점 충족 여부-------------------------------------<br>";
	
	echo $총교양학점."/30<br>";
	if($총교양학점>=30){
		echo "* 일반졸업요건에 필요한 교양학점 30학점이 충족되었습니다";
	}else{
		$rest2=30-$총교양학점;
		echo "* 일반졸업요건에 필요한 총 교양학점 중 ".$rest2."학점이 부족합니다";
	}
	
	echo "<br><br>-------------------------총 전공학점 충족 여부-------------------------------------<br>";	

	echo $총전공학점."/63<br>";
	if($총전공학점>=63){
		echo "* 서울어코드 졸업요건에 필요한 전공학점 63학점이 충족되었습니다";
	}else{
		$rest3=63-$총전공학점;
		echo "* 서울어코드 졸업요건에 필요한 총 전공학점 중 ".$rest3."학점이 부족합니다";
	}
	

	echo "<br><br>-------------------------서울어코드 졸업 충족 여부-------------------------------------<br><br>";	
	
	
	while($row=mysql_fetch_row($rows)){	
			
			if($row[0]=='졸업프로젝트1'){					
				$count1++;
			}
			if($row[0]=='졸업프로젝트2'){					
				$count1++;
			}
			if($row[0]=='졸업논문1'){					
				$count2++;
			}
			if($row[0]=='졸업논문2'){					
				$count2++;
			}
	}
	
	
	if($count1>0 && $count2>0){
			echo "*  서울 어코드기준 필수 프로젝트 과목을 모두 이수하셨습니다";
	}else if($count1>0 && $count2<1){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업논문을 수강하셔야 합니다.";
	}else if($count1<1 && $count2>0){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업프로젝트를 수강하셔야 합니다";
	}else if($count1<1 || $count2<1){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업프로젝트와 졸업논문을 수강하셔야 합니다";
	}
	


	break;	
		
	case 11:

	echo "총학점 : ".$총학점."<br>";
	if($총학점>=132){
		echo "* 일반졸업요건에 필요한 총학점 132학점이 충족되었습니다";
	}else{
		$rest=132-$총학점;
		echo "* 일반졸업요건에 필요한 총학점 중 ".$rest."학점이 부족합니다";
	}
	echo "<br><br>";
	echo "* 세부사항 *";
	
	$sum=$언교+$인과+$사과+$자과+$예체;
	echo "<br><br>---------------------------핵심교양 별 이수 여부------------------------------------<br>";
	if($sum>=3){
		echo "* 일반졸업요건에 필요한 교양을 각 분야별로 모두 이수하였습니다<br><br>";
	}else{		
		echo"========================================<br>";
		if($언교==0) echo "언어교과영역<br>";
		if($인과==0) echo "인문과학영역<br>";
		if($사과==0) echo "사회과학영역<br>";
		if($자과==0) echo "자연과학영역<br>";
		if($예체==0) echo "예술및체육영역<br>";
		echo"========================================<br>";
		
		$rydid=3-$sum;
		echo "위의 영역중".$rydid." 개의 분야를 추가로 들으셔야합니다<br><br>";
	}

	echo "-------------------------총 교양학점 충족 여부-------------------------------------<br>";
	
	echo $총교양학점."/20<br>";
	if($총교양학점>=20){
		echo "* 일반졸업요건에 필요한 교양학점 20학점이 충족되었습니다";
	}else{
		$rest2=20-$총교양학점;
		echo "* 일반졸업요건에 필요한 총 교양학점 중 ".$rest2."학점이 부족합니다";
	}

	echo "<br><br>-------------------------총 지교학점 충족 여부-------------------------------------<br>";	

	echo $총지교학점."/30<br>";
	if($총지교학점>=30){
		echo "* 일반졸업요건에 필요한 지정교양학점 30학점이 충족되었습니다";
	}else{
		$rest3=30-$총지교학점;
		echo "* 일반졸업요건에 필요한 총 지정교양학점 중 ".$rest3."학점이 부족합니다";
	}
	
	echo "<br><br>-------------------------총 전공학점 충족 여부-------------------------------------<br>";	

	echo $총전공학점."/66<br>";
	if($총전공학점>=60){
		echo "* 서울어코드 졸업요건에 필요한 전공학점 66학점이 충족되었습니다";
	}else{
		$rest3=60-$총전공학점;
		echo "* 서울어코드 졸업요건에 필요한 총 전공학점 중 ".$rest3."학점이 부족합니다";
	}

	echo "<br><br>-------------------------서울어코드 졸업 충족 여부-------------------------------------<br><br>";	
	
		
	
	while($row=mysql_fetch_row($rows)){
	

			if($row[0]=='졸업프로젝트1'){					
				$count1++;
			}
			if($row[0]=='졸업프로젝트2'){					
				$count1++;
			}
			if($row[0]=='졸업논문1'){					
				$count2++;
			}
			if($row[0]=='졸업논문2'){					
				$count2++;
			}
	}
	
	if($count1>0 && $count2>0){
			echo "*  서울 어코드기준 필수 프로젝트 과목을 모두 이수하셨습니다";
	}else if($count1>0 && $count2<1){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업논문을 수강하셔야 합니다.";
	}else if($count1<1 && $count2>0){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업프로젝트를 수강하셔야 합니다";
	}else if($count1<1 || $count2<1){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업프로젝트와 졸업논문을 수강하셔야 합니다";
	}
		

	break;


	case 12:
	
	echo "총학점 : ".$총학점."<br>";
	if($총학점>=132){
		echo "* 일반졸업요건에 필요한 총학점 132학점이 충족되었습니다";
	}else{
		$rest=132-$총학점;
		echo "* 일반졸업요건에 필요한 총학점 중 ".$rest."학점이 부족합니다";
	}
	echo "<br><br>";
	echo "* 세부사항 *";
	
	$sum=$언교+$인과+$사과+$자과+$예체;
	echo "<br><br>---------------------------핵심교양 별 이수 여부------------------------------------<br>";
	if($sum>=3){
		echo "* 일반졸업요건에 필요한 교양을 각 분야별로 모두 이수하였습니다<br><br>";
	}else{		
		echo"========================================<br>";
		if($언교==0) echo "언어교과영역<br>";
		if($인과==0) echo "인문과학영역<br>";
		if($사과==0) echo "사회과학영역<br>";
		if($자과==0) echo "자연과학영역<br>";
		if($예체==0) echo "예술및체육영역<br>";
		echo"========================================<br>";
		
		$rydid=3-$sum;
		echo "위의 영역중".$rydid." 개의 분야를 추가로 들으셔야합니다<br><br>";
	}

	echo "-------------------------총 교양학점 충족 여부-------------------------------------<br>";
	
	echo $총교양학점."/20<br>";
	if($총교양학점>=20){
		echo "* 일반졸업요건에 필요한 교양학점 20학점이 충족되었습니다";
	}else{
		$rest2=20-$총교양학점;
		echo "* 일반졸업요건에 필요한 총 교양학점 중 ".$rest2."학점이 부족합니다";
	}

	echo "<br><br>-------------------------총 지교학점 충족 여부-------------------------------------<br>";	

	echo $총지교학점."/30<br>";
	if($총지교학점>=30){
		echo "* 일반졸업요건에 필요한 지정교양학점 30학점이 충족되었습니다";
	}else{
		$rest3=30-$총지교학점;
		echo "* 일반졸업요건에 필요한 총 지정교양학점 중 ".$rest3."학점이 부족합니다";
	}
	
	echo "<br><br>-------------------------총 전공학점 충족 여부-------------------------------------<br>";	

	echo $총전공학점."/69<br>";
	if($총전공학점>=69){
		echo "* 서울어코드 졸업요건에 필요한 전공학점 69학점이 충족되었습니다";
	}else{
		$rest3=69-$총전공학점;
		echo "* 서울어코드 졸업요건에 필요한 총 전공학점 중 ".$rest3."학점이 부족합니다";
	}

	echo "<br><br>-------------------------서울어코드 졸업 충족 여부-------------------------------------<br><br>";	
	
		
	while($row=mysql_fetch_row($rows)){
	

			if($row[0]=='졸업프로젝트1'){					
				$count1++;
			}
			if($row[0]=='졸업프로젝트2'){					
				$count1++;
			}
			if($row[0]=='전공기초프로젝트1'){					
				$count3++;
			}
			if($row[0]=='전공기초프로젝트2'){					
				$count3++;
			}
			if($row[0]=='산학프로젝트1'){					
				$count4++;
			}
			if($row[0]=='산학프로젝트2'){					
				$count4++;
			}
			if($row[0]=='졸업논문1'){					
				$count2++;
			}
			if($row[0]=='졸업논문2'){					
				$count2++;
			}
	}

	if($count3!=2)	echo "*  서울 어코드기준 필수 프로젝트 과목 중 전공기초프로젝트를 수강하셔야합니다.<br>";
	if($count4!=2)	echo "*  서울 어코드기준 필수 프로젝트 과목 중 산학프로젝트를 수강하셔야합니다.<br>";
	
	if($count1>0 && $count2<1){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업논문을 수강하셔야 합니다.<br>";
	}else if($count1<1 && $count2>0){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업프로젝트를 수강하셔야 합니다<br>";
	}else if($count1<1 && $count2<1){
			echo "*  서울 어코드기준 필수 프로젝트 과목 중 졸업프로젝트와 졸업논문을 수강하셔야 합니다<br>";
	}

	if($count1>0&&$count2>0&&$count3==2&&$count4==2) echo "*  서울 어코드기준 필수 프로젝트 과목을 모두 이수하셨습니다.";

	

	break;


	
	
	}

?>