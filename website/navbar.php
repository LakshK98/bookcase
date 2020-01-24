<?php
        session_start(); 
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  
  
 
</head> 
<body>
<html lang="en">

<div class="container-fluid" style="position: relative;">

<nav class="navbar navbar-expand-md nav-sty" style="padding-left: 0px">
   <a class="navbar-brand color-white " style="color: #5C5C5D"href="#"></a> 
  <a class="pull-left" href="index.php" style="border-left: 0px"><img style="max-width: 200px;border-left: 0px"src="images/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars color"></span>
  </button>

 


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item "id="book_link">
        <a class="nav-link color" href="booksPage.php?title=Books">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link color" href="events.php">Events</a>
      </li>
      </ul>


        <div class="form-inline input-group col-md-3 " >
            <input class="form-control py-2 border-right-0 border " style="background:rgba(254, 0, 0, 0);"type="search" placeholder="search" id="inputSearch">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border" type="button">
                    <i class="fa fa-search color"></i>
                </button>
              </span>
        </div>
    </div>

<div class="nav-item  dropdown">
<button class="dropbtn "><span class="fa fa-user color"></span><span class="fa fa-caret-down color" style="margin-left: 4px"></span></button>
  <div class="dropdown-content">
  <a id="loginHome" href="#"role="button"  >
  <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo $_SESSION['username'] ;
            echo " Home";
            
        }
        else 
            echo "Log In";
 ?>
 </a>
    <a id="signupSignout"href="#"role="button" >
          <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "Sign Out";
            
        }
        else
         echo "Sign up";
        ?>    
    </a>
  </div>
    
  </div>
</nav>

</div>


<?php
  require 'loginModal.php';
require 'signupModal.php';
?>
<script>
 
    
  $("#signupSignout").click(function(){
          var x = document.getElementById('signupSignout').textContent;
          if(x.trim()=="Sign Out"){
              $.ajax({
                type: "GET",
                url: "signout.php" ,
                success : function() { 

                    window.location.replace("index.php");

                }
            });
          }
          else
          {
            
            $("#signupModal").modal();     
          }
        });
        
     $("#loginHome").click(function(){
          var x = document.getElementById('loginHome').textContent;

          if(x.trim()=="Log In"){

            $("#loginModal").modal();  
          }
          else{
              window.location.assign("yourAccount.php");	
          }
       
    });
    
    $("#inputSearch").on('keypress',function (e) {
   if (e.keyCode == 13) {
    $("#inputSearch").addClass("buttonSearch");
    //   $("p").text("Class added = " + $("#inputSearch").attr("class"));
    //   window.location.replace("http://www.yahoo.com/")
    var search = (this).value;
    window.location.href="searchResult.php?search="+search;
       }
});
</script>
</body>
</html>