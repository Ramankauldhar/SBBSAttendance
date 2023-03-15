<?php
    include 'dbConnection.php';
    $sql = "SELECT classId, className FROM classes";
    $result = $conn->query($sql);

    if($result->num_rows >0){
    }else{
             echo "0 results";
         }
       $conn->close();
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
            <h2>Class List</h2>
                <table>
                    <tr>
                        <th>Class Id</th>
                        <th>Class Name</th>
                    </tr>
                     <?php  while($row = $result->fetch_assoc()){ ?>       
                     <tr>
                        <td><?php echo $row['classId']; ?></td>
                        <td><?php echo $row['className']; ?></td>
                     </tr>  
                     <?php } ?>    
                </table>        
            </div> 
        </section>
        <?php include 'footer.php'; ?>  
    </body>
</html>