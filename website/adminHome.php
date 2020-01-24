<?php
require 'connectivity.php';
require 'navbar.php';

if(isset($_POST['rejectBtn']))
{
     $getId=$_POST['id'];
    $sql = "UPDATE suggestEvent SET status=? WHERE id=?";
    

$stmt = $con->prepare($sql);

// This assumes the date and account_id parameters are integers `d` and the rest are strings `s`
// So that's 5 consecutive string params and then 4 integer params
$newStatus="Rejected";
$stmt->bind_param('si', $newStatus, $getId);
$stmt->execute();
$stmt->close();
}
if(isset($_POST['approveBtn']))
{
    // rename('image1.jpg', 'del/image1.jpg');


    $getId=$_POST['id'];
    $date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $query="select * from suggestEvent where id=$getId";
    $result= mysqli_query($con,$query);
    $record=mysqli_fetch_array($result);
    
$name=$record['ename'];
$venue=$record['vaddr'];
$date=$year.'-'.$month.'-'.$date;
$contact=$record['vcontact'];
$description=$record['edesc'];
  $stmt = $con->prepare("INSERT INTO events (name, venue,date,contact ,description) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $name,$venue,$date,$contact,$description);

    if($stmt->execute()){
        $last_id = mysqli_insert_id($con); 

        $imagename=$record['image'];
        rename('images/sugEventImg/'.$imagename, 'images/eventImg/'.$last_id.'.jpg');
        $stmt = $con->prepare("UPDATE events SET image=? WHERE id=?");
        $new_image_name=$last_id.'.jpg';
        $stmt->bind_param("si", $new_image_name,$last_id);
        $stmt->execute();
        $sql = "UPDATE suggestEvent SET status=? WHERE id=?";

$stmt = $con->prepare($sql);

$newStatus="Published";
$stmt->bind_param('si', $newStatus, $getId);
$stmt->execute();
$stmt->close();
        
        
    }
    

// $newStatus="Published";
// $stmt->bind_param('si', $newStatus, $getId);

// $sql = "UPDATE suggestEvent SET status=? WHERE id=?";
// $stmt = $con->prepare($sql);
// $newStatus="Published";
// $stmt->bind_param('si', $newStatus, $getId);

// $stmt->close();
}


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
  
</head>
<body>

<hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
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
<div class='card'>
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

?>

</div>
</body>
</html>
