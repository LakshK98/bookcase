<?php
require 'connectivity.php';
require 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  
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

    .hover-grey {
      transition: ease 0.5s;
}

.hover-grey:hover {
  background-color: #DCDCDC;
}

  </style>
</head>
<body>
    <hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
<h1 style="margin-left: 20px"><b> Your Account</b></h1>

<div class="container-fluid">

<div class = "row" style="height: 30vh ;">

<div class= "col-md-6  col-12 "  >
    
    <a href="yourBooks.php">
  <div class="card hover-grey" style="height: 100%;">
  <div class="card-body align-items-center d-flex">
    <div class="row">
      <div class="col-5">
    <img class="card-img" src="images/yourBooks.png" alt="Card image cap">
    </div>

      <div class="col-7">
    <h2 class="card-title">Your Books</h2>
    <h4 class="card-text">Books in your collection</h4>
  </div>
   </div>
  </div>

</div></a></div>

<div class= "col-md-6 col-12 " >
        <a href="yourEvents.php">

  <div class="card hover-grey" style="height: 100%;">
  <div class="card-body align-items-center d-flex">
    <div class="row">
      <div class="col-5">
    <img class="card-img" src="images/events.png" alt="Card image cap">
    </div>

      <div class="col-7">
    <h2 class="card-title">Your Events</h2>
    <h4 class="card-text">All your registered events</h4>
  </div>
   </div>
  </div>

</div></a></div>

</div>
<br>
<div class = "row" style="height: 30vh ;">
    
<div class= "col-md-6 col-12  " >
    <a href="suggestEventPage.php">
  <div class="card hover-grey" style="height: 100%;">
  <div class="card-body align-items-center d-flex">
    <div class="row">
      <div class="col-5">
    <img class="card-img" src="images/sugEvent.png" alt="Card image cap">
    </div>

      <div class="col-7">
    <h2 class="card-title">Suggest Events</h2>
    <h4 class="card-text">Make your own event</h4>
  </div>
   </div>
  </div>

</div></a></div>

<div class= "col-md-6 col-12  " >
    <a href="yourSuggestions.php">
  <div class="card hover-grey" style="height: 100%;">
  <div class="card-body align-items-center d-flex">
    <div class="row">
      <div class="col-4">
    <img class="card-img" src="images/list.png" alt="Card image cap">
    </div>

      <div class="col-7">
    <h2 class="card-title">Your Suggestions</h2>
    <h4 class="card-text">Events that have been suggested by you</h4>
  </div>
   </div>
  </div>

</div></a></div>
<br>

</div>
</div>

</body>
</html>


    
