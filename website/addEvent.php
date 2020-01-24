<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['frmSubmit']))
			{

				$id = $_POST['eventid'];
				$eventdate=$_POST['eventdate'];
				 session_start(); 
                $userid =$_SESSION['userid'];
					
				    
				    $query1= "select * from users WHERE id='$userid'";
				    $query_run1 = mysqli_query($con,$query1);
				    $row=mysqli_fetch_assoc($query_run1 );

				    $query2= "select * from userEvents WHERE userid='$userid' AND eventid ='$id'";

					$query_run2 = mysqli_query($con,$query2);
				    if($row['enddate']<$eventdate)
				    {
				        $status='Extend membership';
				    }
				    
					else if(mysqli_num_rows($query_run2)>0)
					{
				 		 $status ='Already registered!';
				 		 
				 		 
					}
					else
					{

					    $stmt = $con->prepare("INSERT INTO userEvents (userid, eventid) VALUES (?, ?)");
					    
					    $stmt->bind_param("ii", $userid, $id);
                        if($stmt->execute()){
                             $status = 'ok';
							 
                            }
                            else
						{
							 $status = 'Couldnt insert into database.';
                             					
						}
					}
					
				
		
				
			}
           			
    echo $status;
mysqli_close($con);

?>
