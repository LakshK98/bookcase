<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['genre']))
			{

                $genre=$_POST['genre'];
				$stmt = $con->prepare("INSERT INTO genres (name) VALUES (?)");
				$stmt->bind_param("s", $genre);

                if($stmt->execute()){
                    $status = 'ok';
				}
                else
				{
					$status = 'Couldnt insert into database.';
                }
					
					
				
		
				
			}
           			
    echo $status;
mysqli_close($con);

?>