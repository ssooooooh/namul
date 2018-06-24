<? include("top.html") ?>
	<section>
		<form method=post action=cosmetic.php>
			<img src="name.png" width="160" height="55" /><br /><br />
			<input type=text class=input-menu name=search1>
            <input type=submit class=menubtn value=°Ë»ö>
		</form>
        <br /><br />
		<?= search_name($_REQUEST['search1']) ?>
	<br />
    <br />
    </section>
    
</body>
</html>