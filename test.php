<?php
// Ссылка куда будем отправлять GET запрос
$url = "https://www.cbr-xml-daily.ru/daily_json.js";
 
// Создаём запрос
$ch = curl_init();
// Настройки запроса
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Отправка и декодинг ответа
$data = json_decode(curl_exec($ch), $assoc=true);
// Закрытие запроса
curl_close($ch);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>