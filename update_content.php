<?
	include("ensure.php");
	ensure_logged_in();
	include("top.html");
?>
	<section>

<div class=content>
	<form method=post action=board_list.html>
		<table width="800" align="center"  cellspacing="10">
		<?
			update_content($_REQUEST['num']);
		?>
		</table>
        <input type=hidden name=type value="update" />
	</form>

<br />
<br />
<br />

</div>


	</section>
</body>
</html>
