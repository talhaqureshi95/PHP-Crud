<?php
if (isset($_POST['update'])) {
   $upid = $_POST['id'];
   $upname = $_POST['name'];
   $upclass = $_POST['class'];
   $upcity = $_POST['city'];


   $sql = "UPDATE student SET
   name = '$upname',
   class = '$upclass',
   city = '$upcity' WHERE id = ' $upid'";


header("Location: http://localhost/crud/selectdata.php");

}


?>