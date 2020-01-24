<?php
if(!isset($_SESSION['aLoggedin']))
{
    header("Location: adLoginPage.php"); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script src="js/bootstrap.min.js"></script>


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="my_open();"><i class="fa fa-bars"></i> </button>
  <!-- <span class="w3-bar-item w3-right">BookCase</span> -->
  <span class="w3-bar-item w3-left">Admin</span>
   <!-- <a class="pull-left" href="index.php" style="border-left: 0px"><img style="max-width: 200px;border-left: 0px"src="images/logo.png"></a> -->
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container ">
    <img style="max-width: 200px;width:100%;height:auto;margin-right: 0px"src="images/logo.png">

  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="my_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="adOverview.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="adBooksPage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Books</a>
    <a href="adEventsPage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Events</a>
    <a href="adEventSug.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comment  fa-fw"></i>  Event Suggestions</a>
    <a href="#" id='logout'class="w3-bar-item w3-button w3-padding"><i class="fa fa-power-off  fa-fw"></i>  Logout</a>
    
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="my_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function my_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function my_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}


$('#logout').on('click',function(){

 $.ajax({
                type: "GET",
                url: "signout.php" ,
                success : function() { 

                    window.location.replace("adLoginPage.php");

                }
            });
});
</script>

</body>
</html>
