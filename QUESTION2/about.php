<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
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

    /* CONTAINER */
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 120px 50px;
        gap: 40px;
    }

    /* IMAGE GROUP (UPDATED) */
    .about-image {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .about-image img {
        width: 400px;
        height: 300px;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        object-fit: cover;
    }

    /* TEXT RIGHT */
    .about-text {
        max-width: 500px;
    }

    .about-text h1 {
        font-size: 40px;
        color: #1E90FF;
        margin-bottom: 20px;
    }

    .about-text p {
        font-size: 18px;
        margin-bottom: 10px;
        line-height: 1.6;
    }

    /* FOOTER */
    .footer {
        background: black;
        color: white;
        text-align: center;
        padding: 60px;
    }

    /* RESPONSIVE */
    @media(max-width:768px) {
        .container {
            flex-direction: column;
            text-align: center;
        }

        .about-image img {
            width: 100%;
            height: auto;
        }
    }
    </style>
</head>

<body>

    <div class="header">
        <div class="logo">
            Golden Horizon Hotel
        </div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="gallery.php">Gallery</a>
            <a href="loginorder.php">Order</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <!-- UPDATED CONTENT -->
    <div class="container">

        <!-- IMAGE LEFT (NOW TWO IMAGES) -->
        <div class="about-image">
            <img src="ilya-mirnyy-1URYA5bEnb4-unsplash.jpg" alt="Hotel Image">
            <img src="kevin-kelly-PPneSBqfCCU-unsplash.jpg" alt="Hotel Interior">
        </div>

        <!-- TEXT RIGHT -->
        <div class="about-text">
            <h1>About Our Hotel</h1>
            <p>Urban Nest Hotel offers luxury accommodation, delicious meals, and excellent customer service.</p>
            <p>We provide fresh food, drinks, and a relaxing environment for all our customers.</p>
            <p>Our mission is to deliver high-quality hospitality services and create unforgettable experiences.</p>
        </div>

    </div>

   <!-- FOOTER -->
    <div class="footer">
        <p>Contact: +250 788354678 | Email: goldenh123@gmail.com</p>
        <p>Follow us: Facebook | Instagram | Twitter</p>
        <p>© 2026 Golden Horizon Hotel. All rights reserved.</p>
    </div>

</body>

</html>