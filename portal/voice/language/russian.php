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
//File: portal/voice/language/russian.php
//Source-Language: english

$lang = array( 
	"voice" => 'Просмотр голосового сервера',
	"voice_name" => 'Просмотр голосового сервера',
	"voice_desc" => 'Просмотр голосового сервера, например Teamspeak3, Mumble или Ventrilo',
	"voice_f_module" => 'Выберите голосовой сервер',
	"mumble" => 'Mumble',
	"voice_f_mumble_datauri" => 'URI данных',
	"voice_f_help_mumble_datauri" => 'Введите иCVP Uniform Resource Identifier предоставленный вашим хостинг-провайдером.',
	"voice_f_mumble_dataformat" => 'Формат данных',
	"voice_f_help_mumble_dataformat" => 'Выберите формат данных, указанный вашим хостинг-провайдером.',
	"voice_f_mumble_iconstyle" => 'Стиль иконки',
	"voice_f_help_mumble_iconstyle" => 'Выберите предпочитаемый стиль иконок',
	"ts3" => 'Teamspeak 3',
	"voice_f_ts3_ip" => 'Ваш IP-адрес сервера (без порта)',
	"voice_f_ts3_port" => 'Порт по умолчанию: 9987',
	"voice_f_ts3_telnetport" => ' Telnet Порт вашего сервера - По умолчанию: 10011',
	"voice_f_ts3_id" => ' ID от вашего виртуального сервера - По умолчанию: 1',
	"voice_f_help_ts3_id" => 'Введите -1, чтобы использовать порт для подключения серверов вместо ID серверов.',
	"voice_f_ts3_cache" => 'Минимальное время между TS3-запросами (в секундах)',
	"voice_f_help_ts3_cache" => 'Как долго TS3-данные должны храниться в кэше (в секундах) и повторно запрашиватся. 0 для отключения кэширования.',
	"voice_f_ts3_banner" => 'Показывать баннер, если URL доступен в TS?',
	"voice_f_ts3_join" => 'Показывать ссылку, чтобы присоединиться к серверу?',
	"voice_f_ts3_jointext" => 'Текст ссылки, чтобы присоединиться к серверу',
	"voice_f_ts3_legend" => 'Показать данные группы внизу?',
	"voice_f_ts3_cut_names" => 'Длина имени пользователей',
	"voice_f_help_ts3_cut_names" => 'Если вы хотите ограничить длину имени пользователей, то укажите длину. Если нет, укажите 0.',
	"voice_f_ts3_cut_channel" => 'Длина имени каналов',
	"voice_f_help_ts3_cut_channel" => 'Если вы хотите ограничить длину имени каналов, то укажите длину. Если нет, укажите 0.',
	"voice_f_only_populated_channel" => 'Показывать только популярные каналы?',
	"voice_f_ts3_useron" => 'Показать онлайн пользователь / возможных пользователей?',
	"voice_f_ts3_stats" => 'Показать окно статистики TSviewer?',
	"voice_f_ts3_stats_showos" => 'Показывать тип ОС TS3?',
	"voice_f_ts3_stats_version" => 'Показывать версию TS3 сервера?',
	"voice_f_ts3_stats_numchan" => 'Показывать число каналов?',
	"voice_f_ts3_stats_uptime" => 'Показывать время работы с момента последнего перезапуска?',
	"voice_f_ts3_stats_install" => 'Показывать, когда был установлен сервер?',
	"voice_f_ts3_timeout" => 'Тайм-аут (не изменять)',
	"voice_f_help_ts3_timeout" => 'Оставьте это поле пустым, если не уверены что делаете!',
	"voice_f_ts3_show_spacer" => 'Показать количество свободных мест',
	"lang_ts3_user_online" => 'Пользователи онлайн',
	"lang_ts3_stats" => 'Статистика',
	"lang_ts3_legend" => 'Легенда',
	"lang_ts3_uptime" => array(
	0 => 'Дней',
	1 => 'Часов',
	2 => 'Минимальная',
	),
	"ventrilo" => 'Ventrilo',
	"voice_f_ventrilo_server" => 'Указать адрес сервера Ventrilo',
	"voice_f_ventrilo_port" => 'Указать порт сервера Ventrilo',
	"voice_f_ventrilo_backgroundc" => 'Введите 6-значный шестнадцатеричный цвет для фона (TTTTTT = прозрачный (http://www.computerhope.com/htmcolor.htm))',
	"voice_f_ventrilo_channelc" => 'Введите 6-значный шестнадцатеричный цвет для канала',
	"voice_f_ventrilo_servercolor" => 'Введите 6-значный шестнадцатеричный цвет для сервера',
	"voice_f_ventrilo_usercolor" => 'Введите 6-значный шестнадцатеричный цвет для имени пользователя',
	
);

?>