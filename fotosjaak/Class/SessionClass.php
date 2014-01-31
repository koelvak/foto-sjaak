<?php
	class SeccionClass
	{
		//fields
		private $id;
		private $email;
		private $userrole;
		private $logged_in = false;
			
		//properties
		
		
		//costructor
		 public function __construct()
		{
				
		}
		
		//Moethod login	
		public function login($loginClassObject)
		{
				$this->id = $_SESSION['id']	= $loginClassObject->get_id();
				$this->email = $_SESSION['email']	= $loginClassObject->get_email();
				$this->userrole = $_SESSION['userrole']	= $loginClassObject->get_userrole();
				$this->logged_in = $_SESSION ['logged in'] = true;
				
		}
	}
	$session = new SeccionClass();
?>