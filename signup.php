<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "madhavbhatia222@gmail.com"; // Your email address
    $subject = "New Signup";
    $message = "A user with email: " . $email . " has signed up.";

    // Send the email
    mail($to, $subject, $message);

    // Optionally, you can save the email to a database for further use.
    // You should implement database storage securely.
}

// Redirect back to the homepage or a thank-you page.
header("Location: index.html"); // Change the URL as needed.
?>
