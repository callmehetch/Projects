<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>LEAVE ADMIN PANEL</h2>
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">pending requests</a></li>
    <li><a data-toggle="tab" href="#menu1">approved list</a></li>
    <li><a data-toggle="tab" href="#menu2">rejected list</a></li>
    <li><a data-toggle="tab" href="#menu3">check with date</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <? php
    require_once('authenticate.php');
    
    require_once('connect.php');

     $conn = mysql_connect($servername, $username, $password);
     mysql_select_db('epiz_22073457_leave');
     $gender="M";
     $status="0";
    $result = mysql_query("SELECT * FROM data  where  gender= '".$gender."' and status='".$status."'" ,$conn);


     if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
        if(mysql_num_rows($result)==0)
        { ?>
        <h3 class=""> no  pending approvals</h3>


        <? php 
      } ?>

      <? php
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

      <div class="col-sm-12">
        <table class="table table-hover" >
    <tr>
      <th  style="padding-left:  4em; background-color: #3498db;">id</th>
      <th style="padding-left:  4em; background-color: #3498db;"> name </th>
      <th style="padding-left:  6.5em;  background-color: #3498db;">reason </th>
      <th style="padding-left:  4em;  background-color: #3498db;">outgoing date </th>
      <th style="padding-left:  4em;  background-color: #3498db;"> incoming date </th>

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
            <button class="btn btn-success" id="<?php echo($row["id"]) ?>" onclick="approve(this.id,' <?php echo  $row["out1"]; ?>',' <?php echo  $row["in1"]; ?>')"> Accept</button>
             <button class="btn btn-danger" id="<?php echo($row["id"]) ?>" onclick="reject(this.id)"> reject</button>
          </td>


        </tr>

    <?php
      }
     ?>


    </table>


       </div>
     </div>
    <div id="menu1" class="tab-pane fade">
       <? php
    require_once('authenticate.php');
    
    require_once('connect.php');

     $conn = mysql_connect($servername, $username, $password);
     mysql_select_db('epiz_22073457_leave');
     $gender="M";
     $status="1";
    $result = mysql_query("SELECT * FROM data  where  gender= '".$gender."' and status='".$status."'" ,$conn);


     if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
        if(mysql_num_rows($result)==0)
        { ?>
        <h3 class=""> no  pending approvals</h3>


        <? php 
      } ?>

      <? php
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

      <div class="col-sm-12">
     <table class="table table-hover" >
    <tr>
      <th  style="padding-left:  4em; background-color: #3498db;">id</th>
      <th style="padding-left:  4em; background-color: #3498db;"> name </th>
      <th style="padding-left:  6.5em;  background-color: #3498db;">reason </th>
      <th style="padding-left:  4em;  background-color: #3498db;">outgoing date </th>
      <th style="padding-left:  4em;  background-color: #3498db;"> incoming date </th>

      <th style="padding-left:  4em;  background-color: #3498db;"> Date </th>

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
            <?php echo $row["date"];?>
          </td>


        </tr>

    <?php
      }
     ?>


    </table>
        
      </div> 

       
    </div>
    <div id="menu2" class="tab-pane fade">

       <? php
    require_once('authenticate.php');
    
    require_once('connect.php');

     $conn = mysql_connect($servername, $username, $password);
     mysql_select_db('epiz_22073457_leave');
     $gender="M";
     $status="2";
    $result = mysql_query("SELECT * FROM data  where  gender= '".$gender."' and status='".$status."'" ,$conn);


     if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
        if(mysql_num_rows($result)==0)
        { ?>
        <h3 class=""> no  pending approvals</h3>


        <? php 
      } ?>

      <? php
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

      <div class="col-sm-12">
     <table class="table table-hover" >
    <tr>
      <th  style="padding-left:  4em; background-color: #3498db;">id</th>
      <th style="padding-left:  4em; background-color: #3498db;"> name </th>
      <th style="padding-left:  6.5em;  background-color: #3498db;">reason </th>
      <th style="padding-left:  4em;  background-color: #3498db;">outgoing date </th>
      <th style="padding-left:  4em;  background-color: #3498db;"> incoming date </th>

      <th style="padding-left:  4em;  background-color: #3498db;"> Date </th>

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
            <?php echo $row["date"];?>
          </td>


        </tr>

    <?php
      }
     ?>


    </table>
        
      </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
