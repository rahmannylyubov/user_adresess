<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Адреса пользователя");
?><?$APPLICATION->IncludeComponent(
	"user:user.address", 
	".default", 
	array(
		"ACTIVE_RECORDS" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"TEMPLATE_FOR_DATE" => "Y-m-d"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>