
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <script>
   
$(document).on("click", "#login_btn", function(event){
    
    var name = $('#loginName').val();
    var password = $('#loginPass').val();
    if(name.trim() == '' ){
        alert('Please enter username.');
        $('#signupName').focus();
        return false;
    }else if(password.trim() == '' ){
        alert('Please enter password.');
        $('#signupPass').focus();
        return false;
    }
    else {
        $.ajax({
             method:'POST',
             url:'login.php',
             
             data:{'frmSubmit':1,'name':name,'password':password},
            beforeSend: function () {
                $('signup_btn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
                               

            },
            success:function(msg){
                if(msg == 'ok'){
                    location.reload();

                    
                }else{
                    alert(msg);

                }
                $('login_btn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            },
                
        });       
    }
    
        
});

    </script>
</head> 
<body>
<div class="modal fade" id="loginModal" >
  <div class="modal-dialog  modal-lg modal-dialog-centered "  >
    <form class="modal-content" style="height:60vh; px;background-image: url(images/back.png);">
      
      <div class="modal-body">


        <div class="container" style="width:100%;margin: auto;padding: 10%">
          <center>
            <img src="images/logo.png" style="width: 50%;margin-bottom: 10px;">

            <input type="text" id="loginName"class="form-control rounded-brdr" placeholder="Enter Username">
            <br>
            <input type="password"id="loginPass" class="form-control rounded-brdr" placeholder="Enter Password">
            <br>
            <button type="button" id="login_btn" class="btn modal-btn rounded-brdr"  >Log in</button>
             </center>
        </div> 
      </div>
        
    </form>
  </div>
</div>

</body>
</html>