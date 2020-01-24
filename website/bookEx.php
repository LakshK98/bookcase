<?php
    require 'navbar.php';
    require 'connectivity.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Ex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body style="background-color: white">


<hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
<br>
<?php
$id=$_GET['uid'];
$query_book= "select * from books where id=$id";

$result= mysqli_query($con,$query_book);

$record=mysqli_fetch_array($result);

  $book_name = $record['name'];
  $book_author = $record['author'];
  $book_img =$record['image'];
  $book_id =$record['id'];
  $book_summary=$record['summary'];
  

echo"
<div class='container'>
  <div class='row'>
      <div class='col-md-3 offset-md-2 col-10 offset' >
          <img src='images/bookcovers/$book_img' style='width: 85%;height: 275px'>
      </div>
      <div class='col-md-5'>
        <h1 style='font-family: Bookman'>$book_name</h1>
        <p style='margin-left: 5px'>by <span style='font-size: 20px'>$book_author</span> </p>
        <hr> 
        <br><br><br>
<button type='button' id='add' data-id='$book_id'class='btn btn-success' style='width: 50%;' >Add to collection</button>

      </div>
  </div>
  <br>
  <div class='row'>
    <div class='col-md-10 offset-md-1'>
      <h4>Description </h4>

      <hr>
      <p>$book_summary</p>

    </div>
  </div>

</div>";
?>

<script>
document.getElementById('add').onclick = function() {
var loggedin = '<?php echo isset($_SESSION['loggedin']);?>';
if( loggedin == "")
{
    $('#loginModal').modal('show');
}    else{
    var bookid = (this).getAttribute("data-id");
    $.ajax({
             method:'POST',
             url:'addBook.php',
             
             data:{'frmSubmit':1,'bookid':bookid},
            beforeSend: function () {
                $('#add').attr("disabled","disabled");


            },
            success:function(msg){
                if(msg == 'ok'){
                    alert('Added to collection!');
                    
                }else{
                    alert(msg);

                }
                $('#add').removeAttr("disabled");
            },
                
        });       
}
};
</script>
</body>
</html>

