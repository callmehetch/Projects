<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include('declare.php');
$id = $_POST['id'];

$fromdate=$_POST['from'];
$todate=$_POST['to'];


// echo $to;
 require_once('connect.php');

     $conn = mysql_connect($servername, $username, $password);
     mysql_select_db('epiz_22073457_leave');
    $result = mysql_query("UPDATE data set status='1' where id='".$id."'",$conn);


if(empty($fromdate) && empty($todate)){

    $result = mysql_query("UPDATE data set status='1' where id='".$id."'",$conn);
}
elseif(!empty($fromdate) && !empty($todate)) {
        $p = substr($fromdate,0,4);
        $q = substr($fromdate,5,2);
        $r = substr($fromdate,8,2);
       $g = $r.'/'.$q.'/'.$p ;
    $t = substr($todate,0,4);
    $u =  substr($todate,5,2);
    $v =  substr($todate,8,2);
        $h = $v.'/'.$u.'/'.$t;
    
    $result = mysql_query("UPDATE data set status='1' , out1= '".$g."' , in1 = '".$h."' where id='".$id."'",$conn);
}




 $result1 = mysql_query("SELECT * FROM data where id='".$id."'",$conn);

$row = mysql_fetch_array($result1);
$smail = $row['email'];
$pmail = $row['pmail'];
$roll = $row['roll'];
$name = $row['name'];
$reason = $row['reason'];
$in1 = $row['in1'];
$out1 = $row['out1'];




     if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
require_once('connect.php');


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $mailhost ;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "$mailusername";                 // SMTP username
    $mail->Password = "$mailpass";                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('warden_boys@iiitdm.ac.in', 'Jagadeesh Kakarla');
    $mail->addAddress($smail);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content

    $body = '<p>Dear '.$name.', Your application with id '.$id.' for student leave has been approved from : '.$out1.' to '.$in1.'.</p>
    <h2 style = "text-align: center;" >Permission details</h2>
    <table style = "width:80%;  border: 1px solid black;
    border-collapse: collapse;">
  <tr>
    <th style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">Roll Number</th>
    <th style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">'.$roll. '</th> 
   
  </tr>
  <tr>
    <td style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">Student Name  </td>
    <td style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">' .$name.'</td>
  </tr>
  <tr>
    <td style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">Leave Period </td>
    <td style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">'.$out1.' - '.$in1.'</td>  
  </tr>
  <tr>
    <td style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">Reason</td>
    <td style = " border: 1px solid black;
    border-collapse: collapse;  padding: 15px;
    text-align: left;">'.$reason.'</td>
  </tr>
</table>
    
    ';
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Re. Permission';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
$mail->send();
     //Recipients
   




if($mail->send())
    {
        header("Location: 1w.php");

    }


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
