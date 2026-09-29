<?php    include_once("dbconfig.php"); //Database cnnuction
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Student Updat Form</h3>
   <?php 
    // display data
    $id = $_GET['id'];
    
    // Updat Opration
   if($_SERVER['REQUEST_METHOD']=='POST'){
    // Data recive from entry from
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    //updat query

   
    $conn->query("UPDATE frome SET name ='$name', email ='$email', phone ='$phone' 
    WHERE id ='$id'");

    if($conn->affected_rows){
        echo "<div class='massage'>Updat Complaterd</div>";
    };
   }
   $data=  $conn->query("SELECT * FROM frome WHERE id = '$id' ");
    $row = $data->fetch_Object();

    ?>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row->name; ?>" > <br> <br>
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $row->email; ?>"> <br><br>
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo $row->phone; ?>"> <br><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <br> <br>
        <a href="index.php">Back to student List</a> <br> <br>

    
</body>
</html>