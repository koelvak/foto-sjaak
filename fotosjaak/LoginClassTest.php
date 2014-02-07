<h3> dit is de login class test pagina </h3><hr>
<?php
		//voeg het bestand LoginClass.php in
	require_once("Class/LoginClass.php");

	$login = new LoginClass();

	$query = "SELECT * from 'users'";
	$query = "SELECT * from `users`";

	$result = LoginClass::find_all_records();
	
	foreach ($result as $value)
	
	{
		echo $values->get
	}
	/*{
			echo $value->getLogin_id()." | ".
			 	 $value->getEmail()." | ".
			     $value->getPassword()." | ".
             	 $value->getUserrole()." | ".
                 $value->getIsactivated()." | ".
                 $value->getRegisterdate()."<br>";
				 
			 	 
	}
	*/	
	
		
	
?>