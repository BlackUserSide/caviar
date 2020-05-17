<head>
    <meta charset="utf-8" />
    <title><?php echo $pageData['title']; ?></title>
    <meta name="vieprot" content="width=device-widtch, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width"> -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/fonts/fontawosome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="js/slick/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="/css/loader/style.css">
    <link rel="stylesheet" href="/css/hamburger/dist/hamburgers.css">
</head>

<body>
    <div class="pre-loader">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>
    <?php if (isset($_SESSION['user'])) : ?>
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
                                    <li><a href="/order">Order(<span id="span_count_orders"></span>)</a></li>
                                    <li><a href="/mainadmin/logOut">Log out</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <?php endif ?>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-xs-12 col-md-12 col-sm-12 col-lg-4">
                    <div class="site-logo">
                        <a href="/">
                            <div class="main-logo">
                                <h1 class="h1-logo"><span>B</span>C</h1>
                                <p>Black Caviar</p>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-xl-7 col-xs-12 col-md-12 col-sm-12 col-lg-8">
                    <div class="main-nav">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="/search" class="nav-link">Search Order</a></li>
                                <li><a href="/contact" class="nav-link">Contact</a></li>
                                <li><a href="/catalog" class="nav-link">Catalog</a></li>
                                <li><a href="#" class="callback-link btn-header">Contact us</a></li>
                                <li>
                                    <a href="/cart" class="btn-cart">
                                        <img src="/image/Vector 1.svg" alt="">
                                        <p class="count-cart">
                                            <?php if (!isset($_SESSION['cart'])) : ?>
                                                0
                                            <?php else : ?>
                                                <?php $count = count($_SESSION['cart']) ?>
                                                <?php echo $count ?>
                                            <?php endif ?>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="xs-nav-menu">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <div class="nav-xs-wrapper">
                            <nav class="xs-nav-menu-list">
                                <ul>
                                    <li><a href="/discount" class="nav-link">Discounts</a></li>
                                    <li><a href="/contact" class="nav-link">Contact</a></li>
                                    <li><a href="/catalog" class="nav-link">Catalog</a></li>
                                    <li><a href="#" class="btn-header ">Contact us</a></li>

                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>