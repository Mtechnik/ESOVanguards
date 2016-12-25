<?php
/*	Project:	EQdkp-Plus
 *	Package:	EQdkp-Plus Language File
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

 
if (!defined('EQDKP_INC')) {
	die('You cannot access this file directly.');
}

//Language: Russian	
//Created by EQdkp Plus Translation Tool on  2016-06-15 09:50
//File: plugins/feedposter/language/russian/lang_main.php
//Source-Language: english

$lang = array( 
	"feedposter" => 'Лента сообщений',
	"feedposter_short_desc" => 'Лента сообщений',
	"feedposter_long_desc" => 'Лента сообщений автоматически записут из RSS или Atom-ленты.',
	"fp_manage_feeds" => 'Управление лентой',
	"fp_plugin_not_installd" => 'Плагин ленты сообщений не установлен.',
	"fp_new_feed" => 'Добавить ленту',
	"fp_confirm_delete_feed" => 'Ваши уверены, что хотите удалить следующие ленты? %s',
	"fp_url" => 'URL-ленты',
	"fp_last_updated" => 'Последняя выборка ленты',
	"fp_last_status" => 'Статус последней выборки',
	"fp_enable_suc" => 'Лента %s успешно включена',
	"fp_enable_nosuc" => 'При включении ленты %s произошла ошибка',
	"fp_disable_suc" => 'Лента %s успешно отключена',
	"fp_disable_nosuc" => 'При отключении ленты %s произошла ошибка',
	"fp_delete_suc" => 'Выбранные ленты были успешно удалены.',
	"fp_delete_nosuc" => 'При удалении выбранных лент произошла ошибка',
	"fp_repeat_inveral" => array(
	600 => 'все 10 минут',
	1200 => 'все 20 минут',
	1800 => 'все 30 минут',
	3600 => 'все 60 минут',
	7200 => 'все 2 часа',
	21600 => 'все 6 часов',
	86400 => 'все 24 часа',
	),
	"fp_article_data" => 'Статья данных',
	"fp_interval" => 'Частота обновления ленты',
	"fp_maxposts" => 'Количество импорта записей',
	"fp_maxlength" => 'Максимальная длина импорта записей',
	"fp_maxposts_help" => 'Вставьте 0 для импорта всех записей',
	"fp_maxlength_help" => 'Вставьте 0 для импорта всего текста',
	"fp_entries" => 'Записей',
	"fp_chars" => 'Персонажей',
	"fp_source" => 'Источник',
	"fp_showdays" => 'Количество дней отображения статьи',
	"fp_showdays_help" => 'Вставьте 0 чтобы всегда показывать статью',
	"fp_days" => 'Дней',
	"fp_feed_info" => 'Будут приняты только ленты с допустимым RSS-форматом или ATOM-форматом. Ленты с не действительным форматом могут нарушить отображение вашей страницы. Кроме того, EQdkp Plus API поддерживает извлечение последних статей из других установок EQdkp Plus.',
	
);

?>