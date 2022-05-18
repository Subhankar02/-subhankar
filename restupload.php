<?php include "cont.php";
session_start();
$n=$_SESSION['n'];
if(empty($n)){
header("location:adminlog.php");
}
else{
?>
<!doctype html>
<html>
    <head>
        <title>admin</title>
        <link rel="stylesheet" href="admin01.css">
    </head>
    <body>
         <form action="cont.php" method="post" enctype="multipart/form-data">
            <div class="had">
            <h3>Add Restu</h3>
            </div>
            <div class="admindiv">
            <label>Enter the first image</label><br>
            Image1:<td><input type="file" name="img01"></td>
            <br>
            <label>Enter The Restaurant Name</label><br>
            <input type="text" name="restname" placeholder="enter a name"><br>
            <label>Enter The location & Description</label><br>
            <input type="text" name="des" placeholder="enter the address"><br>
            <input type="submit" value="submit" name="addrest">
            <a href="admin.php">Rest Details></a>
            </div>
        </form>
    </body>
</html>
<?php }
session_destroy();
?>