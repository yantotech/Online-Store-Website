<?php
include "Database/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($koneksi, $_POST["email"]);
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);

    $query_sql = "SELECT * FROM tabel_users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($koneksi, $query_sql);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: product.php");
        exit;
    } else {
        $error = "Email atau Password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "Header.php"; ?>

    <div class="loginbody">
        <div class="login1">
            <form action="" method="POST">
                <h1>Sign In</h1>
                <?php if (isset($error)): ?>
                    <p style="color: red; text-align: center; font-weight: bold;"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="inputbox">
                    <p>Email</p>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="inputbox">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="remember_forgot">
                    <label>
                        <input type="checkbox">Remember Me
                    </label>
                    <a href="">Forgot Password?</a>
                </div>

                <button type="submit" class="submit" name="login">Sign In</button>

                <div class="registerlink">
                    <p>Don't have an account?
                        <a href="register.php">Register Here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <?php include "Footer.html"; ?>
</body>
</html>
