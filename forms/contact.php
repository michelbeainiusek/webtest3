<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //check if code is submitted
    // Get form inputs
    $name = htmlspecialchars($_POST['name']); //retrieve input
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    

    // Alert message
    echo "<script>alert('Thank you, $name. Your message was delivered successfully!');</script>";
    

    exit;
} else {
    // Redirect to the form page if accessed without submitting the form
    header("Location: index.html");
    exit;
}
?>
