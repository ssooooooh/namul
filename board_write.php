<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
    <form method=post action=board_list.html >
    
		<p><img src="write.png" width="150" height="103"/><br /><br />
		<table width="800" align="center"  cellspacing="10">
		
			<tr><td>제목</td><td><input type=text class=input-write name=title2></td></tr>
			<tr><td>작성일</td><td><input type=date class=input-write  name=date2></td></tr>
			<tr><td>비밀번호</td><td><input type=password class=input-write name=passwd2></td></tr>
			<tr><td>브랜드</td><td><input type=text class=input-write name=brand2></td></tr>
			<tr><td>화장품</td><td><input type=text class=input-write name=cosname2></td></tr>
			<tr><td>별점</td><td><input type=radio name=star2 value=1>★
            &nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=2>★★ 
            &nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=3>★★★ 
        	&nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=4>★★★★ 
         	&nbsp;&nbsp;&nbsp;<input type=radio name=star2 value=5>★★★★★ </td></tr>
			<tr><td>내용</td><td><textarea class=input-content name=content2 ></textarea></td></tr>
			<tr>
            <td>
            </td>
            <td>
            <br />
            <input type=submit class=writebtn value="저장" name=save> &nbsp;&nbsp;&nbsp;
            <input type=reset class=writebtn value="다시쓰기">
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