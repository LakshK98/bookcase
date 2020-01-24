<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['name']))
			{
			    
	
    $name = $_POST['name']; 
$desc = $_POST['desc']; 
$venue = $_POST['venue'];
$contact = $_POST['contact']; 
$date = $_POST['date']; 

$image = $_FILES['imgu']['name'];

    $stmt = $con->prepare("INSERT INTO events (name, description,venue,contact,date,image) VALUES (?, ?,?,?,?,?)");
	$stmt->bind_param("ssssss", $name,$desc,$venue,$contact,$date,$image);
                        
    if($stmt->execute()){
    $target = "images/eventImg/".basename($image);
  	move_uploaded_file($_FILES['imgu']['tmp_name'], $target);

     $status='ok';
			}
			else
            	$status='Failed to update.';		
}

    echo $status;
    
mysqli_close($con);

?>