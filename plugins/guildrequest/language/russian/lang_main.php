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
//File: plugins/guildrequest/language/russian/lang_main.php
//Source-Language: english

$lang = array( 
	"guildrequest" => 'Набор игроков',
	"guildrequest_short_desc" => 'Набор игроков',
	"guildrequest_long_desc" => 'Плагин для управления заявками на вступление в гильдию.',
	"gr_manage_form" => 'Настройка формы',
	"gr_vote" => 'Проголосовать за заявку',
	"gr_view" => 'Просмотреть заявки',
	"gr_view_closed" => 'Просмотреть закрытие заявки',
	"gr_add" => 'Написать заявку',
	"gr_internal_comment" => 'Написать приватный комментарий',
	"gr_comment" => 'Написать публичный комментарий',
	"gr_plugin_not_installed" => 'Плагин "Набор игроков" не установлен.',
	"gr_select_options" => 'Варианты (1 на линии)',
	"gr_required" => 'Обязательное поле',
	"gr_delete_selected_fields" => 'Удалить выбранные поля',
	"gr_types" => array(
	0 => 'Строковое поле',
	1 => 'Многострочное поле',
	2 => 'Ниспадающий список',
	3 => 'Заголовок группы полей',
	4 => 'Текстовое описание',
	5 => 'Флажки',
	6 => 'Радио-кнопки',
	7 => 'Редактор',
	),
	"gr_add_field" => 'Добавить поле',
	"gr_delete_field" => 'Удалить поле',
	"gr_default_grouplabel" => 'Информация',
	"gr_personal_information" => 'Личная информация',
	"gr_submit_request" => 'Подать заявку',
	"gr_email_help" => 'Пожалуйста, укажите реальный e-mail, т.к. вы будете получать на него уведомления о процессе обработки вашей заявки.',
	"gr_activationmail_subject" => 'Подтвердить заявку',
	"gr_viewlink_subject" => 'Ваша заявка',
	"gr_request_success" => 'Ваша заявка успешно сохранена. Письмо со ссылкой на эту страницу отправлено на указанный e-mail.',
	"gr_request_success_msg" => 'Ваша заявка была успешно сохранена. Вы можете просматривать заявку в любой момент, перейдя следующей ссылке:',
	"gr_internal_comments" => 'Приватные комментарии',
	"gr_newcomment_subject" => 'Новый комментарий в вашей заявке',
	"gr_status" => array(
	0 => 'новая',
	1 => 'рассматривается',
	2 => 'принята',
	3 => 'отклонена',
	),
	"gr_status_text" => 'Статус вашей заявки: <b>%s</b>',
	"gr_vote_button" => 'Голосовать',
	"gr_manage_request" => 'Управление завяками',
	"gr_status_help" => 'Податель заявки при изменении её статуса автоматически получает письмо. Если вы хотите что-либо добавить в это письмо - используйте данное текстовое поле.',
	"gr_change_status" => 'Изменить статус',
	"gr_close" => 'Закрыть заявку',
	"gr_open_request" => 'Открыть заявку заново',
	"gr_closed_subject" => 'Ваша заявка была закрыта',
	"gr_status_subject" => 'Изменение статуса заявки',
	"gr_footer" => 'найдено заявок: %1$s / %2$s на страницу',
	"gr_in_list" => 'Отображать в списке заявок',
	"gr_confirm_delete_requests" => 'Вы уверены, что хотите удалить заявку %s?',
	"gr_delete_selected_requests" => 'Удалить выбарнные заявки',
	"gr_delete_success" => 'Выбранные заявки успешно удалены.',
	"gr_notification" => '%s новые Заявки/Комментарии',
	"gr_notification_open" => '%s открытые Заявки',
	"gr_mark_all_as_read" => 'Отметить все заявки, как прочтённые',
	"gr_send_notification_mails" => 'Отправлять уведомление при появлении новой заявки',
	"gr_closed" => 'Заявка закрыта.',
	"gr_notification_subject" => 'Новая заявка',
	"gr_jgrowl_notifications" => 'Показывать всплывающие подсказки',
	"gr_viewrequest" => 'Просмотреть Заявку',
	"gr_dependency" => 'Зависимость (поле - опция)',
	"gr_customcheck_info" => 'Вы можете добавить свои собственные проверки зависимостей, если вы выберите "_Custom" и введёте выражение в поле справа. <br />Например: ((Поле 1 == "Значение 1" && Поле 2 == "Значение 2") || Поле 3 == "Значение 3")<br />. Будьте внимательны при создании зависимостей.',
	"user_sett_fs_guildrequest" => 'Набор игроков',
	"user_sett_tab_guildrequest" => '<i class="fa fa-pencil-square-o"></i> Набор игроков',
	"gr_preview" => 'Предварительный просмотр',
	"gr_preview_info" => 'Предварительный просмотр генерируется из последней сохраненной формы. Чтобы получить текущую форму, пожалуйста, сохраните измененную форму нажав на кнопку Предварительного просмотра на странице формы.',
	"user_sett_f_ntfy_guildrequest_new_application" => 'Набор игроков: новая заявка',
	"user_sett_f_ntfy_guildrequest_new_update" => 'Набор игроков: новые комментарии',
	"user_sett_f_ntfy_guildrequest_open_applications" => 'Набор игроков: открытые заявки',
	"gr_notify_new_application" => '{PRIMARY} добавил новую заявку',
	"gr_notify_new_application_grouped" => '{PRIMARY} добавил новую заявку',
	"gr_notify_new_update" => 'Заявка {ADDITIONAL} была прокомментирована',
	"gr_notify_new_update_grouped" => '{COUNT} заявка была прокомментирована',
	"gr_notify_new_update_own" => 'Ваша заявка обновлена',
	"gr_notify_new_update_own_grouped" => 'Произошло {COUNT} в вашей заявке',
	"gr_fs_general" => 'Общее',
	"gr_f_create_account" => 'Создайте EQdkp Plus профиль, если заявка была принята',
	"gr_f_help_create_account" => 'Эта опция доступна, если CMS мост не активен',
	"gr_myapplications" => 'Мои Заявки',
	"plugin_statistics_guildrequest_applications" => 'Набор игроков: Заявки',
	
);

?>