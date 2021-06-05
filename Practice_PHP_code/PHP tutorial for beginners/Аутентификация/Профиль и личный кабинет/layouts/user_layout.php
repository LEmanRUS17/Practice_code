<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="user_style.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <header>
            header
        </header>
        <div class="main-content">
            <main>
                <?php include './elems/info.php' ?>
                <?php include './layouts/' . $content ?>
            </main>
        </div>
        <footer>
            footer
        </footer>        
    </body>
</html>