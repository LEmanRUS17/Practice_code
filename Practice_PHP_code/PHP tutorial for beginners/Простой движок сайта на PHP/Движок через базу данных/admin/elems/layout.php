<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css?v=2">
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <a href="http://localhost/php/%D0%A3%D1%87%D0%B5%D0%B1%D0%BD%D0%B8%D0%BA%20PHP/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%B9%20%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BD%D0%B0%20PHP/%D0%94%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA%20%D1%87%D0%B5%D1%80%D0%B5%D0%B7%20%D0%B1%D0%B0%D0%B7%D1%83%20%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85/admin/add.php">add new page</a>
                <a href="http://localhost/php/%D0%A3%D1%87%D0%B5%D0%B1%D0%BD%D0%B8%D0%BA%20PHP/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%B9%20%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BD%D0%B0%20PHP/%D0%94%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA%20%D1%87%D0%B5%D1%80%D0%B5%D0%B7%20%D0%B1%D0%B0%D0%B7%D1%83%20%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85/admin/logout.php">logout</a>
            </header>
            <main>
                <?php include 'elems/info.php' ?>
                <?= $content ?>
            </main>
            <footer>
                footer
            </footer>
        </div>
    </body>
</html>