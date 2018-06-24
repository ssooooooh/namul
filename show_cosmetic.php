<?
	$connect = mysql_connect("localhost", "root", "skanf");
	$db = mysql_select_db('namulDB', $connect);
	$sql = "select * from cosmetic";
	$rows = mysql_query($sql);
	
	if(mysql_num_rows($rows))
	{
	?>
		<table border=1>
	<?
		for($i=0; $i<mysql_num_rows($rows); $i++)
		{
			$row = mysql_fetch_array($rows);
	?>	
		<tr>
	<?
			for($j=0; $j<mysql_num_fields($rows); $j++)
			{
			?>
				<td width=100><?=$row[$j]?></td>
			<?
			}
	?>
		</tr>
	<?
		}
	}
	?>
	</table>
	<?
?>		