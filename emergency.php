<?php
error_reporting(E_ALL ^ E_NOTICE);?>
<?php
$con = mysqli_connect("localhost","root","","emeralert"); //connecting to database
if ($con==false)
  {
  die('Could not connect: ' . mysqli_connect_error()); //if connection is unsuccessful it give a message 'could not connect'
  }
mysqli_select_db($con,"emeralert");
$sql="insert into mailin(fname,lname,dob,gender,contzone,mobnum,email,aadhar ,hname,district,state,pincode,category,description) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[dob]','$_POST[Gender]','$_POST[zone]','$_POST[mob]','$_POST[email]','$_POST[aadhar]','$_POST[street]','$_POST[district]','$_POST[state]','$_POST[pincode]','$_POST[category]','$_POST[desc]') ";


if (mysqli_query($con, $sql)) {
     header('Location: index12.html'); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

echo "Thank you for entering the needed information";
mysqli_close($con); //closing connection to database
?>
<?php 
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'E:\Ideathon\vendor\autoload.php'; 
  
$mail = new PHPMailer(true); 
$fname = '$_POST["firstname"]$_POST["lastname"] $_POST["dob"] $_POST["Gender"] $_POST["zone"] $_POST["mob"] $_POST["email"] $_POST["aadhar"] $_POST["street"] $_POST["district"] $_POST["state"] $_POST["pincode"] $_POST["category"] $_POST["desc"]';
  
try { 
    $mail->SMTPDebug = 2;                                        
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com;';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'zephyrs3416@gmail.com';                  
    $mail->Password   = 'zephy32c1db';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->setFrom('zephyrs3416@gmail.com', 'zephyrs');            
    $mail->addAddress('kirupalinisiva@gmail.com'); 
    $mail->addAddress('sruthigowri2000@gmail.com', 'gowri'); 
    $mail->addAddress('sswetha1605@gmail.com', 'swetha'); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Crisis and Emergency risk communication'; 
    $mail->Body    = 'Dear Sir/Madam,'."<br/>"."\n".'This email contains data collected from'."\n"."<b>".$_POST["firstname"]."</b>"."\n".'who is in need of assistance.'."<br/>"."<br/>"."<br/>".'NAME:'.$_POST["firstname"]."\n".$_POST["lastname"]."<br/>".'DATE OF BIRTH:'.$_POST["dob"]."<br/>".'GENDER:'.$_POST["Gender"]."<br/>".'CONTAINMENT ZONE:'.$_POST["zone"]."<br/>".'MOBILE NUMBER:'.$_POST["mob"]."<br/>".'EMAIL ID:'."\n".$_POST["email"]."<br/>".'AADHAR LAST 4 DIGITS:'.$_POST["aadhar"]."<br/>".'HOUSE NO./STREET NAME:'.$_POST["street"]."<br/>".'DISTRICT:'.$_POST["district"]."<br/>".'STATE:'.$_POST["state"]."<br/>".'PINCODE:'.$_POST["pincode"]."<br/>".'CATEGORY:'.$_POST["category"]."<br/>".'DESCRIPTION:'.$_POST["desc"]."<br/>"."<br/>"."<br/>".'The content of this email is confidential and intended for the recipient specified in message only.'."<br/>".'Zephyrs puts the security of the client at a high priority.'."<br/>"."<br/>".'Copyright © <b>Zephyrs</b>. All rights reserved.'."<br/>".'Have a question? Email us: zephyrs3416@gmail.com';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
    $mail->send(); 
    echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 
  
?> 



