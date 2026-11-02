<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="error">
        <div class="container">
            <h1>LOGIN</h1>
            <form id="form" action="login.php" method="post">
                <label class="form-label">Username</label><br>
                <input type="text" name="username" placeholder="Enter your username" required><br>

                <label class="form-label">Password</label><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>

                <button type="submit" name="log_in">Login</button>

                <hr class="foot">
                <label class="already">Don't have an account?<a href="signup.php" class="click">Sign up</a></label>
            </form>
        </div>
    </div>

</body>
</html>
<?php


if(isset($_POST["username"]) && isset($_POST["password"])&& isset($_POST["log_in"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE user='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "<script>alert('invalid username or password');</script>";
    }
    
}

?>