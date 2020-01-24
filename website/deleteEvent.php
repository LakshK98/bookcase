<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['id']))
			{

                $id=$_POST['id'];
                $sql = "DELETE FROM events WHERE id=$id";

            if ($con->query($sql) === TRUE) {
                    $status = 'ok';
				}
                else
				{
					$status = 'Couldnt delete from database.';
                }
					
					
				
		
				
			}
           			
    echo $status;
mysqli_close($con);

?>