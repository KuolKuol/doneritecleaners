
 <?php
 


 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 
 $to = 'info@doneritecleaners.com';
 $subject = $name;
 $headers = array(
     'From' => 'mailer@doneritecleaners.com',
     'Reply-To' => $email,
     'X-Mailer' => 'PHP/' . phpversion()
 );
 
 mail($to, $subject, $message, $headers);
 
 header("Location: https://www.doneritecleaners.com/");

?>

