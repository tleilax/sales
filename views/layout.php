<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title><?= $GLOBALS['config']['title'] ?></title>
    <link href="assets/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h1><?= $GLOBALS['config']['title'] ?></h1>
    </header>
    <div class="canvas">
        <?= $CONTENT ?>
    </div>
    <footer>
        &copy; <a href="http://on.fb.me/tleilax">tleilax</a> / 2013
    </footer>
    <script src="assets/script.js"></script>
</body>
</html>
