<?php
if(isset($_POST['paynow']))
{
    echo "<script> 
       alert('Payment Successful!');
       window.location.replace('index.php');

    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  flex: 25%;
}

.col-50 {
  flex: 50%;
}

.col-75 {
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 10px 10px 15px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 50%;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
  width:50%;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: rgb(218, 125, 19);
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #e0850c;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment.php" method="post">
      
        <div class="row">
          <div class="col-50">
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Rohit Nadiger" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="June" required>
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352" required>
            <label for="expyear">Exp Year</label>
            <input type="text" id="expyear" name="expyear" placeholder="2020" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
        </label>
        <input type="submit" value="Pay Now" name="paynow"id="paynow"button type="btn" class="btn" ></button>
      </form>
    </div>
  </div>
 
    </div>
  </div>
</div>
</body>
</html>

