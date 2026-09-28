<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Student Entry Form</h3>
   <?php 
   if($_SERVER['REQUEST_METHOD']=='POST'){
    // Data recive from entry from
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    include_once("dbconfig.php"); //Database cnnuction
    $conn->query("INSERT INTO frome 
    (id,name,email,phone) VALUES
    (NULL , '$name','$email','$phone')");

    if($conn->affected_rows){
        echo "Complaterd";
    };
   }
    ?>
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