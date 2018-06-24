<? include("top.html") ?>
	<section>
    
		<form method=post action=ingredient.php>
        	<ul>
                <li><img src="sung.png" width="160" height="62" /><br /><br />
                <input type=text class=input-menu name=search2>
                <input type=submit class=menubtn value=°Ë»ö></li>
                <li><br><a href="ingredient.php?list=1"><img src="20.png"  /></a></li>
            </ul>
            <br>
		</form>
		<?
        	search_name($_REQUEST[search2]);
			if($_REQUEST['list']==1)
				show_harmlist();	
		?>
        <br />
        <br />
	</section>
</body>
</html>