<? 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
    "NAME" => "Адреса пользователя",
    "DESCRIPTION" =>"Выводим адреса пользователя",
    "PATH" => array(
        "ID" => "user_adress",
        "CHILD" => array(
            "ID" => "user_adresses",
            "NAME" => "Вывод адресов пользователя"
        )
    ),
    "ICON" => "/images/icon.gif",
);
?>