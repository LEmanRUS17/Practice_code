<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <p>Какие из языков вы знаете</p>
            <select multiple="multiple" name="programLan[]">
                <option value="html">html</option>
                <option value="css">css</option>
                <option value="php">php</option>
                <option value="javascript">javascript</option>
            </select>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $lan = $_REQUEST['programLan'];

    if($lan) {
        echo 'Вы знаете: ';
        foreach($lan as $elem) {
            echo $elem.' ';
        }
    }

?>