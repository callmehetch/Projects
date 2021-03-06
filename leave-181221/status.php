<!DOCTYPE html>
<html>

<head>
    <title>Leave Permission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="951495932281-r4l49a7oub0ug5ponljas5jkh5kab3ln.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://github.com/Eonasdan/bootstrap-datetimepicker/blob/master/src/js/bootstrap-datetimepicker.js"></script>

    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script src="https://use.fontawesome.com/b3f6a18a0c.js"></script>
    <script src="clockface.js"></script>
    <link rel="stylesheet" href="clockface.css">


    <script src="https://apis.google.com/js/platform.js" async defer></script>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />





    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <style>
    
     body,html {
            height: 100%;
            width: 100%;
        }
      

      
      
              .dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}

    </style>
</head>




<body>



<img src="HWlogo1.png" style="background: #264F8F; width: 100%;  border: solid white 2px;" />
  
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #264F8F">
  
 
 <div style = "padding-left : 12% ">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: #edeaea;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #edeaea;" href="status.php">Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #edeaea;" href="#">Gate</a>
      </li>
      
      
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style="color: #edeaea;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Contact
        </a>
        <div class="dropdown-menu" style="background-color : #264F8F  " aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  style="color: #edeaea;" href="https://mail.google.com/mail/?view=cm&fs=1&to=warden_boys@iiitdm.ac.in">Boys</a>
          <a class="dropdown-item"  style="color: #edeaea;" href="https://mail.google.com/mail/?view=cm&fs=1&to=warden_boys@iiitdm.ac.in">Girls</a>
          
        </div>
      </li>
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Approver
        </a>
        <div class="dropdown-menu" style="background-color : #264F8F " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" target="_blank" href="1w.php">Boys</a>
          <a class="dropdown-item" target="_blank" href="2w.php">Girls</a>
          
        </div>
      </li>
     
    </ul>

  </div></div>
</nav>

    <div class="container" style="padding-top : 1%; text-align:center ">

        <h5>Check the status of your application</h5>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row" style="padding-top : 5%;">
                <div class="col-md-6 mb-3">
                    <h6>Please enter your ID or Roll: </h6>
                </div>
                <div class="col-md-6 mb-3">


                    <div class="input-group mb-3">

                        <input type="text" name="txtName" required/>

                        <div class="input-group-append">

                            <button class="btn btn-outline-secondary" type="submit" value="Send" name="submit">Status</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>

    <?php




    if(isset($_POST["txtName"]))
{



    require_once('connect.php');


    $a = $_POST['txtName'];
$b = $_POST['txtName'];   $conn = mysql_connect($servername, $username, $password, $dbname);
    $result = mysql_query("SELECT * FROM data WHERE id = '$a' OR roll = '$b' ",$conn);




    if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}

        $row = mysql_fetch_row($result);
        if(mysql_num_rows($result) == 0) {

            echo "Data not found";
           echo"* Or maybe your application couldn't be submitted due to your browser cache problem. Try filling form again using Incognito";
          
        }

        else {
          
          if($row[12] == 'F'){
           
            $w = "Dr. Anushree";
          }
          if($row[12] == 'M'){
             $w = "Dr. Jagadeesh Kakarla";
          }

            if($row[13] == '0'){
                $z = 'pending';
                }
            elseif($row[13] == '1'){
                $z = 'approved';
            }
            else{
                $z = 'rejected';
            }


echo '






<div class = "container">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Warden</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">'  .$row[1]. '</th>
      <td>'  .$row[0]. '</td>
      <td>' .$w .'</td>
      <td>'  .$z. '</td>
    </tr>

  </tbody>
</table>

</div>






<h6 style : "padding-top : 5%; ">* An email will be sent to you once your application is approved</h6>









';

            }


}


    ?>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
