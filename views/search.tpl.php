<?php include ROOT . '/views/nativeTpl/header.php' ?>


<section class="main-search">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <form class="main-form-search-order">
                    <input type="text" onkeyup="testStr(this);" placeholder="Enter your order number here..">
                    <button class="btn-search"><i class="fas fa-search"></i></button>
                </form>
                <div class="error-form-serch">

                </div>
            </div>
        </div>
    </div>
</section>
<section class="load-container-search">
    <div class="main-order-info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                    <div class="info-search-wrapper">
                        <h1 class="orderNumber"></h1>
                        <p class="fullName"></p>
                        <p class="mailUser"></p>
                       
                        <p class="discount"></p>
                        <p class="total"></p>
                        <p class="date"></p>
                        <p class="status"></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function testStr(input) {
        var value = input.value;
        var rep = /[-\.;":'a-zA-Zа-яА-Я]/;
        if (rep.test(value)) {
            value = value.replace(rep, '');
            input.value = value;
        }
    }
</script>
<?php include ROOT . '/views/nativeTpl/footer.php' ?>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/search.js"></script>
<script src="/js/main.js"></script>
</body>