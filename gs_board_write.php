<?
if(!isset($_SESSION))
{
	session_start();
}

include("gs_db.php");
ensure_logged_in();
include("gs_top.html");

?>


	<h1>Write</h1>

	<form method=post action=gs_save.php>
	Subject<input type=text name="title"><br>
	Date<input type=date name="date"><br>
	Password<input type=password name="passwd"><br>
	Contents<textarea name="contents"></textarea><br>
	<input type=hidden name=name value=<?=$_SESSION['name']?>>
	<input type=submit value="save">
	<input type=reset value="rewrite">
</form>
</div>
				<div class="tab-item">
					<h3>administer info</h3><br>
					<hr/><br>


				</div>

			</div>

			<div id="right-side">

			</div>
		</div>
	</div>
</body>
</html>
