<?php
    session_start();
    include 'dbConnection.php';

    $sql = "SELECT subId, subName, subClass from subjects";
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
                <h2>Subject List</h2> 
                    <?php  while($row = $result->fetch_assoc()){ ?>
                        <div class="grid-container">
                                  <div class="grid-item">
                                         <img class="subjPic" src="./images/subjWall.jpeg" alt="Subject Wallpaper" height="15%" width="15%">
                                         <h4><?php echo $row['subName']; ?></h4>
                                  </div>    
                        </div>
                    <?php } ?> 
                </table>
            </div> 

        </section>
        <?php include 'footer.php'; ?>    
    </body>
</html>