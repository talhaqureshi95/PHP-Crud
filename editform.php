<?php

include 'conn.php';
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php

$std_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE id  = {$std_id}";
    $query = mysqli_query($conn,$sql);
    if (mysqli_num_rows($query)>0) {
     
   
    while ($row = mysqli_fetch_assoc($query)) {
      
   


?>
<form action="updatecode.php" method="POST">
    <input type="text" name="id" value="<?php echo $row['id']?>"><br><br>
    <label>Name:</label><br>
    
    <input type="text" name="name" value="<?php echo $row['name']?>"><br><br>
    <label >Class:</label><br>
    <input type="text" name="class" value="<?php echo $row['class']?>"><br><br>
    <label>Select city:</label><br>
    
        <?php
    $sql1  = "SELECT * FROM city";
    $query1 = mysqli_query($conn,$sql1);
 echo '<select name="city">';
      
    while ($row1 = mysqli_fetch_assoc($query1)) {
      if ($row['class'] == $row1['id']) {
        $select = "selected";
      }
      else {
        $select = "";
      }
    echo "<option {$select} value='{$row1['id']}'>{$row1['cityname']}</option>";
 
    
  }      
    echo "</select>";

    ?>
    <br><br>
    <input type="submit" name="update" value="Update" class="btn btn-primary">
</form>



<?php
 }
}
?>