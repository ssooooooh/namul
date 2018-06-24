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
		
			echo "<table><tr>제목<td></td><td>".$_POST['title']."</td></tr>
				<tr><td>내용</td><td>".$_POST['date']."</td></tr>
				<tr><td>작성자</td><td>관리자</td></tr>
				<tr><td>내용</td><td>".$_POST['content']."</td></tr>
				<tr><td colspan=2><a href=gongji_write.php><input type=button value=글쓰기></a>
				<a href=gongji_list.html><input type=button value=목록></a></td></tr>
		</table>";
		
	}
	
	
	
?>
	</section>


</body>
</html>		
