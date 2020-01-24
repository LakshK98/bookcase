<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['name']))
			{
			    
			 //$status=$_POST['ename'];
		
  $id=$_POST['id'];
    $name = $_POST['name']; 
$desc = $_POST['desc']; 
$venue = $_POST['venue'];
$contact = $_POST['contact']; 
$date = $_POST['date']; 

if(isset($_POST['keep']))
    $image =$_POST['img']; 
else{
    
    $image = $_FILES['img']['name'];
    $target = "images/eventImg/".basename($image);
  	move_uploaded_file($_FILES['img']['tmp_name'], $target);
}
    
// $stmt=$con->prepare("UPDATE events SET name=?,description=?,venue=?,contact=?,date=?,image=? WHERE id=?");
 $stmt=$con->prepare("UPDATE events SET name=?,venue=?,description=?,contact=?,date=?,image=? WHERE id=?");
// $stmt->bind_param("ssssssi", $name,$description,$venue,$contact,$date,$image,$id);
$stmt->bind_param("ssssssi", $name,$venue,$desc,$contact,$date,$image,$id);

    if($stmt->execute()){
     $status='ok';
			}
			else
            	$status= $name.$description.$venue.$contact.$date.$image.$id;		
}

    echo $status;
    
mysqli_close($con);

?>