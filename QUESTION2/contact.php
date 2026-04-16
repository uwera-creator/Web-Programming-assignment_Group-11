<?php include 'db.php'; ?>

<?php
if(isset($_POST['send'])){
$conn->query("INSERT INTO contact VALUES(null,
'$_POST[name]',
'$_POST[email]',
'$_POST[phone]',
'$_POST[location]',
'$_POST[message]'
)");
echo "<p style='color:lime;text-align:center;'>Message Sent!</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>

    <style>
    /* RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('pexels-macourt-media-1519726-32941658.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

 
    .header {
        position: absolute;
        width: 100%;
        top: 0;
        z-index: 10;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px;
       background:#008080;
        color: white;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
        font-size:25px;
    }

    .nav a {
        color: white;
        margin: 10px;
        font-size:20px;
        text-decoration: none;
        font-weight: bold;
        color:#FFFF00;
        font-family:arial;
    }

    .nav a:hover {
        color:white;
        font-family:arial;
    }

    /* FORM CONTAINER */
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 120px;
        padding-bottom: 50px;
    }

    /* FORM DESIGN */
    form {
        background: white;
        color: black;
        width: 420px;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.5);
    }

    form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #008080;
    }

    /* INPUT STYLE */
    input,
    textarea {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 15px;
    }

    textarea {
        height: 120px;
        resize: none;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border: 1px solid #1E90FF;
    }

    /* BUTTON */
    button {
        width: 100%;
        padding: 12px;
        background: #008080;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #0d6efd;
    }

    /* FOOTER */
    .footer {
        background: black;
        color: white;
        text-align: center;
        padding: 20px;
    }
    </style>

</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="logo">
            Golden Horizon Hotel
        </div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="gallery.php">Gallery</a>
            <a href="loginorder.php">Order</a>
        </div>
    </div>

    <!-- FORM -->
    <div class="form-container">
        <form method="POST">

            <h2>Contact Us</h2>

            <input name="name" placeholder="Full Name" required>

            <input name="email" placeholder="Email" required>

            <input name="phone" placeholder="Phone Number" required>

            <input name="location" placeholder="Your Location" required>

            <textarea name="message" placeholder="Your Message..." required></textarea>

            <button name="send">Send Message</button>

        </form>
    </div>

   <!-- FOOTER -->
    <div class="footer">
        <p>Contact: +250 788354678 | Email: goldenh123@gmail.com</p>
        <p>Follow us: Facebook | Instagram | Twitter</p>
        <p>© 2026 Golden Horizon Hotel. All rights reserved.</p>
    </div>

</body>

</html>