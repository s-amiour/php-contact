<?php
// Start session to store success/error messages
session_start();
// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation
    if (empty($name) || empty($email) || empty($message)){
        $_SESSION['message'] = "All fields are required!";
        // message_type used to know what type of message 
        // for styling
        $_SESSION['message_type'] = "error";
        header('Location: index.php');
        exit;
    }

    // For simplicity, just display message
    $_SESSION['message_type'] = "success";
    $_SESSION['message'] = "Thank you, $name, for trying out our demo contact form! Your message has been 'taken into account' ;).";
    header('Location: index.php');
}
?>