<?php

$result=mail("1485045@mail.ru","Письмо с сайта","Пользователь заполнил форму в которой указал следующую информацию: \nИмя - $_POST[name_form]; \nEmail - $_POST[email]; \nТелефон: $_POST[number]");

if ($result) {
echo "<p>Ваша форма успешно передана на обработку</p>"	;
	}
else {
	
echo "<p>Ваша форма НЕ передана на обработку</p>"	;	
};
?>