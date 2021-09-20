<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FOODS</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap">
</head>

<body id="home">
    <div class="header">
        <div class="nav__top">
            <div class="navbar grid wide">
                <div class="header_container">
                    <div class="navbar__logo">
                        <a href="">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>

                    <div class="list">
                        <ul class="list__text">
                        <a href="home.php">
                            <li class="list__item">Home</li>
                            </a>
                            
                            <a href="">
                            <li class="list__item">Categories</li>
                            </a>

                            <a href="foods.php">
                            <li class="list__item">Foods</li>
                            </a>
                            
                           <a href="">
                            <li class="list__item">Contact</li>
                           </a>
                        </ul>
                    </div>
                    <div class="list__menu">
                        <i class="list__menu-icon fas fa-bars"></i>
                    </div>

                </div>
            </div>
        </div>
        <div class="nav__bottom">
            <div class="grid wide ">
                <div class="nav__search">
                    <input type="text" placeholder="Tìm kiếm" class="nav__input">
                    <button class="nav__btn">
                        <i class="nav__icon fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="slider">
        <!-- CATEGORIES -->
        <div id="categories"class="slider__explorefoods">
            <h3 class="slider__heading">Explore Foods</h3>
            <div class="grid wide">
                <div class="row">
                    <!-- row1 -->
                    <div class="slider col l-4 m-4 c-6">
                        <div class="slider__images-title">
                            <img src="img/pizza.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Pizza</h4>
                        </div>
                    </div>
                    <div class="slider col l-4 m-4 c-6">
                        <div class="slider__images-title">
                            <img src="img/burger.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Burder</h4>
                        </div>
                    </div>
                    <div class="slider col l-4 m-4 c-6">
                        <div class="slider__images-title">
                            <img src="img/momo.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">MoMo</h4>
                        </div>
                    </div>

                    <!-- row2 -->
                    <div class="slider col l-4 m-4 c-6">
                        <div class="slider__images-title">
                            <img src="img/burger.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Burder</h4>
                        </div>
                    </div>
                    <div class="slider col l-4 m-4 c-6">
                        <div class="slider__images-title">
                            <img src="img/momo.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">MoMo</h4>
                        </div>
                    </div>
                    <div class="slider col l-4 m-4 c-6">
                        <div class="slider__images-title">
                            <img src="img/pizza.jpg" alt="" class="slider__img">
                            <h4 class="slider__img-text">Pizza</h4>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------------------- -->
        <!-- FOODS -->
        
        <!-- ------------------------------------------------------------------ -->
    </div>
<!-- FOOTER -->
    <div class="footer">
        <div class="footer__item">
            <a href="https://vi-vn.facebook.com/">
                <i class="footer__item-icon fab fa-facebook"></i>
            </a>
            <a href="">
                <i class="footer__item-icon2 fab fa-instagram"></i>
            </a>
            <a href="">
                <i class="footer__item-icon fab fa-twitter"></i>
            </a>

        </div>
        <div class="footer__text">
            <h3>
                All rights reserved. Designed By&nbsp

            </h3>
            <a href="" class="footer__text-link">
                <span> Do Tien Anh</span>
            </a>
        </div>
    </div>

</body>

</html>
