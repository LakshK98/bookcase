<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['name']))
			{
			    
			 //$status=$_POST['ename'];
		
  $id=$_POST['id'];
    $name = $_POST['name']; 
$author = $_POST['author']; 
$genre = $_POST['genre'];
$summary = $_POST['summary']; 
$type = $_POST['type']; 

if(isset($_POST['keep']))
    $image =$_POST['img']; 
else{
    
    $image = $_FILES['img']['name'];
    $target = "images/bookcovers/".basename($image);
  	move_uploaded_file($_FILES['img']['tmp_name'], $target);
}
    
 $stmt = $con->prepare("UPDATE books SET  name=?, author=?,summary=?,genre=? ,Type=?,image=? WHERE id=?");
$stmt->bind_param("ssssisi", $name,$author,$summary,$genre,$type,$image,$id);

    if($stmt->execute()){
     $status='ok';
			}
			else
            	$status='Failed to update.';		
}

    echo $status;
    
mysqli_close($con);

?>