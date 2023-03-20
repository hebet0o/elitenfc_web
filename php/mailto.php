<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request');
}

if (!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['message'])) {
    echo "Minden mező kitöltése kötelező!";
    exit;
}

$to = "gaboriszak46@gmail.com";

$subject = "Elite NFC - Kapcsolatfelvétel";

$name = $_POST['name'];
$email = $_POST['phone'];
$phone = $_POST['email'];
$body = $_POST['message'];

$headers = "From: {$email}" . PHP_EOL;
$body = "Name: {$name}" . PHP_EOL .
    "Phone: {$phone}" . PHP_EOL .
    "Message: {$body}";

if (mail($to, $subject, $body, $headers)) {
    echo "Ajánlatkérése beérkezett hozzánk! Igykeszünk minnél előbb válaszolni!";
} else {
    echo "Valami hiba történt az elküldés során!";
}
