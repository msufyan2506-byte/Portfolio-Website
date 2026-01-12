<?php
if($_POST){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $number = $_POST['user_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "YOUR_EMAIL@gmail.com"; // your email
    $headers = "From: $email";

    if(mail($to, $subject, "Name: $name\nNumber: $number\n\nMessage:\n$message", $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
