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

</head>
<!-- <body style="background-image:radial-gradient(#116466, #2C3531);"> -->
<body >
<hr class="test" style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
<br>

<div class="container"style="height: 1000px;" >
	<div class="row ">


		

				<?php
				   
    $search=$_GET["search"];
    // $search='po';
    $search=preg_replace("#[^0-9a-z ]#i","",$search);
   
        $query_books= "select * from books where name like '%$search%'";
 
    


$result= mysqli_query($con,$query_books);
$recordCount=mysqli_num_rows($result);

echo "
<div class=' col-12'><center>
			<span class=''style='font-size:20px' > $recordCount results for search by name:\"$search\" </span></span>

				<hr class='hr-shad'>
			</center><br>
			</div>
			</div>
			<div class='row'>
";
$rowCount = 0;


while($record=mysqli_fetch_array($result))
{
	$book_name = $record['name'];
	$book_author = $record['author'];
	$book_img =$record['image'];
	$book_id =$record['id'];
	
	
echo "
        <div class='col-md-2  col-6' >
					<CENTER>
					<img src='images/bookcovers/$book_img' class='bookEx' data-id='$book_id' style='height: 210px;width: 150px;' >
					<div class='caption'  style='color: black'>
						<h4>$book_name</h4>
						<h6 style='color: #808B96'>By $book_author</h6>
					</div>
					</CENTER>
		</div>";
		$rowCount++;
    if($rowCount % 6 == 0) { echo"</div><br><br><div class='row'>";}
}

?>
		
	</div>
	<br>
<div class="row ">

				<?php
				   
    // $search=$_GET["search"];
        $query_books= "select * from books where author like '%$search%'";
 
    


$result= mysqli_query($con,$query_books);
$recordCount=mysqli_num_rows($result);

echo "
<div class=' col-12'><CENTER>
			<span class=''style='font-size:20px' > $recordCount results for search by author:\"$search\" </span>
</CENTER>
				<hr class='hr-shad'>
			<br>
			</div>
			</div>
			<div class='row'>
";
$rowCount = 0;


while($record=mysqli_fetch_array($result))
{
	$book_name = $record['name'];
	$book_author = $record['author'];
	$book_img =$record['image'];
	$book_id =$record['id'];
	
	
echo "
        <div class='col-md-2  col-6' >
					<CENTER>
					<img src='images/bookcovers/$book_img' class='bookEx' data-id='$book_id' style='height: 210px;width: 150px;' >
					<div class='caption'  style='color: black'>
						<h4>$book_name</h4>
						<h6 style='color: #808B96'>By $book_author</h6>
					</div>
					</CENTER>
		</div>";
		$rowCount++;
    if($rowCount % 6 == 0) { echo"</div><br><br><div class='row'>";}
}

?>
		
	</div>
	
	
</div>

<script >
	$('#categories').on('click', function() {
    $('.nav div ul li').toggleClass('target');
    
});


$('.bookEx').on('click',function(){
    var x=(this).getAttribute("data-id");
    localStorage.setItem('bookID',x);
    // window.open("bookEx.php");
   window.location.href="bookEx.php?uid="+x;
});
   $('.sections').on('click',function(){
    var title=(this).textContent;
    var x=(this).getAttribute("data-id");
     window.location.href="booksPage.php?type="+x+"&title="+title;

      

   
});
$('.genres').on('click',function(){
   
    var title=(this).textContent;
   
    window.location.href="booksPage.php?title="+title+"&type="+0;
});
</script>


</body>
</html>
