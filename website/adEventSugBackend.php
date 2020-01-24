<?php
require 'connectivity.php';
	$status='DB connection error';
			if(isset($_POST['ename']))
			{
			    
			 //$status=$_POST['ename'];
		
  $id=$_POST['id'];
    $ename = $_POST['ename']; 
$edesc = $_POST['edesc']; 
$vaddr = $_POST['vaddr'];
$vcontact = $_POST['vcontact']; 
$date = $_POST['date']; 

 $stmt = $con->prepare("INSERT INTO events (name, venue,date,contact ,description) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $ename,$vaddr,$date,$vcontact,$edesc);

    if($stmt->execute()){
        $last_id = mysqli_insert_id($con); 

if(isset($_POST['keep']))
    $image =$_POST['img']; 
else
    $image = $_FILES['img']['name'];

$ext = pathinfo($image, PATHINFO_EXTENSION);

        $stmt = $con->prepare("UPDATE events SET image=? WHERE id=?");
        $new_image_name=$last_id.'.'.$ext;
        $stmt->bind_param("si", $new_image_name,$last_id);
        $stmt->execute();

if(!isset($_POST['keep']))
   	{
   	    $target = "images/eventImg/".basename($new_image_name);
  	    move_uploaded_file($_FILES['img']['tmp_name'], $target);
   	}
else
    rename('images/sugEventImg/'.$image, 'images/eventImg/'.$new_image_name);


  	  
$sql = "UPDATE suggestEvent SET status=? WHERE id=?";
$stmt = $con->prepare($sql);
$newStatus="Published";
$stmt->bind_param('ss', $newStatus, $id);
$stmt->execute();
$stmt->close();
//   $status=$id;     
        $status='ok';
			}
			}
    echo $status;
    
mysqli_close($con);

?>