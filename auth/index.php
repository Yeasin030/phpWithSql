<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-page">
        <div class="login-card">
            <div class="brand-panel">
                <div class="brand-badge">A</div>
                <div class="brand-copy">
                    <span class="brand-kicker">Welcome</span>
                    <h2>Admin Portal</h2>
                </div>
                <p>
                    Sign in to continue managing your workspace with a secure and streamlined dashboard experience.
                </p>

                <ul class="feature-list">
                    <li>Secure login</li>
                    <li>Fast dashboard access</li>
                    <li>Daily workflow control</li>
                </ul>
            </div>

            <div class="form-panel">
                <div class="form-header">
                    <span class="mini-tag">Member login</span>
                    <h1>Login Form</h1>
                </div>

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
                            session_start();
                            $_SESSION['email']=$email;

                            
                            header("Location:dashbord.php");
                            exit;
                            }else{
                                echo "Login Failed";
                            }

                         
                    }

                ?>
                <form action="" method="post" class="login-form">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Enter your email" autocomplete="email">
                    </div>

                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" placeholder="Enter your password" autocomplete="current-password">
                    </div>

                    <div class="form-row">
                        <label class="remember-box">
                            <input type="checkbox">
                            <span>Remember me</span>
                        </label>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" name="submit" value="Login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>