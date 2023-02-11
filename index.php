
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Teacher Attendance Portal</title>
        <link rel="stylesheet" href="attendanceCSS.css">
    </head>
    <body>
        <header class="header">
            <h1 class="mainHeading"> <img class="sbbsLogo" src="./images/sbbsLogo.jpeg" alt="SBBS Logo"/>SBBS Online Attendance</h1>
        </header>
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
                  <label><b>Email:</b></label><br>
                  <input type="text" id="tEmail" name="tEmail" autofocus/><br><br>
                  <label><b>Password:</b></label><br>
                  <input type="password" id="tPswd" name="tPswd"/><br>
                  <button type="submit" name= "submitButton" id="submitButton">Login</button>
                </form>
            </div>  

        </section>

        <footer class="footer">
             <p>Follow us</p>
             <p>Follow us</p>
        </footer>
    </body>
</html>