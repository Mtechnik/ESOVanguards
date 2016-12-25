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
//File: language/russian/lang_mmode.php
//Source-Language: english

$lang = array( 
	"click2show" => '(нажмите, чтобы показать)',
	"maintenance_mode" => 'Режим технического обслуживания',
	"task_manager" => 'Диспетчер задач',
	"admin_acp" => 'Панель управления',
	"activate_info" => '<h1>Включить режим технического обслуживания</h1><br />При помощи этой утилиты вы можете легко обновлять установленную EQdkp или импортировать данные из старой системы.<br />Если включен режим технического обслуживания, система не позволит пользователям авторизоваться, чтобы предотвратить ошибки и потери данных.<br /><br />Укажите причину техобслуживания для пользователей (не обязательно):<br />',
	"activate_mmode" => 'Включить режим технического обслуживания',
	"deactivate_mmode" => 'Закрыть режим обслуживания',
	"leave_mmode" => 'Отмена',
	"home" => 'Главная',
	"no_leave" => 'Невозможно отключить режим обслуживания до тех пор, пока требуемые задачи не будут выполнены.',
	"no_leave_accept" => 'Назад к обзору задач',
	"maintenance_message" => '<b>Система EQdkp Plus в настоящее время работает в режиме обслуживания.</b>Вход доступен только для администраторов.',
	"reason" => '<br /><b>Причина:</b> ',
	"admin_login" => 'Вход администратора',
	"login" => 'Войти',
	"username" => 'Пользователь',
	"password" => 'Пароль',
	"remember_password" => 'Запомнить пароль?',
	"invalid_login_warning" => 'Ошибка! Пожалуйста, проверьте правильность введённых данных. Войти в систему могут только администраторы!',
	"is_necessary" => 'Обязательно?',
	"is_applicable" => 'Подходит?',
	"name" => 'Название',
	"version" => 'Версия',
	"author" => 'Автор',
	"link" => 'Задача процессов',
	"description" => 'Описание',
	"type" => 'Тип задачи',
	"yes" => 'Да',
	"no" => 'Нет',
	"click_me" => 'Задача процессов',
	"mmode_info" => 'Ваша система в данный момент находится в режиме обслуживания и отказывает в доступе обычным пользователям, пока вы не отключите режим обслуживания.',
	"necessary_tasks" => 'Необходимые задачи',
	"applicable_tasks" => 'Не нужные / уже обработанные задачи',
	"not_applicable_tasks" => 'Не применимые задачи',
	"no_nec_tasks" => 'Не нужные задачи',
	"nec_tasks" => 'Необходимо выполнить следующие задачи. Пожалуйста, обработайте их, чтобы привести вашу систему в актуальное состояние.',
	"nec_tasks_available" => 'Пожалуйста, выполните необходимые задачи чтобы довести систему до актуального состояния.',
	"applicable_warning" => 'Недопустимая задача! Выполнение данной задачи может привести к потере данных! Запускайте данную задачу, только если вы абсолютно уверены!',
	"executed_tasks" => 'Следующие действия были выполнены в рамках задания "%s"',
	"stepend_info" => 'Задача была выполнена. EQdkp Plus еще находится в режиме технического обслуживания, поэтому вы можете все протестировать. Только после закрытия режима техобслуживания, пользователи снова смогут авторизоватся.',
	"mmode_pfh_error" => 'Произошли некоторые ошибки. Вы должны исправить эти ошибки, чтобы закрыть режим обслуживания.',
	"lib_cache_notwriteable" => 'Невозможно записать в папку "Data". Пожалуйста, установите разрешения папки CHMOD 777!',
	"pfh_safemode_error" => 'Режим PHP Safe включен. EQDKP-PLUS не будет корректно работать в безопасном режиме, параметры записи не полностью доступны.',
	"spl_autoload_register_notavailable" => 'Функция PHP "spl_autoload_register" не может быть найдена. Скорее всего, это потому, что вы используете бесплатный хостер, который не обеспечивает эту функцию.',
	"fix" => 'Исправления',
	"update" => 'Обновления',
	"import" => 'Импорт',
	"plugin_update" => 'Обновление плагина',
	"unknown_task_warning" => 'Неизвестная задача!',
	"application_warning" => 'Не удалось обработать задание из-за ошибки приложения!',
	"dependency_warning" => 'Эта задача зависит от других. Пожалуйста, обрабатывайте ее в первую очередь!',
	"start_here" => 'Начать здесь!',
	"following_updates_necessary" => 'Необходимо выполнить следующие обновления:',
	"start_update" => 'Выполните все необходимые обновления!',
	"only_this_update" => 'Обновлены только данные процессы:',
	"start_single_update" => 'Процесс обновления',
	"splash_welcome" => 'Добро пожаловать в режим  техобслуживания EQdkp Plus!',
	"splash_desc" => 'Здесь вы можете обновить EQdkp Plus и осуществить импорт предыдущих версий EQdkp Plus.',
	"splash_new" => 'Вы новичок в EQdkp Plus? Вам никогда не начислялись DKP очки и вы не добавлялись в рейды?',
	"start_tour" => 'Начать тур',
	"jump_tour" => 'Пропустить тур',
	"guild_import" => 'Импортировать гильдию из другой базы данных',
	"guild_import_info" => '* если поддерживается вашей игрой',
	"backup" => 'Резервная копия базы данных',
	"backup_note" => 'Резервная копия базы данных была создана в  %s.',
	
);

?>