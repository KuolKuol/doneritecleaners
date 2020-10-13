<?php
use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/OAuth.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/POP3.php';
require './PHPMailer/src/SMTP.php';


// create error message
$error = '';

// Instantiation and passing `true` enables exceptions
if (isset($_POST['firstName'])) { 

var_dump($_FILES);
print_r($_FILES);
    
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fullName = $firstName . ' ' . $lastName;
$address = $_POST['address'];
$addressLineTwo = $_POST['addressLineTwo'];
$city = $_POST['city'];
$province = $_POST['province'];
$postalCode = $_POST['postalCode'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$felony = $_POST['felony'];
$experience = $_POST['experience'];
$vehicle = $_POST['vehicle'];
$availability = $_POST['availability'];
$startDate = $_POST['startDate'];
$message = $_POST['message'];
$file = $_POST['file'];

$mondayFrom = $_POST['mondayFrom'];
$mondayTo = $_POST['mondayTo'];
$tuesdayFrom = $_POST['tuesdayFrom'];
$tuesdayTo = $_POST['tuesdayTo'];
$wednesdayFrom = $_POST['wednesdayFrom'];
$wednesdayTo = $_POST['wednesdayTo'];
$thursdayFrom = $_POST['thursdayFrom'];
$thursdayTo = $_POST['thursdayTo'];
$fridayFrom = $_POST['fridayFrom'];
$fridayTo = $_POST['fridayTo'];
$saturdayFrom = $_POST['saturdayFrom'];
$saturdayTo = $_POST['saturdayTo'];
$sundayFrom = $_POST['sundayFrom'];
$sundayTo = $_POST['sundayTo'];

$message = 
    'First Name: '.$firstName
    .'<br/>'.'Last Name: '.$lastName
    .'<br/>'.'Address: '.$address
    .'<br/>'.'Address Line 2: '.$addressLineTwo
    .'<br/>'.'City: '.$city
    .'<br/>'.'Province: '.$province
    .'<br/>'.'Postal Code: '.$postalCode
    .'<br/>'.'Email: '.$email
    .'<br/>'.'Phone Number: '.$phoneNumber
    .'<br/>'.'Have you ever been convicted of a felony or misdemeanour offence? :'.$felony
    .'<br/>'.'How years of cleaning experienced you have?: '.$experience
    .'<br/>'.'Do you have regular access to a personal vehicle?: '.$vehicle
    .'<br/>'.'Are you available at any time?: '.$availability
    .'<br/>'.'Start Date: '.$startDate
    .'<br/>'.'Message: '.$message
    .'<br/> <br/>'.'Monday From: '.$mondayFrom
    .'<br/>'.'Monday To: '.$mondayTo
    .'<br/>'.'Tuesday From: '.$tuesdayFrom
    .'<br/>'.'Tuesday To: '.$tuesdayTo
    .'<br/>'.'Wednesday From: '.$wednesdayFrom
    .'<br/>'.'Wednesday To: '.$wednesdayTo
    .'<br/>'.'Thursday From: '.$thursdayFrom
    .'<br/>'.'Thursday To: '.$thursdayTo
    .'<br/>'.'Friday From: '.$fridayFrom
    .'<br/>'.'Friday To: '.$fridayTo
    .'<br/>'.'Saturday From: '.$saturdayFrom
    .'<br/>'.'Saturday To: '.$saturdayTo
    .'<br/>'.'Sunday From: '.$sundayFrom
    .'<br/>'.'Sunday To: '.$sundayTo;
    
    echo $message;
    
    try {
        // SERVER SETTINGS
        $mail = new PHPMailer(true);
        // Enable verbose debug output
        $mail->SMTPDebug = 1;
        // Set mailer to use SMTP                                       
        // $mail->isSMTP();
        // Specify main and backup SMTP servers
        $mail->Host = 'smtp.office365.com';
        // Enable SMTP authentication                       
        $mail->SMTPAuth = true;
        // SMTP username                                  
        $mail->Username = 'info@doneritecleaners.com';
        // SMTP password                     
        $mail->Password = 'SaintJames#1';
        // Enable TLS encryption, `ssl` also accepted (ssl or tls)
        $mail->SMTPSecure = 'tls';
        // TCP port to connect to (SSL = 465 | TLS = 587) 
        $mail->Port = 587;                                     
        //RECIPIENTS
        // Senders information 
        $mail->setFrom($email,$fullName);
        // Recipients Information
        $mail->addAddress('info@doneritecleaners.com', 'Done-Rite Cleaners');   
        // Reply to information
        $mail->addReplyTo($email, $fullName);

        // ATTATCHMENTS
        // if($_FILES['file']['tmp_name']){
            // $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
            // $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
        //}
        
        // if($_FILES['file']['tmp_name']){
        $mail->AddAttachment($_FILES['resume']['tmp_name'],$_FILES['resume']['name']);
        // }

        
        $subject = $fullName;

        // CONTENT
        // Set email format to HTML
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;


        if($mail->send()){
            $msg = 'Thank you for your email. We will get back to you shortly!';
            echo '<h1>success</h1>';
            header('Location: https://doneritecleaners/employment/success');
        } 

    } catch (Exception $e) {
        $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo $error;
        echo '<h1>fail:<br> '.$msg.'</h1>';
        header('Location: https://doneritecleaners/employment/error');

    }

}


?>


