<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>  
    <body>
        <?php include 'logo.php'; ?>
        <section>
            <p class="tPortalText">Teacher Attendance Portal</p>
            <?php include 'navigation.php'; ?>
            
            <div class="home-container">
                <form class="formContent2" action="addNewSubjectDB.php" method="POST">
                <h2> Add New Subject </h2>
                <?php if(isset($_GET['success'])) {?> 
                    <p class="sucessText"><?php echo $_GET['success']; ?></p> </br>
                    <?php } ?>
                    <label for="subId"> Subject Id: </label></br>
                    <input type="text" id="subId" name="subId" required/></br>
                    <label for="subName"> Subject Name: </label></br>
                    <input type="text" id="subName" name="subName" required/></br>
                    <label for="subTeacher"> Subject Teacher: </label></br>
                    <input type="text" id="professorEmail" name="subTeacher" required/></br>
                    <label for="subClass"> Class Name: </label></br>
                    <input type="text" id="subClass" name="subClass" required/></br>
                    <input type="submit" id="submit" value="submit"/>
                    <input type="reset" id="reset" value="reset"/>
                </form>
            </div> 
        </section>
    
        <?php include 'footer.php'; ?>     
    </body>
</html>