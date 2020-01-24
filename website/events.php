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
	<div class="col-md-3 " >
			<!-- background-color: #FB0202 -->
			<nav class="nav ">

				<div  style="width: 100%;background-color: #FB0202">
<center>
			    	
					<span style="padding-top:  20px;display:block;padding-bottom: 0;line-height:1.2em;
                    color: white;
                    font-family: Courier New;
                    font-size: 20px;" >Filter by month</span>
			    	<hr style="margin-bottom: 0px">
			    	
		           <span class="month-style" data-id="1" >January</span>
    				<span class="month-style" data-id="2">Febuary</span>
		          <span class="month-style" data-id="3">March</span>
		             
		           <span class="month-style" data-id="4">April</span>
		            <span class="month-style"data-id="5">May</span>
		           
		            <span class="month-style"data-id="6">June</span>
		            <span class="month-style"data-id="7">July</span>
		            <span class="month-style"data-id="8">August</span>
		            <span class="month-style"data-id="9">September</span>
		            <span class="month-style"data-id="10">October</span>
		            <span class="month-style"data-id="11">November</span>
		            <span class="month-style"data-id="12" style="margin-bottom: 10px">December</span>
		            </center>
		        </div>		  
		    	
		    		    	
	  
			</nav>
		
		</div>

  <div class="col-md-9">
  	<div class="row">

<?php
if(isset($_GET['month']))
{
    $month=$_GET['month'];
    $query_events= "select * from events where MONTH(date) = $month and date>CURDATE()";
}
else
{
    $query_events= "select * from events where date>CURDATE()";
}
$result= mysqli_query($con,$query_events);
//$rowcount=mysqli_num_rows($result);
// $numOfCols = 2;
$rowCount = 0;
// $bootstrapColWidth = 6;

while($record=mysqli_fetch_array($result))
{
	$event_name = $record['name'];
	$event_desc = $record['description'];
	$event_date =$record['date'];
	$event_display_date =date('d, F', strtotime($event_date));
	$event_img = $record['image'];
	$event_addr = $record['venue'];
    $event_contact = $record['contact'];
	    $event_id = $record['id'];
	 

	

	
	
echo "
        <div class='col-6'>
<div class='card' >
  <img class='card-img-top' src='images/eventImg/$event_img' alt='Card image cap'>
  <div class='card-body'>
  	    <h6 class='card-title'>$event_display_date</h6>
    <h5 class='card-title'>$event_name</h5>
    <p class='card-text'>$event_desc</p>
    <p class='card-text'>$event_addr </p>
    <p class='card-text'>Contact - $event_contact</p>

    <a href='#' class='btn registerEvent' data-id='$event_id' data-date='$event_date' style='background-color:#0B9F2D;color: white '> Register</a>
  </div>
</div>
 
  </div>";
		$rowCount++;
    if($rowCount % 2 == 0) { echo"</div><br><br><div class='row'>";}
}

?>



 
</div>
</div>
</div>
</div>
<script>
    
$('.month-style').on('click',function(){
   
    var x=(this).getAttribute("data-id");
   
    window.location.href="events.php?month="+x;
});

$('.registerEvent').on('click',function(){
var loggedin = '<?php echo isset($_SESSION['loggedin']);?>';
var eventdate= (this).getAttribute("data-date");
if( loggedin == "")
{
    $('#loginModal').modal('show');
}   
else{
    var eventid = (this).getAttribute("data-id");
    $.ajax({
             method:'POST',
             url:'addEvent.php',
             
             data:{'frmSubmit':1,'eventid':eventid,'eventdate':eventdate},
            beforeSend: function () {
                $('.registerEvent').attr("disabled","disabled");


            },
            success:function(msg){
                if(msg == 'ok'){
                    alert('Registered!');
                    
                }else{
                    alert(msg);

                }
                $('.registerEvent').removeAttr("disabled");
            }
                
        });       
}
});
</script>
</body>


</html>    
