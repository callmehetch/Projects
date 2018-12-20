<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include('declare.php');
$id=$_POST['id'];
$reason =$_POST['reason'];
// echo $to;
 require_once('connect.php');

     $conn = mysql_connect($servername, $username, $password);
     mysql_select_db('epiz_22073457_leave');



    $result = mysql_query("UPDATE data set status='2' where id='".$id."'",$conn);

 $result1 = mysql_query("SELECT * FROM data where id='".$id."'",$conn);

$row = mysql_fetch_array($result1);
$smail = $row['email'];




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
echo $email;
    echo $fromdate;
    echo $todate;
    //Recipients
    $mail->setFrom('54321hemanth@gmail.com', 'Hemanth Kumar');
    $mail->addAddress($smail);     // Add a recipient


    $body = '<p>Dear Student, Your application with id '.$id.' for student leave has been rejected for the reason : '.$reason.'.</p>';
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Re. Permission';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
    $mail->send();


    if($mail->send())
    {
        header("Location: 1w.php");

    }

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
