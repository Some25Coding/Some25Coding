<?php
// Form handler
$success = false;
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if ($name && $email && $message) {
        $to = "soressaaddisu2@gmail.com"; // Your email
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Me</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <style>
    /* [All your existing CSS styles stay here as-is] */
    /* ... CSS from your previous post ... */
  </style>
</head>
<body>
  <div class="overlay">
    <div class="contact-box">
      <h1>Contact Me</h1>
      <p>I'd love to hear from you! Here’s how you can reach me:</p>

      <div class="info">
        <p><strong>Name:</strong> Soressa Addisu</p>
        <p><strong>Phone:</strong> <a href="tel:+251954862187">+251954862187</a></p>
        <p><strong>Email:</strong> <a href="mailto:soressaaddisu2@gmail.com">soressaaddisu2@gmail.com</a></p>
        <p><strong>Location:</strong> Ethiopia, ET</p>
        <div class="social-media">
          <a href="https://facebook.com/SoressaAddisu" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com/soressaaddisu11" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://github.com/Some25Coding" target="_blank"><i class="fab fa-github"></i></a>
          <a href="https://www.youtube.com/@usersoressaaddisu" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://t.me/SrAs31" target="_blank"><i class="fab fa-telegram"></i></a>
          <a href="https://www.threads.net/@soressaaddisu11" target="_blank"><i class="fa-brands fa-threads"></i></a>
        </div>
      </div>

      <?php if ($success): ?>
        <p style="color: lightgreen; margin-bottom: 20px;">Your message has been sent successfully!</p>
      <?php elseif ($error): ?>
        <p style="color: red; margin-bottom: 20px;">Something went wrong. Please try again.</p>
      <?php endif; ?>

      <form class="contact-form" method="POST" action="contact.php">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</body>
</html>
