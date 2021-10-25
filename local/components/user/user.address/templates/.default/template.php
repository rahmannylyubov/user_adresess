<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    
	$n=count($arResult);
	if($arResult['ID_USER']){
		echo 'Ваш ID '.$arResult['ID_USER'].'<br/>';
		
		if ($arResult['COL_ROWS']>0){?>
            <table border="1">
            <tr><td>ID пользователя</td><td>Адрес пользователя</td><td>Активность адреса</td></tr>

            <?for ($i=0;$i<$arResult['COL_ROWS'];$i++) {?>
                <tr>
                <?echo '<td>'.$arResult[$i]['UF_ID_USER'].'</td>';
                echo '<td>'.$arResult[$i]['UF_ADDRESS'].'</td>';
                if ($arResult[$i]['UF_ACTIVITY']==1)
                    echo '<td>Да</td>';
                else echo '<td>Нет</td>';?>
                </tr>
            <?}?>
            </table>
		<?} else echo "У пользователя нет адресов";
	}
	else { 
	    echo "Для получения информации необходимо авторизоваться";
	};?>
	
