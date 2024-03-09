<?php

include 'conn.php';
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form action="insertcode.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>
    <label >Class:</label><br>
    <input type="text" name="class"><br><br>
    <label>Select city:</label><br>
    <select name="city">
        <option selected>Select City</option>
        <?php
    $sql  = "SELECT * FROM city";
    $query = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($query)) {
       
    

    ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['cityname']?></option>
        <?php
  }
  ?>
    </select>
    <br><br>
    <input type="submit" name="insert" value="Submit">
</form>