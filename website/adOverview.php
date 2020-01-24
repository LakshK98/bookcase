<?php 
require 'adNav.php';
require 'connectivity.php';


$query = "SELECT COUNT(*) FROM books";
$result = mysqli_query($con,$query);
$rows = mysqli_fetch_row($result);
$bookCount= $rows[0];

$query = "SELECT COUNT(*) FROM events";
$result = mysqli_query($con,$query);
$rows = mysqli_fetch_row($result);
$eventCount= $rows[0];

$query = "SELECT COUNT(*) FROM suggestEvent where status='Pending";
$result = mysqli_query($con,$query);
$rows = mysqli_fetch_row($result);
$sugEventCount= $rows[0];


$sql = "SELECT id, username, email, strtdate, enddate  FROM users";
$result= mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
$userCount=$rowcount;
?>
<head>
    
<style>
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
</head>
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
          <h3><?php echo $userCount; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class=" fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $bookCount; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Books</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-calendar w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $eventCount; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Events</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="	fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $sugEventCount; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Event Suggestions</h4>
      </div>
    </div>
    
  </div>
  
   <div class="w3-container">
    <h5>User Info</h5>
        <?php



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