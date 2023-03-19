<!DOCTYPE html>
        <?php include 'header.php'; ?>
    <body>
       <?php include 'logo.php'; ?>
        <section>
            <div class="leftPhoto">
                <p>SBBS College</p>
                <img class="sbbsClgPic" src="./images/sbbsCollege.jpeg" alt="SBBS College"/>
                <p>SBBS School</p>
                <img class="sbbsSClPic" src="./images/sbbsSchool.jpeg" alt="SBBS School"/>
            </div>
            
            <div class="formContent">
                <p class="tPortalText">Teacher Login</p>
                <img class="tchrPic" src="./images/teacherImg.jpeg" alt="SBBS College"/>

                <form method="post" id="logForm" action="login.php">
                  <?php if(isset($_GET['error'])) {?> 
                    <p class="errorText"><?php echo $_GET['error']; ?></p> </br>
                    <?php } ?>
                  <label><b>Email:</b></label><br>
                  <input type="text" id="tEmail" name="tEmail" autofocus/><br><br>
                  <label><b>Password:</b></label><br>
                  <input type="password" id="tPswd" name="tPswd"/><br>
                  <button type="submit" name= "submitButton" id="submitButton">Login</button>
                </form>
            </div>  

        </section>

        <?php include 'footer.php'; ?>

    </body>
</html>