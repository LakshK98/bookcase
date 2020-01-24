<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['name']))
			{
			    
			 //$status=$_POST['ename'];
		
    $name = $_POST['name']; 
$author = $_POST['author']; 
$genre = $_POST['genre'];
$summary = $_POST['summary']; 
$type = $_POST['type']; 

    $image = $_FILES['imgu']['name'];
    $target = "images/bookcovers/".basename($image);
  	move_uploaded_file($_FILES['imgu']['tmp_name'], $target);

    $stmt = $con->prepare("INSERT INTO books (name, author,summary,genre,Type,image) VALUES (?, ?,?,?,?,?)");
					   // $image='23fff.jpg';
	$stmt->bind_param("sssiis", $name, $author,$summary,$genre,$type,$image);
                        
    if($stmt->execute()){
     $status='ok';
			}
			else
            	$status='Failed to update.';		
}

    echo $status;
    
mysqli_close($con);

?>