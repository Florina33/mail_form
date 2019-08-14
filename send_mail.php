<?php

/* Форма обратной связи  */

// $to = 'florina33@gmail.com';
if ($_POST['getCountryValue'] >= 1 && $_POST['getCountryValue'] <= 12) {
    $to = 'mail_cis@server.infomir.eu, mail_sales@server.infomir.eu';
}
else {
    $to = 'mail_sales@server.infomir.eu';
}
$subject = 'the subject';
// $message = 'hello';
$message = "Name: " . $_POST['getName'] . "\nEmail: " . $_POST['getEmail'] . "\nCountry: " . $_POST['getCountryText'] . "\nPhone: " . $_POST['getPhone'] . "\nCompany: " . $_POST['getCompany'] . "\nSite: " . $_POST['getSite']. "\nText: " . $_POST['getText'];
// $headers = 'From: webmaster@example.com' . "\r\n" .
//     'Reply-To: webmaster@example.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: aweimar@mail.ru' . "\r\n" .
    'Content-type: text/plain; charset="utf-8"' . "\r\n" .
    'MIME-Version: 1.0\r\n' . "\r\n" .
    'Date:' . date('D, d M Y h:i:s O');


$answer = mail($to, $subject, $message, $headers);
// $answer = mail("florina33@gmail.com", "My subject", "Hello!");

if ($answer) {
    $rez = '1'; // Вы успешно отправии сообщение!
}
else {
    $rez = '0';
}
echo json_encode($message);
//  echo json_encode(1);

?>