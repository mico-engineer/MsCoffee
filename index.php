<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M's coffee</title>
    <link rel="stylesheet" type="text/css" href="./css/style_pc.css">
    <link rel="stylesheet" type="text/css" href="./css/style_sp.css">

    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <link rel="stylesheet" type="text/css" href=".css/slick-theme.css"/>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cardo:wght@700&family=Cutive+Mono&family=Domine&family=Playfair+Display&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="wrap">
    <header>
        <nav class="nav-01">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Aboutus">About us</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="#Gallary">Gallary</a></li>
            </ul>
        </nav>
        <div id="logo" class="pc">
            <a href="index.html">
                <img src="images/logo/logo.png" alt="M's Coffee">
            </a>
        </div>
        <div id="sp-logo" class="sp">
            <a href="index.html">
                <img src="images/logo/logo-small.png" alt="M's Coffee">
            </a>
        </div>
        <nav class="nav-02">
            <ul>
                <li><a href="#Location">Location</a></li>
                <li>
                    <div id="placelink">
                        <a class="btn map" href="https://goo.gl/maps/HvqnFixBhHnrdVB79">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </a>
                    </div>
                </li>
                <li><a href="#Contact">Contact</a></li>
                <li class="reserve-btn"><a href="#">RESERVE</a></li>
            </ul>
        </nav>
        <div id="nav-toggle" class="sp">
            <div>
                <span></span>
                <span></span>
                <span></span>
                <nav id="global-navi">
                    <ul class="menu">     
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#Aboutus">About us</a></li>
                        <li><a href="#Menu">Menu</a></li>
                        <li><a href="#Gallary">Gallary</a></li>
                        <li><a href="#Location">Location</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                    <ul class="menu-sns">
                        <li>
                            <a class="btn facebook" href="#">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn instagram" href="#">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn twitter" href="#">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section id="Home" class="top-wrapper">
            <h1 class="fadein">Welcome to M's Coffee</h1>
            <p class="fadein">Enjoy a fresh coffee and homemade cheesecake.</p>
            <!--ボタンここから-->
            <a class="button fadein" href="#">SEE MENU</a>
            <!--ここまで-->

            <div class="top-image">
                <div class="top-image"></div>
                <div class="top-image"></div>
                <div class="top-image"></div>
            </div>
        </section>

        <section id="Aboutus" class="about-wrapper">
            <h2 class="fadein">ABOUT US</h2>
            <div class="about-con fadein">
                <img src="images/flame.png" alt="aboutus background">
                <p class="about-copy fadein">Coffee never tasted so good!</p>
                <p class="about-text fadein">A 3rd wave coffee that is eco-responsible and more than fair at the human level. A
                    relationship between the
                    bean picked and your cup that goes through proximity with coffee producers to the concern of a perfect
                    roasting of these batches from single origins and an infusion made with precision by our baristas.</p>
            </div>
            <div class="testimonials">
                <div class="tes-con fadein">
                    <div class="slide-01"></div>
                    <div class="tes-left pc">
                        <img src="images/realisticshots.jpg" alt="barista">
                    </div>
                    <div class="tes-right">
                        <div class="slide-01">
                            <img src="images/tes-01.png" alt="">
                            <div class="tes01-text">
                                <p class="person">Chris Parker</p>
                                <p class="introduce">
                                    Barista champion in 2020.I am good at brewing flavorful coffee.
                                </p>
                            </div>
                        </div>
                        <div class="slide-02">
                            <img src="images/tes-02.png" alt="barista2">
                            <div class="tes02-text">
                                <p class="person">Bruno Bergher</p>
                                <p class="introduce">
                                    A barista who specializes in latte art.We also hold workshops and seminars.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Menu" class="menu-wrapper">
            <h2 class="fadein">MENU</h2>
            <div class="menu-contents">
                <div class="contents-title">
                    <ul class="menu">
                        <li class="fadein">
                            <img src="images/coffee.png" alt="coffee menu">
                        </li>
                        <li class="fadein">
                            <img src="images/tea.png" alt="tea menu">
                        </li>
                        <li class="fadein">
                            <img src="images/dessert.png" alt="dessert menu">
                        </li>
                    </ul>
                </div>
                <div class="contents fadein">
                    <ul class="coffee-con">
                        <li>Latte</li>
                        <li class="price">$6.00</li>
                        <li>Mocha</li>
                        <li class="price">$6.00</li>
                        <li>Expresso</li>
                        <li class="price">$5.00</li>
                        <li>Capuccino</li>
                        <li class="price">$5.00</li>
                    </ul>
                    <ul class="tea-con">
                        <li>Iced tea</li>
                        <li class="price">$4.00</li>
                        <li>Cold brew</li>
                        <li class="price">$5.00</li>
                        <li >Jasmine</li>
                        <li class="price">$4.00</li>
                        <li>Green</li>
                        <li class="price">$4.00</li>
                    </ul>
                    <ul class="desserts-con">
                        <li>Cheesecake</li>
                        <li class="price">$5.00</li>
                        <li>Tiramisu</li>
                        <li class="price">$5.00</li>
                        <li>Brownie</li>
                        <li class="price">$4.00</li>
                        <li>cookie</li>
                        <li class="price">$3.00</li>
                    </ul>
                </div>
                <div><a class="button_menu fadein" href="#">SEE ALL MENU</a></div>
            </div>
        </section>

        <section id="Gallary" class="gallary-wrapper">
            <h2 class="fadein">GALLARY</h2>
            <div class="gallary-contents">
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary01.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary01.jpg);">
                            <p>Capuccino</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary02.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary02.jpg);">
                            <p>Brownie</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary03.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary03.jpg);">
                            <p>Cold brew</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary04.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary04.jpg);">
                            <p>Green</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary05.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary05.jpg);">
                            <p>We are waiting!</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary06.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary06.jpg);">
                            <p>Tiramisu</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary07.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary07.jpg);">
                            <p>Cheesecake</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary08.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary08.jpg);">
                            <p>Latte</p>
                        </div>
                    </div>
                </div>
                <div class="gallary-con">
                    <div class="item">
                        <div class="fadein item-img" style="background-image:url(images/gallary_images/gallary09.jpg);"></div>
                        <div class="item-content" style="background-image:url(images/gallary_images/gallary09.jpg);">
                            <p>We are waiting!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Location" class="location-wrapper">
            <h2 class="fadein">LOCATION</h2>
            <div class="location-contents fadein">
                <div class="location-text">
                    <div class="location">
                        <h3>LOCATION</h3>
                        <p class="adress">768 5th Ave, New York,NY 10019<a class="btn map" href="https://goo.gl/maps/HvqnFixBhHnrdVB79"><i class="fas fa-map-marker-alt fa-1x"></i></a></p>
                    </div>
                    <div class="hours">
                        <h3>HOURS</h3>
                        <dl>
                            <dt>Mon  -  Sat<span class="mar-10">:</span></dt>
                            <dd>7am  -  8pm</dd>
                            <dt>Sunday<span class="mar-10">:</span></dt>
                            <dd>7am  -  5pm</dd>
                        </dl>
                    </div>
                    <div class="happyhour">
                        <h3>HAPPY HOUR</h3>
                        <dl>
                            <dt>Mon  -  Fri<span class="mar-10">:</span></dt>
                            <dd>4pm - 6pm</dd>
                        </dl>
                    </div>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30593659694!2d-74.25986557458302!3d40.697149419103454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z44Ki44Oh44Oq44Kr5ZCI6KGG5Zu9IOODi-ODpeODvOODqOODvOOCr-W3niDjg4vjg6Xjg7zjg6jjg7zjgq8!5e0!3m2!1sja!2sjp!4v1601302407775!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" aria-hidden="false" width="100%" height="100%"
                        tabindex="0"></iframe>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section id="Contact" class="container">
            <h2 class="fadein sph2">CONTACT</h2>
            <div class="contact-wrapper fadein">
                <div class="contact">
                    <form id="contact-form" method="POST" action="./confirm.php">
                        <input type="text" name="name" placeholder="Name" id="name" autocomplete="off" required="required">
                        <div class="underline"></div>
                        <input type="text" name="mail" placeholder="Email" id="email" autocomplete="off" required="required">
                        <div class="underline"></div>
                        <input type="text" name="phone" placeholder="Telephone" id="phone" autocomplete="off">
                        <div class="underline"></div>
                        <textarea id="comments" name="message" placeholder="We'd love to hear your voice!" autocomplete="off" class="required"></textarea>
                        <input type="submit" class="submit" value="SEND TO US">
                    </form>
                </div>
                <div class="border-center pc"></div>
                <div class="contact-img">
                    <div class="contact-back pc"><img src="images/coffee.jpg" alt="coffee beans"></div>
                    <p class="about-copy-con">Coffee never tasted so good!</p>
                    <div class="stamp pc"><img src="images/stamp.png" alt="stamp"></div>
                </div>
            </div>
            <hr>
            <div class="footer-02">
                <div id="footer-logo">
                    <a href="index.html"><img src="images/logo/footer-logo.png" alt="M's Coffee"></a>
                </div>
        
                <div id="SNS-link">
                    <a class="btn facebook" href="https://www.facebook.com/">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a class="btn instagram" href="https://www.instagram.com/">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a class="btn twitter" href="https://twitter.com/">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                </div>
                <p class="copy-right">© 2020 M's Coffee, all right reserved</p>
            </div>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/sp.js"></script>
    <script src="./js/pc.js"></script>
</div>
</body>

</html>