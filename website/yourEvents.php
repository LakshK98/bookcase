<?php 
  require 'navbar.php';
  require 'connectivity.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <style>
        
      /*  .month-style{*/
         width:100%;
	display:block;
	
    
    transition:ease 0.75s;
      /*      transition:ease 0.5s;*/
      /*  }*/
      /*.month-style:hover{*/
      /*    background-color:black;*/
          
      /*}*/
  </style>
</head>
<!-- <body style="background-image:radial-gradient(#116466, #2C3531);"> -->
<body >

<hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">

<div class="container">
<div class="row">
    <div class="col-md-12 col-12"><CENTER>
			<span class="title" id="bookpage_title">Your Events </span></span>
</CENTER>
				<hr class="hr-shad">
				</div>
			<br>
<div class='col-1'></div>
<?php
// $month=$_GET['month'];
$userid=$_SESSION['userid'];
$query_events="select * from events where id = ANY (select eventid from userEvents where userid = $userid)";

$result= mysqli_query($con,$query_events);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
    echo "
    <div class='col-12'><center>  
    <p>You have not registered for any events.</p></center>
    </div>";
    
}
//$rowcount=mysqli_num_rows($result);
// $numOfCols = 2;
{
$rowCount = 0;
// $bootstrapColWidth = 6;

while($record=mysqli_fetch_array($result))
{
	$event_name = $record['name'];
	$event_desc = $record['description'];
	$event_date =date('d, F', strtotime($record['date']));
	$event_img = $record['image'];
	$event_addr = $record['venue'];
    $event_contact = $record['contact'];
	
	

	
	
echo "
        <div class='col-5'>
<div class='card' >
  <img class='card-img-top' src='images/eventImg/$event_img'style='max-height:250px'' alt='Card image cap'>
  <div class='card-body'>
  	    <h6 class='card-title'>$event_date</h6>
    <h5 class='card-title'>$event_name</h5>
    <p class='card-text'>$event_desc</p>
    <p class='card-text'>$event_addr </p>
    <p class='card-text'>Contact - $event_contact</p>

    
  </div>
</div>
 
  </div>";
		$rowCount++;
    if($rowCount % 2 == 0) { echo"</div><br><br><div class='row'> <div class='col-1'></div>";}
}
}
?>



 
</div>
</div>
<script>
    
$('.month-style').on('click',function(){
   
    var x=(this).getAttribute("data-id");
   
    window.location.href="events.php?month="+x;
});
</script>
</body>


</html>    
