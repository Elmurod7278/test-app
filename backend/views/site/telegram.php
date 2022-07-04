<?php

$token = "5270619223:AAFPoBVlzmHz9vijRDSONEu-Qtblqa7og9Q";
$data = [
    'text' => 'сколько раз можно сказать !',
    'chat_id' => '2114654453'
];

for ($i = 0; $i < 10; $i++) {
    $a = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));
}
