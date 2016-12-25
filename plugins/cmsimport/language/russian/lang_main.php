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
//File: plugins/cmsimport/language/russian/lang_main.php
//Source-Language: english

$lang = array( 
	"cmsimport" => 'Импорт CMS',
	"cmsimport_short_desc" => 'Импорт данных из других CMS',
	"cmsimport_long_desc" => 'Импорт данных из других CMS, например Wordpress или Joomla.',
	"ci_plugin_not_installed" => 'Плагин Импорта CMS не установлен.',
	"ci_import" => 'Импорт',
	"ci_continue" => 'Продолжить',
	"ci_db_types" => array(
	0 => 'Одна база данных',
	1 => 'Другая база данных',
	2 => 'Использовать мост подключения',
	),
	"ci_fs_general" => 'Настройки импорта',
	"ci_f_import_type" => 'Выберите импорт',
	"ci_f_url" => 'URL к вашему CMS',
	"ci_f_help_url" => 'Полный URL к вашему CMS, в том числе протокол',
	"ci_fs_connection" => 'Настройки соединения',
	"ci_f_db_type" => 'Выберите, как подключиться к CMS',
	"ci_f_db_host" => 'Хост базы данных',
	"ci_f_db_user" => 'Пользователь базы данных',
	"ci_f_db_password" => 'Пароль базы данных',
	"ci_f_db_database" => 'Название базы данных',
	"ci_f_db_prefix" => 'Префикс базы данных',
	"ci_f_help_db_prefix" => ' Префикс базы данных EQdkp Plus, например "eqdkp20_"',
	"ci_conn_error" => 'Нет соединения с CMS. Пожалуйста, проверьте настройки.',
	"ci_select_steps" => 'Выберите шаги',
	"ci_select_all_steps" => 'Выберите все шаги',
	"ci_step" => 'Шаг',
	"ci_import_error" => 'Произошла ошибка во время импорта. Попробуйте импорт снова.',
	"ci_step_user" => 'Пользователь',
	"ci_step_pages" => 'Страницы',
	"ci_step_posts" => 'Сообщения',
	"ci_step_categories" => 'Категории',
	"ci_user_import_hint" => 'Пожалуйста, обратите внимание, что импортируются только пользователи , группы пользователей не импортируются. Пользователям будут добавлены в группу по умолчанию. <br /><br /> Отметим также, что пароли не могут быть импортированы, поэтому пользователь должен запросить новый пароль, если не используется CMS-Мост.',
	"ci_imported_users" => 'Импортированные пользователи',
	"ci_imported_pages" => 'Импортированные страницы',
	"ci_imported_posts" => 'Импортированные сообщения',
	"ci_imported_categories" => 'Импортированные категории',
	"ci_end_message" => 'Импорт завершен. Проверьте разрешения импортируемых объектов.',
	"ci_default_user_pages" => 'Выберите пользователей',
	"ci_default_category_posts" => 'Выберите категорию для импортированных сообщений',
	"ci_default_category_pages" => 'Выберите категорию для импортированных страниц',
	
);

?>