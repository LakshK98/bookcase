<?php 
require 'adNav.php';
require 'connectivity.php';


$query_events= "select * from events";
$result= mysqli_query($con,$query_events);
$rowcount=mysqli_num_rows($result);
?>
<head>

<style>
table, th, td {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
    margin-right:10px;
        margin-left:10px;

}
th {
    text-align: left;
}
th, td {
    padding: 5px;
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
<!DOCTYPE html>
<html lang="en">
    <body>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
      <h5><b><u></u><i class="fa fa-calender"></i> <?php echo $rowcount; ?>  Events</u></b></h5>
           <button type="button" id='addEventBtn'class="btn btn-primary">Add Event</button><br>
<br>
  </header>
<?php
    
     if ($rowcount > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Description</th><th>Venue</th><th>Contact</th><th>Date</th><th>Image</th><th>Update</th></tr>";
    // output data of each row
    $rowcount=1;
    while($row = $result->fetch_assoc()) {
    $id=$row['id'];
    $image=$row["image"];
        echo "<tr><td>" .$rowcount++. "</td>
        <td id='name$id'>" . $row["name"]. "</td>
        <td id='desc$id'>" . $row["description"]. "</td>
        <td id='venue$id'>" . $row["venue"]. "</td>
        <td id='contact$id'>" . $row["contact"]. "</td>
        <td id='date$id'>" . $row["date"]. "</td>
        <td id='image$id'><a target='_blank' href='images/eventImg/$image'>" . $row["image"]. "</a></td>
        
        <td><div class='icon-bar'><i class='fa fa-edit event-edit'data-id='$id'style='font-size:22px;margin-left:5px;color:blue'></i>
        <i class='fa fa-trash book-trash'data-id='$id'style='font-size:22px;color:red'> </div></td></tr>";
    }
    echo "</table>";
} 
  
  ?>

<!-- Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class='container'>
          <div class='row'>
              <div class='col-md-12 ' >
                  <img id='modalImage' style='width: 100%;height: auto'>
              </div>
              <div class='col-md-12'>
                          <h5>Name: </h5><p id="modalName" contenteditable></p> 
                          <h5>Description: </h5><p id="modalDesc" contenteditable></p> 
                          <h5>Venue: </h5><p id="modalVenue" contenteditable></p> 
                          <h5>Contact: </h5><p id="modalContact" contenteditable></p> 
                          <h5>Date: </h5><p id="modalDate" contenteditable></p> 

                  <br>
                  <input id='modalUpImage'type='file'>
        </div>
                  <hr> 
        
        </div>
  </div>
  <br>

</div>



     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id='modalSave'type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</div>
</div>
<!---->

<!--bkbkhbhbbjb-->

<div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class='container'>
          <div class='row'>
             
              <div class='col-md-12'>
                          <h5>Name: </h5>
                          <input type='text' id='addName'>
                          <h5>Description: </h5>
                          <textarea id="addDesc" style="width: 100%" rows="2"></textarea>
                          <h5>Venue: </h5>
                          <input type='text' id='addVenue'>
                          <h5>contact: </h5>
                          <input type='number' id='addContact'>
                          <h5>Date: </h5>
                          <input type='date' id='addDate'>
                         <h5>Image: </h5>
                        <input id='addImage'type='file'>
                 
        </div>
          
                  <hr> 
        
        </div>
  </div>


</div>



     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id='modalAddSave'type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</div>
</div>

<script>
$('.event-edit').on('click',function(){
    var id=(this).getAttribute('data-id');
    var name=document.getElementById("name"+id).textContent;
    var desc=document.getElementById("desc"+id).textContent;
    var venue=document.getElementById("venue"+id).textContent;
    var contact=document.getElementById("contact"+id).textContent;
    var date=document.getElementById("date"+id).textContent;
    var image=document.getElementById("image"+id).textContent;
    document.getElementById("modalName").textContent=desc;
    document.getElementById("modalDesc").textContent=desc;
    document.getElementById("modalVenue").textContent=venue;
    document.getElementById("modalContact").textContent=contact;
    document.getElementById("modalDate").textContent=date;
    
    document.getElementById("modalImage").src="/images/eventImg/"+image;

    $("#editEventModal").modal();
    
    $('#modalSave').one('click',function(){
        name=document.getElementById("modalName").textContent;
        desc=document.getElementById("modalDesc").textContent;
        venue=document.getElementById("modalVenue").textContent;
        contact=document.getElementById("modalContact").textContent;
        date=document.getElementById("modalDate").textContent;
         var upimage=document.getElementById('modalUpImage').value;
      
        
var formData = new FormData();
formData.append('name',name);
formData.append('desc',desc);
formData.append('venue',venue);
formData.append('contact',contact);
formData.append('date',date);
formData.append('id',id);

if( upimage.trim()!='')
    formData.append('img', $('input[type=file]')[0].files[0]); 
else
{
    formData.append('img',image);
    formData.append('keep',true);
    
}

        $.ajax({
             method:'POST',
             url:'updateEvents.php',
             data: formData,
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $(this).attr("disabled","disabled");


            },
            success:function(msg){
                if(msg == 'ok'){
                    alert('Event Updated!');
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
    
    
 
    });
  });


    $('#addEventBtn').on('click',function(){
            $("#addEventModal").modal();

    });
    
    $('#modalAddSave').on('click',function(){
        var name=document.getElementById("addName").value;
        var desc=document.getElementById("addDesc").value;
        var venue=document.getElementById("addVenue").value;
        var contact=document.getElementById("addContact").value;
        var date=document.getElementById("addDate").value;
        var upimage=document.getElementById('addImage').value;
        if(name.trim()==''){
            alert('Please enter name.');
            return false;

        }
        else if(desc.trim()==''){
            alert('Please enter event description.');
            return false;

        }
        else if(venue.trim()==''){
            alert('Please enter the venue.');
            return false;

        }
        else if(contact.trim()==''){
            alert('Please enter the venue contact.');
            return false;

        }
        else if(date.trim()==''){
            alert('Please enter the date.');
            return false;

        }
        else if(upimage.trim()==''){
            alert('Please upload event image.');
            return false;

        }
        else{   
            var formData = new FormData();
            formData.append('name',name);
            formData.append('desc',desc);
            formData.append('venue',venue);
            formData.append('contact',contact);
            formData.append('date',date);
            formData.append('imgu', ($("#addImage"))[0].files[0]); 
            // alert(($("#addImage"))[0].files[0]);
             $.ajax({
             method:'POST',
             url:'adAddEvent.php',
             data: formData,
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function () {
                $(this).attr("disabled","disabled");


            },
            success:function(msg){
                if(msg == 'ok'){
                    alert('Event Added!');
                    location.reload();

                    
                }else{
                    alert(msg);

                }
                $(this).removeAttr("disabled");
            },
            error: function(data){
                console.log("error");
                console.log(data);
                alert('An error ocurred.')

            }
                
        });       
    
    
        }
        
    });
    
    
$('.book-trash').on('click',function(){
    var id=(this).getAttribute('data-id');
     $.ajax({
             method:'POST',
             url:'deleteEvent.php',
             
             data:{'id':id},
            beforeSend: function () {
                
            },
            success:function(msg){
                if(msg == 'ok'){
                    alert('Event Removed!');
                    location.reload();

                    
                }else{
                    alert(msg);

                }
                
            }
                
        });       
});  

    
</script>
</body>
</html>