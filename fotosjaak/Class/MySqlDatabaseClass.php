<?php

// het config.php bestand word ingesloten in het bestand van MySqlDatabaseClass.php
//zodat we gebuik kunnen maaken van de daar gedefineerde constanten
require_once('config/config.php');

//dit is de class definitie va de mySqlDataseClass
	class MySqlDatabaseClass
	{
		
		//field
		private $db_connection; 
		//constructor in PHP heeft altijd dezelftde  __construct
		public function __construct()
		{
			//maakt contact met de mysql-server
			$this-> db_connection = mysql_connect(SERVERNAME, USERNAME, PASSWORD);
			
			//selecteer een database
			mysql_select_db(DATSBSDRNAME, $this->db_connection)
				or die('MySqlDatabaseClass: '.mysql_error());
		}
		
		//dit is een methode(fintie binnen een class)die slq-quey's kan afvuren op de database
		//het resultaat wordt dan teruggegeven door de methode
		public function fire_query($query)
		{
			//struurt de query die meegegeven is als argument van de functie fire_query
			//naar de database
			$resuls =mysql_query($query, $this->db_connection)
					or die('MySqlDatabaseClass:'.mysql_error());
			return $resuls;
		}
		
	}
	//maakt nu een object (instantie)vna de MySqlDatabaseClass
	$database = new MySqlDatabaseClass();
	echo "dit is een testpagina";
	
	//we gaan alle records uit de tbel faq selecteren

		$query = "SELECT * form 'faq'";
		$result = $database->fire_query($query);
		while ($row = mysql_fetch_array($result));
		{
			echo $rw ['answer_dutch']."<br>";	
		}
		
		echo "<hr>"; 
		while ($row = mysql_fetch_array($database->fire_query(SELECT * form 'faq');));
		{
			echo $rw ['answer_dutch']."<br>";	
		}
?>