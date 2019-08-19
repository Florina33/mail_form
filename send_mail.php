<?php
// Подключение к БД
include './connectToDb.php';

$name = $_POST['getName'];
$email = $_POST['getEmail']; 
$country_val = $_POST['getCountryValue']; 
$country_txt = $_POST['getCountryText']; 
$phone = $_POST['getPhone']; 
$company = $_POST['getCompany']; 
$site = $_POST['getSite'];
$text = $_POST['getText'];

$counties_array = array(); 
$counties_array = range(1,12); // массив меняется в зависимости от условия

$to = 'mail_sales@server.infomir.eu';

if (in_array($country_val, $counties_array )) {
    $to = 'mail_cis@server.infomir.eu, mail_sales@server.infomir.eu';
}

$subject = 'the subject';

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

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: aweimar@mail.ru' . "\r\n" .
    'Content-type: text/plain; charset="utf-8"' . "\r\n" .
    'MIME-Version: 1.0\r\n' . "\r\n" .
    'Date:' . date('D, d M Y h:i:s O');

// в реальном проекте использовала бы phpmailer вместо mail
$answer = mail($to, $subject, $message, $headers);

if ($answer) {
    $rez = '1'; // Вы успешно отправии сообщение!

    // $query = "INSERT INTO emails (name_form, email_form, country_form, phone_form, company_form, site_form, text_form) 
    // VALUES ('$name', '$email', '$country_txt', '$phone', '$company', '$site', '$text')"; 
    // $result = $db_form->query($query);
}
else {
    $rez = '0';
}

$query = "INSERT INTO emails (name_form, email_form, country_form, phone_form, company_form, site_form, text_form) 
    VALUES ('$name', '$email', '$country_txt', '$phone', '$company', '$site', '$text')"; 
$result = $db_form->query($query);

echo json_encode($answer);

?>