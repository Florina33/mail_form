<?php

/* Форма обратной связи  */

// var_dump($_POST['data']);
// var_dump($_POST['getCountryValue']);
// $json = json_decode( $data, true );
// print_r( $json );

echo "11111";

 // сейчас у нас должны быть сериализованные данные в $tmp[0].
//  $session_data = unserialize($tmp[0]);
//  if (!is_array($session_data)) {
//      // что-то пошло не так, инициализируем пустой массив
//      $session_data = array();
//  }



$to = 'florina33@gmail.com';
// if(in_array($_POST['getCountryValue'], range($min,$max)))
// if ($_POST['getCountryValue'] >= 1 && $_POST['getCountryValue'] <= 12) {
//     $to = 'mail_cis@server.infomir.eu, mail_sales@server.infomir.eu';
// }
// else {
//     $to = 'mail_sales@server.infomir.eu';
// }
$subject = 'the subject';
// $message = 'hello';
// $message = $json;
$message =  $_POST['nameForm'];

// $message = "Name: " . $_POST['nameForm'] . "\nEmail: " . $_POST['emailForm'] . "\nCountry: " . $_POST['countryFormValue'] . "\nPhone: " . $_POST['phoneForm'] . "\nCompany: " . $_POST['companyForm'] . "\nSite: " . $_POST['siteForm']. "\nText: " . $_POST['textForm'];
// $message = "Name: " . $_POST['getName'] . "\nEmail: " . $_POST['getEmail'] . "\nCountry: " . $_POST['getCountryText'] . "\nPhone: " . $_POST['getPhone'] . "\nCompany: " . $_POST['getCompany'] . "\nSite: " . $_POST['getSite']. "\nText: " . $_POST['getText'];
// $headers = 'From: webmaster@example.com' . "\r\n" .
//     'Reply-To: webmaster@example.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: aweimar@mail.ru' . "\r\n" .
    'Content-type: text/plain; charset="utf-8"' . "\r\n" .
    'MIME-Version: 1.0\r\n' . "\r\n" .
    'Date:' . date('D, d M Y h:i:s O');


$answer = mail($to, $subject, $message);
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