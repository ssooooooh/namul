<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>
		<div class=content>
		<form method=post action=delete2.php>
 			<table width="800" border="1"  bordercolor="#dfdfdf"cellspacing=0 >
 			<?
  				show_content2($_REQUEST['num'],$_SESSION['id']);
 			?>

 			</table>
			</form>
		</div>

	</section>


</body>
</html>
</body>
</html>