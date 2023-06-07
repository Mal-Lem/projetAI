<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/search?q=bars&o=r">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel Expert.</a>
        <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About</a>
         <a href="package.php">Package</a>
         <a href="book.php">Book</a>
         <a href="expert_form.php">Expert</a> 
        </nav>
        <i id="menu-btn" class="fa-solid fa-bars"></i>
    </section>
    <section class="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/people-2591874_1280.jpg) no-repeat">
                <div class="content">
                    <span> explore , discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/mountains-1587287_1280.jpg) no-repeat">
                <div class="content">
                    <span> explore , discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/people-2591939_1280.jpg) no-repeat">
                <div class="content">
                    <span> explore , discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    </section>
<section class="services">
<h1 class="heading-title">our services</h1>
<div class="box-container">
    <div class="box">
        <img src="images/adventure.png" alt="">
        <h3>Adventure</h3>
    </div>
    <div class="box">
        <img src="images/path.png" alt="">
        <h3>tour guide </h3>
    </div>
    
    <div class="box">
        <img src="images/camping-tent.png" alt="">
        <h3>camp fire</h3>
    </div>
    <div class="box">
        <img src="images/street-sign.png" alt="">
        <h3>off road</h3>
    </div>
    <div class="box">
        <img src="images/tent.png" alt="">
        <h3>camping</h3>
    </div>
</div>
</section>

<section class="home-about">
    <div class="image">
        <img src="images/woman-1509956_1280.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Nous sommes une équipe passionnée de voyageurs qui adorent explorer le monde. 
            Notre mission est de vous inspirer et de vous aider à planifier des voyages extraordinaires. 
            Que vous cherchiez des plages paradisiaques, des aventures en plein air ou une immersion culturelle,
            nous sommes là pour vous guider vers les expériences de voyage les plus mémorables. 
            Rejoignez-nous dans cette aventure et laissez-nous faire de vos rêves de voyage une réalité
        </p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<section class="home-packages">
    <h1 class="heading-title">
        our packages
    </h1>
    <div class="box-container">
        <div class="box">
           <div class="image">
            <img src="images/swimming-pool-731886_1280.jpg" alt="">
           </div>
           <div class="content">
            <h3>adventure & tour</h3>
            <p>Vivez des aventures uniques et inoubliables avec nos circuits hors du commun</p>
            <a href="book.php" class="btn">book now</a>
           </div>
        </div>
        <div class="box">
           <div class="image">
            <img src="images/window-3178666_1280.jpg" alt="">
           </div>
           <div class="content">
            <h3>adventure & tour</h3>
            <p>Vivez des aventures uniques et inoubliables avec nos circuits hors du commun</p>
            <a href="book.php" class="btn">book now</a>
           </div>
        </div>
        <div class="box">
           <div class="image">
            <img src="images/tiber-river-4529605_1280.jpg" alt="">
           </div>
           <div class="content">
            <h3>adventure & tour</h3>
            <p>Vivez des aventures uniques et inoubliables avec nos circuits hors du commun</p>
            <a href="book.php" class="btn">book now</a>
           </div>
        </div>
    </div>
    <div class="load-more"> <a href="package.pphp" class="btn">load more</a> </div>
</section>

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Économisez jusqu'à 50 % sur des voyages inoubliables avec nos offres exclusives.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>



<!-- footer section starts-->
<section class="footer">

<div class="box-container">
<div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
</div>

<div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>  
</div>
<div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+213-456-7890</a>
        <a href="#"><i class="fas fa-phone"></i>+202-111-7890</a>
        <a href="#"><i class="fas fa-envelope"></i> a_guerah@estin.dz</a>
        <a href="#"><i class="fas fa-map"></i>Alger, Algeria - 2130</a>
</div>
<div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook</a>
        <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
        <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
        <a href="#"><i class="fa-brands fa-linkedin"></i> linkedin</a>

</div>
</div>
<div class="credit">created by <span>AmLem</span> | all rights reserved!</div>
</section>


<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>