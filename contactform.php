		<div class="input-form">
							<form id="contactForm"  method="post">
								<div class="col-md-12"><input type="text" name="name" placeholder="Your Name" class="form-control" required="">
									
									<input type="email" name="email" placeholder="Your Email" class="form-control" required="">
									
									<input type="text" name="phone" placeholder="Your Number" class="form-control" required="">
									
									
									<textarea rows="2" name="message" placeholder="Your Message" class="form-control" required=""></textarea>
								
									<input type="checkbox" id="" name="checkbox1" value="My shares are lodged with IEPF" class="form-control cb1">
  <label for=""> <b class="df1">My shares are lodged with IEPF</b></label><br>
									<input type="checkbox" id="" name="checkbox2" value="I have the physical shares" class="form-control cb1">
  <label for=""> <b class="df1">I have the physical shares</b></label><br>
									<input type="checkbox" id="" name="checkbox3" value="I want to open a Demat account" class="form-control cb1">
  <label for=""><b class="df1">I want to open a Demat account</b></label><br>
									<input type="checkbox" id="" name="checkbox4" value="There is a dispute in my family over inheritance" class="form-control cb1">
  <label for=""><b class="df1">There is a dispute in my family over inheritance</b></label><br>
									<input type="checkbox" id="" name="checkbox5" value="I’ve changed my address" class="form-control cb1">
  <label for=""><b class="df1">I’ve changed my address</b></label><br>
									
									
									<textarea rows="2" name="message" placeholder="Additonal Information" class="form-control" required=""></textarea>
									
									<p style="color: #626262; margin: 10px;">Security Question -<b><br> What is 4 + 2
											?</b></p><input type="text" class="form-control" name="subject" id="subject" placeholder="Your Answer" required="">
									<div class="validation"></div>
									
									
									<button type="submit" value="send" name="send" class="send btn btn-primary margin-top-30 text-center">Submit Now </button>
								</div>
							</form>
						</div>





<?php
	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
		

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Check if each checkbox is set before assigning its value
    $checkbox1 = isset($_POST['checkbox1']) ? $_POST['checkbox1'] : '';
    $checkbox2 = isset($_POST['checkbox2']) ? $_POST['checkbox2'] : '';
    $checkbox3 = isset($_POST['checkbox3']) ? $_POST['checkbox3'] : '';
    $checkbox4 = isset($_POST['checkbox4']) ? $_POST['checkbox4'] : '';
    $checkbox5 = isset($_POST['checkbox5']) ? $_POST['checkbox5'] : '';
    
    $subject = $_POST['subject'];
	
	
	
	
//Load Composer's autoloader
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';
require 'PHPMailer\Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fahad@pentagoat.com';                     //SMTP username
    $mail->Password   = 'dryt xoin vjdc ttqb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fahad@pentagoat.com', 'Contact form');
    $mail->addAddress('fahad@pentagoat.com', 'Contact form');     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test Contact Form';
    $mail->Body    = "Sender name - $name <br> Sender email - $email <br> Sender Number - $phone <br> Sender Message - $message <br> Sender checkbox - $checkbox1 <br> Sender checkbox - $checkbox2 <br>  Sender checkbox - $checkbox3 <br>  Sender checkbox - $checkbox4 <br>   Sender checkbox - $checkbox5 <br> Sender subject - $subject";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
		
}

?>


