<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['frmSubmit']))
			{
				// echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

				$username = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$type = $_POST['type'];

					$query= "select * from users WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
				    
					if(mysqli_num_rows($query_run)>0)
					{
				 		echo 'username already exists';
					}
					else
					{
				// 		$query= "insert into users (username,email,password) values('$username','$email','$password')";
				// 		$query_run = mysqli_query($con,$query);

					    $stmt = $con->prepare("INSERT INTO users (username, email, password,enddate) VALUES (?, ?, ?,?)");
					    if($type == 1)
					    {

							$time = strtotime(date("Y-m-d"));
							$final = date("Y-m-d", strtotime("+1 month", $time));

                        	
					    }
					    else{
					    	$time = strtotime(date("Y-m-d"));
							$final = date("Y-m-d", strtotime("+1 year", $time));

					    }
					    $stmt->bind_param("ssss", $username, $email, $password,$final);
                        if($stmt->execute()){
                             $status = 'ok';
                             session_start();
                             $_SESSION['loggedin'] = true;
                             $_SESSION['username'] = $username;
                             $last_id = mysqli_insert_id($con);
                             $_SESSION['userid'] = $last_id;
							 echo $status;
                            }
                            else
						{
							 $status = 'Couldnt insert into databse.';
                             echo $status;							
						}
					}
					
				
		
				
			}
else 			
    echo $status;
mysqli_close($con);

?>
