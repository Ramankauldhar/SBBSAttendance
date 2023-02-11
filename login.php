<?php
  include 'dbConnection.php';


 if(isset($_POST['tEmail']) && isset($_POST['tPswd'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  
  $tEmail = validate($_POST['tEmail']);
  $tPswd = validate($_POST['tPswd']);

  if(empty($tEmail)){
      header("Location: index.php?error=User Email is required");
      exit();
  }else if(empty($tPswd)){
      header("Location: index.php?error=Password is required");
      exit();
  }else{
    $query = $conn->query("SELECT * FROM users WHERE tEmail = '$tEmail' and tPass = '$tPswd'");

    if($query->num_rows > 0){ 
        $row = $query->fetch_assoc();
        if($row['tEmail'] === $tEmail && $row['tPass'] === $tPswd ){
            $SESSION['tEmail'] = $row['tEmail'];
            $SESSION['id'] = $row['id'];
            header("Location: teacherHome.php");
            exit();
        }else{
            header("Location:index.php?error=Incorect User Email or Password");
            exit();
        }
    }else{
        header("Location:index.php?error=Incorect User Email or Password");
        exit();
    }}
}
else{
    header("Location: index.php");
}
?>