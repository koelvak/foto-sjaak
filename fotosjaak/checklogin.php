<?php
require_once ("Class/LoginClass.php");
require_once ("Class/SessionClass.php");
        if (!empty($_POST['email']) && !empty($_POST['password']))
        {
                /*Check in de database of beide ingevoerde waarden bestaan
        		*het loginfromulier wel bestaat in de login table
        		*tussen de haakjes van het onderstaandede if-statement
        		*moet true of false komet te staan. we schrijven daar voor 
        		*een metode in de loginClass class. een static methode uit een
				 * class kan worden aangeroeppen met: de naam va nde class, dan een
				 * dubble dubbele punt, de naam van de methode
				 */
				 
				 if (LoginClass::check_if_email_password_exist($_POST['email'],
				 												$_POST['password']))
				 {
				 	/* de logingegevens van user die inlocht worden terus gestuurd als een object
					 * 
					 */
					 
				 	$user = LoginClass::find_Login_user($_POST['email'],
				 										$_POST['password']);
                       
                        $_SESSION['id']             = $user->getLogin_id();
                        $_SESSION['userrole']       = $user->getUserrole();
                        switch ($_SESSION['userrole'])
                        {
                                case 'customer':
                                        header("location:index.php?content=customer_homepage");
                                        break;
                                case 'administrator':
                                        header("location:index.php?content=admin_homepage");
                                        break;
                                case 'root':
                                        header("location:index.php?content=root_homepage");
                                        break;   
								case 'developer':
										header("location:index.php?content=developer_homepage");
										break;
								case 'photographer':
										header("location:index.php?content=photographer_homepage");
								case 'coworker':
										header ("location:index.php?content=coworker_homepage");
										break;                  
                        }                
                }
                else
                {
                        echo "Gebruikersnaam en/of wachtwoord niet bekend";
                        header("refresh none; url=index.php?content=login");
                }
        }
        else
        {
                //Stuur door naar login met foutmelding
                echo "U heeft een of meerdere velden niet ingevuld";
                header("refresh none; url=index.php?content=login");
        }


?>