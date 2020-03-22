						
						

			<?php

			/* Attempt MySQL server connection. Assuming you are running MySQL

			server with default setting (user 'root' with no password) */

			$link = mysqli_connect("localhost", "root", "", "project");

			 

			// Check connection

			if($link === false){

				die("ERROR: Could not connect. " . mysqli_connect_error());

			}

			 

			// Escape user inputs for security

			$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);

            $middle_name = mysqli_real_escape_string($link, $_REQUEST['middle_name']);
               
			$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);

			$email = mysqli_real_escape_string($link, $_REQUEST['email']);

            $age = mysqli_real_escape_string($link, $_REQUEST['age']);

             $roll = mysqli_real_escape_string($link, $_REQUEST['roll']);

             $salary = mysqli_real_escape_string($link, $_REQUEST['salary']);

             $mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);

             $country = mysqli_real_escape_string($link, $_REQUEST['country']);

             

			// attempt insert query executions

			$sql = "INSERT INTO employes  (firstname, middlename, lastname, email, age, roll, salary, mobile, country) VALUES (
			'$first_name', '$middle_name', '$last_name', '$email', '$age', '$roll', '$salary', '$mobile', '$country')";

			if(mysqli_query($link, $sql)){

				echo "Records added successfully.";

			} else{

				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

			}




            header("refresh:30; url=html-insert-data.html");

			// close connection

			mysqli_close($link);

			?>

