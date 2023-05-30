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
<body>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

// Perform validation and further processing here
// ...

// Connect to the database
    $servername = "localhost";
    $username = "root";
    $passwordd = "";
    $database = "mydb";

    $conn = mysqli_connect($servername, $username, $passwordd, $database);

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

// Insert the user data into the database
    $sql = "INSERT INTO user (Name, Surname, Email, Password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Registration successful!</p>";
        echo "<p>$password</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    $conn = mysqli_connect($servername, $username, $passwordd, $database);
    $sql = "SELECT * FROM user WHERE Email='$email'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);
    $user_id = $row['idUser'];
    $redirect_url = "user/homepage.php?id=$user_id";
    header("Location: $redirect_url");


// Close the database connection
    mysqli_close($conn);
}
?>
<body class="body1">
<div class="ommotac">
<div class="form">
    <div class="title">Welcome</div>
    <div class="subtitle">Let's create your account!</div>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="input-container ic1">
            <input name="firstname" class="input" type="text" placeholder=" " required>
            <div class="cut"></div>
            <label for="firstname" class="placeholder">First name</label>
        </div>

        <div class="input-container ic2">
            <input name="lastname" class="input" type="text" placeholder=" " required>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Last name</label>
        </div>

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

        <div class="input-container ic2">
            <input name="password2" class="input" type="password" placeholder=" " required>
            <div class="cut cut-short"></div>
            <label for="password2" class="placeholder">Confirm Password</label>
        </div>
        <div class="dugmad">
        <button type="submit" class="submit">Create Profile</button>
            <div class="rupa"></div>
        <a class="loginDugme" href="loginpage.php">LogIn</a>
        </div>
    </form>
</div>
</div>
</body>
</html>
