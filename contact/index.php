<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;   
if (isset($_POST['name'])){



    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];


    

    
    // use PHPMailer\PHPMailer\SMTP;
    $mail = new PHPMailer();

    // Settings
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "mail.test.com";    
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->Port       = 465;                    

    $mail->SMTPSecure = 'ssl';
    $mail->Username   = "info@email.com";            
    $mail->Password   = "pass";            

    // Content
    $mail->setFrom($email , $name);   
    $mail->addAddress('info@email.com');

    $mail->isHTML(true);                       // Set email format to HTML
    $mail->Subject = 'New Message From ' . $name;
    $mail->Body    = "Name: ".$name."<br>Email: ".$email."<br>Phone: ".$phone ."<br><br>".$msg;
    $mail->AltBody = $msg;

   

if(!$mail->send()) 
{
$failed="true";
} 


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | PLM Solutions</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/contact.css" />
    <style>
        #contact{
            color:#333333;
        }
        #contact:hover{
            color:white;
        }
        /* hero section  */
       
        .hero-section{
            height: 350px;
    background: center center no-repeat fixed;
    
    background-size: cover;
    /* z-index: -3; */
    /* text-align: center; */
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url("/assets/images//contact-page.jpg");
}
.hero-section .overlay{
    position: absolute;
    width: 100%;
    height: 350px;
    background-color: black;
    opacity: 0.7;
    z-index: 2;
}
.hero-section h1{
    position: relative;
    z-index: 9;
    color: white;
    font-size: 35px;
    width: 100%;
    padding: 0 10%;
    letter-spacing: 1px;
}

    </style>
</head>
<body>
    
    <?php include("../assets/components/header.php") ?>
    <?php
    
    
    
    ?>
    <div class="hero-section">
        <div class="overlay"></div>
        <h1><strong>CONTACT</strong> US</h1>
    </div>
    <?php
    
    if (isset($_POST['name'])){
        if(!isset($failed)){

            echo "<div class='email-sent'>
            Your message has been sent successfully. We'll get in touch with you soon.
            </div>";
        }
        else{
            echo "<div class='email-failed'>
            There has been some critical error in sending message. Please try again.
            </div>";
            
        }
    }
    ?>
    <div class="content-section">
        <div class="get-in-touch">
            <h2>Get in Touch</h2>

            <h3>Number</h3>
            <ul>
                <a href="tel:+923154069455"><li>General Inquiries Tel: +92-000-0000000</li></a>
            </ul>

            <h3>Email</h3>
            <ul>
                <a href="mailto:info@plm-pk.com"><li>Email: info@plm-pk.com</li></a>
            </ul>
            <h3>Business Hours</h3>
            <ul class="hours">
                <li>Monday — Friday 9am – 5pm</li>
                <li>Saturday — 10am – 3pm</li>
                <li>Sunday — Closed</li>
            </ul>
        </div>

        <div class="contact-form-container">
            <h2>Send Us a Message</h2>
            <form method="POST" action="./index.php" id="myform">
                <input required type="text" name="name" placeholder="Name">
                <input required type="tel" name="phone" placeholder="Phone Number">
                <input required type="email" name="email" placeholder="Email">
                <textarea name="message" form="myform" placeholder="Message"></textarea>
                <input class="button" type="submit"></input>
            </form>
        </div>
    </div>
    
    <?php include("../assets/components/footer.php") ?>

    <script
      src="https://kit.fontawesome.com/32278cd1a4.js"
      crossorigin="anonymous"
    ></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>