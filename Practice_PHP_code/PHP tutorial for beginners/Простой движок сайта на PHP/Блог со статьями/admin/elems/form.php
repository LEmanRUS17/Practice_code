<form method="POST">
    Заголовок статьи:<br>
    <input    name="heading" value="<?= $heading ?>" placeholder="Заголовок"><br><br>
                        
    Автор:<br>
    <input    name="author"   value="<?= $author ?>" placeholder="ФИО автора"><br><br>
                        
    Текст статьи:<br>
    <textarea name="text"  placeholder="текст"><?= $text ?></textarea><br><br>
    <input    type="submit">
</form>