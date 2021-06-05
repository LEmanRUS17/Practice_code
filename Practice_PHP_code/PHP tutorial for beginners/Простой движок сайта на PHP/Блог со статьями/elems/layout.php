<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title><?= $heading ?></title>
    </head>
    <body>
        <header>
            header
        </header>
        <div class="main-content">
            <nav>
                nav
            </nav>
            <main>
                <aside>
                    Список статей:
                    <?php include 'elems/list of articles.php'; ?>
                </aside>
                <section>
                    Статья:
                    <?php include 'elems/article.php'; ?>
                </section>
            </main>
        </div>
        <footer>
            footer
        </footer>
    </body>
</html>