<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - TV Show Recommendation</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h1>Contact Us</h1>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // For demonstration, we'll just echo the message
            // In a real application, you would handle the message (e.g., save it to a database or send an email)
            echo "<script>alert('Thank you, $name! Your message has been received.');</script>";
        }
        ?>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
