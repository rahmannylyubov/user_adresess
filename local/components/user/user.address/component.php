<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $USER;
CModule::IncludeModule("iblock");
use Bitrix\Main\Loader; 
Loader::includeModule("highloadblock"); 
use Bitrix\Highloadblock as HL; 
use Bitrix\Main\Entity;
$arResult['ACTIVE_RECORDS'] = $arParams["ACTIVE_RECORDS"];
$arResult['ID_USER']=$USER->GetID();
$hlbl = 2; // ID highloadblock блока
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch(); 

$entity = HL\HighloadBlockTable::compileEntity($hlblock); 
$entity_data_class = $entity->getDataClass(); 

if ($arResult['ACTIVE_RECORDS'] == 'Y')
	    $filter=array('UF_ID_USER' => $arResult['ID_USER'], 'UF_ACTIVITY'=> '1');
	else
        $filter=array('UF_ID_USER' => $arResult['ID_USER']);	 
	
$rsData = $entity_data_class::getList(array(
    'select' => array('ID','UF_ID_USER','UF_ADDRESS','UF_ACTIVITY'),
    'filter' => $filter,
    'order'  => array('ID' => 'ASC')
));
$i=0;
while($arData = $rsData->Fetch()){
    $arResult[$i]['UF_ID_USER']=$arData['UF_ID_USER'];
	$arResult[$i]['UF_ADDRESS']=$arData['UF_ADDRESS'];
	$arResult[$i]['UF_ACTIVITY']=$arData['UF_ACTIVITY'];
	$i++;
};
$arResult['COL_ROWS']=$i;
$this->IncludeComponentTemplate();