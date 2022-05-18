<?php include "cont.php";

?>
<!doctype html>
<html>
    <head>
        <title>admin</title>
        <link rel="stylesheet" href="admin01.css">
    </head>
    <body>
         <form action="cont.php" name="contactForm" method="post" enctype="multipart/form-data">
            <div class="had">
            <h3>Admin LogIn</h3>
            </div>
            <div class="admindiv">
            <label>Enter the first image</label><br>
            Image1:<td><input type="file" name="img01"></td>
            <br>
            <label>Enter the Restaurant name</label><br>
            <input type="text" name="restname" placeholder="enter a name"><br>
            <label>Enter the location</label><br>
            <input type="text" name="address" placeholder="enter the address"><br>
            <label>Enter the contact number</label><br>
            <input type="number" name="contect" placeholder="enter the contect number"><br>
            <label>Enter the web page link</label><br>
            <input type="text" name="link" placeholder="enter the web link here"><br>
            <input type="submit" value="submit" name="adminsubmit">
            </div>
        </form>
    </body>
</html>
