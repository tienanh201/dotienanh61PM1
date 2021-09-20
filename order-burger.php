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

<body>
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
                            
                            <a href="categories.php">
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

    </div>
    <div class="slider__order">
        <h3 class="slider__order-heading">Fill this from to confirm your order.</h3>
        <div class="grid wide order">
            <div class="slider__order-selected">
                <h5 class="selected-heading">Selected Food</h5>
                <div class="row">
                    <div class="col l-3 m-3 c-3">
                        <div class="selected__left">
                            <img src="img/menu-burger.jpg" alt="" class="selected-img">
                        </div>
                    </div>
                    <div class="col l-9 m-9 c-9">
                        <div class="selected__right">
                            <h4 class="selected__right-title">Food Title</h4>
                            <span class="selected__right-price">$2.3</span>
                            <span class="selected__right-quantity">Quantity</span>
                            <input type="number" name="" required id="" placeholder="1" class="quantity-input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__order-delivery">
                <h5 class="delivery-heading">Delivery Details</h5>
                <form action class="deliverydetails">
                    <span class="delivery__title">Full Name</span>
                    <input type="text" name="" required id="" placeholder="E.g. DoTienAnh" class="delivery-input">
                    <span class="delivery__title">Phone Number</span>
                    <input type="number" name="" required id="" placeholder="E.g. 0828xxxxx" class="delivery-input">
                    <span class="delivery__title">Email</span>
                    <input type="email" name="" required id="" placeholder="E.g. DoTienAnh@gmail.com"
                        class="delivery-input">
                    <span class="delivery__title">Address</span>
                    <textarea name="" id="" cols="30" rows="10" name="" required id=""
                        placeholder="E.g. Street, City, Country" class="delivery-input"></textarea>
                    <div>
                        <input type="submit" value="Confirm Order" class="confirm-btn">
                    </div>
                </form>
            </div>

        </div>
    </div>

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
