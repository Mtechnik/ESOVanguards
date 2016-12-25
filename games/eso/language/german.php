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
$german_array = array(
	'factions' => array(
		'aldmeri' 		=> 'Aldmeri-Dominion',
		'daggerfall' 	=> 'Dolchsturz-Bündnis',
		'ebonhard'		=> 'Ebenherz-Pakt',
	),
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Drachenritter',
		2	=> 'Templer',
		3	=> 'Zauberer',
		4	=> 'Nachtklinge',
	),
	'races' => array(
		0 	=> 'Unbekannt',
		1 	=> 'Kaiserliche',	// Collectors edition only
		2 	=> 'Hochelfen',		// Aldmeri
		3 	=> 'Waldelfen',		// Aldmeri
		4 	=> 'Khajiit',		// Aldmeri
		5 	=> 'Bretonen',		// Dolchsturz
		6 	=> 'Rothwardonen',	// Dolchsturz
		7 	=> 'Orks',			// Dolchsturz
		8 	=> 'Nord',			// Ebenherz
		9 	=> 'Dunkelelfen',	// Ebenherz
		10 	=> 'Argonier',		// Ebenherz
	),
	'lang' => array(
		'eso'						=> 'The Elder Scrolls Online',
		'core_sett_fs_gamesettings'	=> 'Elder Scrolls Einstellungen',
		'uc_faction'				=> 'Fraktion',

		'uc_gender'					=> 'Geschlecht',
		'uc_male'					=> 'Männlich',
		'uc_female'					=> 'Weiblich',
		'uc_guild'					=> 'Gilde',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',
		'uc_level'					=> 'Level',
		'uc_championspoints'		=> 'Championpunkte',
	),
);

?>
