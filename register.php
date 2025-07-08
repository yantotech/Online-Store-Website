<?php
require 'Database/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query_sql = "INSERT INTO tabel_users(email, fullname, phonenumber, address, password)
                  VALUES ('$email', '$fullname', '$phonenumber', '$address', '$password')";

    if (mysqli_query($koneksi, $query_sql)) {
        header("Location: login.php");
        exit;
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "Header.php"; ?>

    <div class="loginbody">
        <div class="login1">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <div class="inputbox">
                    <p>Full Name</p>
                    <input type="text" placeholder="Full Name" name="fullname" required>
                </div>
                <div class="inputbox">
                    <p>Phone Number</p>
                    <input type="number" placeholder="Phone Number" name="phonenumber" required>
                </div>
                <div class="inputbox">
                    <p>Address</p>
                    <input type="text" placeholder="Address" name="address" required>
                </div>
                <div class="inputbox">
                    <p>Email</p>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="inputbox">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="submit">Sign Up</button>

                <div class="registerlink">
                    <p>Already have an account?
                        <a href="login.php">Login Here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <?php include "Footer.html"; ?>
</body>
</html>