<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

table, th, td {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
}
th {
    text-align: left;
}
th, td {
    padding: 15px;
    text-align: left;
}


/*tr:nth-child(even) {background-color: #f2f2f2;}*/
tr:nth-child(even) {background-color: white;}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="open();"><i class="fa fa-bars"></i> </button>
  <!-- <span class="w3-bar-item w3-right">BookCase</span> -->
  <span class="w3-bar-item w3-left">Admin</span>
   <!-- <a class="pull-left" href="index.php" style="border-left: 0px"><img style="max-width: 200px;border-left: 0px"src="images/logo.png"></a> -->
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <img style="max-width: 200px;width:100%;height:auto;margin-right: 0px"src="images/logo.png">

  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  Books</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Events</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comment  fa-fw"></i>  Event Suggestions</a>
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
      <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class=" fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Books</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-calendar w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Events</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="	fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Event Suggestions</h4>
      </div>
    </div>
    
  </div>
  
   <div class="w3-container">
    <h5>User Info</h5>
        <?php

$servername = "localhost";
$username = "id6906789_student";
$password = "000webhost";
$dbname = "id6906789_bookcasedb";


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email, strtdate, enddate  FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Username</th><th>Email</th><th>Startdate</th><th>Enddate</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td><td>" . $row["strtdate"]. "</td><td>" . $row["enddate"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?> 
   
</div>  

<div class="container">
<?php
$query_events= "select * from suggestEvent where status='Pending'";
$result= mysqli_query($con,$query_events);

while($record=mysqli_fetch_array($result))
{
  $id = $record['id'];    
  $sex = $record['sex'];
  $fname = $record['fname'];
  $lname = $record['lname'];
  $mail =$record['email'];
  $contact =$record['phone'];
  $ename = $record['ename'];
  $edesc = $record['edesc'];
  $vaddr = $record['vaddr'];
  $vcontact = $record['vcontact'];
  $image=$record['image'];
  
echo "
<form name='newEvent' action='adminHome.php' method='post' encrypt='multipart/form-data'>
<div class='card' style='  border-radius: 0;'>
  <div class='card-body'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-md-4 col-12'style='border-right: 2px solid #B3B3C1'>
         <img src='images/sugEventImg/$image' style='width:100%;height:100%' alt='Image not uploaded.'>
        
        </div>
    <br>
         <div class='col-md-8 col-12'>
          <h4 class='card-title'>Event Info</h4>
          <h6> <b>Event Name:</b> $ename</h6>
          <h6> <b>Event Description:</b> $edesc</h6>
          <h6> <b>Venue Address:</b> $vaddr</h6>
          <h6> <b>Venue Contact:</b> $vcontact</h6>

        </div>
      </div>
      <div class='row'>
      <div class='col-md-4 col-12'style='border-right: 2px solid #B3B3C1'>
          <h4 class='card-title'>Contact Info</h4>
          <h6> <b>name:</b> $sex.$fname $lname</h6>
          <h6> <b>email:</b> $mail</h6>
          <h6> <b>contact:</b> $contact</h6>
        </div>
        <div class='col-4'>
        
            <input style='margin-bottom:3px' type='number' class='form-control' name='date' placeholder='Date'required>
            <input style='margin-bottom:3px' type='number' class='form-control' name='month' placeholder='Month'required>
            <input type='number' class='form-control' name='year' placeholder='Year'required>
         
           
        </div>
        <input type='hidden' name='id' value='$id' />

      </div>

    </div>
  </div>
  <div class='card-footer'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-6'>
      
    <button type='submit'class='btn btn-success btn-block btn-lg' name='approveBtn'>Approve</button>
  </div>
   

  <div class='col-6'>
  
    <button  type='submit'class='btn btn-danger btn-block btn-lg 'name='rejectBtn' >Reject</button>
  </div>
  </div></div>
  </div>
</div>

</form>   
<br>
        ";

}
        $con->close();


?>

</div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Database error.</td>
            <td><i>15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>New record, over 40 users.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Check transactions.</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>CPU overload.</td>
            <td><i>35 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Countries</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>UK</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Spain</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>India</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>France</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Mike</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Jill</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Jane</span><br>
      </li>
    </ul>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar3.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
