<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SizeFiction Dev</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
   <h1>Contact</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $to = "bebop@localhost";
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $headers = "From: " . htmlspecialchars($_POST['email']);
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent!";
    } else {
        echo "Failed to send.";
    }
}
?>
