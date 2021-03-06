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

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if ( !class_exists( "deletelogs_crontask" ) ) {
	class deletelogs_crontask extends crontask {

		public function __construct(){
			$this->defaults['repeat']		= true;
			$this->defaults['repeat_type']	= 'daily';
			$this->defaults['editable']		= true;
			$this->defaults['delay']		= false;
			$this->defaults['ajax']			= true;
			$this->defaults['description']	= 'Prune Logs';
		}
		
		public $options = array(
				'days'	=> array(
						'lang'	=> 'Delete Logs older than x days',
						'type'	=> 'int',
						'size'	=> 3,
				),
		);

		public function run(){
			$crons		= $this->timekeeper->list_crons();
			$params		= $crons['deletelogs']['params'];
			
			//Per default, delete logs older half a year
			$intDays = (intval($params['days']) > 0) ? intval($params['days']) : (6*30);
			
			$ret = $this->pdh->put('logs', 'clean_log', array($intDays));
			$this->pdh->process_hook_queue();
			if($ret > 0) $this->logs->add( 'action_old_logs_deleted', array('{L_CLEAR_LAST_LOGS}' => $intDays.' {L_DAYS}', '{L_NUMBER_OF_LOGS}' => $ret), '', '', true, '', 1, CRONJOB);	
		}
	}
}
?>