<?php

include 'conn.php';

if (isset($_POST['insert'])) {
    $sname = $_POST['name'];
    $sclass = $_POST['class'];
    $scity = $_POST['city'];

    $sql = "INSERT INTO student (name,class,city) VALUES ('$sname','$sclass','$scity')";
    $query = mysqli_query($conn,$sql);

    header("Location: http://localhost/crud/selectdata.php");
}

?>