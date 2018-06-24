<?
function is_passwd_correct($id, $passwd, &$name)
{
	$connect = mysql_connect("localhost", "root", "apmsetup");
	$db=mysql_select_db("db_ip", $connect);
	//$query="SELECT name FROM member WHERE id="'.$id.'"and passwd="'.$passwd.'"";
	$query="SELECT name FROM member WHERE id='".$id."'and passwd='".$passwd."'";
	$rows=mysql_query($query);
	if(mysql_num_rows($rows))
	{
		$row=mysql_fetch_row($rows);
		$name=$row[0];
		return true;
	}
	else
	{
		return false;
	}
}

function ensure_logged_in()
{
	if(!isset($_SESSION['id']))
	{
		$_SESSION['flash']="You can use Board only when you login.";
		
	}
}

function board_list()
{ 
	$connect = mysql_connect("localhost", "root", "apmsetup");
	$db = mysql_select_db("db_ip", $connect);
	$query="SELECT num, title, name, date FROM board";
	$rows = mysql_query($query);
	
	?>
	<table width=600 border=1 cellspacing=0>
		<?
		for($i=0; $i<mysql_num_rows($rows); $i++)
		{
			$row = mysql_fetch_array($rows);
			?>
			<tr>
				<td width=50><?=$row['num']?></td>
				<td width=350><a href=gs_board_show.php?num=<?=$row['num']?>><?=$row['title']?></a></td>
				<td width=100><?=$row['name']?></td>
				<td width=100><?=$row['date']?></td>
			</tr>
			<?
		}
		?>
	</table>
	<?
}

function insert_data($_POST)
{
	$mydb=mysql_connect("localhost", "root", "apmsetup");
	mysql_select_db("db_ip", $mydb);

	$sql="insert into board(title, name, passwd, date, contents)";
	$sql.=" values('".$_POST["title"]."', '".$_POST["name"]."', '".$_POST["passwd"]."', '".$_POST["date"]."', '".$_POST["contents"]."')";

	$result=mysql_query($sql);
}

function show_content($num)
{
	$connect = mysql_connect("localhost", "root", "apmsetup");
	$db = mysql_select_db("db_ip", $connect);
	$query = "SELECT * from board where num='".$num."'";
	$rows = mysql_query($query);
	if(mysql_num_rows($rows))
	{
		$row=mysql_fetch_array(($rows));
		?>
		
		<tr>
			<td>number</td>
			<td><?=$row['num']?></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><?=$row['title']?></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><?=$row["date"]?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?=$row["name"]?></td>
		</tr>
		<tr>
			<td>Contents</td>
			<td><textarea rows=10 cols=60><?=$row["contents"]?></textarea></td>
		</tr>
		<tr>
			<td colspan=2 allgin=center>
				<a href=gs_update_content.php?num=<?=$num?>><input type=button value="modify">
					<a href=gs_pass_check.php?num=<?=$num?>><input type=button value="delete">
						<a href=gs_board.html><input type=button value="list">
						</td>
					</tr>
					<?
				}
			}

		function delete_record($num, $passwd)
		{
				$connect = mysql_connect("localhost", "root", "apmsetup");
				$db = mysql_select_db("db_ip", $connect);
				$query = "SELECT * from board where num='".$num."'";
				$rows = mysql_query($query);
				if(mysql_num_rows($rows))
				{
					$row=mysql_fetch_array(($rows));
					if( strcmp($passwd,$row['passwd'])==0)
					{
						$dquery = "DELETE from board where num='".$num."'";
						mysql_query($dquery);
						echo"Delete Complete";
						?>
						<a href="gs_board.html"><input type = button value="Board list"></a>
						<?

						
					}
					else
					{	$_SESSION['flash']="Wrong password.";
					header("Location: gs_pass_check.php?num=$num");
					}
				}

		}

		function update_content($num)
		{
			$connect = mysql_connect("localhost", "root", "apmsetup");
	$db = mysql_select_db("db_ip", $connect);
	$query = "SELECT * from board where num='".$num."'";
	$rows = mysql_query($query);
	if(mysql_num_rows($rows))
	{
		$row=mysql_fetch_array(($rows));
	?>
		
		<tr>
			<td>number</td>
			<td><input type=hidden name="num" value=<?=$row['num']?>><?=$row['num']?></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type=text name="title" value=<?=$row['title']?>></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type=date name="date" value=<?=$row['date']?>></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?=$row["name"]?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type=password name="passwd"> </td>
		</tr>
		<tr>
			<td>Contents</td>
			<td><textarea rows="10" cols="60" name="contents"><?=$row["contents"]?>	</textarea></td>
		</tr>
		<tr>
			<td colspan=2 allgin=center>
				<a href=gs_update.php?num=<?=$num?>><input type=submit value="save"></a>
					
				<a href=gs_board.html><input type=button value="list"></a>
			</td>
		</tr>
	<?

		}
	}

	function update_record($_POST)
	{
	$connect = mysql_connect("localhost", "root", "apmsetup");
	$db = mysql_select_db("db_ip", $connect);
	$query = "SELECT * from board where num='".$_POST['num']."'";
	$rows = mysql_query($query);
	if(mysql_num_rows($rows))
		{
			$row=mysql_fetch_array(($rows));
	if( strcmp($_POST['passwd'],$row['passwd'])==0)
		{
			$uquery = "UPDATE board SET contents='".$_POST['contents']."', title='".$_POST['title']."', date='".$_POST['date']."' where num='".$_POST['num']."'";
			mysql_query($uquery);
			echo"Update Complete";
			echo" '".$_POST['passwd']."'='".$row['passwd']."'";
			show_content($_POST['num']);
				
		}
	else
			{
				echo"wrong password";
			?>
				<a href="gs_board.html"><input type = button value="Board list"></a>
<?
			 }
		}
	}

	?>