<?
	include("top.html");

	if($_POST[check]!=yes)
	{
?>
		<script language=javascript>
			alert('약관에 동의하세요');
		</script>
        <br />
        <br />
        <p align="center"><img src="loginlogo.png" /></p><br><br />
        <br />
		<p align="center"><a href="member.html"><input type=button class=mainbtn value="회원가입창으로 돌아가기"></a><p>
<?
	}else{
?>
<br /><br /><br />
	<h3><p align=center>입력하신 정보는 다음과 같습니다.<p></h3>
    <br /><br /><br />
    
    <div align="center">
	<?
		$connect = mysql_connect("localhost","root","skanf");
		mysql_select_db("namulDB",$connect);

		if(isset($_POST[id]))
		{
			$sql="insert into member (id,passwd,name,gender,cell,skintype,brand)";
			$sql.=" values ('".$_POST[id]."','".$_POST[passwd]."','".$_POST[name];
			$sql.="','".$_POST[gender]."','".$_POST[phone1]."-".$_POST[phone2]."-".$_POST[phone3];
			$sql.="','".$_POST[skintype]."','".$_POST[brand]."')";
			$send=mysql_query($sql);
		}

		$sql2="select * from member where id='".$_POST[id]."'";
		$result = mysql_query($sql2);

		
		if($result)
		{
	?>
			<table width="700" border="1" bordercolor="#CCCCCC" cellspacing="0">
				<tr bgcolor="#dfdfdf" height="50">
					<td width=100 align=center>아이디</td>
					<td width=100 align=center>이름</td>
					<td width=100 align=center>성별</td>
					<td width=150 align=center>핸드폰 번호</td>
					<td width=100 align=center>피부 타입</td>
					<td width=100 align=center>선호 브랜드</td>
				</tr>

	<?
			while($row = mysql_fetch_row($result))
			{
	?>
				<tr height="50">
					<td align=center><?=$row[0]?></td>
					<td align=center><?=$row[2]?></td>
					<td align=center><?=$row[3]?></td>
					<td align=center><?=$row[4]?></td>
					<td align=center><?=$row[5]?></td>
					<td align=center><?=$row[6]?></td>
				</tr>
				</table>

	<?
			}
		}else
			die("오류발생");
		mysql_close($connect);
	?>
    <br />
    <br />
	<a href="main.html"><input type=button class=writebtn value=확인></a>
    
    </div>
<?
	}
?>
</body>
</html>