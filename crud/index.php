<?php 
    include_once ("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sutden List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <h3>Student List</h3>
    <a href="newEntry.php">New Entry</a> <br> <br>
    <?php
    $rowData = $conn->query("SELECT * FROM frome"); ?>
     <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

    <?php
      while($row=$rowData->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id'],"<br>"; ?></td>
            <td><?php echo $row['name'],"<br>"; ?></td>
            <td><?php echo $row['email'],"<br>"; ?></td>
            <td><?php echo $row['phone'],"<br>"; ?></td>
            <td>
                
            Edit 

            |
                 
            <a onclick="return confirm('Are you seur ?')" href="studentDelete.php?id=<?php echo $row['id'] ?>">Delete</a>
        
        </td>
        </tr>
        <?php
      }
     ?>
     </table>

</body>
</html>