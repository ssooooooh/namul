<?
function delete_record($num,$passwd){
	$connect = mysql_connect("localhost", "root", "skanf");
	$db = mysql_select_db('namulDB', $connect);
	$query = "SELECT passwd,num FROM board where num='".$num."'";
	$rows = mysql_query($query);
	if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			if($row['passwd']== $passwd){
			 	$query = "delete from board where num='".$num."'";
				mysql_query($query);
				header("Location:board_list.html");
			}
			else{
				header("Location:pass_check.php?num=$num");
			}
	}
}
function is_passwd_correct($id,$passwd,&$name){
	$connect =mysql_connect("localhost","root","skanf");
	$db=mysql_select_db('namulDB',$connect);
	$sql = "SELECT name from member where id='".$id."' and passwd='".$passwd."'";
	$rows = mysql_query($sql); 
	if(mysql_num_rows($rows))
	{
		$row = mysql_fetch_row($rows);
		$name=$row[0];
		return 1;
	}
	else{
		return 0;
	}
}
function Insert_data($_POST){
	global $result;
	$connect=mysql_connect("localhost","root","skanf");
	$db=mysql_select_db('namulDB',$connect);
	if(isset($_POST)){
	}
	$sql="insert into board(num,title,passwd,date,writer,content,brand,cosname,star)";
	$sql .= "values(NULL,'".$_POST['title2']."','".$_POST['passwd2']."','".$_POST['date2']."','".$_POST['name']."','".$_POST['content2']."'
	,'".$_POST['brand2']."','".$_POST['cosname2']."','".$_POST['star2']."')";
	$result=mysql_query($sql);
}
function Insert_data2($_POST){
	global $result;
	$connect=mysql_connect("localhost","root","skanf");
	$db=mysql_select_db('namulDB',$connect);
	if(isset($_POST)){
	}
	$sql="insert into board2(num,title,passwd,date,writer,content,brand,cosname)";
	$sql .= "values(NULL,'".$_POST['title2']."','".$_POST['passwd2']."','".$_POST['date2']."','".$_POST['name']."','".$_POST['content2']."'
	,'".$_POST['brand2']."','".$_POST['cosname2']."')";
	$result=mysql_query($sql);
}
function board_list(){
	$connect = mysql_connect("localhost","root","skanf");
	$db = mysql_select_db("namulDB",$connect);
	$query = "SELECT * FROM board ";
	$rows= mysql_query($query);
	$borad_num = mysql_num_rows($rows);
?>

	<table cellspacing=0  >
    
    <tr bgcolor="#CCCCCC">
		<th width=50 height=40 align=center  >����</th>
		<th width=400 align=center>������</a></th>
        <th width=150 align=center>��ǰ��</th>
		<th width=100 align=center>�۾���</th>
		<th width=100 align=center>��¥</th>    	
    </tr>

    
<?
 	for($i=0; $i < mysql_num_rows($rows); $i++){
		$row = mysql_fetch_array($rows);
?>

	<tr>
		<td width=50 height=50 align=center bgcolor="#DFDFDF"><?=$borad_num--?></td>
		<th width=400 align=center><a href=board_show.php?num=<?=$row['num']?>><?=$row['title']?></a></th>
        <td width=150 ><?=$row['cosname']?></td>
		<td width=100 align=center><?=$row['writer']?></td>
		<td width=100 align=center><?=$row['date']?></td>
	</tr>
<?
	}
?>
<tr>
<td colspan="5" align="right">
<br />
<br />
	<a href=board_write.php><input type=button class=writebtn value=�۾���></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    </tr>
    
</table>
<?
}
function board_list2(){
	$connect = mysql_connect("localhost","root","skanf");
	$db = mysql_select_db("namulDB",$connect);
	$query = "SELECT * FROM board2 ";
	$rows= mysql_query($query);
	$borad_num = mysql_num_rows($rows);
?>
	<table cellspacing=0  >
     <tr bgcolor="#CCCCCC">
		<th width=50 height=40 align=center  >����</th>
		<th width=400 align=center>������</a></th>
		<th width=150 align=center>�۾���</th>
		<th width=150 align=center>��¥</th>    	
    </tr>
<?
 	for($i=0; $i < mysql_num_rows($rows); $i++){
		$row = mysql_fetch_array($rows);
?>
	<tr>
		<td width=50 height=50 align=center bgcolor="#DFDFDF"><?=$borad_num--?></td>
		<th width=400  align=center><a href=board_show2.php?num=<?=$row['num']?>><?=$row['title']?></a></th>
		<td width=150  align=center><?=$row['writer']?></td>
		<td width=150 align=center><?=$row['date']?></td>
	</tr>
<?
	}
?>
<tr>
<td colspan="5" align="right">
<br />
<br />
	<a href=board_write2.php><input type=button class=writebtn value=�۾���></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    </tr>	
</table>
<?
	}
