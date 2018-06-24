<?
if(!isset($_SESSION)) session_start();
include("gs_db.php");
ensure_logged_in();
include("gs_top.html");
?>

<html>
<head>
	<style>
	*{
		margin:0;
		padding:0;
	}
	a{
		text-decoration: none;
	}
	td.title{
		display: inline-block;;
		width: 100px;
		text-align:center;
	}
	.content{
		width:900px;
		margin: 50px auto;
	}
	</style>
</head>
<body>
	<div class=content> 
		<table width=600 border=1 cellspacing=0>
			<?
			show_content($_REQUEST['num']);
			?>
		</table>
	</div>

<? include("gs_bottom.html"); ?>
