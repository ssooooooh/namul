<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
		<h1>�۾���</h1>
		<table>
		<form method=post action=gongji_save.php >
			<tr><td>����</td><td><input type=text name=title></td></tr>
			<tr><td>��¥</td><td><input type=date name=date></td></tr>
			<tr><td>����</td><td><textarea name=content cols=20 rows=5></textarea></td></tr>
			<tr><td></td><td><input type=submit value="����" name=save><input type=reset value="�ٽþ���"></td></tr>
		</form>
		</table>
	</section>


</body>
</html>