function show_content($num,$id){
		$root="root";
		$connect = mysql_connect("localhost", "root", "skanf");
		$db = mysql_select_db('namulDB', $connect);
		$query = "SELECT num, title, writer, date,brand,cosname,star, content,passwd FROM board where num='".$num."';";
		$rows = mysql_query($query);
		if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			?>
            	<input type=hidden name=num value=<?=$row['num']?>>
				<tr>
				<th colspan="2" height="70" align="center"><?=$row['title']?></th>
				</tr>
				<tr height="40" bgcolor="#dfdfdf">
				<td width="600" align="right"><?=$row['writer']?></td>
				<td width="200" align="center"><?=$row['date']?></td>
				</tr>
				<tr height="40"  >
			
                <td  colspan="2" align="center"><?=$row['cosname']?> / <?=$row['brand']?></td>
				
				</tr>
				<tr height="40">
                <td align="center" colspan="2">
                <?
					for($j=0; $j<$row['star']; $j++)
						echo "��";
				?>
				</td>
				</tr>
				<tr>		
				<td colspan="2" height="300" align="center" style="vertical-align:top"><br /><?=$row['content']?></td>
				</tr>
				<tr>
				<td colspan=2 align="center">
                
				<a href=update_content.php?num=<?=$row['num']?>><input type=button class=writebtn name=edit value="����" /></a>
<?
if($id==$root){
?>
	<input type=hidden name=num value=<?=$row['num']?> />
	<input type=hidden name=passwd value=<?=$row['passwd']?> />
	<input type=submit class=writebtn name=delete value="����" />
<?		
}else{
?>
	<a href=pass_check.php?num=<?=$row['num']?>><input type=button class=writebtn name=delete value="����" /></a>
<?
}
?>
					<a href=board_list.html><input type=button  class=writebtn name=sort value="�۸��" /></a>
                    
				</td>
				</tr>
			<?
		}
}
function show_content2($num,$id){
		$root="root";
		$connect = mysql_connect("localhost", "root", "skanf");
		$db = mysql_select_db('namulDB', $connect);
		$query = "SELECT num, title, writer, date,brand,cosname, content,passwd FROM board2 where num='".$num."';";
		$rows = mysql_query($query);
		if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			?>
            	<input type=hidden name=num value=<?=$row['num']?>>
				<tr>
				<th colspan="2" height="70" align="center"><?=$row['title']?></th>
				</tr>
				<tr height="40" bgcolor="#dfdfdf">
				<td width="600" align="right"><?=$row['writer']?></td>
				<td width="200" align="center"><?=$row['date']?></td>
				</tr>
				<tr height="40"  >
			
                <td  colspan="2" align="center"><?=$row['cosname']?> / <?=$row['brand']?></td>
				
				</tr>
				<tr>		
				<td colspan="2" height="300" align="center" style="vertical-align:top"><br /><?=$row['content']?></td>
				</tr>
				<td class=title colspan=2 align="center">
                
				<a href=update_content2.php?num=<?=$row['num']?>><input type=button class=writebtn name=edit value="����" /></a>
				
<?
		if($id==$root){
?>
			
			<input type=hidden name=num value=<?=$row['num']?> />
			<input type=hidden name=passwd value=<?=$row['passwd']?> />
			<input type=submit class=writebtn name=delete value="����" />

<?		
		}else{
?>
		<a href=pass_check2.php?num=<?=$row['num']?>><input type=button class=writebtn name=delete value="����" /></a>
<?
}
?>
			<a href=board_list2.html><input type=button  class=writebtn name=sort value="�۸��" /></a>	
			</td>
			</tr>
			<?
		}
}
function update_content($num){
		$connect = mysql_connect("localhost", "root", "skanf");
		$db = mysql_select_db('namulDB', $connect);
		$query = "SELECT num, title, writer, date,brand,cosname,star, content FROM board where num='".$num."';";
		$rows = mysql_query($query); 
		if(mysql_num_rows($rows))
		{
			$row = mysql_fetch_array($rows);
			?>
            <p><img src="update.png" width="150" height="103"/><br /><br />
            
            	<input type=hidden name=num value=<?=$row['num']?>>
                
                
                <tr><td>����</td><td><input type=text class=input-write name=title value=<?=$row['title']?>></td></tr>
				<tr><td>�ۼ���</td><td><input type=date class=input-write name=date value=<?=$row['date']?>></td></tr>
				<tr><td>�ۼ���</td><td><?=$row['writer']?></td>	</tr><tr>
				<td>�귣���</td><td><input type=text class=input-write name=brand value=<?=$row['brand']?>></td></tr>
				<tr><td>ȭ��ǰ</td><td><input type=text class=input-write name=cosname value=<?=$row['cosname']?>>
                </td></tr>		
                <tr><td class=title>����</td>
                <td><input type=radio name=star value=1>��
                &nbsp;&nbsp;&nbsp;<input type=radio name=star value=2>�ڡ�
                &nbsp;&nbsp;&nbsp;<input type=radio name=star value=3>�ڡڡ�
				&nbsp;&nbsp;&nbsp;<input type=radio name=star value=4>�ڡڡڡ�
                &nbsp;&nbsp;&nbsp;<input type=radio name=star value=5>�ڡڡڡڡ�</td>	</tr>
				<tr><td>����</td><td><textarea class=input-content name=content ><?=$row['content']?></textarea></td></tr>
				<tr><td>��й�ȣ</td><td><input type=password class=input-write name=passwd></td></tr>
				<tr><td class=title colspan=2>
                                    <br />
					<input type=submit class=writebtn value="����">
					<a href=board_list.html><input type=button class=writebtn value="�۸��"></a>
					</a>


				</td>
				</tr>
			<?
		}
}
function update_record($DATA)
	{
		$connect = mysql_connect("localhost","root","skanf");
		$db = mysql_select_db('namulDB',$connect);
		$query = "SELECT passwd FROM board where num='".$DATA['num']."'";
		$result = mysql_query($query);
		if(mysql_num_rows($result))
		{
			$row = mysql_fetch_array($result);
			if($row['passwd']==$DATA['passwd'])
			{	
				$query = "update board set title='".$DATA['title']."'";
				$query .= ", date='".$DATA['date']."'";
				$query .= ", content='".$DATA['content']."'";
				$query .= ", brand='".$DATA['brand']."'";
				$query .= ", cosname='".$DATA['cosname']."'";
				$query .= ", star='".$DATA['star']."'";
				$query .= " where num='".$DATA['num']."'";
				$rows = mysql_query($query);
			}	
			else
			{
				?>
				��й�ȣ�� Ʋ���� ������ �� �����ϴ�.<br>
				<a href=board_list.html><input type=button value=�۸��></a>
				<?
			}		
		}
	}
