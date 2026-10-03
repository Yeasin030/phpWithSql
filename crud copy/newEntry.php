<?php
    include_once "dbconfig.php";
    require_once "Student.php";

    $student = new Student($conn);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if ($student->create($name, $email, $phone)) {
            echo "Complaterd";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Student Entry Form</h3>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" value="" placeholder="Enter Name"> <br> <br>
        <label>Email</label>
        <input type="text" name="email" value="" placeholder="Enter Email"> <br><br>
        <label>Phone</label>
        <input type="text" name="phone" value="" placeholder="Enter Phone"> <br><br>
        <input type="submit" name="submit" value="save">
    </form>
    <br> <br>
    <a href="index.php">Back to student List</a> <br> <br>
</body>
</html>