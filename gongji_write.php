<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
		<h1>글쓰기</h1>
		<table>
		<form method=post action=gongji_save.php >
			<tr><td>제목</td><td><input type=text name=title></td></tr>
			<tr><td>날짜</td><td><input type=date name=date></td></tr>
			<tr><td>내용</td><td><textarea name=content cols=20 rows=5></textarea></td></tr>
			<tr><td></td><td><input type=submit value="저장" name=save><input type=reset value="다시쓰기"></td></tr>
		</form>
		</table>
	</section>


</body>
</html>