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
</head>




<body>
    <?php

session_start();


 // if(isset($_POST["txtName"])){
 $name = $_POST['name'];
 $rollno=$_POST['roll'];
    $gen = $_POST['gen'];
    $hos = $_POST['hos'];
$email=$_POST['email'];
 $mobile=$_POST['phone'];
 $room=$_POST['room'];
    $pmail = $_POST['pmail'];
 $parent=$_POST['parent'];
 $pphone=$_POST['pphone'];
$address=$_POST['add'];
 $out=$_POST['out'];
 $in=$_POST['in'];
  $outt =$_POST['outt'];
  $int = $_POST['int'];
$reason=$_POST['reason'];
//$g = $_SESSION['email'];
    $currentDate = date("j/n/Y");
require_once('connect.php');


if ($result=mysqli_query($conn,"SELECT * FROM data"))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);

  // Free result set
  mysqli_free_result($result);
  }
   $invID = $rowcount;

    $invID = str_pad($invID, 4, '0', STR_PAD_LEFT);
 $a = date('y');
    $b = date('m');
    $c = date('d');

  
  
  
  $g = $out." ".$outt;
  $h = $in." ".$int;

  
  
  $a1 = substr($out,0,4);
  $a2 = substr($out,5,2);
  $a3 = substr($out,8,2);

  
  
   
  $b1 = substr($in,0,4);
  $b2 = substr($in,5,2);
  $b3 = substr($in,8,2);
  
  
  $g1 = $a3."-".$a2."-".$a1." ".$outt;
  $h1 = $b3."-".$b2."-".$b1." ".$int; 

    

    $uniqID = $a.$b.$c.$invID ;


$sql = "INSERT INTO data (name,roll,email,phone,pmail,room,parent,pphone,add1,out1,in1,reason,hostel,gender,status,date,id)
VALUES ('$name', '$rollno', '$email','$mobile','$pmail','$room','$parent','$pphone','$address','$g1','$h1','$reason','$hos','$gen','0','$currentDate','$uniqID')";

if ($conn->query($sql) === TRUE) {
    echo "
    <h4 style = 'padding-top : 10%; text-align:center; color:green ' >Successfully sent for verification </h4>


    <h6 style = 'padding-top : 5%; text-align:center; '> Your request Id is : " .$uniqID. " </h6>
    <h6 style = 'text-align:center;'> You can track the status of your application here : <a href='/status.php' >Click here</a> </h6>
    ";




} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

      $conn->close();
 //     }



?>

<?php

    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include('declare.php');


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $mailhost ;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $mailusername;                 // SMTP username
    $mail->Password = $mailpass;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('warden_boys@iiitdm.ac.in', 'Jagadeesh Kakarla');
    $mail->addAddress($email);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content

    $body = '<p>Dear '.$name.', Your application for student leave has been submitted successfully.Your request ID is '.$uniqID.'. You will receive a conformation Email once it has been approved.You can track the status of your application <a href = "http://leave.iamanerd.rf.gd/status.php"> here </a></p>' ;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Re. Permission';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo '';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  echo 'Please Refill the Form';
  echo'<p style= "color:red ">You have a problem with cache in your browser , try filling form again using incognito mode</p>';
  
}






    ?>

<h6 style : "padding-top : 5%; ">* An email has been sent to your Mail.</h6>

</body>

</html>
