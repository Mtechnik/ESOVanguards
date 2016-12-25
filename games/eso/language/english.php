<?php
/*	Project:	EQdkp-Plus
 *	Package:	Elder Scroll online game package
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

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'factions' => array(
		'aldmeri' 		=> 'Aldmeri-Dominion',
		'daggerfall' 	=> 'Daggerfall Covenant',
		'ebonhard'		=> 'Ebonheart Pact',
	),
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Dragon Knight',
		2	=> 'Templar',
		3	=> 'Sorcerer',
		4	=> 'Nightblade',
	),
	'races' => array(
		0 	=> 'Unknown',
		1 	=> 'Imperial',
		2 	=> 'Altmer',
		3 	=> 'Bosmer',
		4 	=> 'Khajiit',
		5 	=> 'Bretons',
		6 	=> 'Redguards',
		7 	=> 'Orcs',
		8 	=> 'Nord',
		9 	=> 'Dunmer',
		10 	=> 'Argonians',
	),
	'lang' => array(
		'eso'						=> 'The Elder Scrolls Online',
		'core_sett_fs_gamesettings'	=> 'Elder Scrolls Settings',
		'uc_faction'				=> 'Faction',

		'uc_gender'					=> 'Gender',
		'uc_male'					=> 'Male',
		'uc_female'					=> 'Female',
		'uc_guild'					=> 'Guild',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',
		'uc_level'					=> 'Level',
		'uc_championspoints'		=> 'Champions Points',
	),
);

?>
