<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
 	  
   		<form method=post action="delete2.php">
		<input type=hidden name=num value=<?= $_GET['num']?>>
		  <div id=all>
		<fieldset>
			<legend> 작성자 정보</legend>
            <table width="350" align="center">
            <tr align="center" >
			<td >비밀번호</td>
            <td><input type=text class=input-del name=passwd id="passwd"/></td>
            </tr>
           <tr>
           <td align="center" colspan="2">
           	<div id=btn>
			<input type=submit class=delbtn value="확인"/>
			<a href=board_list2.html><input type=button class=delbtn value="글목록"/></a>
            </div>
            </td>
            </tr>
 			</table>
		</fieldset>     
        </div>
	
	</form>


    
  

    
    
	</section>

</body>
</html>