<form action="./index.php?content=change_setting_form" method="post">
		 <table border='0'>

				<tr>
                        <td>voornaam:</td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="firstname" />
                        </td>
                </tr>
                <tr>
                        <td>tussenvoegsel:</td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="infix" />
                        </td>
                </tr>
                <tr>
                        <td>achternaam:</td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="surname" />
                        </td>
                </tr>
                <tr>
                        <td>Adres: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="street" />
                                <input type="number" min="0" max="18926" name="house_number" />
                        </td>
                </tr>
                <tr>
                        <td>Woonplaats:</td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="city"/>
                        </td>
                </tr>
                <tr>
                        <td>Postcode: </td>
                <tr>
                <tr>
                        <td>
                                <input type="text" name="zip_code"  maxlength="6" />
                        </td>
                </tr>
                <tr>
                        <td>Geboortedatum: </td>
                <tr>
                <tr>
                        <td>
                                <input type="date" name="birthday" min="1883-01-01" />
                        </td>
                </tr>
                <tr>
                        <td>password: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="password" required />
                        </td>
                </tr>
				 <tr>
                        <td>
                                <input type="submit" name="submit" value="save" />
                        </td>
                </tr>
		</table>
</form>