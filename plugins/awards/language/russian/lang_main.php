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
//File: plugins/awards/language/russian/lang_main.php
//Source-Language: english

$lang = array( 
	"awards" => 'Награды',
	"awards_short_desc" => 'Получить достижения, очки репутации и чести.',
	"awards_long_desc" => 'Этот плагин позволяет получать достижения.',
	"aw_achievement" => 'Достижения',
	"aw_achievements" => 'Достижения',
	"aw_ap" => 'Очки наград',
	"aw_points" => 'Очки наград',
	"aw_dkp" => 'DKP',
	"aw_progress" => 'Прогресс',
	"aw_all_guild_achievements" => 'Все достижения гильдии',
	"aw_customtab_title" => 'Мои достижения',
	"aw_tab_user" => 'Мои достижения',
	"aw_user_unreached" => 'Не заработал это достижение',
	"aw_member_unreached" => 'не заработал',
	"aw_is_inactive" => 'Достижение не активно',
	"aw_is_special" => 'Достижение невидимо',
	"user_sett_tab_awards" => 'Плагин наград',
	"user_sett_fs_awards" => 'Основные настройки наград',
	"user_sett_f_aw_show_hook" => 'Показать быструю информацию наград',
	"user_sett_f_aw_layout" => 'Макет',
	"user_sett_f_aw_pagination" => 'Достижения на сайте',
	"user_sett_f_aw_admin_pagination" => '[ACP] Достичь задание на сайте',
	"user_sett_f_aw_layout_default" => 'По умолчанию',
	"user_sett_f_aw_layout_minimalist" => 'Кратко',
	"user_sett_f_ntfy_awards_new_award" => 'Плагин наград: Новое достижение',
	"aw_manage_achievements" => 'Управление достижениями',
	"aw_manage_assignments" => 'Управление заданиями',
	"aw_tab_assign" => '<i class="adminicon"></i>Все задания',
	"aw_tab_achieve" => '<i class="adminicon"></i>Все достижения',
	"aw_add_achievement" => 'Добавить достижение',
	"aw_edit_achievement" => 'Редактировать достижение',
	"aw_add_assignment" => 'Назначить достижение',
	"aw_edit_assignment" => 'Редактировать задание',
	"aw_special" => 'Специальное достижение',
	"aw_value" => 'AP стоимость',
	"aw_dkp_value" => 'DKP стоимость',
	"aw_auto_assign" => 'Автоматически назначать',
	"aw_icon_header" => 'Выбрать иконку',
	"aw_upload_icon" => 'Добавить иконку',
	"aw_edit_icon" => 'Редактировать иконку',
	"aw_name_help" => 'Название достижения',
	"aw_desc_help" => 'Описание достижения',
	"aw_active_help" => 'Определяет, может ли быть назначено это достижение.',
	"aw_special_help" => 'Невидимые Достижения будут показаны только, когда они выполнены.',
	"aw_ap_help" => 'Очки достижений служат своеобразной наградой',
	"aw_dkp_help" => 'Это DKP получит соответствующий игрок, который выполнил это достижение.',
	"aw_dkp_warn" => 'Последнее изменение DKP не рекомендуется, назначеные DKP не будут обновляться!',
	"aw_event_help" => 'Выберите событие для этого достижения.',
	"aw_auto_assign_help" => '"Плагин: Награды" должна быть активирована а Crontab!',
	"aw_icon_help" => 'Выберите или загрузите подходящую иконку.<br />SVG изображения имеют дополнительную опцию переключения цвета, но для этой функции необходимо оптимизировать SVG <a href="https://eqdkp-plus.eu/wiki/Plugin:_Awards">Wiki</a>.',
	"aw_sortation" => 'Сортировка',
	"aw_icon_colors" => 'Иконка цвета',
	"aw_module" => 'Модуль Cronjob',
	"aw_module_settings" => 'Настройки модуля Cronjob',
	"aw_listachiev_footcount" => '... %s Достижений найдено / %s на сайте',
	"aw_listassign_footcount" => '... %s Достижений найдено / %s на сайте',
	"aw_tt_reached_ap" => 'Достигнуто очков наград',
	"aw_tt_reached_dkp" => 'Достигнуто DKP',
	"aw_tt_my_awards" => 'Все мои достижения',
	"aw_tt_all_awards" => 'Все достижения гильдии',
	"aw_module_row_delete" => 'Удалить это условие',
	"aw_module_condition" => 'эти условия должны быть выполнены.',
	"aw_module_all" => 'Все',
	"aw_module_any" => 'Один из',
	"aw_module_choose_option" => '-- Выберите условие --',
	"action_achievement_added" => 'Достижение создано',
	"action_achievement_deleted" => 'Достижение удалено',
	"action_achievement_updated" => 'Достижение обновлено',
	"action_assignment_added" => 'Достижение задано',
	"action_assignment_deleted" => 'Задание удалено',
	"aw_plugin_not_installed" => 'Плагин Наград не установлен.',
	"aw_no_permission" => 'У вас нет прав.',
	"aw_add_success" => '%s был добавлен',
	"aw_add_nosuccess" => '%s не может быть добавлен',
	"aw_upd_success" => '%s был изменен',
	"aw_upd_nosuccess" => '%s не может быть изменен',
	"aw_assign_success" => '%s был<br />%s задан',
	"aw_assign_nosuccess" => '%s не может быть задан',
	"aw_del_assign" => 'Задание(я) удалены',
	"aw_confirm_delete_achievement" => 'Вы уверены, что хотите удалить все %s достижения? все начисленные DKP будут также удалены!',
	"aw_confirm_delete_assignment" => 'Вы уверены, что хотите удалить все %s задания? все начисленные DKP будут также удалены!',
	"aw_upd_assignment_warning" => 'Дальнейшее редактирование заданий выполняется на свой страх и риск!</h3> Во время редактирования вы можете получать уведомления об ошибках.<br /> Так что используйте эту функцию с осторожностью.',
	
);

?>