<?php
include 'dbConnection.php';
$classIdd = $_POST['id'];
$dateId = $_POST['adate'];
$subjId = $_POST['subj'];

$classIdd = trim($classIdd);
$dateId = trim($dateId);
$subjId = trim($subjId);

$sql = "SELECT stuId, stuName, class, aStatus, aDate, subj FROM attendanceSheet where class='{$classIdd}' and aDate='{$dateId}' and subj='{$subjId}'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){ 
?>       
<tr>
   <td><?php echo $row['stuId']; ?></td>
   <td><?php echo $row['stuName']; ?></td>
   <td><?php echo $row['class']; ?></td>
   <td><?php echo $row['aStatus']; ?></td>
   <td><?php echo $row['aDate']; ?></td>
   <td><?php echo $row['subj']; ?></td>
</tr>  
<?php } ?>