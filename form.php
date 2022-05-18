<?php include 'cont.php';
$m=getIMG1();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0"> 
        <title>Restaurant review</title>
        <link rel="stylesheet" href="css/form01.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <!-- FOR LOGO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT ICON -->
    <script src="https://kit.fontawesome.com/aab6347ebb.js" crossorigin="anonymous"></script>
    </head>
    <body>

      <div class="head_f">
        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount=-40  direction="left">
        <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: rgb(1, 1, 1);">
          +91-9679377775</a> 
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmXKWtMCsctFVPjWtCrTmzvzDdNkjwbmpFDjDNCfzgXRCsQTFMzjDbDwrRHVvjlwRbqLSK" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:rgb(6, 6, 6);">
          subhankarsharma02@gmail.com</a> <i class="fa-brands fa-facebook-square"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-twitter"></i>
          <div class="mid">
          <!-- <a href="https://www.facebook.com/" class="fa fa-facebook" style="text-decoration: none; padding: 0px;float:right; color: white; "></a>
          <a href="https://www.instagram.com/" class="fa fa-instagram" style="text-decoration: none; padding: 0px;float:right;color: white;"></a>
          <a href="https://twitter.com/i/flow/login" class="fa fa-twitter" style="text-decoration: none; padding: 0px;float:right;color: white;"></a><br> -->
        </div>
        </marquee>  
        </div>
    
        <div class="header">
           <nav>
               <a href="index.html"><img src="web_img/12345.png"></a>
               <div class="nav-links">
                <i class="fas fa-times" onclick="hideMenue()"></i>
                   <ul>
                    <il><form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search for restaurants" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit">Search</button>
                      </form></il>
                       <li><a href="">HOME</a></li>
                       <li><a href="">ABOUT</a></li>
                       <li><a href="adminlog.php">ADMIN LOGIN</a></li>
                       <li><a href="">CONTACT</a></li>    
                   </ul>
               </div>
               <i class="fas fa-bars" onclick="showMenue()"></i>
           </nav>
           <div class="text-box">
               <h1>India's Best Restaurants</h1>
               <p>Find the top restautants in your city, visit their <br>and give a review here.</p>
               <a href="login.php" class="hero_btn">LogIn</a>
               <a href="signup.php" class="zero_btn">SignUp</a>
           </div>
        </div>

        <!------BODY------>

        <SECTION class="body">
            <h1>Restaurant Recomendation</h1>
            <p>Here suggested some restaurants for you, if you looking for another one then click the see more option </p>
        </SECTION>

        <!-- CARDS -->

        <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($m as $i){?>
          <div class="col">
            <div class="card">
              <a href="piter_cat.php">
              <img src="uprest/<?=$i['rimg']?>" class="card-img-top" alt="...">
            </a>
              <div class="card-body">
                <h5 class="card-title"><?=$i['title']?></h5>
                <p class="card-text">Location: 18A, Park Street, Park Street Area, Kolkata, West Bengal 700071<br>click to know more</p>
                <a class="btn btn-info" href="cont.php?rest_id=<?=$i['id']?>&user_id=<?=$_SESSION['i']?>">click to know more</a>
              </div>
            </div>
          </div>
          <?php } ?>
        
          <!-- <div class="col">
            <div class="card">
              <a href="arsalan.php">
              <img src="arsalan/arsalan.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">Arsalan</h5>
                <p class="card-text">Location: 191, Park Street, Near 7 Point Crossing, Park Circus Area, Kolkata, West Bengal<br>click to know more</p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col">
            <div class="card">
              <a href="crystal.php">
              <img src="crystal_chimney/crystal.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">Crystal Chimney</h5>
                <p class="card-text">Location: 17, Chittaranjan Avenue, Near Federal Bank, Chandni Chowk, Kolkata, West Bengal 700072<br>click to know more</p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col">
            <div class="card">
              <a href="sher.php">
              <img src="sher_e/sher.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">Sher E Punjab Restautant</h5>
                <p class="card-text">Location:Near Mini Secretariat, Firozpur Cantt Near GT Road, Firozpur Locality, Firozpur, Punjab<br>click to know more</p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col">
            <div class="card">
              <a href="mosaic.php">
              <img src="mosaic/mosaic.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">Mosaic</h5>
                <p class="card-text">Location: 28, North West Avenue, Club Road, Near Icici Bank Wealth Management, Punjabi Bagh, Delhi 110026<br>click to know more</p>
              </div>
            </div>
          </div> -->
        </div>
        
           
           <div class="see_more">
            <a href="allrest.php">
              <button type="button" class="btn btn-primary">see more</button>
            </a>
          </div>

          <!-- FOOTER -->
          <div class="footr">
          <footer>
            <!-- <font color="white"> -->
              <div class="about">
              <br><h3>ABOUT</h3>
            </div>
              <div class="social_m">
            
              <h5>SOCIAL MEDIA</h5>
              <a href="https://www.facebook.com/" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
              <a href="https://www.instagram.com/" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
              <a href="https://twitter.com/i/flow/login" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
              </div>
              <div class="hed">
              <h5>CONTACT</h5>
            </div>
              <div class="cont">
              <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
                +91-9679377775</a> <br>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmXKWtMCsctFVPjWtCrTmzvzDdNkjwbmpFDjDNCfzgXRCsQTFMzjDbDwrRHVvjlwRbqLSK" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
                subhankarsharma02@gmail.com  </a>
                <br>
                <div class="support_poly">
                
                Support or Report
                <br>
                <a href="policy.php">
                  <font color="white">
                  Privicy & policy</a>
                  </font>
                  </div>
                  </div>
          </footer>
          </div>
  

          
        <!-- JAVASCRIPT FOR TOGGLE_MENUE HIDE AND SHOW -->
        <script>
            var navLinks= document.getElementById("navLinks");
            function showMenue(){
                navLink.style.right="0";
            }
            function hideMenue(){
                navLink.style.right="-200px";
            }
            
        </script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>