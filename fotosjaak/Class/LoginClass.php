<?php
        require_once('MySqlDatabaseClass.php');
        
        //Dit is de class-definitie van de LoginClass
        class LoginClass
        {
                //Fields
                private $login_id;
                private $email;
                private $password;
                private $userrole;
                private $isactivated;
                private $registerdate;
				
				//properties
				//getter voor $login_id
                public function getLogin_id(){return $this->login_id; }
              	public function getEmail(){return $this->email; }
                public function getPassword(){return $this->password; }
				public function getUserrole(){return $this->userrole; }
				public function getIsactivated(){return $this->isactivated; }
				public function getRegisterdate(){return $this->registerdate; }
				
				
                // De constructor van de LoginClass
                public function __constructor()
                {
                                                
                }
                
                // Method
                
                public static function find_all_records()
                {
                	$query = "SELECT * from `login`";
					return self::find_by_sql($query);
                } 
				
				
                public static function find_by_sql($sql)
                {
                        // global zorgt ervoor dat $database ook binnen de haakjes
                        // van de find_by_sql method bekent is.        
                        global $database;
                        //var_dump($database);
                        //Roep de fire_query method aan met het $database object
                        $result = $database->fire_query($sql);
                        
                        // Hier wordt een array gedefinieerd. Dit array gaat
                        // LoginClass-objecten bevatten.
                        $object_array = array();
                        
                        // Met deze while-lus vullen we het $object-array met LoginClass-objecten
                        while ($row = mysql_fetch_array($result))
                        {
                                //Maak een nieuw LoginClass-object aan per while ronde        
                                $object = new LoginClass();
                                //var_dump($object);
                                //Vul de velden van het LoginClass-object met de gevonden record-
                                //waarden uit de tabel
                                $object->login_id         = $row['id'];
                                $object->email            = $row['e-mail'];
                                $object->password         = $row['password'];
                                $object->userrole         = $row['userrole'];
                                $object->isactivated      = $row['isactivated'];
                                $object->registerdate     = $row['registerdate'];
								
								  //Stop het $object gemaakt van de LoginClass
                                //in het objectarray genaamd
                                //$object_array
								$object_array[] = $object;
						}
						
						
						return $object_array;
						
					}	
                              
														
															
								public static function check_if_email_password_exist($email, $password)
								{
									global $database;
									$query = 	"SELECT * 
												FROM 		`login` 
												WHERE		`e-mail` 	= '".$email."'
												AND 		`password` 	= '".$password."'";
												
												$result = $database->fire_query($query);
												
												return mysql_num_rows($result);
								}
								
								public static function find_login_user($email, $password)
								{
									/* gebruik het $database object dar wordt toegevoegd met
									 * require-once
									 */
									  global $database;
									 
									 /* dit is query die alle records selecteerd met het ingevulde
									  * emailadress en password afkomstis van het formulier
									  */
									 	$query = 	"SELECT * 
												FROM 		`login` 
												WHERE		`e-mail` 	= '".$email."'
												AND 		`password` 	= '".$password."'";
												
												/* met array_shift haal je het ene record uit het array
												 * en geef je dus een LoginClass object terug
												 */
												// echo $query; exit();
								$record_array = self::find_by_sql($query);				
								return	array_shift($record_array);
									
								}       
                                
        }
?>