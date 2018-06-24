<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
		<div class=content>
		<form method=post action=delete.php>
 			<table width="800" border="1"  bordercolor="#dfdfdf"cellspacing=0 >
 			<?
  				show_content($_REQUEST['num'],$_SESSION['id']);
 			?>

 			</table>
 			</form>
		</div>
    <br />
    <br />
        <br />
    <br />
        <br />
    <br />
        <br />
    <br />
    
	</section>



</body>
</html>
</body>
</html>