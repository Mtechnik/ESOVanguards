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
//File: plugins/shoutbox/language/russian/lang_main.php
//Source-Language: english

$lang = array( 
	"shoutbox" => 'Мини-чат',
	"sb_shoutbox" => 'Мини-чат',
	"shoutbox_name" => 'Мини-чат',
	"shoutbox_desc" => 'Чат, в котором пользователи могут обмениваться короткими сообщениями',
	"sb_short_desc" => 'Мини-чат',
	"sb_long_desc" => 'Чат, в котором пользователи могут обмениваться короткими сообщениями',
	"sb_plugin_not_installed" => 'Не установлен плагин чата',
	"sb_php_version" => 'Плагин чата требует PHP версии %1$s или выше. На этом сервере установлен PHP %2$s',
	"sb_plus_version" => 'Плагин чата требует EQDKP-PLUS версии %1$s или выше. У вас уставлена версия %2$s',
	"sb_no_view_permission" => 'У вас нет прав на просмотр сообщений.',
	"sb_manage_archive" => 'Управление архивом',
	"sb_written_by" => 'автор',
	"sb_written_at" => '@',
	"sb_delete_success" => 'Записи успешно удалены',
	"sb_settings_info" => 'Больше настроек чата доступны в <a href="'.registry::get_const('root_path').'admin/manage_portal.php'.registry::get_const('SID').'">настройках модуля портала</a>',
	"sb_use_users" => 'Использовать имена пользователей вместо имён их персонажей',
	"sb_use_users_help" => 'При изменении настройки с отображения имён пользователей вместо имён персонажей, все записи будут обновлены.<br />При изменении настройки с отображения имён персонажей вместо имён пользователей, все записи будут удалены!',
	"sb_convert_member_user_success" => 'Все имена персонажей в сообщениях успешно заменены на имена пользователей.',
	"sb_convert_user_member_success" => 'Все записи были удалены',
	"sb_config_saved" => 'Настройки успешно сохранены',
	"sb_header_general" => 'Основные настройки мини-чата',
	"sb_f_output_count_limit" => 'Максимальное количество показанных записей в мини-чате.',
	"sb_show_date" => 'Отображать дату?',
	"sb_f_show_archive" => 'Отображать архив?',
	"sb_f_max_text_length" => 'Максимальная длина текстовой записи',
	"sb_f_input_box_location" => 'Местоположение поля ввода',
	"sb_location_top" => 'Над сообщениями',
	"sb_location_bottom" => 'Под сообщениями',
	"sb_f_autoreload" => 'Период автоматической перезагрузки мини-чата в секундах (по умолчанию 0 = откл)',
	"sb_f_help_autoreload" => '0 чтобы отключить автоматическую перезагрузку',
	"sb_no_character_assigned" => 'Нет присоединённых персонажей. Нужно, чтобы к учётной записи был подключен как минимум один персонаж.',
	"sb_submit_text" => 'Отправить',
	"sb_save_wait" => 'Сохранение, пожалуйста, подождите',
	"sb_reload" => 'Обновить',
	"sb_no_entries" => 'Нет сообщений',
	"sb_archive" => 'Архив',
	"sb_shoutbox_archive" => 'Архив чата',
	"sb_missing_char_id" => 'Ошибка ID учётной записи',
	"sb_missing_text" => 'Не введён текст',
	
);

?>