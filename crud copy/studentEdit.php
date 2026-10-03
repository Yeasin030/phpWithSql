<?php
    include_once "dbconfig.php";
    require_once "Student.php";

    $student = new Student($conn);
    $id = $_GET['id'] ?? 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if ($student->update($id, $name, $email, $phone)) {
            echo "<div class='massage'>Updat Complaterd</div>";
        }
    }

    $row = $student->findById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Student Updat Form</h3>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" > <br> <br>
        <label>Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($row['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"> <br><br>
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"> <br><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <br> <br>
    <a href="index.php">Back to student List</a> <br> <br>
</body>
</html>