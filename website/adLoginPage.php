<?php 
    require 'connectivity.php';
    
    if(isset($_POST['btnSubmit']))
    {
        $username=$_POST['txtUserName'];
        $password=$_POST['txtPassword'];
        	$query= "select * from admins WHERE username='$username' AND password='$password'";
					$query_run = mysqli_query($con,$query);
				    
				    
					if(mysqli_num_rows($query_run)>0)
					{
					    $record=mysqli_fetch_array($query_run);
				 		$status = 'ok';
				 		
                        session_start();
                        session_destroy();
                        session_start();
                        $_SESSION['aloggedin'] = true;
                        header('Location: /adOverview.php');
 					}
					else
					{
					    
							 $status = 'Username and password dont match';
                             echo $status;							
						
						
					}
					
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Login Page</title>
    <style>
        /* Basics */
        html, body
        {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            font-family: "Helvetica Neue" , Helvetica, sans-serif;
            background: #FFFFFF;
        }
        .logincontent
        {
            position: fixed;
            width: 350px;
            height: 300px;
            top: 50%;
            left: 50%;
            margin-top: -150px;
            margin-left: -175px;
            /*background: rgba(180, 190, 192, 0.795);*/
            background:#D3D3D3	;
            padding-top: 10px;
        }
        .loginheading
        {
            border-bottom: solid 1px #ECF2F5;
            padding-left: 18px;
            padding-bottom: 10px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }
        label
        {
            color: #ffffff;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 15px;
        }
        input[type=text], input[type=password]
        {
            font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 300px;
            height: 35px;
            /*border: 1px solid #ccc;*/
            /*border-radius: 2px;*/
            /*box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;*/
            font-size: 14px;
        }
        input[type=checkbox]
        {
            margin-left: 18px;
            margin-top: 30px;
        }
        .loginremember
        {
            background: #ECF2F5;
            height: 70px;
            margin-top: 20px;
        }
        .check
        {
            font-family: sans-serif;
            position: relative;
            top: -2px;
            margin-left: 2px;
            padding: 0px;
            font-size: 12px;
            color: #321;
        }
        .loginbtn
        {
        
            margin-right: 20px;
            margin-top: 20px;
            padding: 6px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #07A8C3;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#07A8C3), to(#6EE4E8));
            background-image: -moz-linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            background-image: linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            /*border-radius: 30px;*/
            border: 1px solid #07A8C3;
            cursor: pointer;
        }
        .loginbtn:hover
        {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
            background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
            background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        }
    </style>
</head>
<body>
    <div class="logincontent">
        <div class="loginheading">
             Admin Login
        </div>
        <form action='adLoginPage.php' method='post'>
        <label for="txtUserName">
            Username:</label>
        <input type="text" id="txtUserName" name="txtUserName" required/>
        <label for="txtPassword">
            Password:</label>
        <input type="password" id="txtPassword" name="txtPassword" required/>
        <div class="loginremember">
            
         <center>  <button type='submit' class='loginbtn' name='btnSubmit'id="btnSubmit" >Login</button></center> 
        </form>
        </div>
    </div>
    <script>
    
// $('btnSubmit').on('click',function(){
//     alert('ghhjgj');
//     var name = $('#txtUserName').val();
//     var password = $('#txtPassword').val();
//     alert(name +password);
//     if(name.trim() == '' ){
//         alert('Please enter username.');
//         $('#loginName').focus();
//         return false;
//     }else if(password.trim() == '' ){
//         alert('Please enter password.');
//         $('#loginPass').focus();
//         return false;
//     }
//     else {
//         $.ajax({
//              method:'POST',
//              url:'adLogin.php',
             
//              data:{'frmSubmit':1,'name':name,'password':password},
//             beforeSend: function () {
//                 $('signup_btn').attr("disabled","disabled");
//                 $('.modal-body').css('opacity', '.5');
                               

//             },
//             success:function(msg){
//                 if(msg == 'ok'){
//                      alert('hee yae');
//                      window.location.replace('adOverview.php');
                   
                    
//                 }else{
//                     alert(msg);

//                 }
//                 $('login_btn').removeAttr("disabled");
//                 $('.modal-body').css('opacity', '');
//             },
                
//         });       
//     }
    
        
// });

    </script>
</body>
</html>