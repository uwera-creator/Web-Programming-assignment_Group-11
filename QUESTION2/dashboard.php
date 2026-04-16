<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user'])){
header("location:login.php");
exit();
}

$orders=$conn->query("SELECT * FROM orders");
$messages=$conn->query("SELECT * FROM contact");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial;
    }

    body {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('pexels-macourt-media-1519726-32941658.jpg');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        color: white;
    }

    /* HEADER */
    .header {
        position: fixed;
        top: 0;
        width: 100%;
        background: #008080;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .header h2 {
        font-size: 22px;
    }

    .header a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        background: red;
        padding: 8px 15px;
        border-radius: 5px;
    }

    /* TITLE */
    .title {
        text-align: center;
        padding-top: 100px;
        font-size: 28px;
    }

    /* TABLE */
    table {
        width: 90%;
        margin: 30px auto;
        border-collapse: collapse;
        background: white;
        color: black;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
    }

    th {
        background: #008080;
        color: white;
        padding: 15px;
        text-transform: uppercase;
    }

    td {
        padding: 12px;
        text-align: center;
    }

    tr:nth-child(even) {
        background: #f2f2f2;
    }

    tr:hover {
        background: #d1ecff;
        transition: 0.3s;
    }

    h3 {
        text-align: center;
        margin-top: 40px;
        color: white;
    }
    </style>

</head>

<body>

    <div class="header">
        <h2>Admin Dashboard</h2>
        <a href="logout.php">Logout</a>
    </div>

    <!-- ORDERS SECTION -->
    <div class="title">Customer Orders</div>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Menu</th>
            <th>Address</th>
            <th>Date</th>
        </tr>

        <?php while($row=$orders->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['menu']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php } ?>

    </table>

    <!-- CONTACT SECTION -->
    <h3>Customer Messages</h3>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Message</th>
        </tr>

        <?php while($msg=$messages->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $msg['name']; ?></td>
            <td><?php echo $msg['email']; ?></td>
            <td><?php echo $msg['phone']; ?></td>
            <td><?php echo $msg['location']; ?></td>
            <td><?php echo $msg['message']; ?></td>
        </tr>
        <?php } ?>

    </table>

</body>

</html>