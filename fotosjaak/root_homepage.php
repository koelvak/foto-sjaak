<?php
	
	$userrole = array('root');
	include("security.php")
	if (!isset(S_SESSION['id']))
	{
	echo "u bent niet ingelocht. u heeft geen toegang \<br>
		u wort doorgestuurt naar de inlochpagina";
		
		header("refresh:4; url=index.php?content=login");
		exit();
	}
	else if ( in_array($_SESSION['userrole'], $userrole)
	{
	echo "u bent niet bevoegt om deze pagina te bekijken";
		header("refresh:5; url=index.php?content=".$_SESSION['userrole']."_homepage");
		exit();
	}
	
	
	?>





<h3>welkom root : <?php echo $_SESSION['id']; ?>
uw userrol is: <?php $_SESSION ['userrol']; ?>