function delete_record2($num,$passwd){
	$connect = mysql_connect("localhost", "root", "skanf");
	$db = mysql_select_db('namulDB', $connect);
	$query = "SELECT passwd,num FROM board2 where num='".$num."'";
	$rows = mysql_query($query);
	if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			if($row['passwd']== $passwd){

			 	$query = "delete from board2 where num='".$num."'";
				mysql_query($query);
				header("Location:board_list2.html");
			}
			else{
				header("Location:pass_check2.php?num=$num");
			}
	}
}
function update_content2($num){
		$connect = mysql_connect("localhost", "root", "skanf");
		$db = mysql_select_db('namulDB', $connect);
		$query = "SELECT num, title, writer, date,brand,cosname, content FROM board2 where num='".$num."';";
		$rows = mysql_query($query); 
		if(mysql_num_rows($rows))
		{
			$row = mysql_fetch_array($rows);
			?>
            	<p><img src="update.png" width="150" height="103"/><br /><br />
                <input type=hidden name=num value=<?=$row['num']?>>
				<tr><td>����</td><td><input type=text class=input-write name=title value=<?=$row['title']?>></td></tr>
				<tr><td>�ۼ���</td><td><input type=date class=input-write name=date value=<?=$row['date']?>></td></tr>
				<tr><td>�ۼ���</td><td><?=$row['writer']?></td>	</tr><tr>
				<td>�귣���</td><td><input type=text class=input-write name=brand value=<?=$row['brand']?>></td></tr>
				<tr><td>ȭ��ǰ</td><td><input type=text class=input-write name=cosname value=<?=$row['cosname']?>>
                </td></tr>		
				<tr><td>����</td><td><textarea class=input-content name=content ><?=$row['content']?></textarea></td></tr>
				<tr><td>��й�ȣ</td><td><input type=password class=input-write name=passwd></td></tr>
				<tr>
				<td class=title colspan=2>
                <br>
					<input type=submit class=writebtn value="����">
					<a href=board_list2.html><input type=button class=writebtn value="�۸��"></a>
					</a>
				</td>
				</tr>
			<?
		}
}
function update_record2($DATA)
	{
		$connect = mysql_connect("localhost","root","skanf");
		$db = mysql_select_db('namulDB',$connect);
		$query = "SELECT passwd FROM board2 where num='".$DATA['num']."'";
		$result = mysql_query($query);
		if(mysql_num_rows($result))
		{
			$row = mysql_fetch_array($result);
			if($row['passwd']==$DATA['passwd'])
			{	
				$query = "update board2 set title='".$DATA['title']."'";
				$query .= ", date='".$DATA['date']."'";
				$query .= ", content='".$DATA['content']."'";
				$query .= ", brand='".$DATA['brand']."'";
				$query .= ", cosname='".$DATA['cosname']."'";
				$query .= " where num='".$DATA['num']."'";
				$rows = mysql_query($query);
			}	
			else
			{
				?>
				��й�ȣ�� Ʋ���� ������ �� �����ϴ�.<br>
				<a href=board_list2.html><input type=button value=�۸��></a>
				<?
			}		
		}
	}
	// ȭ��ǰ�� �˻��ϴ� �Լ�
	function search_name($name) {
		$connect = mysql_connect("localhost","root","skanf");
		mysql_select_db('namulDB',$connect);
		// �˻��� ���� ��ü �̸��� �ƴϾ �˻��ϱ�
		if(isset($_REQUEST['search1'])) {
		$sql="select * from cosmetic where name like '%".$name."%'";
		$rows = mysql_query($sql);
		if(mysql_num_rows($rows)) {
		?>
		<table width="800" border=1 bordercolor="#CCCCCC" cellspacing=0>
			<tr height="50" bgcolor="#CCCCCC">
				<th align=center width=200>�귣��</th>
				<th image align=center width=300>����</th>
				<th align=center width=300>ȭ��ǰ��</th>
			</tr>
		<?
			for($i=0;$i<mysql_num_rows($rows);$i++) {
				$row = mysql_fetch_array($rows);
				?>
				<tr>
					<td align="center"><?=$row['brand']?></td>
					<td align="center"><img class=cospic src="<?=$row['image']?>"</td>
					<td align="center"><a href="show_info.php?_id=<?=$row['_id']?>"><?=$row['name']?></a></td>
				</tr>
			<?
			}
		?>
		</table>
		<?
		} else
			echo "�Է��Ͻ� ȭ��ǰ�� �������� �ʽ��ϴ�.";
		} else if (isset($_REQUEST['search2'])) {
		$sql="select * from cosmetic where harm like '%".$name."%'";
		$rows = mysql_query($sql);

		if(mysql_num_rows($rows)) {
		?>
		<table width="800" border=1 bordercolor="#CCCCCC" cellspacing=0 >
			<tr bgcolor="#CCCCCC" height="50">
				<td align=center width=150>�귣��</td>
				<td align=center width=250>ȭ��ǰ��</td>
				<td align=center width=400>���ؼ���</td>
			</tr>
		<?
			for($i=0;$i<mysql_num_rows($rows);$i++) {
				$row = mysql_fetch_array($rows);
				?>
				<tr>
					<td align=center><?=$row['brand']?></td>
					<td align=center ><a href="show_info.php?_id=<?=$row['_id']?>"><?=$row['name']?></a></td>
                    <td><?=$row['harm']?></td>
				</tr>
			<?
			}
		?>
		</table>
		<?
		} else
			echo "�Է��Ͻ� ���и��� �������� �ʽ��ϴ�.";
		}
	}
	function show_harmlist(){
		$connect = mysql_connect("localhost", "root", "skanf");
		mysql_select_db('namulDB', $connect);
		$sql = "select * from harm";
		$rows = mysql_query($sql);
		if(mysql_num_rows($rows)) {
			?>
            <table border=1 bordercolor="#CCCCCC"  cellspacing=0 width=800>
		<br>
            	<tr height="50" bgcolor="#CCCCCC">
                <th align=center>���ؼ��и�</th>
                <th align=center>���ؿ���</th>
                </tr>
            <?
			for($i=0; $i<mysql_num_rows($rows); $i++) {
				$row = mysql_fetch_array($rows);
			?>
            	<tr height="30">
                <td align=center><?=$row['name']?></td>
                <td align=center><?=$row['effect']?></td>
             	</tr>
            <?
			}
			echo "</table>";
		}
	}
	// ���ص� ����
	function harm_score($id){
		$connect = mysql_connect("localhost","root","skanf");
		mysql_select_db('namulDB',$connect);
		$sql="select harm from cosmetic where _id='".$id."'";
		$rows = mysql_query($sql);
		$row = mysql_fetch_array($rows);
		if($row[0]!="����")
		{
		$tok = explode(",", $row[0]);
		$harm_num = count($tok);
		$score = 100-5*$harm_num;
		echo $score;
		}
		else
		{
			$score = 100;
			echo $score;
		}
	}
	// ȭ��ǰ�� Ŭ�������� ��ü ���� ����ϴ� �Լ�
	function show_info($id) {
		$connect = mysql_connect("localhost","root","skanf");
		mysql_select_db('namulDB',$connect);
		$sql="select * from cosmetic where _id='".$id."'";
		$rows = mysql_query($sql);
		if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			?>
            <p align="center"><img src="result.png" width="150" /></p>
            <br />
            <br />
            
			<table width="800" border=1 bordercolor="#CCCCCC" cellspacing="0" cellpadding="20">
				<tr >
					<td width=400 align="center"><img class=cospic2 src="<?=$row['image']?>"</td>
					<td width=400 >
                        &nbsp;&nbsp;&nbsp;&nbsp;<b>�귣���</b> : <?=$row['brand']?><br><br />
						&nbsp;&nbsp;&nbsp;&nbsp;<b>ȭ��ǰ��</b> : <?=$row['name']?><br><br />
						&nbsp;&nbsp;&nbsp;&nbsp;<b>ī�װ�</b> : <?=$row['category']?><br><br />
						&nbsp;&nbsp;&nbsp;&nbsp;<b>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</b> : 
						<?=$row['price']?>��</td>
				</tr>
				<tr>
   				<td colspan=2>
                <br />
                    
					<div class=list>
                    <p align="center"><b> ������  </b></p>
					<?=$row['ingredient']?></div></td>
				</tr>
				<tr>
					<td>
						<div class=list><b>���ؼ���</b><br><?=$row['harm']?></div>
						
						<div class=list><b>���ص� ����</b><br><? harm_score($id) ?> ��</div></td>
					<td><p align="center"><b>�˷����⼺�� </b></p><br>
						<div class=list><?=$row['allergy']?></div></td>
				</tr>
			</table>
                <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />  
    <br />
    <br />
			<?
		}
	}
