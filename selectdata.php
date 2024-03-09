<?php
include 'conn.php';


?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<table border="2" class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>City</th>
    <th >Edit</th>
    <th >Delete</th>
    
</tr>
<?php
$sql = "SELECT * FROM student JOIN city WHERE student.city = city.id";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      
    

?>
<tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["class"]?></td>
    <td><?php echo $row["cityname"]?></td>
    <td><a href="editform.php?id=<?php echo $row['id']?>">Edit</a></td>
    <td><a href="delete.php">Delete</a></td>
</tr>

<?php
}
}

?>
</table>