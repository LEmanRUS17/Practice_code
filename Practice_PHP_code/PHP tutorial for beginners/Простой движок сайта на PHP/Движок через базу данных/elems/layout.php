<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css?v=1">
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <?php include 'elems/header.php'; ?>
            </header>
            <main>
                <?= $content ?>
            </main>
            <footer>
                footer
            </footer>
        </div>
    </body>
</html>