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
	
		* �Ʒ� 3������ ������� �� �ϳ��� �����Ͽ��ּ���
		<table border=1>
			<tr>
				<td><input type=radio name=grad value=�Ϲ�����>�Ϲ�����</td>
				<td><input type=radio name=grad value=������ڵ�>������ڵ�</td>
			</tr>
		</table>
		
		
		<table border=1>
			<?
				$start=0;
	
				while($row=mysql_fetch_row($rows)){
				
					$nu="a_".$start;

					if($row[1]=='����'){	
							
			?>

						<tr>
							
							<td><input type=checkbox name='<?=$nu?>' value='<?=$row[0]?>' ><?=$row[0]?> | <?=$row[1]?> | <?=$row[2]?> 
												
							 </td>
						</tr>
			<?
					}
					
					if($row[1]=='����'){
							
			?>
						<tr>
							<td><input type=checkbox  name='<?=$nu?>' value='<?=$row[0]?>' ><?=$row[0]?> | <?=$row[1]?> | <?=$row[2]?> 
								
							
							</td>
						</tr>
			<?
					}
					
					if($row[1]=='����'){
							
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
				<td>�ٱ� :<input type=text name='�ٱ�' size=50 value='����'> 
					�̼����� : <select name=�̼�>
							<option value=����>����</option>
							<option value=�ι�����>�ι�����</option>
							<option value=��ȸ����>��ȸ����</option>
							<option value=�ڿ�����>�ڿ�����</option>
							<option value=������ü��>���� �� ü��</option>
						</select></td> 
				<td>���� :<input type=text name='�ٱ�_����' size=5 value='����'></td>				
				
			</tr>
			
			<tr>
				<td>�ⱳ :<input type=text name='�ⱳ' size=50 value='����'>
					�̼����� : <select name=�̼�2>	
							<option value=�۾���>�۾���</option>
							<option value=�ǿ뿵��>�ǿ뿵��</option>
						</select></td>
				<td>���� :<input type=text name='�ⱳ_����' size=5 value='����'></td>
			</tr>
			
			<tr>
				<td>�ϱ� :<input type=text name='�ϱ�' size=50 value='����'></td>
				<td>���� :<input type=text name='�ϱ�_����' size=5 value='����'></td>
			</tr>
		<?
				break;
				
				case 10:
		?>

				<tr>
				<td>�ٱ� :<input type=text name='�ٱ�' size=50 value='����'> 
					�̼����� : <select name=�̼�>
							<option value=����>����</option>
							<option value=�ι�����>�ι�����</option>
							<option value=��ȸ����>��ȸ����</option>
							<option value=�ڿ�����>�ڿ�����</option>
							<option value=������ü��>���� �� ü��</option>
						</select></td> 
				<td>���� :<input type=text name='�ٱ�_����' size=5 value='����'></td>				
				
			</tr>
			
			<tr>
				<td>�ⱳ :<input type=text name='�ⱳ' size=50 value='����'>
					�̼����� : <select name=�̼�2>	
							<option value=�۾���>�۾���</option>
							<option value=���翵��>���翵��</option>
						</select></td>
				<td>���� :<input type=text name='�ⱳ_����' size=5 value='����'></td>
			</tr>
			
			<tr>
				<td>�ϱ� :<input type=text name='�ϱ�' size=50 value='����'></td>
				<td>���� :<input type=text name='�ϱ�_����' size=5 value='����'></td>
			</tr>
		<?
				break;
				

				case 11:

		?>

				<tr>
				<td>�ٱ� :<input type=text name='�ٱ�' size=50 value='����'> 
					�̼����� : <select name=�̼�>
							<option value=����>����</option>
							<option value=�ι�����>�ι�����</option>
							<option value=��ȸ����>��ȸ����</option>
							<option value=�ڿ�����>�ڿ�����</option>
							<option value=������ü��>���� �� ü��</option>
						</select></td> 
				<td>���� :<input type=text name='�ٱ�_����' size=5 value='����'></td>				
				
			</tr>
			
			<tr>
				<td>�ⱳ :<input type=text name='�ⱳ' size=50 value='����'>
					�̼����� : <select name=�̼�2>	
							<option value=�۾���>�۾���</option>
							<option value=���翵��>���翵��</option>
						</select></td>
				<td>���� :<input type=text name='�ⱳ_����' size=5 value='����'></td>
			</tr>
			
			<tr>
				<td>�ϱ� :<input type=text name='�ϱ�' size=50 value='����'></td>
				<td>���� :<input type=text name='�ϱ�_����' size=5 value='����'></td>
			</tr>
		<?
				break;

				case 12:

		?>

				<tr>
				<td>�ٱ� :<input type=text name='�ٱ�' size=50 value='����'> 
					�̼����� : <select name=�̼�>
							<option value=����>����</option>
							<option value=�ι�����>�ι�����</option>
							<option value=��ȸ����>��ȸ����</option>
							<option value=�ڿ�����>�ڿ�����</option>
							<option value=������ü��>���� �� ü��</option>
						</select></td> 
				<td>���� :<input type=text name='�ٱ�_����' size=5 value='����'></td>				
				
			</tr>
			
			<tr>
				<td>�ⱳ :<input type=text name='�ⱳ' size=50 value='����'>
					�̼����� : <select name=�̼�2>	
							<option value=�۾���1>�۾���1</option>
							<option value=���翵��1>���п���1</option>
						</select></td>
				<td>���� :<input type=text name='�ⱳ_����' size=5 value='����'></td>
			</tr>
			
			<tr>
				<td>�ϱ� :<input type=text name='�ϱ�' size=50 value='����'></td>
				<td>���� :<input type=text name='�ϱ�_����' size=5 value='����'></td>
			</tr>
		<?
				break;
				}
		?>
		
		
		</table>

		<input type=submit value="����ϱ�">
		<input type=reset value="reset">

	///////////////////////////////////////////////////////////////////////////////////////////////
	

	include("gs_cal.php");

		

	</form>