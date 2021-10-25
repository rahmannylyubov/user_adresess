# user_adresess
Задача – написать собственный компонент, который выводит список адресов текущего авторизованного пользователя. Если не авторизован – пустую таблицу НЕ выводить. Место хранение данных – highload блок, имеющий столбцы: - id пользователя (число) - адрес (строка) - активность (галочка) У компонента 1 параметр – выводить все адреса или только активные. Желательно в компоненте использовать class.php и d7 api. По возможности использовать битриксовый bitrix:main.ui.grid для вывода, если не получится – обычная таблица. Предусмотреть кеш компонента, при изменении данных в highload блоке сбрасывать кеш ( по событию). Обратить внимание на качество написания кода ( комменты, докблоки, psr-12) Результат предоставить в виде ссылки на репозиторий. Если даже все не получится реализовать – присылайте что получится. 
