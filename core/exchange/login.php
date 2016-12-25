<?php
/*	Project:	EQdkp-Plus
 *	Package:	EQdkp-plus
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
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

if (!defined('EQDKP_INC')){
	die('Do not access this file directly.');
}

if (!class_exists('exchange_login')){
	class exchange_login extends gen_class{
		public static $shortcuts = array('pex'=>'plus_exchange');

		public function post_login($params, $body){
			$xml = simplexml_load_string($body);
			if ($xml && $xml->password && $xml->user){
				if ($this->user->login($xml->user, $xml->password, false, true)){
					$result =  array(
						'sid'	=> $this->user->sid,
						'end'	=> time()+$this->config->get('session_length'),
					);
					return $result;
				}
			}
			return $this->pex->error('access denied');
		}
	}
}
?>