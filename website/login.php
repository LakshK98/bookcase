<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['frmSubmit']))
			{
			//	SELECT * FROM `movies` WHERE `category_id` = 2 AND `year_released` = 2008;
				$username = $_POST['name'];
				$password = $_POST['password'];
					$query= "select * from users WHERE username='$username' AND password='$password'";
					$query_run = mysqli_query($con,$query);
				    
				    
					if(mysqli_num_rows($query_run)>0)
					{
					    $record=mysqli_fetch_array($query_run);
				 		$status = 'ok';
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                        $_SESSION['userid'] = $record['id'];
                        echo $status;
					}
					else
					{
					    
							 $status = 'Username and password dont match';
                             echo $status;							
						
						
					}
					
				
		
				
			}
else 			
    echo $status;
    
mysqli_close($con);

?>