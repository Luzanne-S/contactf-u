<?php
$to = "luzanne.codes@gmail.com";
$subject = "Form Submission";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$body = "Name: $name\nEmail: $email\nMessage:\n$message";

if(mail($to, $subject, $body)){
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}
?>