<?
	if(!isset($_SESSION)) { session_start(); }
	include("gs_db.php");	
	ensure_logged_in();
	$connect=mysql_connect("localhost","root","apmsetup");		
	$db=mysql_select_db('db_ip',$connect);
		
	$query="SELECT * from 013info";
		
	$rows=mysql_query($query);	
	
	
?>
	<form method=post action=main.php>
	
		* 아래 3가지의 졸업요건 중 하나만 선택하여주세요
		<table border=1>
			<tr>
				<td><input type=radio name=grad value=일반졸업>일반졸업</td>
				<td><input type=radio name=grad value=서울어코드>서울어코드</td>
			</tr>
		</table>
		
		
		<table border=1>
			<?
				$start=0;
	
				while($row=mysql_fetch_row($rows)){
				
					$nu="a_".$start;

					if($row[1]=='전필'){	
							
			?>

						<tr>
							
							<td><input type=checkbox name='<?=$nu?>' value='<?=$row[0]?>' ><?=$row[0]?> | <?=$row[1]?> | <?=$row[2]?> 
												
							 </td>
						</tr>
			<?
					}
					
					if($row[1]=='전선'){
							
			?>
						<tr>
							<td><input type=checkbox  name='<?=$nu?>' value='<?=$row[0]?>' ><?=$row[0]?> | <?=$row[1]?> | <?=$row[2]?> 
								
							
							</td>
						</tr>
			<?
					}
					
					if($row[1]=='지교'){
							
			?>
						<tr>
							<td><input type=checkbox name='<?=$nu?>' value='<?=$row[0]?>' ><?=$row[0]?> | <?=$row[1]?> | <?=$row[2]?> 
							
							
							</td>
						</tr>
			<?
					}
					$start++;


				}
			?>
		</table>

		<table>
		<?
			$query3="SELECT schoolnum from member where id='".$_SESSION['id']."'";
		
			$row3=mysql_query($query3);
			$result2=mysql_result($row3,0,0);

			echo $result2;


			switch($result2){
				case 9 :
		?>
	
			
			<tr>
				<td>핵교 :<input type=text name='핵교' size=50 value='없음'> 
					이수구분 : <select name=이수>
							<option value=언어교과>언어교과</option>
							<option value=인문과학>인문과학</option>
							<option value=사회과학>사회과학</option>
							<option value=자연과학>자연과학</option>
							<option value=예술및체육>예술 및 체육</option>
						</select></td> 
				<td>학점 :<input type=text name='핵교_학점' size=5 value='없음'></td>				
				
			</tr>
			
			<tr>
				<td>기교 :<input type=text name='기교' size=50 value='없음'>
					이수구분 : <select name=이수2>	
							<option value=글쓰기>글쓰기</option>
							<option value=실용영어>실용영어</option>
						</select></td>
				<td>학점 :<input type=text name='기교_학점' size=5 value='없음'></td>
			</tr>
			
			<tr>
				<td>일교 :<input type=text name='일교' size=50 value='없음'></td>
				<td>학점 :<input type=text name='일교_학점' size=5 value='없음'></td>
			</tr>
		<?
				break;
				
				case 10:
		?>

				<tr>
				<td>핵교 :<input type=text name='핵교' size=50 value='없음'> 
					이수구분 : <select name=이수>
							<option value=언어교과>언어교과</option>
							<option value=인문과학>인문과학</option>
							<option value=사회과학>사회과학</option>
							<option value=자연과학>자연과학</option>
							<option value=예술및체육>예술 및 체육</option>
						</select></td> 
				<td>학점 :<input type=text name='핵교_학점' size=5 value='없음'></td>				
				
			</tr>
			
			<tr>
				<td>기교 :<input type=text name='기교' size=50 value='없음'>
					이수구분 : <select name=이수2>	
							<option value=글쓰기>글쓰기</option>
							<option value=교양영어>교양영어</option>
						</select></td>
				<td>학점 :<input type=text name='기교_학점' size=5 value='없음'></td>
			</tr>
			
			<tr>
				<td>일교 :<input type=text name='일교' size=50 value='없음'></td>
				<td>학점 :<input type=text name='일교_학점' size=5 value='없음'></td>
			</tr>
		<?
				break;
				

				case 11:

		?>

				<tr>
				<td>핵교 :<input type=text name='핵교' size=50 value='없음'> 
					이수구분 : <select name=이수>
							<option value=언어교과>언어교과</option>
							<option value=인문과학>인문과학</option>
							<option value=사회과학>사회과학</option>
							<option value=자연과학>자연과학</option>
							<option value=예술및체육>예술 및 체육</option>
						</select></td> 
				<td>학점 :<input type=text name='핵교_학점' size=5 value='없음'></td>				
				
			</tr>
			
			<tr>
				<td>기교 :<input type=text name='기교' size=50 value='없음'>
					이수구분 : <select name=이수2>	
							<option value=글쓰기>글쓰기</option>
							<option value=교양영어>교양영어</option>
						</select></td>
				<td>학점 :<input type=text name='기교_학점' size=5 value='없음'></td>
			</tr>
			
			<tr>
				<td>일교 :<input type=text name='일교' size=50 value='없음'></td>
				<td>학점 :<input type=text name='일교_학점' size=5 value='없음'></td>
			</tr>
		<?
				break;

				case 12:

		?>

				<tr>
				<td>핵교 :<input type=text name='핵교' size=50 value='없음'> 
					이수구분 : <select name=이수>
							<option value=언어교과>언어교과</option>
							<option value=인문과학>인문과학</option>
							<option value=사회과학>사회과학</option>
							<option value=자연과학>자연과학</option>
							<option value=예술및체육>예술 및 체육</option>
						</select></td> 
				<td>학점 :<input type=text name='핵교_학점' size=5 value='없음'></td>				
				
			</tr>
			
			<tr>
				<td>기교 :<input type=text name='기교' size=50 value='없음'>
					이수구분 : <select name=이수2>	
							<option value=글쓰기1>글쓰기1</option>
							<option value=교양영어1>대학영어1</option>
						</select></td>
				<td>학점 :<input type=text name='기교_학점' size=5 value='없음'></td>
			</tr>
			
			<tr>
				<td>일교 :<input type=text name='일교' size=50 value='없음'></td>
				<td>학점 :<input type=text name='일교_학점' size=5 value='없음'></td>
			</tr>
		<?
				break;
				}
		?>
		
		
		</table>

		<input type=submit value="등록하기">
		<input type=reset value="reset">

	///////////////////////////////////////////////////////////////////////////////////////////////
	

	include("gs_cal.php");

		

	</form>