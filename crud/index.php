<?php 
    include_once ("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sutden List</title>
</head>
<body>
    
    <h3>Student List</h3>
    <?php
     $rowData = $conn->query("SELECT * FROM frome"); ?>
     <table border="1" style="border-collapse: collapse;">

    <?php
      while($row=$rowData->fetch_assoc()){ ?>
        
        <tr>
            <td><?php echo $row['id'],"<br>"; ?></td>
            <td><?php echo $row['name'],"<br>"; ?></td>
            <td><?php echo $row['email'],"<br>"; ?></td>
            <td><?php echo $row['phone'],"<br>"; ?></td>
        </tr>
        <?php
      }
     ?>
     </table>

</body>
</html>