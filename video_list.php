<?php
// 📌 Директория с видео
$videoDir = 'video/';

// 📌 Получаем список файлов, исключая системные (.., .)
$videos = array_values(array_diff(scandir($videoDir), array('..', '.')));

// 📌 Отправляем JSON-ответ
echo json_encode($videos);
?>
