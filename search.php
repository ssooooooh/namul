<?
	if($_POST['search'] == "cosmetic")
	{
		$_POST['search1'] = 1;
		header("Location:cosmetic.php?search1=".$_POST['searchtext']);
	}
	else if($_POST['search'] == "ingredient") 
	{
		$_POST['search2'] = 1;
		header("Location:ingredient.php?search2=".$_POST['searchtext']);
	}
?>