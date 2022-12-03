<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration form</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			<table>
			<tr>
				<td><label for="firstName">Name:</label></td>
				<td><input type="text" name="first_name" id="firstName"></td>
			</tr>	
			<tr>
				<td><label for="gender">Gender:</label></td>
				<td>
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checke";?> value="male">Male
  					<br><br>
  				</td>
			</tr>
			
			<tr>
				<td><label for="checkbox2" >What type of book do you like to read?</label></td>
				<td>
					<input type="checkbox" name="check_list[]" value="fiction"><label>Fiction</label><br/>
					<input type="checkbox" name="check_list[]" value="horror"><label>Horror</label><br/>
					<input type="checkbox" name="check_list[]" value="comedy"><label>Comedy</label><br/>
					<br><br>
				</td>
			</tr>
			<tr>
				<td><label for="option">Where would you like to visit one day?</label></td>
				<td>
					<select Name="Name_of_list_box" Size="Number_of_options">  
  					<option> Switzerland </option>  
  					<option> Canada </option>  
  					<option> Monaco </option>  
  					<option> USA </option> 
					</select><br/>
				</td>
			</tr>
			
			<tr>
				<td><label for="Address">Address:</label></td>
				<td><textarea name="address" id="Address" rows="5" cols="20"></textarea></td>
			</tr>
			<tr>
				<td><label for="emailAddress">Email Address:</label></td>
				<td><input type="text" name="email" id="emailAddress"></td>
			</tr>
			<tr>
				<td><label>Password:</label></td>
				<td><input type = "password" name = "pwd" value = "" required/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit">
				<button type="reset">Reset</button></td>
			</tr>
			</table>
		</form>
	</center>
</body>
</html>
