<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $car = isset($_POST['car']) ? 'Да' : 'Нет';
    $attendance = htmlspecialchars($_POST['attendance']) == 'yes' ? 'Приду' : 'Не приду';

    $to = 'weddingdatame@mail.ru';
    $subject = 'Новая регистрация на свадьбу';
    $message = "Имя: $firstName\nФамилия: $lastName\nНа своей машине: $car\nПрисутствие: $attendance";
    $headers = 'From: noreply@yourdomain.com' . "\r\n" .
               'Reply-To: noreply@yourdomain.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Письмо успешно отправлено!';
    } else {
        echo 'Ошибка при отправке письма.';
    }
} else {
    echo 'Некорректный запрос.';
}
?>
