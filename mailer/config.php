<?php
$title="Простая система рассылок ";//Название системы
$key='';//Если хотите закрыть папку паролем, введите этот пароль сюда. Если оставить значение пустым, пароль запрашиваться не будет.
$maindir='http://mbis.su/';// Адрес папки mailpics, где храняться изображения (должна быть доступна из интернета)

$debug=0; //Режим отладки выключен.
$SMTPAuth=true; //Нужно авторизироваться перед отправкой почты
$CharSet = 'UTF-8';//Кодировка писем
//Префикс соединения. Для яндекса или гугла оставьте как есть.
 $emails=array(
      
        array(Логин, пароль, хост, порт, безопасность),

//(Логин, пароль, хост, порт, безопасность). Для Яндекса менять последние три строчки не надо.
          //array('второй логин','второй пароль',  'второй хост', второй порт, 'ssl' ),  //Разкомментируйте. Добавьте новый адрес, с которого будет идти рассылка. Адреса будут выбираться случайным порядком. Это увеличивает вероятность того, что снижает вероятность того, что вас забанят.
     // Можно добавить сколько угодно строчек с разными почтовыми аккаунтами. Если используются разные порты, добавьте внутрь массива с паролями          
    );
$FromName='';//Имя исходящего ящика
$AddReplyTo='mail@mbis.su';//Обратный адрес
$AddReplyToname=$FromName;// Название обратного адреса
$lists=array( // Удаление рассылки: удалите строчку ниже. 
//В административной папке удалите файл, соответствующий названию (из списка).
'list.txt'=>'Основная рассылка',
'd78629.txt'=>'test',
);
//Дальше ничего не менять

$n=  file_get_contents('currentemail');
if($n=''){$n=0;}
$n= $n!=(count($emails)-1)?$n++:0;
file_put_contents('currentemail', $n);
$currentemail=$emails[$n];
$Username   = $currentemail[0];
$Password   = $currentemail[1];    
$hostsmtp= $currentemail[2];    
$port= $currentemail[3]; 
$SMTPSecure = $currentemail[4];
$From=$currentemail[5];

?>
