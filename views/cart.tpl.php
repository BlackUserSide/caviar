<?php include ROOT . '/views/nativeTpl/header.php' ?>
<main class="cart-main-content">
    <section class="main-cart">
        <div class="top-line-cart">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="h1-cart">Shopping cart</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xl-8 col-lg-8">
                        <?php if (!empty($_SESSION['cart'])) : ?>
                            <?php foreach ($pageData['test'] as $key => $val) { ?>
                                <div class="wrapper-item-cart">
                                    <div class="image-cart-wrapper">
                                        <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                    </div>
                                    <div class="content-item-cart">
                                        <h3 class="h3-item-cart"><?php echo $val['name'] ?> <?php echo $val['weight'] ?>g</h3>

                                        <div class="change-col">
                                            <input type="number" id="<?php echo $val['id'] ?>" class="count-input" value="<?php echo $_SESSION['cart'][$val['id']] ?>">
                                        </div>
                                        <div class="price-items">
                                            <?php if ($val['discount'] != 0) : ?>

                                                <div class="sale-price">
                                                    <?php
                                                                $procent = $val['discount'];
                                                                $fullPrice = $val['price'];
                                                                $result = $fullPrice * $procent / 100;
                                                                ?>
                                                    <?php echo $_SESSION['cart'][$val['id']] * $val['price'] ?>
                                                </div>
                                                <div class="discount-sum" style="display: none"><?php echo $result ?></div>
                                                <div class="idProduct" style="display: none"><?php echo $val['id'] ?></div>
                                                <div class="price-discont price" id="price"><?php echo $_SESSION['cart'][$val['id']] * ($val['price'] - $result); ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num price" id="price"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                        <a href="#" class="delete-item" id="<?php echo $val['id'] ?>"><i class="fas fa-times"></i></a>
                                    </div>
                                </div>


                            <?php } ?>
                        <?php else : ?>
                            <div class="cart-emp" style="text-align:center">
                                <h1 class="h1-cart">Cart empty</h1>
                            </div>
                        <?php endif ?>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 col-xl-4 col-lg-4">
                        <div class="total-wrapper">

                            <p class="text-info-cart">Quantity</p>
                            <p class="col-info"></p><br>
                            <p class="text-info-cart">Total</p>
                            <p class="total-info"></p>
                        </div>
                        <div class="go-to-order">
                            <a tabindex="4" class="btn-order">Check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hidden-resurse-order">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6 col-lg-6">
                    <div class="form-order-wrapeer">
                        <div class="main-logo">
                            <h1 class="h1-logo"><span>B</span>C</h1>
                            <p>Black Caviar</p>
                        </div>
                        <div class="block-card-out">
                            <p class="top-block-inf">Express checout</p>
                            <ul>

                                <li><a href="#">
                                        <img src="/image/content/visa.png" alt="">
                                    </a></li>
                                <li class="thow-el"><a href="#">
                                        <img src="/image/content/MasterCard.png" alt="">
                                    </a></li>
                                <li><a href="#">
                                        <img src="/image/content/PayPal.png" alt="">
                                    </a></li>
                            </ul>
                        </div>
                        <form class="form-order-wrapper" action="/cart/startOrder" method="POST">
                            <input type="text" name="email" placeholder="Email" required>
                            <input type="text" name="fullNmae" placeholder="Full Name" required>
                            <input type="text" name="country" id="cauntry" placeholder="Country/Region" required>
                            <input type="text" name="postalCode" id="postalCode" placeholder="Postal code" required>
                            <input type="text" name="adress" id="adress" placeholder="Adress" required>
                            <input type="text" name="apartment" id="apartment" placeholder="Apartment, suite, ect. (optional)" required>
                            <input type="text" name="city" id="city" placeholder="City" required>
                            <input type="text" name="number" id="number" placeholder="Phone (optional)" required>
                            <input type="hidden" name="discontPrice" id="discontPrice" value="">
                            <input type="hidden" name="allPrice" id="allPrice" value="">

                            <button type="submit">Confirm order</button>
                            <a href="/cart">return to cart</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6 col-lg-6">
                    <div class="info-product-order" style="background-color: #F6F6F6">
                        <div class="producrt-top-order">
                            <?php foreach ($pageData['test'] as $key => $val) { ?>
                                <div class="product-order-wrapper">
                                    <div class="image-wrapper-order">
                                        <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                        <div class="col-wrap-order"><?php echo $_SESSION['cart'][$val['id']] ?></div>
                                    </div>
                                    <div class="text-wrapper-order">
                                        <p><?php echo $val['name'] ?></p>
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
                                                <div class="discount-sum" style="display: none"><?php echo $result ?></div>
                                                <div class="idProduct" style="display: none"><?php echo $val['id'] ?></div>
                                                <div class="price-discont " id="price"><?php echo $val['price'] - $result; ?></div>
                                            <?php else : ?>
                                                <div class="price-bsellers">
                                                    <p class="price-num " id="price"><?php echo $val['price'] ?></p>
                                                </div>
                                            <?php endif ?>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="total-order">
                            <div class="total-wrapper">

                                <p class="text-info-cart">Quantity</p>
                                <p class="col-info"></p><br>
                                <p class="text-info-cart">Total</p>
                                <p class="total-info"></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/views/nativeTpl/footer.php' ?>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/slick/slick/slick.min.js"></script>
<script src="/js/cart.js"></script>
<script src="/js/main.js"></script>
</body>