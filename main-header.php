
<?php
//session_start();
if(isset($_SESSION['id_sesion']) AND isset($_SESSION['email'])){
	$id_usuario = $_SESSION['id_sesion'];
	$sesion = 1;
} else{
	$sesion = 0;
	$id_usuario = 0;
}
	//echo "ID SESION: ".$_SESSION['id_sesion'];
	//echo "EMAIL: ".$_SESSION['email'];
	
?>


 <!--=====================================
	Header
	======================================-->

<header class="header header--standard header--market-place-4" data-sticky="true">

    <!--=====================================
    Header TOP
    ======================================-->

    <div class="header__top">

        <div class="container">

            <!--=====================================
            Social 
            ======================================-->

            <div class="header__left">
                <ul class="d-flex justify-content-center">
                    <!-- <li><a href="#" target="_blank"><i class="fab fa-facebook-f mr-4"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram mr-4"></i></a></li>					
                    <li><a href="#" target="_blank"><i class="fab fa-twitter mr-4"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube mr-4"></i></a></li> -->
                </ul>
            </div>

            <!--=====================================
            Contact & lenguage 
            ======================================-->

            <div class="header__right">
                <ul class="header__top-links"> 
                    <li><a href="#">Sell on MarketPlace</a></li>
                    <li><a href="#">Store List</a></li>
                    <li><i class="icon-telephone"></i> Hotline:<strong> 1-800-234-5678</strong></li>                     
                    <li>
                        <div class="ps-dropdown language"><a href="#"><img src="img/template/en.png" alt="">English</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#"><img src="img/template/es.png" alt=""> Spanish</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div><!-- End Container -->

    </div><!-- Header Top -->

    <!--=====================================
    Header Content
    ======================================-->

    <div class="header__content">

        <div class="container">

            <div class="header__content-left">

                <!--=====================================
                Logo
                ======================================-->

                <a class="ps-logo" href="index.html">
                    <img src="img/template/logo_light.png" alt="">
                </a>

                <!--=====================================
                Menú
                ======================================-->

                <div class="menu--product-categories">
                    
                    <div class="menu__toggle">
                        <i class="icon-menu"></i>
                        <span> Shop by Department</span>
                    </div>

                    <div class="menu__content">
                        <ul class="menu--dropdown">
                            <li>
                                <a href="#"><i class="icon-star"></i> Hot Promotions</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu">
                                <a href="#"><i class="icon-laundry"></i> Consumer Electronic</a>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Electronic<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Home Audio &amp; Theathers</a>
                                            </li>
                                            <li><a href="#">TV &amp; Videos</a>
                                            </li>
                                            <li><a href="#">Camera, Photos &amp; Videos</a>
                                            </li>
                                            <li><a href="#">Cellphones &amp; Accessories</a>
                                            </li>
                                            <li><a href="#">Headphones</a>
                                            </li>
                                            <li><a href="#">Videosgames</a>
                                            </li>
                                            <li><a href="#">Wireless Speakers</a>
                                            </li>
                                            <li><a href="#">Office Electronic</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Digital Cables</a>
                                            </li>
                                            <li><a href="#">Audio &amp; Video Cables</a>
                                            </li>
                                            <li><a href="#">Batteries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#"><i class="icon-shirt"></i> Clothing &amp; Apparel</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-lampshade"></i> Home, Garden &amp; Kitchen</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-heart-pulse"></i> Health &amp; Beauty</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-diamond2"></i> Yewelry &amp; Watches</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu">
                                <a href="#"><i class="icon-desktop"></i> Computer &amp; Technology</a>
                                <div class="mega-menu">
                                    <div class="mega-menu__column">
                                        <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list">
                                            <li><a href="#">Computer &amp; Tablets</a>
                                            </li>
                                            <li><a href="#">Laptop</a>
                                            </li>
                                            <li><a href="#">Monitors</a>
                                            </li>
                                            <li><a href="#">Networking</a>
                                            </li>
                                            <li><a href="#">Drive &amp; Storages</a>
                                            </li>
                                            <li><a href="#">Computer Components</a>
                                            </li>
                                            <li><a href="#">Security &amp; Protection</a>
                                            </li>
                                            <li><a href="#">Gaming Laptop</a>
                                            </li>
                                            <li><a href="#">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#"><i class="icon-baby-bottle"></i> Babies &amp; Moms</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-baseball"></i> Sport &amp; Outdoor</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-smartphone"></i> Phones &amp; Accessories</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-book2"></i> Books &amp; Office</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-car-siren"></i> Cars &amp; Motocycles</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-wrench"></i> Home Improments</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-tag"></i> Vouchers &amp; Services</a>
                            </li>
                        </ul>

                    </div>

                </div><!-- End menu-->

            </div><!-- End Header Content Left-->

            <!--=====================================
            Search
            ======================================-->

            <div class="header__content-center">
                <form class="ps-form--quick-search" action="index.html" method="get">
                    <div class="form-group--icon">
                        <i class="icon-chevron-down"></i>
                        <select class="form-control">
                            <option value="1">All</option>
                            <option value="1">Smartphone</option>
                            <option value="1">Sounds</option>
                            <option value="1">Technology toys</option>
                        </select>
                    </div>
                    <input class="form-control" type="text" placeholder="I'm shopping for...">
                    <button>Search</button>
                </form>
            </div>

            <div class="header__content-right">

                <div class="header__actions">

                    <!--=====================================
                    Wishlist
                    ======================================-->

                    <a class="header__extra" href="#">
                        <i class="icon-heart"></i><span><i>0</i></span>
                    </a>

                    <!--=====================================
                    Cart
                    ======================================-->

                    <div class="ps-cart--mini">

                        <a class="header__extra" href="#">
                            <i class="icon-bag2"></i><span><i>0</i></span>
                        </a>

                        <div class="ps-cart__content">

                            <div class="ps-cart__items">

                                <div class="ps-product--cart-mobile">

                                    <div class="ps-product__thumbnail">
                                        <a href="#">
                                            <img src="img/products/clothing/7.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="ps-product__content">
                                        <a class="ps-product__remove" href="#">
                                            <i class="icon-cross"></i>
                                        </a>
                                        <a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                        <small>1 x $59.99</small>
                                    </div>

                                </div>

                                <div class="ps-product--cart-mobile">

                                    <div class="ps-product__thumbnail">
                                        <a href="#">
                                            <img src="img/products/clothing/5.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="ps-product__content">
                                        <a class="ps-product__remove" href="#">
                                            <i class="icon-cross"></i>
                                        </a>
                                        <a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                        <small>1 x $59.99</small>
                                    </div>

                                </div>

                            </div>

                            <div class="ps-cart__footer">

                                <h3>Sub Total:<strong>$59.99</strong></h3>
                                <figure>
                                    <a class="ps-btn" href="shopping-cart.html">View Cart</a>
                                    <a class="ps-btn" href="checkout.html">Checkout</a>
                                </figure>

                            </div>

                        </div>

                    </div>

                    <!--=====================================
                    Login and Register
                    ======================================-->

                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <i class="icon-user"></i>
                        </div>
                        <div class="ps-block__right">
                            <a href="my-account.html">Login</a>
                            <a href="my-account.html">Register</a>
                        </div>
                    </div>

                </div><!-- End Header Actions-->

            </div><!-- End Header Content Right-->

        </div><!-- End Container-->

    </div><!-- End Header Content-->

