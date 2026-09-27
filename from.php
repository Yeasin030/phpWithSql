<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h2>SUBSCRIPTION FORM</h2>
  <form action="" method="post">
      <input type="text" name="name" placeholder="YOUR NAME"><br><br>
      <input type="text" name="email"placeholder="YOUR EMAIL" ><br><br>
      <input type="submit" name="submit" value="Subscrive">
  </form>

  <?php
  //print_r($_REQUEST);
  
  if (isset($_POST['submit'])){
     echo "Hello ", $_REQUEST['name'], " your email is ", $_REQUEST['email'];
  } 
  
   

  
    
      
   ?>

</body>
</html>