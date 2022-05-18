<?php include 'cont.php';
$f=getIMG();
// session_start();
// $n=$_SESSION['n'];
// if(empty($n)){
//      header("location:logi.php");
// }
// else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resturent Review</title>
        <link rel="stylesheet" href="css/piter_cat01.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <!-- FONT ICON -->
    <script src="https://kit.fontawesome.com/aab6347ebb.js" crossorigin="anonymous"></script>
      </head>


    
    <body>
      <!-- <div class="col"> -->
        <div class="cat">
      <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount=-40  direction="left">
         
          Welcome to Arsalan
        
      </marquee>
      </div>
        <!-- </div> -->
        
      <div class="picb">
       <div class="row row-cols-1 row-cols-md-6 g-4">
       <?php foreach ($f as $i){?>
        <div class="col">
          <div class="card">
            <div class="hov">
            <img src="upload/<?=$i['imgname']?>" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- <div class="col">
          <div class="card">
            <div class="hov">
            <img src="arsalan/th (1).jpg" class="card-img-top" alt="...">
          </div>
          </div> -->
        <!-- </div> -->
        <!-- <div class="col">
          <div class="card">
            <div class="hov">
            <img src="arsalan/th.jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div> -->

        <!-- <div class="col"> -->
          <!-- <div class="card">
            <div class="hov">
            <img src="arsalan/th (2).jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div> -->
        <!-- <div class="col">
          <div class="card">
            <div class="hov">
            <img src="arsalan/th (5).jpg" class="card-img-top" alt="...">
          </div>
          </div>
        </div> -->
        <!-- <div class="col">
          <div class="card">
            <div class="hov">
            <img src="arsalan/th (4).jpg" class="card-img-top" alt="...">
            </div>
          </div>
        </div> -->
      </div>
      <br>
      </div>
      <center>
        <div class="cls">
      <div class="card" style="width: 40rem;">
        <div class="card-body" baclg>
          <div class="cent">
          <?php foreach ($f as $i){?>
          <h3 class="card-title"><?=$i['title']?><?php } ?> <a href="form.php"><button type="button" class="btn btn-info" align="center">HOME</button></a></h3>
          
          <p class="card-text">
            Rating: <i class="fa-solid fa-star"></i><br>
            <i class="fa-solid fa-location-dot"></i>
            <a>123, Jessore Road, Near Shelly Cinema Hall, Bangur, Kolkata, West Bengal</a><br>
            <i class="fa-solid fa-phone"></i>
            <a href="">09163363650</a><br>
            <i class="fa-solid fa-clock"></i>
            11.00-23.45<br>
            <i class="fa-solid fa-earth-asia"></i>
            website: <a href="https://arsalanrestaurants.com/">https://arsalanrestaurants.com/</a><br>
            Review: <input type="radio" name="gender" value="1">1   
            <input type="radio" name="gender" value="2">2   
            <input type="radio" name="gender" value="3">3   
            <input type="radio" name="gender" value="4">4    
            <input type="radio" name="gender" value="5">5<br>
            Enter your feedback:<br>
            <input type="text" name="cmnt" placeholder="Entre your opinion"><br></p>
          <a href="#" class="btn btn-primary">Submit</a>
          
        </div>
        </div>
      </div>
      </div>
      </center>
    
      

      <!-- <div class="name">
        Pitter Cat
      </div> -->
        
        
        

        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>
      </html>