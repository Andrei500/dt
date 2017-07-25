<?

$bytehandId = 25151;
$bytehandKey = "A1E36F8237A366B1";
$bytehandFrom = "NashaPochta";


if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $host='';
    $database='';
    $user1='';
    $pass1='';

    $msconnect=mysql_connect($host, $user1, $pass1);
    mysql_select_db($database, $msconnect);

    mysql_query ("set_client='utf8'");
    mysql_query ("set character_set_results='utf8'");
    mysql_query ("set collation_connection='utf8_general_ci'");
    mysql_query ("SET NAMES utf8");

    $bookingSurName=mysql_real_escape_string($_POST['bookingSurName']);
    $bookingName=mysql_real_escape_string($_POST['bookingName']);
    $bookingPhone=mysql_real_escape_string($_POST['bookingPhone']);
    $bookingDir=mysql_real_escape_string($_POST['bookingDir']);
    $bookingDate=mysql_real_escape_string($_POST['bookingDate']);
    $bookingNum=mysql_real_escape_string($_POST['bookingNum']);

    $querybooking = "insert into booking set dat=now(), bookingSurName='$bookingSurName', bookingName='$bookingName', bookingPhone='$bookingPhone', bookingDir='$bookingDir', bookingDate='$bookingDate', bookingNum='$bookingNum'";
    mysql_query($querybooking) or die(mysql_error());


    $thm = "Бронирование";
    $msg = " Фамилия: $bookingSurName\n\n Имя: $bookingName\n\n Телефон: $bookingPhone\n\n Направление: $bookingDir\n\n Дата: $bookingDate\n\n Кол-во мест: $bookingNum";
    $mail_to = "donbass-tour2017@yandex.ru";

    $text = "Заявка принята, ожидайте звонка оператора. +380667376163 +380713180304";

    mail($mail_to, $thm, $msg);

    global $bytehandId;
    global $bytehandKey;
    global $bytehandFrom;

    $result = @file_get_contents('http://api.bytehand.com/send?id='.$bytehandId.'&key='.$bytehandKey.'&to='.urlencode($bookingPhone).'&from='.urlencode($bytehandFrom).'&text='.urlencode($text));
}

else {
    echo "404";
}


?>
