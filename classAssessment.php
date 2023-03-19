<?php
    session_start();
    if(!isset($_SESSION["tEmail"]))
    {
       header('location:index.php');
    }
    include 'dbConnection.php';
?>
<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>  
    <body>
        <?php include 'logo.php'; ?>
        <section>
            <p class="tPortalText">Teacher Attendance Portal</p>
            <?php include 'navigation.php'; ?>

            <div class="home-container">
             <p>View Attendance Sheet</p>
                Select Date: <input type="date" id="date" name="date">
                Select Subject:    
                <select id="subjId" name="subjectBox">
                <option selected>-Select Subject-</option>
                    <?php
                        $sql = "SELECT Distinct subName FROM subjects where subTeacher='{$_SESSION["tEmail"]}'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){ 
                            ?>
                            <option value="<?php echo $row['subName']; ?>"> <?php echo $row['subName']; ?></option>

                        <?php } ?>    
                </select> 
                Select Class:    
                <select  id="classId" onchange="getAttendance()" name="classBox">
                    <option selected>-Select Class-</option>
                    <?php
                        $sql = "SELECT Distinct class FROM stuTable";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){ 
                            ?>
                            <option value="<?php echo $row['class']; ?>"> <?php echo $row['class']; ?></option>

                        <?php } ?>    
                </select>
                <table>
                    <thead>
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Attendance Status</th>
                        <th>Date</th>
                        <th>Subject</th>
                    </thead>
                           
                     <tbody id="stuDataRows2">
                     
                     </tbody>  
                </table>    
            </div> 
        </section>

        <?php include 'footer.php'; ?>  
    </body>
</html>