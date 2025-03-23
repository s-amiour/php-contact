<?php
// Start session to store session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Simulator</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Lexend Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <main class="form-container">
        <h2>Contact Us</h2>
        
        <hr>

        <?php
        // Display success or error message from session
        if (isset($_SESSION['message'])){
            // Check if message is error or success
            $messageType = isset($_SESSION['message_type']) && $_SESSION['message_type'] === 'error' ? 'error-message' : 'success-message';

            echo "<p class='$messageType'>{$_SESSION['message']}</p>";
            // Clear message after its display
            unset($_SESSION['message']);
        }
        ?>

        <form action="process.php" method="POST">
            <label for="name"><h3>Your Name</h3></label>
            <input type="text" id="name" name="name" placeholder="John Doe" class="input-field">
            <label for="email"><h3>Your Email</h3></label>
            <input type="email" id="email" name="email" placeholder="jdoe@company.com" class="input-field">
            <label for="message"><h3>Message</h3></label>
            <textarea id="message" name="message" placeholder="hi Sultan you're so cool and..." class="input-field" rows="5"></textarea>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </main>
</body>
</html>