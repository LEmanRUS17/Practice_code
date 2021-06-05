<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../admin/style.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <header>
            header
        </header>
        <div class="main-content">
            <nav>
                <a href="../admin/add.php">add new page</a>
                <a href="../admin/logout.php">logout</a>
                <a href="../index.php">index</a>
                <?php include 'elems/info.php' ?>
            </nav>
            <main>
                <section>
                    <?= $content ?>
                </section>
            </main>
        </div>
        <footer>
            footer
        </footer>
    </body>
</html>