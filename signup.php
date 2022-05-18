<!DOCTYPE html>
<html>
    <head>
        <title>singup</title>
    </head>
    <body>
    <header>
    <center>
        <div>
        <h2>Sign Up</h2>
        </div>

        <form action="cont.php" name="contactForm" method="post">
            <label>Enter your name</label><br>
            <input type="text" name="text1" placeholder="ENTER YOUR NAME" autocomplete="off"><br>
            <label>Enter your email id</label><br>
            <input type="email" name="text2" placeholder="Enter your email"><br>
            <label>Enter your phone number</label><br>
            <input type="number" name="text3" placeholder="Enter your phone number"><br>
            GENDER:
            MALE:<input type="radio" name="gender" value="male">
            FEMALE:<input type="radio" name="gender" value="female">
            OTHER:<input type="radio" name="gender" value="other">
            <br>
            <label>Enter Pasword:</label><br>
            <input type="password" name="pass" placeholder="Enter your password"><br>
            <label>Re-Enter Pasword:</label><br>
            <input type="password" name="pass" placeholder="Re-Enter your password"><br>
            <input type="submit" value="submit" name="register">
            <a href="login.php">login</a>
            <a href="form.php">HOME</a>
        </form>
        
        </center>
        </header>
    </body>
</html>