<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['frmSubmit']))
			{

				$id = $_POST['bookid'];
				 session_start(); 
                $userid =$_SESSION['userid'];
					$query= "select * from userBooks WHERE userid='$userid' and bookid =$id";
					$query_run = mysqli_query($con,$query);
				    
					if(mysqli_num_rows($query_run)>0)
					{
				 		 $status ='Already added!';
					}
					else
					{
				// 		$query= "insert into users (username,email,password) values('$username','$email','$password')";
				// 		$query_run = mysqli_query($con,$query);

					    $stmt = $con->prepare("INSERT INTO userBooks (userid, bookid) VALUES (?, ?)");
					    
					    $stmt->bind_param("ii", $userid, $id);
                        if($stmt->execute()){
                             $status = 'ok';
							 
                            }
                            else
						{
							 $status = 'Couldnt insert into databse.';
                             					
						}
					}
					
				
		
				
			}
           			
    echo $status;
mysqli_close($con);

?>
