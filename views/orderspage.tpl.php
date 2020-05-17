<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/fonts/fontawosome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <title><?php echo $pageData['title'] ?></title>
</head>

<body class="admin-home">
    <header class="admin-header">
        <div class="nav-main-admin">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-6 col-xs-6 col-xl-6">
                        <h6 class="logXInder">Log<span>X</span> <span>E</span>ngine</h6>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 col-xs-6 col-xl-6">
                        <nav class="main-nav-admin-wrapper">
                            <ul>
                                <li><a href="/mainadmin">Home</a></li>
                                <li><a href="/product">Product</a></li>
                                <li><a href="/order">Order in line(<span id="span_count_orders"></span>)</a></li>
                                <li><a href="/mainadmin/logOut">Log out</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="admin-main">
        <sction class="info-product-wrapper-admin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6">
                        <div class="info-client-admin">
                            <?php foreach ($pageData['orderInfo'] as $key => $val) { ?>
                                <p>Full Name - <?php echo $val['fullName'] ?></p>
                                <p>Mail client - <?php echo $val['mailUser'] ?></p>
                                <p>Country - <?php echo $val['country'] ?></p>
                                <p>Postal Code - <?php echo $val['postal'] ?></p>
                                <p>Address - <?php echo $val['address'] ?></p>
                                <p>Appartment- <?php echo $val['appartment'] ?></p>
                                <p>City - <?php echo $val['city'] ?></p>
                                <p>Phone - <?php echo $val['phone'] ?></p>
                                <p>Total sum - <?php echo $val['total'] ?></p>
                                <p>Status:
                                    <?php if ($val['status'] == 0) : ?>
                                        <span style="color: #4857DF">In line</span>
                                    <?php elseif ($val['status'] == 1) : ?>
                                        <span style="color: #00CF15">Сonfirmed</span>
                                    <?php elseif ($val['status'] == 2) : ?>
                                        <span>Sent</span>
                                    <?php elseif ($val['status'] == 3) : ?>
                                        <span style="color: #DF5A48">Canceled</span>
                                    <?php endif ?>

                                </p>

                            <?php } ?>
                            <a tabindex="3" id="changeStatus">Change status</a>
                            <a tabindex="4" id="contactUser">Contact user</a>
                        </div>


                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 col-lg-6">
                        <?php foreach ($pageData['productData'] as $key => $val) { ?>
                            <div class="wrapper-item-cart">
                                <div class="image-cart-wrapper">
                                    <img src="/image/product/<?php echo $val['imageProduct'] ?>.png" alt="">
                                </div>
                                <div class="content-item-cart">
                                    <h3 class="h3-item-cart"><?php echo $val['name'] ?> <?php echo $val['weight'] ?>g</h3>

                                    <div class="col-order-wrapp">

                                    </div>
                                    <div class="price-items">
                                        <?php if ($val['discount'] != 0) : ?>

                                            <div class="sale-price">
                                                <?php
                                                        $procent = $val['discount'];
                                                        $fullPrice = $val['price'];
                                                        $result = $fullPrice * $procent / 100;
                                                        ?>
                                                <?php echo $pageData['productInfo'][$val['id']]['colProduct'] * $val['price'] ?>
                                            </div>
                                            <div class="discount-sum" style="display: none"><?php echo $result ?></div>
                                            <div class="idProduct" style="display: none"><?php echo $val['id'] ?></div>
                                            <div class="price-discont price" id="price"><?php echo $pageData['productInfo'][$val['id']]['colProduct'] * ($val['price'] - $result); ?></div>
                                        <?php else : ?>
                                            <div class="price-bsellers">
                                                <p class="price-num price" id="price"><?php echo $val['price'] ?></p>
                                            </div>
                                        <?php endif ?>

                                    </div>

                                </div>
                            </div>


                        <?php } ?>
                    </div>
                </div>
            </div>
        </sction>
    </main>
    <div class="hidden-close-order">
        <div class="bg-lock"></div>
        <div class="wrapper-drop-close">
            <h3>
                Select option</h3>
            <form id="form-change-status">
                <select name="select_choise" id="changeStatuSelect">
                    <option value="2">Confirm</option>
                    <option value="3">Send</option>
                    <option value="4">Close</option>

                </select><br>
                <button class="confirm-close" type="submit">Accept</button>
                <button type="button" class="close-form-del">Close</button>
            </form>

        </div>
    </div>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/mainadmin.js"></script>
</body>

</html>