function gongji_list($id){
	$root="root";
	$connect = mysql_connect("localhost","root","skanf");
	$db = mysql_select_db("namulDB",$connect);
	$query = "SELECT num,title,date,content FROM gongji ";
	$rows= mysql_query($query);
	$gongji_num = mysql_num_rows($rows);
?>
	<table cellspacing=0  >
         <tr bgcolor="#CCCCCC">
		<th width=50 height=40 align=center  >����</th>
		<th width=400 align=center>������</a></th>
        <th width=150 align=center>��¥</th>   
		<th width=150 align=center>�۾���</th>
        
		 	
    </tr>
<?
 	for($i=0; $i < mysql_num_rows($rows); $i++){
		$row = mysql_fetch_array($rows);
?>
	<tr>
		
		<td width=50 height=50 align=center bgcolor="#DFDFDF"><?=$gongji_num--?></td>
		<th width=400  align=center><a href=gongji_show.php?num=<?=$row['num']?>><?=$row['title']?></a></td>
		<td width=150  align=center><?=$row['date']?></td>
		<td width=150  align=center>������</td>
		
	</tr>
<?
	}
	if($id==$root){
?>

<tr>
<td colspan="5" align="right">
<br />
<br />
	<a href=gongji_write.php><input type=button class=writebtn value=�۾���></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    </tr>
	

<?
}
?>
</table>
<?
}
function gongji_show_content($num,$id){
		$root="root";
		$connect = mysql_connect("localhost", "root", "skanf");
		$db = mysql_select_db('namulDB', $connect);
		$query = "SELECT num, title,date,content FROM gongji where num='".$num."';";
		$rows = mysql_query($query);
		if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			?>
            	<input type=hidden name=num value=<?=$row['num']?>>
				<tr>
				<th colspan="2" height="70" align="center"><?=$row['title']?></th>
				</tr>
				<tr height="40" bgcolor="#dfdfdf">
				<td width="600" align="right"><?=$row['date']?></td>
				<td width="200" align="center">������</td>
				</tr>
                
				<tr>		
				<td colspan="2" height="300" align="center" style="vertical-align:top"><br /><?=$row['content']?></td>
				</tr>
				<tr>
				<td colspan=2 align="center">
<?
				if($id==$root){
?>
					<a href=gongji_delete.php?num=<?=$row['num']?>><input type=button class=writebtn name=delete value="����" /></a>

<?
				}
?>
					<a href=gongji_list.html><input type=button class=writebtn name=sort value="�۸��" /></a>
				</td>
				</tr>

			<?
		}
}
function gongji_delete_record($num){
	$connect = mysql_connect("localhost", "root", "skanf");
	$db = mysql_select_db('namulDB', $connect);
	$query = "SELECT num FROM gongji where num='".$num."'";
	$rows = mysql_query($query);
	if(mysql_num_rows($rows)) {
			$row = mysql_fetch_array($rows);
			 	$query = "delete from gongji where num='".$num."'";
				mysql_query($query);
				header("Location:gongji_list.html");
	}
}
function Insert_gongji($_POST){
	global $result;
	$connect=mysql_connect("localhost","root","skanf");
	$db=mysql_select_db('namulDB',$connect);
	if(isset($_POST)){
	
	$sql="insert into gongji(num,title,date,content)";
	$sql .= "values(NULL,'".$_POST['title']."','".$_POST['date']."','".$_POST['content']."')";
	$result=mysql_query($sql);
	}
}
function ranking($select){
	$connect = mysql_connect("localhost", "root", "skanf");
	$db = mysql_select_db('namulDB', $connect);
	$query = "SELECT * FROM cosmetic";
	$rows = mysql_query($query);
	$rank = (100 - $select) / 5;
	$arr_count=0;
	$arr_id;
	for($i=0; $i<mysql_num_rows($rows); $i++)
	{
		$row = mysql_fetch_array($rows);
		if($rank==0)
		{
			if($row['harm']=="����")
			{
				$arr_id[$arr_count++] = $row["_id"];
			}

		}
		else
		{
			$tok = explode(",", $row['harm']);
			if($rank == count($tok) || (($rank-1 == count($tok)) && $tok[0] != "����"))
				$arr_id[$arr_count++] = $row["_id"];
		}
	}
	?>
        <table  border=1 align="center" cellspacing=0 bordercolor="#dfdfdf">

    <?
	for($i=0; $i<count($arr_id); $i++)
	{
		$query="select * from cosmetic where _id='".$arr_id[$i]."'";
		$rows = mysql_query($query);
		if(mysql_num_rows($rows)) {
				$row = mysql_fetch_array($rows);
				?>
				<tr height="200">
					<td width="200" align="center"><a href="show_info.php?_id=<?=$row['_id']?>">
                    <img class=bestpic src="<?=$row['image']?>" /></a></td>
					<td width="600" bgcolor="#EAEAEA">
                    <a href="show_info.php?_id=<?=$row['_id']?>">
                    <div class=bestlist>                    
					<?=$row['brand']?><br />
					<?=$row['name']?> <br />
					<b><?=harm_score($row['_id'])."��"?></b>              
                    </div>
                    </a>
                    </td>
                 
				</tr>
		
        <?
		}
	}
	?>
    </table>
    <?
}
?>