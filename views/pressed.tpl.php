<?php include ROOT . '/views/nativeTpl/header.php' ?>
<main class="catalog-main-content">
    <section class="menu-catigories-catalog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <nav class="main-nav-catalog">
                        <ul>
                            <li><a href="/classic" style="opacity: 0.2;">Classic</a></li>
                            <li><a href="/premium" style="opacity: 0.2;">Premium</a></li>
                            <li><a href="/beluga" style="opacity: 0.2;">Beluga</a></li>
                            <li><a href="/wild" style="opacity: 0.2;">Wild Ossetra</a></li>
                            <li><a href="/pressed" >Pressed</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="main-catalog-classic">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="item-catalog-wrapper">
                        <div class="items-discont">
                            <div class="items-wrapper">
                                <div class="sale-icon">
                                    <p>sale</p>
                                </div>
                                <div class="items-image">
                                    <img src="/image/items-1.png" alt="">
                                </div>
                                <div class="name-items">
                                    <p>Black caviar “Classic”</p>
                                </div>
                                <div class="grade-status">
                                    <img src="class-1.png" alt="">
                                </div>
                                <div class="quantity-wrapper">
                                    <img src="quantity-1.png" alt="">
                                    <p>100g</p>
                                </div>
                                <div class="price-items">
                                    <div class="sale-price">4800</div>
                                    <div class="price-discont">3800</div>
                                </div>
                                <div class="add-cart">
                                    <a href="#" class="btn-addcart">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include ROOT. '/views/nativeTpl/footer.php' ?>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/slick/slick/slick.min.js"></script>
    <script src="/js/main.js"></script>
</body>