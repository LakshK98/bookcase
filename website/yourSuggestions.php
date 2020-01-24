<?php
require 'connectivity.php';
require 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Suggestions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <style>
       
a {
    color: inherit;
    text-decoration: none;
}

a:hover 
{
     color:inherit; 
     text-decoration:none; 
     cursor:pointer;  
}
  </style>
</head>

<body style="background-color: white">

<hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">

<div class="container">
    <div class="row">
	<div class="col-md-12 col-12"><CENTER>
			<span class="title" >Your Suggestions </span></span>
</CENTER>
				<hr class="hr-shad">
		</div></div>	<br>

<?php
$username=$_SESSION['username'];
$query_events= "select * from suggestEvent where username='$username'";
$result= mysqli_query($con,$query_events);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
    echo "
    <div class='col-4 offset-4'><center>  
    <p>You have not added any books to your collection</p></center>
    </div>";
    
}
else{

while($record=mysqli_fetch_array($result))
{
  $sex = $record['sex'];
  $fname = $record['fname'];
  $lname = $record['lname'];
  $mail =$record['email'];
  $contact =$record['phone'];
  $ename = $record['ename'];
  $edesc = $record['edesc'];
  $vaddr = $record['vaddr'];
  $vcontact = $record['vcontact'];
  $status =$record['status'];
  if($status=='Published')
    $color='success';
  else if($status=='Rejected')
    $color='danger';
    else
     $color ='warning';
echo "
<a style='color: black' data-toggle='collapse' href='#collapseExample$rowcount' role='button' >
<div class='card card-body bg-light ' >
	<div class='row'>
		<div class='col-7 offset-1'>
			
  	
  				<h4 class='card-title'>
    				$ename
				</h4>

		</div>
		<div class='col-4 '>
	
  				<h4>
    				 Status: <span class='text-$color'>$status</span>
				</h4>

  		
		</div>
	</div>

 

<div class='collapse' id='collapseExample$rowcount'>
  <div class='card'>
  <div class='card-body'>
    <div class='container-fluid'>
      <div class='row'>
       <div class='col-md-4 col-12'style='border-right: 2px solid #B3B3C1'>
          <h4 class='card-title'>Contact Info</h4>
          <h6> <b>name:</b> $sex.$fname $lname</h6>
          <h6> <b>email:</b> $mail</h6>
          <h6> <b>contact:</b> $contact</h6>
        </div>

         <div class='col-md-8 col-12'>
          <h4 class='card-title'>Event Info</h4>
          <h6> <b>Event Name:</b> $ename</h6>
          <h6> <b>Event Description:</b> $edesc</h6>
          <h6> <b>Venue Address:</b> $vaddr</h6>
          <h6> <b>Venue Contact:</b> $vcontact</h6>

        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
</a>
<br>
";
$rowcount++;
}
}
?>


</div>
</body>
</html>