</header>



<!--=====================================
Header Mobile
======================================-->

<header class="header header--mobile" data-sticky="true">

    <div class="header__top">

        <div class="header__left">

            <ul class="d-flex justify-content-center">
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f mr-4"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram mr-4"></i></a></li>					
                <li><a href="#" target="_blank"><i class="fab fa-twitter mr-4"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube mr-4"></i></a></li>
            </ul>
        </div>

        <div class="header__right">

            <ul class="navigation__extra">
                
                <li><a href="#">Sell on MarketPlace</a></li>
                <li><a href="#">Store List</a></li>
                <li><i class="icon-telephone"></i> Hotline:<strong> 1-800-234-5678</strong></li>    

                <li>

                    <div class="ps-dropdown language"><a href="#"><img src="img/template/en.png" alt="">English</a>

                        <ul class="ps-dropdown-menu">

                            <li><a href="#"><img src="img/template/es.png" alt=""> Español</a></li>

                        </ul>

                    </div>

                </li>

            </ul>

        </div>

    </div>

    <div class="navigation--mobile">

        <div class="navigation__left">

            <!--=====================================
            Menu Mobile
            ======================================-->

            <div class="menu--product-categories">
                
                <div class="ps-shop__filter-mb mt-4" id="filter-sidebar">
                    <i class="icon-menu "></i>
                </div>

                <div class="ps-filter--sidebar">

                    <div class="ps-filter__header">
                        <h3>Categories</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
                    </div>

                    <div class="ps-filter__content">

                        <aside class="widget widget_shop">

                            <ul class="ps-list--categories">
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Clothing &amp; Apparel</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="display: none;">
                                        <li class="current-menu-item "><a href="shop-default.html">Womens</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Mens</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Bags</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Sunglasses</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Accessories</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Kid's Fashion</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Garden &amp; Kitchen</a><span class="sub-toggle active"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="display: block;">
                                        <li class="current-menu-item "><a href="shop-default.html">Cookware</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Decoration</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Furniture</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Garden Tools</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Home Improvement</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Powers And Hand Tools</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Utensil &amp; Gadget</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Consumer Electrics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="">
                                        <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Air Conditioners</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sub-menu" style="">
                                                <li class="current-menu-item "><a href="shop-default.html">Accessories</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Type Hanging Cell</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Type Hanging Wall</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Audios &amp; Theaters</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sub-menu" style="">
                                                <li class="current-menu-item "><a href="shop-default.html">Headphone</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Home Theater System</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Speakers</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Car Electronics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sub-menu" style="">
                                                <li class="current-menu-item "><a href="shop-default.html">Audio &amp; Video</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Car Security</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Radar Detector</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Vehicle GPS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Office Electronics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sub-menu" style="">
                                                <li class="current-menu-item "><a href="shop-default.html">Printers</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Projectors</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Scanners</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Store &amp; Business</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">TV Televisions</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sub-menu" style="">
                                                <li class="current-menu-item "><a href="shop-default.html">4K Ultra HD TVs</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">LED TVs</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">OLED TVs</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Washing Machines</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sub-menu" style="">
                                                <li class="current-menu-item "><a href="shop-default.html">Type Drying Clothes</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Type Horizontal</a>
                                                </li>
                                                <li class="current-menu-item "><a href="shop-default.html">Type Vertical</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Refrigerators</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Health &amp; Beauty</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="">
                                        <li class="current-menu-item "><a href="shop-default.html">Equipments</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Hair Care</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Perfumer</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Skin Care</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Computers &amp; Technologies</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="">
                                        <li class="current-menu-item "><a href="shop-default.html">Desktop PC</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Laptop</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Jewelry &amp; Watches</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="">
                                        <li class="current-menu-item "><a href="shop-default.html">Gemstone Jewelry</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Men's Watches</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Women's Watches</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Phones &amp; Accessories</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="">
                                        <li class="current-menu-item "><a href="shop-default.html">Iphone 8</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Iphone X</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Sam Sung Note 8</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Sam Sung S8</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item menu-item-has-children"><a href="shop-default.html">Sport &amp; Outdoor</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                    <ul class="sub-menu" style="">
                                        <li class="current-menu-item "><a href="shop-default.html">Freezer Burn</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Fridge Cooler</a>
                                        </li>
                                        <li class="current-menu-item "><a href="shop-default.html">Wine Cabinets</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current-menu-item "><a href="shop-default.html">Babies &amp; Moms</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-default.html">Books &amp; Office</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-default.html">Cars &amp; Motocycles</a>
                                </li>
                            </ul>

                        </aside>   

                    </div>

                </div>        

            </div><!-- End menu-->

            <a class="ps-logo pl-3 pl-sm-5" href="index.html">
                <img src="img/template/logo_light.png" class="pt-3" alt="">
            </a>

        </div>

        <div class="navigation__right">

            <div class="header__actions">

                <!--=====================================
                Cart
                ======================================-->

                <div class="ps-cart--mini">

                    <a class="header__extra" href="#">
                        <i class="icon-bag2"></i><span><i>0</i></span>
                    </a>

                    <div class="ps-cart__content">

                        <div class="ps-cart__items">

                            <div class="ps-product--cart-mobile">

                                <div class="ps-product__thumbnail">
                                    <a href="#">
                                        <img src="img/products/clothing/7.jpg" alt="">
                                    </a>
                                </div>

                                <div class="ps-product__content">
                                    
                                    <a class="ps-product__remove" href="#">
                                        <i class="icon-cross"></i>
                                    </a>

                                    <a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                    <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                    <small>1 x $59.99</small>

                                </div>

                            </div>

                            <div class="ps-product--cart-mobile">

                                <div class="ps-product__thumbnail">

                                    <a href="#"><img src="img/products/clothing/5.jpg" alt=""></a>

                                </div>

                                <div class="ps-product__content">
                                    <a class="ps-product__remove" href="#">
                                        <i class="icon-cross"></i>
                                    </a>
                                    <a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                    <p><strong>Sold by:</strong> YOUNG SHOP</p>
                                    <small>1 x $59.99</small>

                                </div>

                            </div>

                        </div>

                        <div class="ps-cart__footer">

                            <h3>Sub Total:<strong>$59.99</strong></h3>

                            <figure>
                                <a class="ps-btn" href="shopping-cart.html">View Cart</a>
                                <a class="ps-btn" href="checkout.html">Checkout</a>
                            </figure>

                        </div>

                    </div>

                </div>

                <!--=====================================
                Login and Register
                ======================================-->

                <div class="ps-block--user-header">

                    <div class="ps-block__left">
                        <i class="icon-user"></i>
                    </div>
                    <div class="ps-block__right">
                        <a href="my-account.html">Login</a>
                        <a href="my-account.html">Register</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--=====================================
    Search
    ======================================-->

    <div class="ps-search--mobile">

        <form class="ps-form--search-mobile" action="index.html" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Search something...">
                <button><i class="icon-magnifier"></i></button>
            </div>
        </form>

    </div>

</header> <!-- End Header Mobile -->