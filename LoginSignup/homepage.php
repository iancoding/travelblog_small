
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TravelBlog - Murian </title>
        <link rel="icon" href="../img/check.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="../style.css" !important>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <?php include 'navbar.php';?>

    <body>
    
    <!-- Hero Section for welcome Animation -->
    <section class="hero" id="hero" >
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">W</span>elcome
            </h2>
            <h1 class="headline">to my travel Blog</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>Ready to enjoy the moments</h5>
                    <a href="#discover" id="explore" class="btn cta-btn">Explore</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero is ends here -->

    <!-- Discover page -->
    <section class="discover-our-story" id="discover" style="height: 100vh">
        <div class="container">
            <div class="restaurant-info">
                <div class="restaurant-description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark" style="color: #26344E" >the World</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p style="color: #26344E" >
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, in? 
                        Aliquam, quo! Eaque et, magni harum dolorum repudiandae culpa magnam enim corrupti 
                        totam ut reiciendis sed vero obcaecati aut provident.
                    </p>
                    <a href="blog.php" class="btn body-btn">My Travel Blog</a>
                </div>
                <div class="restaurant-info-img animate-right">
                    <img src="../img/71.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- "Discover the worlds" ends here -->

    <!-- Beautiful Nature Section -->
    <section class="tasteful-recipes between" style="background: url('../img/11.jpg') center no-repeat;background-size: cover;height: 100vh;">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline" style="color: #26344E" >
                        <span class="first-letter">M</span>emories
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline">from everywhere</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Beautiful Nature is ending-->

    <!-- Footer start --> 
    <footer>
        <div class="container">
            <div class="back-to-top">
                <a href="#hero"><i class="fas fa-chevron-up"></i></a>
            </div>
            <div class="footer-content">
                <div class="footer-content-about animate-top">
                    <h4>About Murian</h4>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem 
                        quibusdam doloribus veritatis? Suscipit nostrum sit tempora, atque 
                        eligendi reprehenderit dignissimos eveniet, numquam esse hic, officiis
                        voluptates accusantium sunt perspiciatis iusto?
                    </p>
                </div>
                <div class="footer-content-divider animate-bottom">
                    <div class="social-media">
                        <h4> Follow along </h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-tripadvisor"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your Email address...">
                            <button class="newsletter-btn">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ends -->

    <!-- JavaScript  -->
    
    </body>
</html>