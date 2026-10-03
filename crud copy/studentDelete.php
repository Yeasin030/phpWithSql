<?php
    include_once "dbconfig.php";
    require_once "Student.php";

    $student = new Student($conn);
    $id = $_GET['id'] ?? 0;

    $student->delete($id);
    header("Location: index.php");
    exit;
?>