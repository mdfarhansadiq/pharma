<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName   = substr(trim(strip_tags($_POST['first_name'] ?? '')), 0, 50);
    $lastName    = substr(trim(strip_tags($_POST['last_name'] ?? '')), 0, 50);
    $email       = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone       = filter_var(trim($_POST['phone'] ?? ''), FILTER_SANITIZE_NUMBER_INT);
    $department  = substr(trim(strip_tags($_POST['department'] ?? '')), 0, 30);
    $message     = substr(trim(strip_tags($_POST['message'] ?? '')), 0, 1000);
    $recaptcha   = $_POST['g-recaptcha-response'] ?? '';

    $allowedDepartments = ['general', 'products', 'clinical', 'media', 'careers'];
    $errors = [];

    if (empty($firstName) || !preg_match("/^[a-zA-Z-' ]+$/", $firstName)) {
        $errors[] = "Please enter a valid first name.";
    }
    if (empty($lastName) || !preg_match("/^[a-zA-Z-' ]+$/", $lastName)) {
        $errors[] = "Please enter a valid last name.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if (!empty($phone) && !preg_match("/^\+?[0-9\-\s]{7,20}$/", $phone)) {
        $errors[] = "Please enter a valid phone number.";
    }
    if (empty($department) || !in_array($department, $allowedDepartments)) {
        $errors[] = "Please select a valid department.";
    }
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters long.";
    }
    if (empty($recaptcha)) {
        $errors[] = "Please complete the reCAPTCHA.";
        header("Location: /?recaptcha_error=1");
        exit;
    }

    if (!empty($errors)) {
        echo "<ul style='color:red;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        exit;
    }

    // reCAPTCHA Verification
    $secretKey = '6LeoqksrAAAAAJwwtdYQG3npApDHTzywpkcZQiHC';
    $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $recaptcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $verify = file_get_contents($verifyURL, false, $context);
    if ($verify === false) {
        echo "<p style='color:red;'>reCAPTCHA verification failed due to a network error.</p>";
        exit;
    }

    $captchaSuccess = json_decode($verify);
    if (!$captchaSuccess->success) {
        echo "<p style='color:red;'>reCAPTCHA verification failed. Please try again.</p>";
        exit;
    }

    // ✅ Send using PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mdfarhansadiq01@gmail.com'; // your Gmail
        $mail->Password = 'jjqewaiotaxlgllj';    // your App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($email, "$firstName $lastName");
        $mail->addAddress("17101039@uap-bd.edu"); // Receiver email

        $mail->Subject = "New Contact Message from $firstName $lastName";
        $mail->Body = "Name: $firstName $lastName\nEmail: $email\nPhone: $phone\nDepartment: $department\nMessage:\n$message";

        $mail->send();

        header("Location: /?success=1");
        exit;
    } catch (Exception $e) {
        header("Location: /?error=1");
        exit;
    }
} else {
    echo "<p style='color:red;'>Invalid request method.</p>";
}
