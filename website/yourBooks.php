<?php
require 'connectivity.php';
require 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!-- <body style="background-image:radial-gradient(#116466, #2C3531);"> -->
<body >
<hr class="test" style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
<br>

<div class="container"style="height: 1000px;" >
	<div class="row "style="height: 100%";>



		<div class="col-md-12 col-12"><CENTER>
			<span class="title" id="bookpage_title">Your Books </span></span>
</CENTER>
				<hr class="hr-shad">
			<br>
			<div class="row">

				<?php
				    $userid=$_SESSION['userid'];
 $query_books= "select * from books where id = ANY (select bookid from userBooks where userId = $userid)";

$result= mysqli_query($con,$query_books);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
    echo "
    <div class='col-4 offset-4'><center>  
    <p>You have not added any books to your collection</p></center>
    </div>";
    
}
else{
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 3;

while($record=mysqli_fetch_array($result))
{
	$book_name = $record['name'];
	$book_author = $record['author'];
	$book_img =$record['image'];
	$book_id =$record['id'];
	
	
echo "
        <div class='col-md-3' >
					<CENTER>
					<a href='openpdf.php?id=$book_id'  target='_blank'><img src='images/bookcovers/$book_img' class='bookEx' data-id='$book_id' style='height: 210px;width: 150px;' ></a>
					<div class='caption'  style='color: black'>
						<h4>$book_name</h4>
						<h6 style='color: #808B96'>By $book_author</h6>
					</div>
					</CENTER>
		</div>";
		$rowCount++;
    if($rowCount % 4 == 0) { echo"</div><br><br><div class='row'>";}
}
}
?>
			</div>
		</div>

	</div>
</div>

<script >

$('.bookEx').on('click',function(){
    var x=(this).getAttribute("data-id");
    localStorage.setItem('bookID',x);
    // window.open("bookEx.php");
   window.location.href="bookEx.php?uid="+x;
});

</script>


</body>
</html>
