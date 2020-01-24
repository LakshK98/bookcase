
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      .modal-btn{
          background-color:hsl(24,96%,45%);
          color:white;
      }
      .modal-btn:hover{
          background-color:hsl(24,96%,35%);
          color:white;
      }
  </style>
<script>
   
$(document).on("click", ".signup", function(event){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#signupName').val();
    var email = $('#signupEmail').val();
    var cpassword = $('#signupCPass').val();
    var password = $('#signupPass').val();
    var id= $(this).attr("id");
    var type =0;
    if(id == "signup_btn1")
    {
        type=1;
    }
    else{
        type=2;
    }
    if(name.trim() == '' ){
        alert('Please enter your username.');
        $('#signupName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#signupEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#signupEmail').focus();
        return false;
    }else if(password.trim() == '' ){
        alert('Please enter password.');
        $('#signupPass').focus();
        return false;
    }else if(cpassword.trim() == '' ){
        alert('Please confirm password.');
        $('#signupCPass').focus();
        return false;
    }
    else if(password == cpassword){
        localStorage["name"] = name;
        localStorage["email"] = email;
        localStorage["password"] = password;
        localStorage["type"]=1;
        $.ajax({
             method:'POST',
             url:'register.php',
             
             data:{'frmSubmit':1,'name':name,'email':email,'password':password,'type':type},
            beforeSend: function () {
                $('signup_btn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');

            },
            success:function(msg){
                if(msg == 'ok'){

        window.location.assign("payment.php"); 
                    
                }else{
                    alert(msg);

                }
                $('signup_btn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            },
                
        });       
    }
        else{
            alert("Password and confirm password does not match!");
            return false;
        }
});

    </script>
</head> 
<body>
<div class="modal fade" id="signupModal" >
  <div class="modal-dialog  modal-lg modal-dialog-centered "  >
    <form class="modal-content form" action=""  enctype="multipart/form-data" style="height:auto; background-image: url(images/back.png);">
      
      <div class="modal-body">


        <div class="container" style="width:100%;margin: auto;padding: 10%">
          <center>
            <img src="images/logo.png" style="width: 50%;margin-bottom: 10px;">

            <input type="text" id="signupName" name="username" class="form-control rounded-brdr" placeholder="Username" required> 
            <br>
            <input type="email" id="signupEmail" name="email" class="form-control rounded-brdr" placeholder="Enter Email" required>
             <br>
            <input type="password" id="signupPass"name="password" class="form-control rounded-brdr " placeholder="Enter Password" required>
            <br>
            <input type="password" id="signupCPass"name="cpassword" class="form-control rounded-brdr" placeholder="Confirm Password" required>
            <br>
            <button type="button"class="btn modal-btn signup rounded-brdr"  id="signup_btn1"   >Join the Bookcase at &#x20b9;100 per month</button>
           <div class="row">
               <div class="col-5">
                   <hr style="background-color:white;height:2px">
               </div>
               <div class="col-2">
                    <h4 style="color:white">or</h4>   
               </div>
               <div class="col-5">
                   <hr style="background-color:white;height:2px">
               </div>
           </div>
<button type="button"class="btn modal-btn signup rounded-brdr " id="signup_btn2"   >Join the Bookcase at &#x20b9;600 per year</button>

        </div> 
      </div>
        
    </form>
  </div>
</div>

</body>
</html>