<?php
// 📌 Данные Telegram-бота
$botToken = "7776157593:AAFaX3wQXT5gdSN2PgyklNe4NcLcArUuG8s";
$chatId = "6962439559";

// 📌 Получение данных из формы
$data = json_decode(file_get_contents("php://input"), true);
$nickname = $data["nickname"];
$name = $data["name"];
$age = $data["age"];
$tgTag = $data["tgTag"];

// 📌 Формирование сообщения
$message = "📩 *Новая заявка на Chald Studio Create*\n\n"
    . "👤 *Ник:* $nickname\n"
    . "📛 *Имя:* $name\n"
    . "🎂 *Возраст:* $age\n"
    . "📱 *Telegram:* @$tgTag";

// 📌 Отправка в Telegram
$url = "https://api.telegram.org/bot$botToken/sendMessage";
$options = [
    "chat_id" => $chatId,
    "text" => $message,
    "parse_mode" => "Markdown"
];
file_get_contents($url . "?" . http_build_query($options));

// 📌 Ответ на запрос
http_response_code(200);
echo json_encode(["status" => "success"]);
?>
