<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
    <form method=post action=board_list.html >
    
		<p><img src="write.png" width="150" height="103"/><br /><br />
		<table width="800" align="center"  cellspacing="10">
		
			<tr><td>����</td><td><input type=text class=input-write name=title2></td></tr>
			<tr><td>�ۼ���</td><td><input type=date class=input-write  name=date2></td></tr>
			<tr><td>��й�ȣ</td><td><input type=password class=input-write name=passwd2></td></tr>
			<tr><td>�귣��</td><td><input type=text class=input-write name=brand2></td></tr>
			<tr><td>ȭ��ǰ</td><td><input type=text class=input-write name=cosname2></td></tr>
			<tr><td>����</td><td><input type=radio name=star2 value=1>��
            &nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=2>�ڡ� 
            &nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=3>�ڡڡ� 
        	&nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=4>�ڡڡڡ� 
         	&nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=5>�ڡڡڡڡ� </td></tr>
			<tr><td>����</td><td><textarea class=input-content name=content2 ></textarea></td></tr>
			<tr>
            <td>
            </td>
            <td>
            <br />
            <input type=submit class=writebtn value="����" name=save> &nbsp;&nbsp;&nbsp;
            <input type=reset class=writebtn value="�ٽþ���">
            <br />
            </td>
            </tr>
			<input type=hidden name=name value=<?=$_SESSION['name'] ?>>
		
		</table>
        <input type=hidden name=type value="write" />
        </form>
    <br />
    <br />
    <br />     
     <br />
    <br />
    <br />         <br />
    <br />
    <br />           
	</section>



</body>
</html>