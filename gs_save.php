<?
	if(!isset($_SESSION)) 	session_start();
	
	include("gs_db.php");

	ensure_logged_in();

	insert_data($_POST);
include("gs_top.html");
	
?>

<table>

	<tr>
		<td>����</td>
		<td><?= $_POST['title']?></td>
	</tr>
	<tr>
		<td>�ۼ���</td>
		<td><?= $_POST['date']?></td>
	</tr>
	<tr>
		<td>�ۼ���</td>
		<td><?= $_POST['name']?></td>
	</tr>
	<tr>
		<td>����</td>
		<td><?= $_POST['contents']?></td>
	</tr>
	<tr>
		<td colspan=2><a href=gs_board_write.php><input type=button value=�۾���></a><a href=gs_board.html><input type=button value=��Ϻ���></a></td>
	</tr>
</table>

<? include("gs_bottom.html"); ?>