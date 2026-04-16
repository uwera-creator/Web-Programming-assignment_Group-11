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

    /* MENU SECTION */
    .menu-section {
        padding-top: 120px;
        text-align: center;
    }

    .menu-section h1 {
        font-size: 40px;
        margin-bottom: 20px;
    }

    /* ✅ UPDATED TABLE DESIGN */
    table {
        width: 80%;
        margin: 30px auto;
        border-collapse: collapse;
        background: #fff;
        color: black;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.4);
    }

    /* ✅ NEW HEADER COLOR */
    th {
        background: #008080; /* matches your header */
        color: #FFD700; /* gold text */
        padding: 15px;
        font-size: 18px;
    }

    /* TABLE CELLS */
    td {
        padding: 15px;
        font-size: 16px;
    }

    /* STRIPED ROWS */
    tr:nth-child(even) {
        background: #e6f7f7;
    }

    /* HOVER EFFECT */
    tr:hover {
        background: #b2dfdb;
        transition: 0.3s;
        cursor: pointer;
    }

    /* FOOTER */
    .footer {
        background: black;
        color: white;
        text-align: center;
        padding: 60px;
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
            <a href="about.php">About</a>
            <a href="gallery.php">Gallery</a>
            <a href="loginorder.php">Order</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

   <!-- MENU CONTENT -->
    <div class="menu-section">
        <h1>Our Menu</h1>

        <table>
            <tr>
                <th>Food</th>
                <th>Price</th>
            </tr>

            <tr><td>Fish</td><td>$10</td></tr>
            <tr><td>Chicken</td><td>$8</td></tr>
            <tr><td>Burger</td><td>$6</td></tr>
            <tr><td>Fresh Juice</td><td>$3</td></tr>
            <tr><td>Soda</td><td>$2</td></tr>
            <tr><td>Pizza</td><td>$9</td></tr>
            <tr><td>Beef Steak</td><td>$12</td></tr>
            

        </table>
    </div>

   <!-- FOOTER -->
    <div class="footer">
        <p>Contact: +250 788354678 | Email: goldenh123@gmail.com</p>
        <p>Follow us: Facebook | Instagram | Twitter</p>
        <p>© 2026 Golden Horizon Hotel. All rights reserved.</p>
    </div>

</body>

</html>