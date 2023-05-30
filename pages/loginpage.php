<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style_za_singup_i_login.css">
    <title>Document</title>
</head>

<body class="body1">
<div class="ommotac">
    <div class="form">
        <div class="title">Hello</div>
        <div class="subtitle">Please sign in!</div>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


            <div class="input-container ic2">
                <input name="email" class="input" type="text" placeholder=" " required>
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</label>
            </div>

            <div class="input-container ic2">
                <input name="password" class="input" type="password" placeholder=" " required>
                <div class="cut cut-short"></div>
                <label for="password" class="placeholder">Password</label>
            </div>


            <div class="dugmad">
                <a href="signUpPage.php" style="text-decoration: none" class="submit">Create Profile</a>
                <div class="rupa"></div>
                <button type="submit" name="submit" class="submit">Log In</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>



<?php
//session_start();

if (isset($_POST['submit'])) {
    include '../config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE Email='$email'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);
    $user_id = $row['idUser'];
    $username = $row['Name'];
    $user_password = $row['Password'];

    if ($password == $user_password) {
        $redirect_url = "user/homepage.php?id=$user_id";
        header("Location: $redirect_url");
        exit;
    } else {
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        header('Location: #');
        exit;
    }

    $conn->close();
}
?>

