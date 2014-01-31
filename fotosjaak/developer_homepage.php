<?php
        $userrole = array('root', 'developer');
        include("security.php");
?>


<h3>Welkom op uw develper pagina</h3>
uw id is: <?php echo $_SESSION['id']; ?><br>
uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>