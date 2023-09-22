<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "rbru-metrika@yandex.ru";
    $subject = "Сообщение с контактной формы";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = "Имя: $name\r\nEmail: $email";

    if (mail($recipient, $subject, $message)) {
        echo "Письмо успешно отправлено!";
    } else {
        echo "Ошибка при отправке письма.";
    }
} else {
    echo "Недопустимый метод запроса.";
}
?>