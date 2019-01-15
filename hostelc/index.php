<?php
session_start();

require_once('settings.php');
require_once('google-login-api.php');



?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hostel Complaints Form</title>
  </head>
  <body>
   
    <img style="background-color: #214B8C; width:100%;height:100%" src="iiitdm.png">
    
    
    
    
    <div class="container">
    
      
    
    <div class="container" style="padding-top : 1%;">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3" style="text-align:center"><u>Complaint Registration Form</u> : </h4>
            <hr class="mb-4">

            <form class="needs-validation" onsubmit="return validate();" action="" method="post" autocomplete="off">
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="name">Name of the student</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Name is required.
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="roll">ROLL NO</label>
                        <input type="text" class="form-control" name="roll" id="roll" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Roll No. is required.
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="number">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your Moile Numer is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="gender">Gender</label>
                        <select class="custom-select d-block w-100" name="gen" id="gender" required>
                            <option value="">Choose...</option>
                            <option>M</option>
                            <option>F</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Gender.
                        </div>
                    </div>



                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="hostel">Hostel</label>
                        <select class="custom-select d-block w-100" name="hos" id="hostel" required>
                            <option value="">Choose...</option>
                            <option>Ashwatha</option>
                            <option>Ashoka</option>
                            <option>Jasmine</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="roomno">ROOM NO</label>
                        <input type="text" class="form-control" name="room" id="roomno" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid Room No. is required.
                        </div>
                    </div>


                </div>

                <div class="mb-3">
                    <label for="address">Description:</label>
                    <input style="height: 50px" type="text" class="form-control" name="reason" id="reason" placeholder="" required>
                    <div class="invalid-feedback">
                        Please enter your reason.
                    </div>
                </div>

                <hr class="mb-4">

                <button class="btn btn-primary  " style="width : 30%;  ">Submit</button>
                
            </form>
            <p id="error_para" style="color: red"></p>
        </div>

    </div>


    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>