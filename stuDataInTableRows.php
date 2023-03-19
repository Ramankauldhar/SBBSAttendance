<?php
include 'dbConnection.php';
$classIdd = $_POST['id'];
$classIdd = trim($classIdd);

$sql = "SELECT stuId, stuName, class FROM stuTable where class='{$classIdd}'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){ 
?>       
<tr>
   <td><?php echo $row['stuId']; ?></td>
   <td name="stuName"><?php echo $row['stuName']; ?></td>
   <td name="stuClass"><?php echo $row['class']; ?></td>
   <td name="attenStatus">
   <input name="atStatus[]" type="checkbox"><?php if(isset($_POST['atStatus']) && $_POST['atStatus'] == 'on') {
    echo 'Present';
} else {
    echo 'Absent';
} ?>
   </td>
</tr>  
<?php }?>