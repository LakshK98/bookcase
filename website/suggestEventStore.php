<?php

require "connectivity.php";
require "navbar.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
    <?php

$image = $_FILES['uploadImage']['name'];
  	
  	$target = "images/sugEventImg/".basename($image);

  move_uploaded_file($_FILES['uploadImage']['tmp_name'], $target);
  
    $first_name = $_POST['first_name']; 
$last_name = $_POST['last_name']; 
$sugEmail = $_POST['sugEmail'];
$tel = $_POST['tel']; 
$eventName = $_POST['eventName'];
$eventDesc = $_POST['eventDesc'];
$venAddr = $_POST['venAddr'];
$venContact = $_POST['venContact'];
$username = $_SESSION['username'];
$input_sex=$_POST['input_sex'];

$stmt = $con->prepare("INSERT INTO suggestEvent (username, sex, fname,lname,email,phone,ename,edesc,vaddr,vcontact,image) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
 $stmt->bind_param("sssssssssss", $username,$input_sex,$first_name,$last_name ,$sugEmail,$tel,$eventName,$eventDesc,$venAddr,$venContact,$image);
if($stmt->execute()){
	echo "
	<div class='container'>
	<div class='row'>
	    <div class='offset-3 col-6'>
	    <div class='card'>
	    <div class='card-body'>
	    <h1 ='card-text' >Thank you for your suggestion!<br>The event will be published on the site once it has been approved.</h1>
	    <center><a href='yourSuggestions.php'><button class='btn btn-success btn-lg'>View Status</button></a><center>
	    </div></div>
	    </div
	</div>
    <div>
    ";
}
?>
</body>
</html>