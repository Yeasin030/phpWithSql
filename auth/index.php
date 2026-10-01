<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php 
        if(isset($_POST['submit'])){
            extract($_POST);
            $password = md5($password);
            include_once 'dbconfig.php';
            echo "<br>";
            //echo "SELECT * FROM `users` WHERE email = '$email'
             //AND password = '$password'";
            $result = $conn->query("SELECT * FROM `users` WHERE email = '$email'
             AND password = '$password'");
             //echo  $result->num_rows;
             if($result->num_rows > 0){
                header("Location:dashbord.php");
                exit;
                }else{
                    echo "Login Failed";
                }

             
        }

    ?>
     <form action="" method="post" >
        <label>Email</label>
        <input type="text" name="email" value="" placeholder="Enter Email"> <br><br>
        <label>Passowrd</label>
        <input type="password" name="password" value="" placeholder="Enter Password"> <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>