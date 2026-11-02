<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="error">
        <div class="container">
            <h1>Sign up</h1>
            <form id="form" action="signup.php" method="post">
                <input type="text"     name="username" placeholder="Username" required><br>
                <input type="email"    name="email"    placeholder="Email"    required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Sign Up</button>
                <label class="already">Don't have an account?<a href="login.php" class="click">Login</a></label>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $hash = password_hash($password, PASSWORD_BCRYPT);


    $check_user = "SELECT * FROM users WHERE user = '$username'";
    $result = mysqli_query($conn, $check_user);

    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Username already exists');</script>";
    } else {
        $sql = "INSERT INTO users (`user`, `password`, `email`,`register date`) 
                VALUES ('$username', '$hash', '$email', NOW())";

        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit();
        }
    }
} else {
    echo "";
}

?>