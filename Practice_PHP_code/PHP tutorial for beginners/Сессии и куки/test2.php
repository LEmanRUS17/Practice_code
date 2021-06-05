<?php
    // Запишем в куки с именем test значение 'Тест!':
    // Запишем куку на час (в часе 3600 секунд!):
	setcookie('test','Тест!', time() + 3600); 

	// Запишем куку на день (в сутках 3600*24 секунд!):
	// setcookie('test','Тест!', time() + 3600*24); 

	// Запишем куку на месяц (в месяце 3600*24*30 секунд!):
	// setcookie('test','Тест!', time() + 3600*24*30); 

	// Запишем куку на год (в году 3600*24*30*365 секунд!):
    // setcookie('test','Тест!', time() + 3600*24*30*365);
    
    // выведем на экран значение куки test:
    echo $_COOKIE['test'];

    //Удалим куку, установив третий параметр в текущий момент времени:
	setcookie('test', '', time());
?>