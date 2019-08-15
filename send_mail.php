<?php
// Подключение к БД
include './connectToDb.php';

// var_dump($_POST['data']);
// $json = json_decode( $_POST[0], true );
// print_r( $json );

// echo "11111";

 // сейчас у нас должны быть сериализованные данные в $tmp[0].
//  $session_data = unserialize($tmp[0]);
//  if (!is_array($session_data)) {
//      // что-то пошло не так, инициализируем пустой массив
//      $session_data = array();
//  }

// if serialize - вытягивает поля с id 
// $name = $_POST['name_form'];
// $email = $_POST['email_form']; 
// $country_val = $_POST['country_form']; 
// $phone = $_POST['phone_form']; 
// $company = $_POST['company_form']; 
// $site = $_POST['site_form'];
// $text = $_POST['text_form'];

$name = $_POST['getName'];
$email = $_POST['getEmail']; 
$country_val = $_POST['getCountryValue']; 
$country_txt = $_POST['getCountryText']; 
$phone = $_POST['getPhone']; 
$company = $_POST['getCompany']; 
$site = $_POST['getSite'];
$text = $_POST['getText'];


$to = 'mail_sales@server.infomir.eu';

$counties_array = array(); 
$counties_array = range(1,12); // массив меняется в зависимости от условия

// if ($_POST['country_form'] >= 1 && $_POST['country_form'] <= 12) {
if (in_array($country_val, $counties_array )) {
    $to = 'mail_cis@server.infomir.eu, mail_sales@server.infomir.eu';
}
// else {
//     $to = 'mail_sales@server.infomir.eu';
// }


$subject = 'the subject';
// $json = json_decode( $_POST['data'], true );
// $message = $json;

$message = "";

if(isset($name) && $name != "")
    $message .= "Name: " . $name;

if(isset($email) && $email != "")
    $message .= "\nEmail: " . $email;

if(isset($country_txt) && $country_txt != "")
    $message .= "\nCountry: " . $country_txt;

if(isset($phone) && $phone != "")
    $message .= "\nPhone: " . $phone;

if(isset($company) && $company != "")
    $message .= "\nCompany: " . $company;

if(isset($site) && $site != "")
    $message .= "\nSite: " . $site;

if(isset($text) && $text != "")
    $message .= "\nText: " . $text;

// $message =  "Name: " . $_POST['name_form'] . "\nEmail: " . $_POST['email_form'] . "\nCountry: " . $_POST['country_form'] . "\nPhone: " . $_POST['phone_form'] . "\nCompany: " . $_POST['company_form'] . "\nSite: " . $_POST['site_form'] . "\nText: " . $_POST['text_form'];

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: aweimar@mail.ru' . "\r\n" .
    'Content-type: text/plain; charset="utf-8"' . "\r\n" .
    'MIME-Version: 1.0\r\n' . "\r\n" .
    'Date:' . date('D, d M Y h:i:s O');

// в реальном проекте ты бы использовала phpmailer вместо mail
$answer = mail($to, $subject, $message, $headers);


if ($answer) {
    $rez = '1'; // Вы успешно отправии сообщение!

}
else {
    $rez = '0';
}

$query = "INSERT INTO emails (name_form, email_form, country_form, phone_form, company_form, site_form, text_form) 
    VALUES ('$name', '$email', '$country_txt', '$phone', '$company', '$site', '$text')"; 
$result = $db_form->query($query);

echo json_encode($answer);

?>