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
    .th {

        text-align :center;
    }


    </style>
</head>




<body>



    <div class="container" style="padding-top : 1%; text-align:center ">

        <h4>Check with Date-Picker.</h4>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row" style="padding-top : 5%;">
                <div class="col-md-6 mb-3">
                    <h5>Please enter date : </h5>
                </div>
                <div class="col-md-6 mb-3">


                    <div class="input-group mb-3">

                        <input type="date" name="txtName" />

                        <div class="input-group-append">

                            <button class="btn btn-outline-secondary" type="submit" value="Send" name="submit">Check</button>

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
        
        $p = substr($a,0,4);
        $q = substr($a,5,2);
        $r = substr($a,8,2);
        
 $g = $r.'/'.$q.'/'.$p ; 

        $conn = mysql_connect($servername, $username, $password);
mysql_select_db('epiz_22073457_leave');
 $result = mysql_query("SELECT * FROM data WHERE date ='$g'",$conn);




    if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}


        if(mysql_num_rows($result) == 0) {
          echo $g;
              echo "data not found";
        }

        else {
            echo $g;
            
      while($row = mysql_fetch_array($result)) {

                
                
                
                
                
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
      <th style="padding-left:  4em;" scope="col">ID</th>
      <th style="padding-left:  4em;" scope="col">Name</th>
      <th style="padding-left:  4em;" scope="col">Reason</th>
      <th style="padding-left:  4em;" scope="col">Warden</th>
      <th style="padding-left:  4em;" scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td  style="padding-left:  4em;" scope="row">'  .$row["roll"]. '</td>
      <td style="padding-left:  4em;">'  .$row["name"]. '</td>
      <td style="padding-left:  4em;">'.$row["reason"].'</td>
      <td style="padding-left:  4em;">Dr. Jagadeesh Kakarla</td>
      <td style="padding-left:  4em;">'  .$z. '</td>
    </tr>

  </tbody>
</table>

</div>
















';
        }
            }


}


    ?>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
