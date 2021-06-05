<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                header
            </header>
            <main>
                <?php include './elems/info.php' ?>
                <?php include './layouts/' . $content . '_form.php' ?>
            </main>
            <footer>
                footer
            </footer>
        </div>
    </body>
</html>