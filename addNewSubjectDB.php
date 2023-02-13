<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>
    <body>
        <section>
            <p class="tPortalText">Teacher Attendance Portal</p>
            <?php include 'navigation.html'; ?>
            <div class="home-container">
              <?php
                include 'dbConnection.php';

                     $subjId = $_POST["subId"];
                     $subjName = $_POST["subName"];
                     $subjTeacher = $_POST["subTeacher"];
                     $subjClass = $_POST["subClass"];
        
                     $sql="INSERT INTO subjects (subId, subName, subTeacher, subClass)
                     VALUES ('$subjId', '$subjName', '$subjTeacher', '$subjClass')";
            
                     if($conn->query($sql)===TRUE){
                        header("Location: addNewSubject.php?success=New record created successfully");

                     }else{
                        echo "Error: " .$sql. "<br>". $conn->error;
                     }
                     $conn->close();
              ?>
            </div> 
        </section>
    
        <?php include 'footer.php'; ?>
    </body>
</html>