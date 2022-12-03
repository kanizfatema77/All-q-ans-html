<!DOCTYPE html>
<html>


<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 8 values from the form data(input)
	
			
		$first_name = $_REQUEST['first_name'];
		$gender = $_REQUEST['gender'];
		 //Loop to store and display values of individual checked checkbox.
		$checkbox2=$_REQUEST['check_list'];  
		$chk="";  
		foreach($checkbox2 as $chk1)  
   		{  
      		$chk .= $chk1." ";  
   		}
		$option = $_REQUEST['Name_of_list_box'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$password= $_REQUEST['pwd'];
		
		
		
		// Performing insert query execution
		$sql = "INSERT INTO registration VALUES ('$first_name','$gender', '$chk', '$option',  '$address','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>Data Stored in the Database Successfully\n\n </h1>";

			echo nl2br("<h2>\n$first_name\n $gender\n $chk\n $option\n $address\n $email\n</h2>");
		} else{
			echo "ERROR! $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>