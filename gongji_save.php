<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
<?
		$result;
	Insert_gongji($_POST);
	
	if($result){
		
			echo "<table><tr>����<td></td><td>".$_POST['title']."</td></tr>
				<tr><td>����</td><td>".$_POST['date']."</td></tr>
				<tr><td>�ۼ���</td><td>������</td></tr>
				<tr><td>����</td><td>".$_POST['content']."</td></tr>
				<tr><td colspan=2><a href=gongji_write.php><input type=button value=�۾���></a>
				<a href=gongji_list.html><input type=button value=���></a></td></tr>
		</table>";
		
	}
	
	
	
?>
	</section>


</body>
</html>		
