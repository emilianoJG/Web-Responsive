<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['login_user_sys'])) {
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRANET MI WEB</title>
    <link rel="stylesheet" href="style-log.css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
        </form>
        <a href="index.html">
            <h3>VOLVER</h3>
        </a>
    </div>

    <!--FOOTER-->
    <div class="footer-links">
        <div class="footer-container">
            <ul>
                <li>
                    <a href="">
                        <h3>Title One</h3>
                    </a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="">
                        <h3>Title Two</h3>
                    </a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
                <li>
                    <a href="">Blockchain</a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>