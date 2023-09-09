<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "madhavbhatia222@gmail.com"; // Your email address
    $subject = "New Signup";
    $message = "A user with email: " . $email . " has signed up.";

    // Send the email
    if (mail($to, $subject, $message)) {
        // Email sent successfully
        echo "Thank you for signing up!"; // You can customize this message
    } else {
        // Email sending failed
        echo "Oops! There was a problem signing you up. Please try again later.";
    }

    // Optionally, you can save the email to a database for further use.
    // You should implement database storage securely.
}
?>
