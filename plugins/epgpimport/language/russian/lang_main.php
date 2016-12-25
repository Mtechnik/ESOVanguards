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
//File: plugins/epgpimport/language/russian/lang_main.php
//Source-Language: english

$lang = array( 
	"epgpimport" => 'Импорт EPGP',
	"epgpimport_import" => 'Импорт лога EPGP',
	"epgpimport_short_desc" => 'Импорт EPGP',
	"epgpimport_long_desc" => 'Импортируйте ваши логи из аддона EPGP',
	"epgpimport_error_nolog" => 'Нет EPGP лога',
	"epgpimport_error_wrongformat" => 'Ошибка импорта лога EPGP. Возможные причины: нарушена целостность лога, лог предоставлен в неверном формате, уже был импортирован более новый лог.',
	"epgpimport_layoutwarning" => 'Вы не используете EPGP-шаблон, что может привести к некорректному импорту данных. Пожалуйста, выберите EPGP-шаблон в <a href="'.registry::get_const('root_path').'admin/manage_pagelayouts.php'.registry::get_const('SID').'">Управлении шаблонами</a>.',
	"epgpimport_success" => 'Лог EPGP успешно импортирован.',
	"epgpimport_error_more_mdkp4event" => 'Ошибка импорта лога EPGP: выбранная локация принадлежит более чем одной группе локаций.',
	
);

?>