<?php 
require 'adNav.php';
require 'connectivity.php';

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


  $query_events= "select * from suggestEvent where status='Pending'";
$result= mysqli_query($con,$query_events);
$rowcount=mysqli_num_rows($result);
  
?>


<!DOCTYPE html>
<html lang="en">
    <body>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-comments"></i> <?php echo $rowcount; ?> Event Suggestios</b></h5>
  </header>

 
  

<div class="container">
<?php
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
<form action=''id='form' method='post'enctype='multipart/form-data' > 
<div class='card' style='  border-radius: 0;'>
  <div class='card-body'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-md-4 col-12'style='border-right: 2px solid #B3B3C1'>
         <img src='images/sugEventImg/$image' imagename='$image' id='image$id' style='width:100%;height:100%' alt='Image not uploaded.'>
        
        </div>
    <br>
         <div class='col-md-8 col-12'>
          <h4 class='card-title'>Event Info</h4>
          <h6> <b>Event Name:</b> <span id='ename$id' contenteditable >$ename</span></h6>
          <h6> <b>Event Description:</b><span id='edesc$id' contenteditable>$edesc</span></h6>
          <h6> <b>Venue Address:</b> <span id='vaddr$id' contenteditable>$vaddr</span></h6>
          <h6> <b>Venue Contact:</b> <span id='vcontact$id' contenteditable>$vcontact</span></h6>

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
        
        <h6>Enter Date</h6>
            <input type='date' class='form-control' id='date$id' >
            <br>
            <input type='file'  id='img$id' >

           
        </div>
        <input type='hidden' name='id' value='$id' />

      </div>

    </div>
  </div>
  
  <div class='card-footer'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-6'>
      
    <button class='btn btn-success btn-block btn-lg approveBtn' data-id='$id'>Approve</button>
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




</div>

<script>

$('.approveBtn').on('click',function(){

$("#form").submit(function(e){
    return false;
});
 var id=(this).getAttribute("data-id");
 var date = $('#date'+id).val();
 var ename = document.getElementById("ename"+id).textContent;
 var edesc = document.getElementById("edesc"+id).textContent;
 var vaddr = document.getElementById("vaddr"+id).textContent;
 var vcontact = document.getElementById("vcontact"+id).textContent;
 var imagename=document.getElementById("image"+id).getAttribute('imagename');
 var upimage=document.getElementById('img'+id).value;
 if(date=="")
    alert("Please provide a date for the event.")
 else if(ename.trim()=='')
     alert("Please provide a name for the event.")
 else if(edesc.trim()=='')
     alert("Please provide a description for the event.")
 else if(vaddr.trim()=='')
     alert("Please provide a address for the event.")
 else if(vcontact.trim()=='')
     alert("Please provide a contact for the venue.")
 else if(imagename.trim()=='' && upimage.trim()=='')
     alert("Please provide an image for the event.")
 
else{    
var formData = new FormData();
formData.append('ename',ename);
formData.append('edesc',edesc);
formData.append('vaddr',vaddr);
formData.append('vcontact',vcontact);
formData.append('date',date);
formData.append('id',id);
alert('good good');

if( upimage.trim()!='')
    formData.append('img', $('input[type=file]')[0].files[0]); 
else
{
    formData.append('img',imagename);
    formData.append('keep',true);
    
}

        $.ajax({
             method:'POST',
             url:'adEventSugBackend.php',
             data: formData,
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $(this).attr("disabled","disabled");


            },
            success:function(msg){
                if(msg == 'ok'){
                    alert('Event Published!');
                    location.reload();

                    
                }else{
                    alert(msg);

                }
                $(this).removeAttr("disabled");
            },
            error: function(data){
                console.log("error");
                console.log(data);
                                alert('to err')

            }
                
        });       
    
    
        
//else close
}


});
</script>

</body>
</html>