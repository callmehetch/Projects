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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>




<body>

<?php
require_once('authenticate.php');
    
    require_once('connect.php');

     $conn = mysql_connect($servername, $username, $password, $dbname);
     $gender="M";
     $status="0";
    $result = mysql_query("SELECT * FROM data  where  gender= '".$gender."' and status='".$status."'" ,$conn);


     if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}



        if(mysql_num_rows($result) == 0) {

            echo "No pending approvals";
            echo '    <a href="http://leave.iamanerd.rf.gd/a.php"  id="code" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-download"></span>Approved List</a>
                  
                           <a href="http://leave.iamanerd.rf.gd/r.php" id="code" type="submit" class="btn btn-danger" ><span class="glyphicon glyphicon-download"></span>Rejected List</a>
                           
                           <a href="http://leave.iamanerd.rf.gd/d.php" target="_blank" id="code" type="submit" class="btn btn-info" ><span class="glyphicon glyphicon-download"></span>Check with date</a> ';
            
            
            exit;
        }

        else {
            $arr=array();
           $i=0;
           $count = mysql_num_rows($result);
             while($i<$count){
              $row=mysql_fetch_array($result);
              $arr[]=$row;
           $i++;
        }

            }






    ?>

<div class="container-fluid" style="padding: 0">

<div class="col-lg-12" style="padding: 0; margin-bottom: 50px">


    

                     


</div>
<div class="container-fluid">
  <h2 style="text-align:  center;"> Pending Approvals</h2>
          
                       <a href="http://leave.iamanerd.rf.gd/a.php"  id="code" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-download"></span>Approved List</a>
                  
                           <a href="http://leave.iamanerd.rf.gd/r.php" id="code" type="submit" class="btn btn-danger" ><span class="glyphicon glyphicon-download"></span>Rejected List</a>
  <a href="http://leave.iamanerd.rf.gd/d.php" target="_blank" id="code" type="submit" class="btn btn-info" ><span class="glyphicon glyphicon-download"></span>Check with date</a>
    
<table class="table table-hover" >
    <tr>
      <th  style="padding-left:  4em; background-color: #3498db;">Id</th>
      <th style="padding-left:  4em; background-color: #3498db;"> Name </th>
      <th style="padding-left:  6.5em;  background-color: #3498db;">Reason </th>
      <th style="padding-left:  4em;  background-color: #3498db;">Outgoing date </th>
      <th style="padding-left:  4em;  background-color: #3498db;"> Incoming date </th>
<th style="padding-left:  4em;  background-color: #3498db;"> Veiw </th>
      <th style="padding-left:  4em;  background-color: #3498db;"> Action </th>

    </tr>


    <?php
      foreach ($arr as $row) {


       ?>
        <tr>
          <td style="padding-left:  4em;">
            <?php echo  $row["roll"] ; ?>
          </td>
          <td style="padding-left:  4em;">
            <a><?php echo $row["name"]  ;  ?>
          </td>
          <td style="padding-left:  6.5em;">
           <?php echo   $row["reason"]; ?>
          </a></td >
           <td style="padding-left:  4em;">
            <?php echo  $row["out1"]; ?>
          </td>
           <td style="padding-left:  4em;">
            <?php echo  $row["in1"]; ?>
          </td>
    <td style="padding-left:  4em;">
             <button class="btn btn-info" id="<?php echo($row["id"]) ?>" onclick="view(this.id,' <?php echo  $row["name"]; ?>','<?php echo  $row["roll"]; ?>','<?php echo  $row["phone"]; ?>','<?php echo  $row["room"]; ?>','<?php echo  $row["parent"]; ?>','<?php echo  $row["pphone"]; ?>','<?php echo  $row["add1"]; ?>',' <?php echo  $row["out1"]; ?>',' <?php echo  $row["in1"]; ?>',' <?php echo  $row["reason"]; ?>',' <?php echo  $row["pmail"]; ?>',' <?php echo  $row["hostel"]; ?>',' <?php echo  $row["email"]; ?>')"> View</button>        
          </td>
           <td style="padding-left:  4em;">
            <button class="btn btn-success" id="<?php echo($row["id"]) ?>" onclick="approve(this.id,' <?php echo  $row["out1"]; ?>',' <?php echo  $row["in1"]; ?>')"> Accept</button>
             <button class="btn btn-danger" id="<?php echo($row["id"]) ?>" onclick="reject(this.id)"> Reject</button>
          </td>


        </tr>

    <?php
      }
     ?>


    </table>

