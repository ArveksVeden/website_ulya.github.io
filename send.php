<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    $to = "arveksveden@yandex.ru"; // Указываем почтовый адрес получателя
    $subject = "Новый вопрос с сайта"; // Указываем тему письма
    $message = "Имя: " . $name . "\r\n" .
               "Email: ". $email . "\r\n" .
               "Вопрос: \r\n" . $question;
    $headers  = "From: " . $email . "\r\n" .
                "Reply-To: " . $email . "\r\n" .
                "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers); // Отправляем письмо
    echo "Спасибо! Ваш вопрос отправлен.";
}
?>