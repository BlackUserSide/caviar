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
        <section class="main-navigation-admin">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-xs-12 col-lg-12 col-sm-12">
                        <div class="order-wrapper">
                            <h1 class="h1-orders-admin"><?php echo $pageData['ordersCount'] ?></h1>
                            <p>Orders</p>
                        </div>

                    </div>
                    <div class="col-xl-6 col-md-6 col-xs-12 col-lg-12 col-sm-12">
                        <div class="final-order-wrapper">
                            <h1 class="h1-orders-admin">
                                <?php echo $pageData['ordersCountClose'] ?></h1>
                            <p>Closed Orders</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="wait-orders">
            <div class="top-line-admin">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Order in line</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-order-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <table class="table-oreder-inline">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Name Client</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Date</th>
                                        <th>Discount sum</th>
                                        <th>Total sum</th>
                                        <th>LINK ORDER</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pageData['ordersInStat'] as $key => $val) { ?>

                                        <tr>

                                            <td><?php echo $val['orderNumber'] ?></td>
                                            <td><?php echo $val['fullName'] ?></td>
                                            <td><?php echo $val['mailUser'] ?></td>
                                            <td><?php echo $val['phone'] ?></td>
                                            <td><?php echo $val['country'] ?></td>
                                            <td><?php echo $val['date'] ?></td>
                                            <td style="color:#DF5A48"><?php echo $val['discount'] ?></td>
                                            <td><?php echo $val['total'] ?></td>
                                            <td><a href="/orderspage?id=<?php echo $val['id'] ?>">Go to order</a></td>

                                        </tr>


                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/mainadmin.js"></script>
</body>

</html>