</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




    <div class="w3-container">

    <div id="id02" class="w3-modal" >
      <div class="w3-modal-content">

        <header class="w3-container w3-teal">


          <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <h2>Approve leave</h2>
        </header>

        <div class="w3-container">
          <form method="post" action="mail2.php" autocomplete="off">
            <input type="hidden" name="id" id="userid2">
            <div class="row">
                <div class="col-md-6">

             <div class="form-group">
              <label for="from"> Reason: </label>
               <input type="text" class="form-control" name="reason" width="100%">
             </div>
             </div>
              </div>



             <div class="col-md-4 text-center">
             <button  class="btn btn-danger center-block" type="submit" name="btn-approve">Reject</button>
              </div>
            </form>
        </div>


      </div>
    </div>




        <div id="id01" class="w3-modal" >
      <div class="w3-modal-content" style = "height : 400px">

        <header class="w3-container w3-teal">


          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <h2>Approve leave</h2>
        </header>

        <div class="w3-container" style = "padding-top : 5%">
        <center>
          <form method="post" action="mail1.php" autocomplete="off">
           <input type="hidden" name="id" id="userid1">
          

            <div class="row">
                
               <div class="col-md-6">           
             <div class="form-group">
              <label for="from"> from</label>
               <input type="text" class="form-control" name="out1" id="out1" readonly>
               
               <input type="date"  name="from" >
             </div>
             </div>


             <div class="col-md-6">
             <div class="form-group">
              <label for="to">tooo</label>
                <input type="text" class="form-control" name="in1" id="in1" readonly>
                  <input type="date"  name="to"></div>
               </div>
            
          
            </div>

             <div class="col-md-4 text-center">
             <button  class="btn btn-success center-block" type="submit" name="btn-approve">Approve</button>
              </div>
            </form>
            </center>
        </div>
        </div>

      </div>
 

      
      

<div id="id03" class="w3-modal" >
      <div class="w3-modal-content" style = "height : 1200px">

        <header class="w3-container w3-teal">

<input type="hidden" name="id" id="userid3">
          <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <h2>Student Details</h2>
        </header>

        <div class="w3-container" style = "padding-top : 5%">
        <center>
        
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="name">Name of the student</label>
                        <input type="text" class="form-control" name="a" id="a"  readonly>

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="roll">ROLL NO</label>
                        <input type="text" class="form-control" name="b" id="b"  readonly>
                        
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="gender">Gender</label>
                       <input type="text" class="form-control" name="" id="" value = "M"  readonly>
                      
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address">Email :</label>
                    <input type="text" class="form-control" name="o" id="o"  readonly>
              
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="number">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="c" id="c"  readonly >
                            
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="hostel">Hostel</label>
                      
                        <input type="text" class="form-control" name="hostelv" id="hostelv"   readonly>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="roomno">ROOM NO</label>
                        <input type="text" class="form-control" name="d" id="d"  readonly>
                      
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="pname">Parent Name</label>
                        <input type="text" class="form-control" name="e" id="e" readonly>
                        
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="pphone">Parent Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+91</span>
                            </div>
                            <input type="text" class="form-control" name="f" id="f"  readonly>
                            
                        </div>
                    </div>

                </div>
                 <div class="mb-3">
                    <label for="address">Parent Email :</label>
                    <input type="text" class="form-control" name="p" id="p"  readonly>
                   
                </div>




                <div class="mb-3">
                    <label for="address">Address for communication:</label>
                    <input style="height: 50px" type="text" class="form-control" name="g" id="g"  readonly>
                  
                </div>
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="out1">OUTGOING </label>
                        <input type="text" id="h" width="312" class="form-control"  name="h"   readonly />
    
                      
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="idate">INCOMING </label>
                        <input type= "text" id="i" width="312" class="form-control"  name="i" readonly />
        
                        
                    </div>
                </div>


                <div class="mb-3">
                    <label for="address">Reason for leave</label>
                    <input style="height: 50px" type="text" class="form-control" name="j" id="j"  readonly>
                  
                </div>    
            </center>
        </div>
        </div>

      </div>

    </div>






<script type="text/javascript">


  function reject(id) {
document.getElementById('id02').style.display='block'
document.getElementById("userid2").value=id;

  }



</script>

<script type="text/javascript">


  function approve(id,out1,in1) {
document.getElementById('id01').style.display='block'
document.getElementById("userid1").value=id;
    document.getElementById("out1").value= out1;
    document.getElementById("in1").value= in1;

  }
</script>

      <script type="text/javascript">


  function view(id,a,b,c,d,e,f,g,h,i,j,p,hostelv,o) {
document.getElementById('id03').style.display='block'
document.getElementById("userid3").value=id;
    document.getElementById("a").value= a;
    document.getElementById("b").value= b;
     document.getElementById("c").value= c;
     document.getElementById("d").value= d;
     document.getElementById("e").value= e;
     document.getElementById("f").value= f;
     document.getElementById("g").value= g;
     document.getElementById("h").value= h;
     document.getElementById("i").value= i;
     document.getElementById("j").value= j;
     document.getElementById("p").value= p;
         document.getElementById("o").value= o;
     document.getElementById("hostelv").value= hostelv;

  }



</script>



</body>

</html>
