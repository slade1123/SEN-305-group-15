<?php
include("db.php");

if (isset($_POST["name"], $_POST["age"], $_POST["email"], $_POST["matric"], $_POST["department"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $matric = $_POST["matric"];
    $department = $_POST["department"];

    $sql = "INSERT INTO students (name, age, email, matric, department)
            VALUES ('$name', '$age', '$email', '$matric', '$department')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Biodata saved successfully');</script>";
    } else {
        echo "<script>alert('Error saving biodata');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <!--
    Achine Bryan Berinyuy VUG/SEN/24/12219
    Gnonlonfoun Jessica Pierrette VUG/sen/24/12169
    Ogbonna Chidozie Alexander VUG/SEN/24/12200
    Orji Nwanyieze Melisa VUG/SEN/24/12252
    Iorkyaa Terhemba Cyprain VUG/SEN/24/12172
    Greg Ardah VUG/SEN/24/12176
    Marvellous Shurinum Gimba VUG/SEN/24/12263
    Adekunle Ibukunoluwa Elizabeth VUG/sen/24/12262
    -->
    <div id ="error">
    <div class="container">
        <h1>Student Form</h1>
        <form id="form" method="post" action="">
            <label class="form-label">Name:</label><br>
            <input type="text" placeholder="Enter your name" id="name" name="name"><br>

            <label class="form-label">Age:</label><br>
            <input type="number" placeholder="Enter your age" id ="age" name="age"><br>

            <label class="form-label">Email:</label><br>
            <input type="email" placeholder="Enter your email" id ="email" name="email"><br>

            <label class="form-label">Matric Number:</label><br>
            <input type="text" placeholder="Enter your matric number" id="matric" name="matric"><br>

            <label class="form-label">Department:</label><br>
            <input type="text" placeholder="Enter your department" id="department" name="department"><br>

            <button type = "submit">Submit</button>
            <label class="already"><a href="login.php" class="click">Log out</a></label>
        </form>
    </div>
</body>
</html>