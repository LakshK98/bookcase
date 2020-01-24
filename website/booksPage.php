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

<div class="container-fluid"style="height: 1000px;" >
	<div class="row "style="height: 100%";>

		<div class="col-md-3 "style="border-right: 2px solid #B3B3C1;" >
			
			<nav class="nav ">

				<div style="width: 100%"><span class="cat-style sections"  data-id='1' id="section">BestSellers</span>
			    	<hr>
			    	</div>
			    <div style="width: 100%">
		    	<span class="cat-style sections"  data-id='2' >New Arrivals</span>
		    	<hr ></div>
		    	<div style="width: 100%">
				<span class="cat-style sections"  data-id='3' >Recommends</span>
		    	<hr>
		    	</div>
		        <div >
		            <span class="cat-style"id="categories">Categories 
		            <i class="fa fa-angle-down"></i>
		            </span>
		            <hr>
		            <ul >
		            	<?php
		            	    $query_genres= "select * from genres ";
                            $res= mysqli_query($con,$query_genres);
                            while($record=mysqli_fetch_array($res))
                            {
                                $genre_name=$record['name'];
                            echo "<li ><a class='genres' ><i class='fa fa-caret-right cat-i'></i>$genre_name</a></li>
		                 ";
                            }
		            	
		            	?>
		                <!--<li ><a class="genres" ><i class="fa fa-caret-right cat-i "></i>Fiction</a></li>-->
		                <!--<li ><a class="genres"><i class="fa fa-caret-right cat-i "></i>Romance</a></li>-->
		                <!--<li ><a class="genres"><i class="fa fa-caret-right cat-i "></i>Sci-Fi</a></li>-->
		                <!--<li ><a class="genres"><i class="fa fa-caret-right cat-i "></i>Fantasy</a></li>-->
		                <!--<li ><a class="genres"><i class="fa fa-caret-right cat-i "></i>Young Adult</a></li>-->
		                <!--<li ><a class="genres"><i class="fa fa-caret-right cat-i "></i>Business</a></li>-->
		            </ul>
		        </div>		  
		    	
		    		    	
	  
			</nav>
		
		</div>

		<div class="col-md-9 col-12"><CENTER>
			<span class="title" id="bookpage_title"><?php echo $_GET["title"]; ?> </span></span>
</CENTER>
				<hr class="hr-shad">
			<br>
			<div class="row">

				<?php
				    
if(isset($_GET['type']))
{
    
    $type=$_GET["type"];
    if($type==0)
    {
        $title=$_GET["title"];
        $query_books= "select * from books where genre='$title'";
    }
    
    else
        $query_books= "select * from books where type='$type'";

}
else
{
$query_books= "select * from books";
}
$result= mysqli_query($con,$query_books);
//$rowcount=mysqli_num_rows($result);
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
        <div class='col-md-3  col-6' >
					<CENTER>
					<img src='images/bookcovers/$book_img' class='bookEx' data-id='$book_id' style='height: 210px;width: 150px;' >
					<div class='caption'  style='color: black'>
						<h4>$book_name</h4>
						<h6 style='color: #808B96'>By $book_author</h6>
					</div>
					</CENTER>
		</div>";
		$rowCount++;
    if($rowCount % 4 == 0) { echo"</div><br><br><div class='row'>";}
}

?>
			</div>
		</div>

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
