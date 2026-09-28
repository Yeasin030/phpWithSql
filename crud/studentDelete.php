
<?php 
 include_once ("dbconfig.php"); //DB Cnuction
$id = $_GET['id'];

$conn->query("DELETE FROM frome 
WHERE id='$id'");
if($conn->affected_rows){
    header("Location: index.php");

}

?>