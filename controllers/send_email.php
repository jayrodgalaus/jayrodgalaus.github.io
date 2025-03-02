<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    // Get the raw POST data
    $data = json_decode(file_get_contents('php://input'), true);
    // Check if the script is called
    error_log('send-email.php called');
    // Collect the form data
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $message = htmlspecialchars($data['message']);
    $response = [
        "status" => true,
        "message" => $name." ".$email." ".$message;
    ];
    echo json_encode($response);
}
/* // Manually include PHPMailer files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    // Get the raw POST data
    $data = json_decode(file_get_contents('php://input'), true);

    // Collect the form data
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $message = htmlspecialchars($data['message']);

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Set your SMTP server address
        $mail->SMTPAuth = true;
        $mail->Username = 'jayrodgalaus@jagalau.online'; // SMTP username
        $mail->Password = 'O2trY7A3R!'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;//465;
        // Enable verbose debug output
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('jayrodgalaus@jagalau.online');

        // Content
        $mail->isHTML(false);
        $mail->Subject = "New Message from $name - via Contact Form";
        $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message\n";

        // $mail->send();
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but it's unsafe to display errors directly to users - process the error, log it on your server.
            
            http_response_code(500);
            $response = [
                "status" => false,
                "message" => 'Sorry, something went wrong. Please try again later.'
            ];
        } else {
            $response = [
                "status" => true,
                "message" => 'Message sent! Thanks for contacting us.'
            ];
        }
    } catch (Exception $e) {
        http_response_code(500);
        $response = [
            "status" => false,
            "message" => 'Failed to send email. Mailer Error: ' . $mail->ErrorInfo
        ];
    }
    echo json_encode($response);
} else {
    header('Content-Type: text/plain');
    echo "Invalid request.";
} */
?>
