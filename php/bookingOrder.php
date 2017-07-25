<?
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

    $name=mysql_real_escape_string($_POST['bookingOrderName']);
    $phone=mysql_real_escape_string($_POST['bookingOrderPhone']);
    $city=mysql_real_escape_string($_POST['bookingOrderCity']);
    $target=mysql_real_escape_string($_POST['bookingOrderTarget']);
    $countOfPass=mysql_real_escape_string($_POST['bookingOrderCount']);

    $querybooking = "insert into bookingOrder set dat=now(), phone='$phone', name ='$name', city='$city', target='$target', countOfPass='$countOfPass'";
    mysql_query($querybooking) or die(mysql_error());


    $thm = "Заказ автобуса";
    $msg = " Телефон: $phone \n\n Имя: $name \n\n Город: $city\n\n Цель: $target\n\n Кол-во: $countOfPass";
    $mail_to = "donbass-tour2017@yandex.ru";

    mail($mail_to, $thm, $msg);

}

else {
    echo "404";
}


?>
