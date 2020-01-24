<?php 
	require 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">  
   
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style >
  .color{
	color:white !important;
}
.nav-sty{
	position: absolute !important;
	width: 100%;
  	position: absolute;
  	background:rgba(254, 0, 0, 0);
  	left: 7px!important;
  	top:0px;
  	z-index: 1;
}
  #oneMembership{
    color:white;font-family: Arial;font-size: 300%;
  }

  #get{
  height: auto;
  margin:auto;
  width:15%;
  font-size: 3vh;
  position: absolute;
  bottom: 10px;
  left:42%;
  border-radius: 3px;
  }
   
    @media only screen and (max-width: 800px) {

    #get {
  height: 15%;
  width:15%;
  font-size: 1vh;
  position: absolute;
  bottom: 5px;
  left:42%;
  border-radius: 2px;

    }
}
@media only screen and (max-width: 450px) {
  #oneMembership{
    color:white;
    font-family: Arial;
    font-size: 200%;
  }
}
  </style>
 
</head>
<body class="test">

<div class="hidden-sm carousel-sty" >
<div id="demo" class="carousel slide " data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" style="max-height:100vh">
    <div class="carousel-item active"  ">
      <a href="bookEx.php?uid=58"><img src="images/cover.jpg" alt="Los Angeles"></a>
    </div>
    <div class="carousel-item">
       <a href="bookEx.php?uid=55"><img src="images/lilblack.jpg" alt="Chicago" ></a>
    </div>
    <div class="carousel-item">
       <a href="bookEx.php?uid=54"><img src="images/cover1.jpg" alt="New York"></a>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-md-5 offset-md-1 order-md-1 order-2">
      <p style="font-family: Raleway;font-size: 30px">Get the latest new arrivals in books as soon as they are launched and be the first to read your favourite author's newest books </p>
    </div>
    <div class="col-md-5 order-md-2 order-1">
      <a href="booksPage.php?type=2&title=New Arrivals"><img src="images/arrival.png"id="send"class="send_name"style="width: 100%;height: auto;"></a>
    </div>
  </div>
  <br><br>
  <div class="row" >
    <div class="col-md-5 offset-md-1">
      <a href="booksPage.php?type=1&title=Bestsellers"><img src="images/bestseller.png"style="width: 100%;height: auto;"></a>
      
    </div>
    <div class="col-md-5">   
       <p style="font-family: Raleway;font-size: 30px">Browse through our catalog of books which are the current international bestsellers and are the talk of the town</p>
    </div>
  </div>
  <br><br>
<div class="row">
    <div class="col-md-5 offset-md-1 order-md-1 order-2">
      <p style="font-family: Raleway;font-size: 30px">Take a look at our list of recommended books which are based on user reviews and ratings and are refreshed every week</p>
    </div>
    <div class="col-md-5 order-md-2 order-1">
     <a href="booksPage.php?type=3&title=Recommends"> <img src="images/recommend.png"style="width: 100%;height: auto;"></a>
    </div>
  </div>  
</div>
  <br>

  <div class="container-fluid" style="padding: 0px;position: relative;background-color:black;">
  
    <img src="images/kindle.png"  style="width: 100%;height:100%;min-height: 200px">
    <div class="row" style="position: absolute;top:10%;width: 100%;">
      <div class="col-md-8 offset-md-2 col-sm-10 offset-1" >
        <p  id="oneMembership">One membership, many benefits</p>
      </div>
    </div>
    <div class="row" style="position: absolute;top:30%;width: 100%" >
    
      <div class="col-lg-8 offset-lg-2 d-none d-lg-block " >
        <p  style="font-family:Courier New;color: white;font-size:35px">Get the BookCase Select membership and enjoy access to all the books on the website for free.</p>
      </div>
    </div>
    <div class="row">

    	 <button id="get"  type="button" class="btn-success"> Get Started </button>
    </div>
 
  </div>


<script>
document.getElementById('get').onclick = function() {
var loggedin = '<?php echo isset($_SESSION['loggedin']);?>';
if( loggedin == "")
{
    $('#signupModal').modal('show');
}    else{
    window.location.reload();
      
}
};
</script>
</body>

</html>
