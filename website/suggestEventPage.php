<?php
require 'connectivity.php';
require 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Suggest Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<hr style="height: 12px;background-color: #F7CC0D;margin-top: 0px">
<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
    <form name="suggestEventForm" action="suggestEventStore.php" method="post" enctype="multipart/form-data">
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <h2 id="who_message" class="card-title">Full name</h2>
                <div class="row">
                    <div class="form-group col-md-2">
                        <select id="input_sex"name="input_sex" class="form-control">
                            <option value="Mr">Mr.</option>
                            <option value="Ms">Ms.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="first_name"name="first_name" type="text" class="form-control" placeholder="First name" required>
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="last_name"name="last_name" type="text" class="form-control" placeholder="Last name">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">How to contact you ?</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="sugEmail"name="sugEmail" placeholder="example@gmail.com" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Phone number</label>
                            <input type="number" class="form-control" id="tel"name="tel"required>
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-12">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Suggest Event!</h2>
                        <div class="form-group">
                            <label for="eventName" class="col-form-label">Event name</label>
                            <input type="text" class="form-control" id="eventName"name="eventName" placeholder="Name of the Event" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="eventDesc" class="col-form-label">Event Description</label>
                            <textarea name="eventDesc" id="eventDesc"style="width: 100%" rows="2"></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="venAddr" class="col-form-label">Venue Address</label>
                            <textarea name="venAddr"id="venAddr" style="width: 100%" rows="2"></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="venContact" class="col-form-label">Venue Contact Number</label>
                            <input type="number" class="form-control" id="venContact" name="venContact" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="uploadImage" class="col-form-label">Upload Image</label>
                          
                         <input type="file"id="uploadImage" name="uploadImage">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1em;">
            <button type="submit" class="btn btn-success btn-lg btn-block">Suggest !</button>
        </div>
        </form>
</div>

</body>
</html>