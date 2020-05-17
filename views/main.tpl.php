
<?php include ROOT . '/views/nativeTpl/header.php' ?>
<main class="site-content">
    <div class="main-content" style="background-image: url(/image/bg1.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-xs-6">
                    <h1 class="main-h1-conten">Astrakhan<br> Black Caviar</h1>
                    <p class="main-description">Only fresh and tasty caviar</p>
                    <a href="#" class="btn-header">Contact us</a>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-xs-6 lock-low">
                    <div class="main-image" style="background-image: url(/image/dve-banki1.png)"></div>
                </div>
            </div>
        </div>
        <div class="background-image-main" style="background-image: url(/image/CAVIAR.png);"></div>
    </div>

    <section class="s-bestsellers">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Discounts</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-discounts">
            <div class="container">
                <div class="row">
                    <?php foreach ($pageData['sortDiscount'] as $key => $value) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="items-discont">
                                <div class="items-wrapper">
                                    <div class="sale-icon">
                                        <p>sale</p>
                                    </div>
                                    <div class="items-image">
                                        <img id="<?php echo $value['imageProduct'] ?>" src="/image/product/<?php echo $value['imageProduct'] ?>.png" alt="">
                                    </div>
                                    <div class="name-items">
                                        <p id="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></p>
                                    </div>
                                    <div class="grade-status">
                                        <img src="/image/class/<?php echo $value['class'] ?>.png" alt="">
                                    </div>
                                    <div class="quantity-wrapper">
                                        <img src="/image/quantity-1.png" alt="">
                                        <p id="<?php echo $value['weight'] ?>"><?php echo $value['weight'] ?></p>
                                    </div>
                                    <div class="price-items">
                                        <div class="sale-price" id="<?php echo $value['discount'] ?>">
                                            <?php
                                                $procent = $value['discount'];
                                                $fullPrice = $value['price'];
                                                $result = $fullPrice * $procent / 100;
                                                ?>
                                            <?php echo $value['price'] ?>
                                        </div>
                                        <div class="price-discont" id="<?php echo $value['price'] ?>"><?php echo $value['price'] - $result; ?></div>
                                    </div>
                                    <div class="add-cart">

                                        <a href="#" class="btn-addcart" id="<?php echo $value['id'] ?>">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>

    </section>
    <section class="s-bestsellers">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Best-sellers</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="best-sellers-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-6 col-xs-12 col-lg-6">
                        <?php foreach ($pageData['bSellersData'] as $key => $val) { ?>
                            <div class="bsellers-wrapper-full">
                                <div class="hit-icon">
                                    <p>hit</p>
                                </div>
                                <div class="image-items-bsellers">
                                    <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                </div>
                                <div class="name-items-bsellers">
                                    <p><?php echo $val['name'] ?></p>
                                </div>
                                <div class="grade-bsellers">
                                    <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                </div>
                                <div class="quantity-bsellers">
                                    <img src="/image/Vector22.png" alt="">
                                    <p class="nomy">125g</p>
                                </div>
                                <div class="price-items">
                                    <?php if ($val['discount'] != 0) : ?>

                                        <div class="sale-price">
                                            <?php
                                                    $procent = $val['discount'];
                                                    $fullPrice = $val['price'];
                                                    $result = $fullPrice * $procent / 100;
                                                    ?>
                                            <?php echo $val['price'] ?>
                                        </div>
                                        <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                    <?php else : ?>
                                        <div class="price-bsellers">
                                            <p class="price-num"><?php echo $val['price'] ?></p>
                                        </div>
                                    <?php endif ?>

                                </div>
                                <div class="add-cart-bsellers">
                                    <a href="#" class="add-cart-bsellers btn-addcart" id="<?php echo $value['id'] ?>">Buy now</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12 col-xs-12 col-lg-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                    <?php foreach ($pageData['bSellersData2'] as $key => $val) { ?>
                                        <div class="items-wrapper-bsellers-long">
                                            <div class="hit-icon">
                                                <p>hit</p>
                                            </div>
                                            <div class="image-wrapper-bsselers-long">
                                                <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                            </div>
                                            <div class="text-content-bsellers-long">
                                                <div class="name-wrapper-bsellers">
                                                    <p><?php echo $val['name'] ?></p>
                                                </div>
                                                <div class="class-items-bsselers-long">
                                                    <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                                </div>
                                                <div class="quality-bsellers-long">
                                                    <img src="/image/weight4.png" alt="">
                                                    <p><?php echo $val['weight'] ?>g</p>
                                                </div>
                                                <div class="price-wrapper-bsselers-long">
                                                    <div class="price-items">
                                                        <?php if ($val['discount'] != 0) : ?>

                                                            <div class="sale-price">
                                                                <?php
                                                                        $procent = $val['discount'];
                                                                        $fullPrice = $val['price'];
                                                                        $result = $fullPrice * $procent / 100;
                                                                        ?>
                                                                <?php echo $val['price'] ?>
                                                            </div>
                                                            <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                                        <?php else : ?>
                                                            <div class="price-bsellers">
                                                                <p class="price-num"><?php echo $val['price'] ?></p>
                                                            </div>
                                                        <?php endif ?>

                                                    </div>
                                                    <div class="add-cart-wrapper">
                                                        <a href="#" class="add-card-bsselers-long btn-addcart" id="<?php echo $value['id'] ?>">Buy now</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>
                                </div>
                                <?php foreach ($pageData['bSellersData3'] as $key => $val) { ?>
                                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 col-xl-6">

                                        <div class="items-bsellers-wrapper-xs">
                                            <div class="hit-icon">
                                                <p>hit</p>
                                            </div>
                                            <div class="image-wrapper-bsselers-xs">
                                                <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                            </div>
                                            <div class="name-wrapper-xs-bsselers">
                                                <p><?php echo $val['name'] ?></p>
                                            </div>
                                            <div class="class-wrapper-xs-bsselers">
                                                <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                            </div>
                                            <div class="content-wrapper-xs-bsselers">
                                                <div class="price-items">
                                                    <?php if ($val['discount'] != 0) : ?>

                                                        <div class="sale-price">
                                                            <?php
                                                                    $procent = $val['discount'];
                                                                    $fullPrice = $val['price'];
                                                                    $result = $fullPrice * $procent / 100;
                                                                    ?>
                                                            <?php echo $val['price'] ?>
                                                        </div>
                                                        <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                                    <?php else : ?>
                                                        <div class="price-bsellers">
                                                            <p class="price-num"><?php echo $val['price'] ?></p>
                                                        </div>
                                                    <?php endif ?>

                                                </div>
                                                <div class="qulity-wrapper-xs">
                                                    <img src="/image/quantity-1.png" alt="">
                                                    <p>50g</p>
                                                </div>
                                                <div class="btn-addcard-xs">
                                                    <a href="#" class="btn-addcart" id="<?php echo $value['id'] ?>">
                                                        <i class="fas fa-cart-arrow-down"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="s-classic">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Classic</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-classic-index">

            <div class="container">
                <div class="row">
                    <?php foreach ($pageData['classicDataProduct'] as $key => $val) { ?>
                        <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="item-catalog-wrapper">
                                <div class="items-discont">
                                    <div class="items-wrapper">
                                        <?php if ($val['discount'] != 0) : ?>
                                            <div class="sale-icon">
                                                <p>sale</p>
                                            </div>
                                        <?php endif ?>
                                        <div class="items-image">
                                            <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                        </div>
                                        <div class="name-items">
                                            <p><?php echo $val['name'] ?></p>
                                        </div>
                                        <div class="grade-status">
                                            <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                        </div>
                                        <div class="quantity-wrapper">
                                            <img src="/image/quantity-1.png" alt="">
                                            <p><?php echo $val['weight'] ?></p>
                                        </div>
                                        <div class="price-items">
                                            <?php if ($val['discount'] != 0) : ?>

                                                <div class="sale-price">
                                                    <?php
                                                            $procent = $val['discount'];
                                                            $fullPrice = $val['price'];
                                                            $result = $fullPrice * $procent / 100;
                                                            ?>
                                                    <?php echo $val['price'] ?>
                                                </div>
                                                <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                        <div class="add-cart">
                                            <a href="#" class="btn-addcart" id="<?php echo $val['id'] ?>">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>

    </section>
    <section class="s-premium">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Premium</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-premium-index">
            <div class="container">
                <div class="row">
                    <?php foreach ($pageData['premiumDataProduct'] as $key => $val) { ?>
                        <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="item-catalog-wrapper">
                                <div class="items-discont">
                                    <div class="items-wrapper">
                                        <?php if ($val['discount'] != 0) : ?>
                                            <div class="sale-icon">
                                                <p>sale</p>
                                            </div>
                                        <?php endif ?>
                                        <div class="items-image">
                                            <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                        </div>
                                        <div class="name-items">
                                            <p><?php echo $val['name'] ?></p>
                                        </div>
                                        <div class="grade-status">
                                            <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                        </div>
                                        <div class="quantity-wrapper">
                                            <img src="/image/quantity-1.png" alt="">
                                            <p><?php echo $val['weight'] ?></p>
                                        </div>
                                        <div class="price-items">
                                            <?php if ($val['discount'] != 0) : ?>
                                                <div class="sale-price">
                                                    <?php
                                                            $procent = $val['discount'];
                                                            $fullPrice = $val['price'];
                                                            $result = $fullPrice * $procent / 100;
                                                            ?>
                                                    <?php echo $val['price'] ?>
                                                </div>
                                                <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                        <div class="add-cart">
                                            <a href="#" class="btn-addcart" id="<?php echo $val['id'] ?>">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    <section class="s-beluga">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Beluga</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-beluga-index">
            <div class="container">
                <div class="row">
                    <?php foreach ($pageData['belugaDataProduct'] as $key => $val) { ?>
                        <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="item-catalog-wrapper">
                                <div class="items-discont">
                                    <div class="items-wrapper">
                                        <?php if ($val['discount'] != 0) : ?>
                                            <div class="sale-icon">
                                                <p>sale</p>
                                            </div>
                                        <?php endif ?>
                                        <div class="items-image">
                                            <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                        </div>
                                        <div class="name-items">
                                            <p><?php echo $val['name'] ?></p>
                                        </div>
                                        <div class="grade-status">
                                            <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                        </div>
                                        <div class="quantity-wrapper">
                                            <img src="/image/quantity-1.png" alt="">
                                            <p><?php echo $val['weight'] ?></p>
                                        </div>
                                        <div class="price-items">
                                            <?php if ($val['discount'] != 0) : ?>
                                                <div class="sale-price">
                                                    <?php
                                                            $procent = $val['discount'];
                                                            $fullPrice = $val['price'];
                                                            $result = $fullPrice * $procent / 100;
                                                            ?>
                                                    <?php echo $val['price'] ?>
                                                </div>
                                                <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                        <div class="add-cart">
                                            <a href="#" class="btn-addcart" id="<?php echo $val['id'] ?>">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    <section class="s-wild-ossetra">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Wild-Ossetra</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wild-ossetra-index">
            <div class="container">
                <div class="row">
                    <?php foreach ($pageData['wildDataProduct'] as $key => $val) { ?>
                        <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="item-catalog-wrapper">
                                <div class="items-discont">
                                    <div class="items-wrapper">
                                        <?php if ($val['discount'] != 0) : ?>
                                            <div class="sale-icon">
                                                <p>sale</p>
                                            </div>
                                        <?php endif ?>
                                        <div class="items-image">
                                            <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                        </div>
                                        <div class="name-items">
                                            <p><?php echo $val['name'] ?></p>
                                        </div>
                                        <div class="grade-status">
                                            <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                        </div>
                                        <div class="quantity-wrapper">
                                            <img src="/image/quantity-1.png" alt="">
                                            <p><?php echo $val['weight'] ?></p>
                                        </div>
                                        <div class="price-items">
                                            <?php if ($val['discount'] != 0) : ?>
                                                <div class="sale-price">
                                                    <?php
                                                            $procent = $val['discount'];
                                                            $fullPrice = $val['price'];
                                                            $result = $fullPrice * $procent / 100;
                                                            ?>
                                                    <?php echo $val['price'] ?>
                                                </div>
                                                <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                        <div class="add-cart">
                                            <a href="#" class="btn-addcart" id="<?php echo $val['id'] ?>">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    <section class="s-pressed">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline">Pressed</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-pressed-index">
            <div class="container">
                <div class="row">
                    <?php foreach ($pageData['pressedDataProduct'] as $key => $val) { ?>
                        <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="item-catalog-wrapper">
                                <div class="items-discont">
                                    <div class="items-wrapper">
                                        <?php if ($val['discount'] != 0) : ?>
                                            <div class="sale-icon">
                                                <p>sale</p>
                                            </div>
                                        <?php endif ?>
                                        <div class="items-image">
                                            <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                        </div>
                                        <div class="name-items">
                                            <p><?php echo $val['name'] ?></p>
                                        </div>
                                        <div class="grade-status">
                                            <img src="/image/class/<?php echo $val['class'] ?>.png" alt="">
                                        </div>
                                        <div class="quantity-wrapper">
                                            <img src="/image/quantity-1.png" alt="">
                                            <p><?php echo $val['weight'] ?></p>
                                        </div>
                                        <div class="price-items">
                                            <?php if ($val['discount'] != 0) : ?>
                                                <div class="sale-price">
                                                    <?php
                                                            $procent = $val['discount'];
                                                            $fullPrice = $val['price'];
                                                            $result = $fullPrice * $procent / 100;
                                                            ?>
                                                    <?php echo $val['price'] ?>
                                                </div>
                                                <div class="price-discont"><?php echo $val['price'] - $result; ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                        <div class="add-cart">
                                            <a href="#" class="btn-addcart" id="<?php echo $val['id'] ?>">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    <section class="rewies-content" style="background-image: url(/image/bg/bg2.png);">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h1 class="h1-topline" style="color: #fff;">Reviews</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container tac">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <div class="content-rewiews">
                        <?php foreach ($pageData['rewiewData'] as $key => $val) { ?>
                            <div class="rewiew-item">
                                <p class="rewiew-content"><?php echo $val['rewiew'] ?></p>
                                <h3 class="h3-rewiew"><?php echo $val['nameUser'] ?></h3>
                                <p class="post-user"><?php echo $val['position'] ?></p>

                            </div>
                        <?php } ?>
                    </div>
                    <div class="btn-add-reviews">
                        <a href="#" class="call-review">WRITE A REVIEW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hidden-form-add-rewiew">
        <form class="form-rewiew">
            <input type="text" name="name" placeholder="Enter your name" required><br>
            <input type="text" name="profession" placeholder="Enter your profession" required><br>
            <textarea name="rewiew" cols="30" rows="10" placeholder="Enter your rewiew" required></textarea><br>
            <button>Submit</button>
        </form>
        <div class="succes-masseges" style="display: none; font-size: 22px">
            <p class="mes-success">Thanks you</p>
        </div>
    </div>
</main>

<?php include ROOT . '/views/nativeTpl/footer.php' ?>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/slick/slick/slick.min.js"></script>
<script src ="/js/index.js"></script>
<script src="/js/main.js"></script>

</body>