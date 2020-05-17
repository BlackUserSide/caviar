<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.min.css">
    <title><?php echo $pageData['title'] ?> </title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/test" class="nav-link">Login</a></li>
            <li><a href="/one" class="nav-link">REgister</a></li>
        </ul>
    </nav>
    <div class="pjax-container">
        
    </div>
    <form action="" class="form">
        <input type="text" class="test-input" name="1" onkeyup="testJump(this);" style="width: 20px;" maxlength="1">
        <input type="text" class="test-input" name="1" onkeyup="testJump(this);" style="width: 20px;"maxlength="1">
        <input type="text" class="test-input" name="1" onkeyup="testJump(this);" style="width: 20px;"maxlength="1">
        <input type="text" class="test-input" name="1" onkeyup="testJump(this);" style="width: 20px;"maxlength="1">
        <input type="text" class="test-input" name="1" onkeyup="testJump(this);" style="width: 20px;"maxlength="1">
        <button>Send</button>
    </form>
    <script>
       function testJump(x){
        var ml = ~~x.getAttribute('maxlength');
        if(ml && x.value.length >= ml){
            do{
                x = x.nextSibling;
            }
            while(x && !(/text/.test(x.type)));
            if(x && /text/.test(x.type)){
                x.focus();
            }
        }
    }
    </script>

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.pjax.js"></script>
    <script src="/js/history.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>