<?
if(!isset($_SESSION)) session_start();
include("gs_db.php");
include("gs_top.html");
ensure_logged_in();
?>
<html>
<head>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	a{
		text-decoration: none;
	}
	td.title{
		display: inline-block;;
		width: 100px;
		text-align: center;
	}
	.content{
		width:900px;
		margin: 50px auto;
	}
	</style>
	<body>
		<div class=content>
			<form method=post action=gs_update.php>
				<table width=600 border=1 cellspacing=0>
					<?
					update_record($_POST);
					?>
				</table>
			</form>
		</div>
	<? include("gs_bottom.html"); ?>