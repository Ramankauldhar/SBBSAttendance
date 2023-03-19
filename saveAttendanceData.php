<html>
<body>
  <?php 
  session_start();
  include 'dbConnection.php';

  $date = $_POST["date"]; 
  $subject = $_POST["subjectBox"];
  $attenStatus = 'present';
  $class = $_POST["classBox"];
  $class = trim($class);

  $sql = "SELECT stuId, stuName, class FROM stuTable where class= '{$class}'";
  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()){

    $sql = "INSERT INTO attendanceSheet (stuId, stuName, class, aStatus, aDate, subj)
     VALUES ('$row[stuId]','$row[stuName]', '$class', '$attenStatus', '$date', '$subject')";

if($conn->query($sql)===TRUE){
    header("Location: attendanceSheet.php?success=New record created successfully");

 }else{
    echo "Error: " .$sql. "<br>". $conn->error;
 }
}
$conn->close();
?>

</body>
</html>