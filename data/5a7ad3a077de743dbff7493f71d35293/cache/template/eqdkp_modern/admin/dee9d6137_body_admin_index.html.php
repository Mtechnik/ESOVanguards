<?php
if ($this->security()) {
// IF S_NO_HEADER_FOOTER
if ($this->_data['.'][0]['S_NO_HEADER_FOOTER']) { 
echo '
	<div class="breadcrumb-container">
	<ul class="breamcrumb">
		<li><a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_home'])) ? $this->_data['.'][0]['L_home'] : (($this->lang('home')) ? $this->lang('home') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'home'))) . '         }')) . '"><i class="fa fa-home"></i></a></li>
		<li class="current"><a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '">' . ((isset($this->_data['.'][0]['L_menu_admin_panel'])) ? $this->_data['.'][0]['L_menu_admin_panel'] : (($this->lang('menu_admin_panel')) ? $this->lang('menu_admin_panel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_admin_panel'))) . '         }')) . '</a>
	</ul>
	<div class="clear"></div>
</div>

';// IF SHOW_PHP_WARNING
if ($this->_data['.'][0]['SHOW_PHP_WARNING']) { 
echo '
<div class="infobox infobox-large infobox-red clearfix">
	<i class="fa fa-exclamation-triangle fa-4x pull-left"></i> ' . ((isset($this->_data['.'][0]['L_php_warning'])) ? $this->_data['.'][0]['L_php_warning'] : (($this->lang('php_warning')) ? $this->lang('php_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'php_warning'))) . '         }')) . '
</div>
';// ENDIF
}
// IF SHOW_BETA_WARNING
if ($this->_data['.'][0]['SHOW_BETA_WARNING']) { 
echo '
<div class="infobox infobox-large infobox-red clearfix">
	<i class="fa fa-exclamation-triangle fa-4x pull-left"></i> ' . ((isset($this->_data['.'][0]['L_beta_warning'])) ? $this->_data['.'][0]['L_beta_warning'] : (($this->lang('beta_warning')) ? $this->lang('beta_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'beta_warning'))) . '         }')) . '
</div>
';// ENDIF
}
// IF SHOW_LIMITED_FUNCS
if ($this->_data['.'][0]['SHOW_LIMITED_FUNCS']) { 
// BEGIN lim_funcs
$_lim_funcs_count = (isset($this->_data['lim_funcs.'])) ?  sizeof($this->_data['lim_funcs.']) : 0;
if ($_lim_funcs_count) {
for ($_lim_funcs_i = 0; $_lim_funcs_i < $_lim_funcs_count; $_lim_funcs_i++)
{
echo '
<div class="infobox infobox-large infobox-red clearfix">
	<i class="fa fa-exclamation-triangle fa-4x pull-left"></i> ' . ((isset($this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'])) ? $this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'] : '') . '
</div>
';}}
// END lim_funcs
// ENDIF
}
echo '

<div id=\'admininfos_tabs\'>
  <ul>
    <li><a href=\'#fragment-1\'><span>' . ((isset($this->_data['.'][0]['L_adminc_news'])) ? $this->_data['.'][0]['L_adminc_news'] : (($this->lang('adminc_news')) ? $this->lang('adminc_news') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_news'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_adminc_system'])) ? $this->_data['.'][0]['L_adminc_system'] : (($this->lang('adminc_system')) ? $this->lang('adminc_system') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_system'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_adminc_statistics'])) ? $this->_data['.'][0]['L_adminc_statistics'] : (($this->lang('adminc_statistics')) ? $this->lang('adminc_statistics') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_statistics'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-4\'><span>' . ((isset($this->_data['.'][0]['L_adminc_support'])) ? $this->_data['.'][0]['L_adminc_support'] : (($this->lang('adminc_support')) ? $this->lang('adminc_support') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support'))) . '         }')) . '</span></a></li>
  </ul>

  <div id="fragment-1">
  	<div class="grid">
  		<div class="onerow">
  			<div class="col6">
  				<h2>' . ((isset($this->_data['.'][0]['L_rssadmin_head1'])) ? $this->_data['.'][0]['L_rssadmin_head1'] : (($this->lang('rssadmin_head1')) ? $this->lang('rssadmin_head1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head1'))) . '         }')) . '</h2>
				<div id="notifications"></div>
  			</div>
  			<div class="col6 last">
  				<h2>' . ((isset($this->_data['.'][0]['L_rssadmin_head2'])) ? $this->_data['.'][0]['L_rssadmin_head2'] : (($this->lang('rssadmin_head2')) ? $this->lang('rssadmin_head2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head2'))) . '         }')) . ' <a href="https://twitter.com/EQdkpPlus" target="new" ><i class="fa fa-twitter-square fa-lg"></i></a>
					<a href="https://facebook.com/EQdkpPlus" target="new" ><i class="fa fa-facebook-square fa-lg"></i></a>
					<a href="https://google.com/+Eqdkp-plusEu" target="new" ><i class="fa fa-google-plus-square fa-lg"></i></a>
				</h2>
				<div id="twitterfeed"></div>
  			</div>
  			
  		</div>
  	</div>

  </div>

  <div id="fragment-2">	
	<fieldset class="settings smallsettings">
		<legend>EQdkp-Plus</legend>
		
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_liveupdate_installed_version'])) ? $this->_data['.'][0]['L_liveupdate_installed_version'] : (($this->lang('liveupdate_installed_version')) ? $this->lang('liveupdate_installed_version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate_installed_version'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['EQDKP_VERSION'])) ? $this->_data['.'][0]['EQDKP_VERSION'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_backup_system_data'])) ? $this->_data['.'][0]['L_backup_system_data'] : (($this->lang('backup_system_data')) ? $this->lang('backup_system_data') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'backup_system_data'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DATA_FOLDER'])) ? $this->_data['.'][0]['DATA_FOLDER'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_db_name'])) ? $this->_data['.'][0]['L_db_name'] : (($this->lang('db_name')) ? $this->lang('db_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'db_name'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DATABASE_NAME'])) ? $this->_data['.'][0]['DATABASE_NAME'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_table_prefix'])) ? $this->_data['.'][0]['L_table_prefix'] : (($this->lang('table_prefix')) ? $this->lang('table_prefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'table_prefix'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['TABLE_PREFIX'])) ? $this->_data['.'][0]['TABLE_PREFIX'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_eqdkp_started'])) ? $this->_data['.'][0]['L_eqdkp_started'] : (($this->lang('eqdkp_started')) ? $this->lang('eqdkp_started') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'eqdkp_started'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['EQDKP_STARTED'])) ? $this->_data['.'][0]['EQDKP_STARTED'] : '') . '</dd>
		</dl>
	</fieldset>
	
	<fieldset class="settings smallsettings">
		<legend>' . ((isset($this->_data['.'][0]['L_adminc_server'])) ? $this->_data['.'][0]['L_adminc_server'] : (($this->lang('adminc_server')) ? $this->lang('adminc_server') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_server'))) . '         }')) . '</legend>
		<dl>
			<dt><label>PHP Version</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_PHP'])) ? $this->_data['.'][0]['SERVERINFO_PHP'] : '') . ' <a href="info_php.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><i class="fa fa-lg fa-question-circle"></i> ' . ((isset($this->_data['.'][0]['L_adminc_php_info'])) ? $this->_data['.'][0]['L_adminc_php_info'] : (($this->lang('adminc_php_info')) ? $this->lang('adminc_php_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_php_info'))) . '         }')) . '</a></dd>
		</dl>
		<dl>
			<dt><label>PHP Safe Mode</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_SAFEMODE'])) ? $this->_data['.'][0]['SERVERINFO_SAFEMODE'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>Register Globals</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_REGGLOBAL'])) ? $this->_data['.'][0]['SERVERINFO_REGGLOBAL'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>CURL</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_CURL'])) ? $this->_data['.'][0]['SERVERINFO_CURL'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>Fopen</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_FOPEN'])) ? $this->_data['.'][0]['SERVERINFO_FOPEN'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>MySQL Version</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_MYSQL'])) ? $this->_data['.'][0]['SERVERINFO_MYSQL'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_database_size'])) ? $this->_data['.'][0]['L_database_size'] : (($this->lang('database_size')) ? $this->lang('database_size') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'database_size'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DATABASE_SIZE'])) ? $this->_data['.'][0]['DATABASE_SIZE'] : '') . '</dd>
		</dl>
	</fieldset>
		
  </div>
  
  <div id="fragment-3">
  	<div class="grid" style="overflow:hidden;">
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_users'])) ? $this->_data['.'][0]['L_users'] : (($this->lang('users')) ? $this->lang('users') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'users'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-1"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-1\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_USER_VALUE'])) ? $this->_data['.'][0]['CIRCLE_USER_VALUE'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['TOTAL_USERS'])) ? $this->_data['.'][0]['TOTAL_USERS'] : '') . '\';},
  			  colors:              [\'#DFF0D8\', \'#468847\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  		
  		</div>
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_chars'])) ? $this->_data['.'][0]['L_chars'] : (($this->lang('chars')) ? $this->lang('chars') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'chars'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-2"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-2\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_MEMBER_VALUE'])) ? $this->_data['.'][0]['CIRCLE_MEMBER_VALUE'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_MEMBERS'])) ? $this->_data['.'][0]['NUMBER_OF_MEMBERS'] : '') . '\';},
  			  colors:              [\'#BEE3F7\', \'#45AEEA\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  		
  		</div>
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_items'])) ? $this->_data['.'][0]['L_items'] : (($this->lang('items')) ? $this->lang('items') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'items'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-3"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-3\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_ITEMS'])) ? $this->_data['.'][0]['CIRCLE_ITEMS'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_ITEMS'])) ? $this->_data['.'][0]['NUMBER_OF_ITEMS'] : '') . '\';},
  			  colors:              [\'#FCE6A4\', \'#EFB917\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  			<div>' . ((isset($this->_data['.'][0]['L_items_per_day'])) ? $this->_data['.'][0]['L_items_per_day'] : (($this->lang('items_per_day')) ? $this->lang('items_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'items_per_day'))) . '         }')) . ': ' . ((isset($this->_data['.'][0]['ITEMS_PER_DAY'])) ? $this->_data['.'][0]['ITEMS_PER_DAY'] : '') . '</div>
  		</div>
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_raids'])) ? $this->_data['.'][0]['L_raids'] : (($this->lang('raids')) ? $this->lang('raids') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raids'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-4"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-4\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_RAIDS'])) ? $this->_data['.'][0]['CIRCLE_RAIDS'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_RAIDS'])) ? $this->_data['.'][0]['NUMBER_OF_RAIDS'] : '') . '\';},
  			  colors:              [\'#F8F9B6\', \'#D2D558\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  			<div>' . ((isset($this->_data['.'][0]['L_raids_per_day'])) ? $this->_data['.'][0]['L_raids_per_day'] : (($this->lang('raids_per_day')) ? $this->lang('raids_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raids_per_day'))) . '         }')) . ': ' . ((isset($this->_data['.'][0]['RAIDS_PER_DAY'])) ? $this->_data['.'][0]['RAIDS_PER_DAY'] : '') . '</div>
  		</div>
  		<div class="col2 last">
  			<h3>' . ((isset($this->_data['.'][0]['L_adjustments'])) ? $this->_data['.'][0]['L_adjustments'] : (($this->lang('adjustments')) ? $this->lang('adjustments') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adjustments'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-5"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-5\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_ADJUSTMENTS'])) ? $this->_data['.'][0]['CIRCLE_ADJUSTMENTS'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_ADJUSTMENTS'])) ? $this->_data['.'][0]['NUMBER_OF_ADJUSTMENTS'] : '') . '\';},
  			  colors:              [\'#F4BCBF\', \'#D43A43\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  			<div>' . ((isset($this->_data['.'][0]['L_adjustments_per_day'])) ? $this->_data['.'][0]['L_adjustments_per_day'] : (($this->lang('adjustments_per_day')) ? $this->lang('adjustments_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adjustments_per_day'))) . '         }')) . ': ' . ((isset($this->_data['.'][0]['ADJUSTMENTS_PER_DAY'])) ? $this->_data['.'][0]['ADJUSTMENTS_PER_DAY'] : '') . '</div>
  		</div>
  	</div>
  	<div class="clear"></div>
  </div>


  <div id="fragment-4">
    ' . ((isset($this->_data['.'][0]['L_adminc_support_intro'])) ? $this->_data['.'][0]['L_adminc_support_intro'] : (($this->lang('adminc_support_intro')) ? $this->lang('adminc_support_intro') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_intro'))) . '         }')) . '<br/><br/>
    <table class="table fullwidth">

      <tr>
      	<td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-question fa-stack-1x fa-inverse"></i></span></td>
      	<td>' . ((isset($this->_data['.'][0]['L_adminc_support_tour'])) ? $this->_data['.'][0]['L_adminc_support_tour'] : (($this->lang('adminc_support_tour')) ? $this->lang('adminc_support_tour') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_tour'))) . '         }')) . '</td>
     	</tr>
      <tr>
        <td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-wikipedia-w fa-stack-1x fa-inverse"></i></span></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_wiki'])) ? $this->_data['.'][0]['L_adminc_support_wiki'] : (($this->lang('adminc_support_wiki')) ? $this->lang('adminc_support_wiki') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_wiki'))) . '         }')) . '</td>
      </tr>
       <tr>
        <td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-bug fa-stack-1x fa-inverse"></i></span></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_bugtracker'])) ? $this->_data['.'][0]['L_adminc_support_bugtracker'] : (($this->lang('adminc_support_bugtracker')) ? $this->lang('adminc_support_bugtracker') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_bugtracker'))) . '         }')) . '</td>
      </tr>
      <tr>
        <td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-users fa-stack-1x fa-inverse"></i></span></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_forums'])) ? $this->_data['.'][0]['L_adminc_support_forums'] : (($this->lang('adminc_support_forums')) ? $this->lang('adminc_support_forums') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_forums'))) . '         }')) . '</td>
      </tr>
      <tr>
        <td id="support"><i class="fa fa-heart fa-5x" style="color:red;vertical-align:middle;"></i>
						<span class="fa-stack fa-lg" style="margin-left: -30px; margin-bottom: -10px; margin-right: 10px;">
						<i class="fa fa-circle fa-stack-2x"></i>
  						<i class="fa fa-usd fa-stack-1x fa-inverse"></i>
						</span></td>
        <td>' . ((isset($this->_data['.'][0]['L_support_eqdkplus'])) ? $this->_data['.'][0]['L_support_eqdkplus'] : (($this->lang('support_eqdkplus')) ? $this->lang('support_eqdkplus') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'support_eqdkplus'))) . '         }')) . '</td>
      </tr>
    </table>
  </div>
</div>
<br/>
';// IF S_WHO_IS_ONLINE
if ($this->_data['.'][0]['S_WHO_IS_ONLINE']) { 
echo '
<h2>' . ((isset($this->_data['.'][0]['L_who_online'])) ? $this->_data['.'][0]['L_who_online'] : (($this->lang('who_online')) ? $this->lang('who_online') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'who_online'))) . '         }')) . '</h2>
<table  class="table fullwidth colorswitch">
    <tr>
      <th class="w20p left nowrap">' . ((isset($this->_data['.'][0]['L_username'])) ? $this->_data['.'][0]['L_username'] : (($this->lang('username')) ? $this->lang('username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'username'))) . '         }')) . '</th>
      <th class="w20p lefthiddenSmartphone">' . ((isset($this->_data['.'][0]['L_logged_in'])) ? $this->_data['.'][0]['L_logged_in'] : (($this->lang('logged_in')) ? $this->lang('logged_in') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'logged_in'))) . '         }')) . '</th>
      <th class="w20p left">' . ((isset($this->_data['.'][0]['L_last_update'])) ? $this->_data['.'][0]['L_last_update'] : (($this->lang('last_update')) ? $this->lang('last_update') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'last_update'))) . '         }')) . '</th>
      <th class="w20p left">' . ((isset($this->_data['.'][0]['L_location'])) ? $this->_data['.'][0]['L_location'] : (($this->lang('location')) ? $this->lang('location') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'location'))) . '         }')) . '</th>
      <th class="w20p hiddenSmartphone left">' . ((isset($this->_data['.'][0]['L_ip_address'])) ? $this->_data['.'][0]['L_ip_address'] : (($this->lang('ip_address')) ? $this->lang('ip_address') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ip_address'))) . '         }')) . '</th>
      <th class="hiddenSmartphone left">' . ((isset($this->_data['.'][0]['L_browser'])) ? $this->_data['.'][0]['L_browser'] : (($this->lang('browser')) ? $this->lang('browser') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'browser'))) . '         }')) . '</th>
    </tr>
    ';// BEGIN online_row
$_online_row_count = (isset($this->_data['online_row.'])) ?  sizeof($this->_data['online_row.']) : 0;
if ($_online_row_count) {
for ($_online_row_i = 0; $_online_row_i < $_online_row_count; $_online_row_i++)
{
echo '
    <tr>
      <td class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['USERNAME'])) ? $this->_data['online_row.'][$_online_row_i]['USERNAME'] : '') . '</td>
      <td class="hiddenSmartphone">' . ((isset($this->_data['online_row.'][$_online_row_i]['LOGIN'])) ? $this->_data['online_row.'][$_online_row_i]['LOGIN'] : '') . '</td>
      <td>' . ((isset($this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'])) ? $this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'] : '') . '</td>
      <td>' . ((isset($this->_data['online_row.'][$_online_row_i]['LOCATION'])) ? $this->_data['online_row.'][$_online_row_i]['LOCATION'] : '') . '</td>
      <td class="hiddenSmartphone"><span class="ip_resolver" title="' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '">' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '</span></td>
      <td class="hiddenSmartphone center">' . ((isset($this->_data['online_row.'][$_online_row_i]['BROWSER'])) ? $this->_data['online_row.'][$_online_row_i]['BROWSER'] : '') . '</td>
    </tr>
    ';}}
// END online_row
echo '
    <tr>
      <th colspan="6" class="footer">' . ((isset($this->_data['.'][0]['ONLINE_FOOTCOUNT'])) ? $this->_data['.'][0]['ONLINE_FOOTCOUNT'] : '') . '</th>
    </tr>
  </table>
';// ENDIF
}
// IF S_LOGS
if ($this->_data['.'][0]['S_LOGS']) { 
echo '
<br />
<h2>' . ((isset($this->_data['.'][0]['L_new_actions'])) ? $this->_data['.'][0]['L_new_actions'] : (($this->lang('new_actions')) ? $this->lang('new_actions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'new_actions'))) . '         }')) . '</h2>
<table  class="table fullwidth colorswitch">
  ' . ((isset($this->_data['.'][0]['LOGS_TABLE'])) ? $this->_data['.'][0]['LOGS_TABLE'] : '') . '  
</table>
';// ENDIF
}
// ELSE
} else {
echo '<!DOCTYPE html>
<html lang="' . ((isset($this->_data['.'][0]['L_XML_LANG'])) ? $this->_data['.'][0]['L_XML_LANG'] : (($this->lang('XML_LANG')) ? $this->lang('XML_LANG') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'XML_LANG'))) . '         }')) . '">
	<head>
	<!--

	This website is powered by EQDKP-PLUS Gamers CMS :: Licensed under AGPL v3.0
	Copyright © 2006-2016 by EQDKP-PLUS Dev Team :: Plugins are copyright of their authors
	Visit the project website at http://eqdkp-plus.eu for more information

	//-->
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=9" /><![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="' . ((isset($this->_data['.'][0]['META_KEYWORDS'])) ? $this->_data['.'][0]['META_KEYWORDS'] : '') . '" />
		<meta name="description" content="' . ((isset($this->_data['.'][0]['META_DESCRIPTION'])) ? $this->_data['.'][0]['META_DESCRIPTION'] : '') . '" />
		<meta name="author" content="' . ((isset($this->_data['.'][0]['GUILD_TAG'])) ? $this->_data['.'][0]['GUILD_TAG'] : '') . '" />
		';// IF S_REPONSIVE
if ($this->_data['.'][0]['S_REPONSIVE']) { 
echo '
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		';// ENDIF
}
echo '
		' . ((isset($this->_data['.'][0]['META'])) ? $this->_data['.'][0]['META'] : '') . '
		' . ((isset($this->_data['.'][0]['LINK'])) ? $this->_data['.'][0]['LINK'] : '') . '
		<title>' . ((isset($this->_data['.'][0]['PAGE_TITLE'])) ? $this->_data['.'][0]['PAGE_TITLE'] : '') . '</title>
		' . ((isset($this->_data['.'][0]['CSS_FILES'])) ? $this->_data['.'][0]['CSS_FILES'] : '') . '
		' . ((isset($this->_data['.'][0]['JS_FILES'])) ? $this->_data['.'][0]['JS_FILES'] : '') . '
		<link rel="shortcut icon" href="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/favicon.png" type="image/png" />
		<link rel="icon" href="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/favicon.png" type="image/png" />
		<link rel="apple-touch-icon" href="' . ((isset($this->_data['.'][0]['TEMPLATE_PATH'])) ? $this->_data['.'][0]['TEMPLATE_PATH'] : '') . '/images/apple-touch-icon.png" />
		' . ((isset($this->_data['.'][0]['RSS_FEEDS'])) ? $this->_data['.'][0]['RSS_FEEDS'] : '') . '
		';echo '
		<style type="text/css">
			' . ((isset($this->_data['.'][0]['CSS_CODE'])) ? $this->_data['.'][0]['CSS_CODE'] : '') . '
			';// IF T_BACKGROUND_TYPE > 0
if ($this->_data['.'][0]['T_BACKGROUND_TYPE'] > 0) { 
echo '
			body {
				background:#000000 url(\'' . ((isset($this->_data['.'][0]['TEMPLATE_BACKGROUND'])) ? $this->_data['.'][0]['TEMPLATE_BACKGROUND'] : '') . '\') no-repeat center top;
				background-attachment: ' . ((isset($this->_data['.'][0]['T_BACKGROUND_POSITION'])) ? $this->_data['.'][0]['T_BACKGROUND_POSITION'] : '') . ';
			}
			
			#wrapper header {
				background: none !important;
			}
			';// ENDIF
}
echo '
		</style>
		
		<script type="text/javascript">
			//<![CDATA[
			' . ((isset($this->_data['.'][0]['JS_CODE'])) ? $this->_data['.'][0]['JS_CODE'] : '') . '
			//]]>
		</script>
	</head>
	<body id="top" data-template="' . ((isset($this->_data['.'][0]['TEMPLATE_CLASS'])) ? $this->_data['.'][0]['TEMPLATE_CLASS'] : '') . '" class="';// IF S_REPONSIVE
if ($this->_data['.'][0]['S_REPONSIVE']) { 
echo 'responsive ';// ENDIF
}
// IF not S_NORMAL_HEADER
if (! $this->_data['.'][0]['S_NORMAL_HEADER']) { 
echo 'simple-header';// ENDIF
}
echo ' ' . ((isset($this->_data['.'][0]['BROWSER_CLASS'])) ? $this->_data['.'][0]['BROWSER_CLASS'] : '') . '';// IF T_PORTAL_WIDTH
if ($this->_data['.'][0]['T_PORTAL_WIDTH']) { 
echo ' fixed_width';// ENDIF
}
// IF S_IN_ADMIN
if ($this->_data['.'][0]['S_IN_ADMIN']) { 
echo ' admin';// ELSE
} else {
echo ' frontend';// ENDIF
}
echo '">
		';echo '
		
		' . ((isset($this->_data['.'][0]['STATIC_HTMLCODE'])) ? $this->_data['.'][0]['STATIC_HTMLCODE'] : '') . '
		';// IF S_NORMAL_HEADER
if ($this->_data['.'][0]['S_NORMAL_HEADER']) { 
echo '
		<header>
			<div id="personalArea">
				<div id="personalAreaInner">
				<div id="personalAreaUser">
					';// IF not S_LOGGED_IN
if (! $this->_data['.'][0]['S_LOGGED_IN']) { 
echo '
					<ul>
						<li><a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Login' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" class="openLoginModal" onclick="return false;"><i class="fa fa-sign-in fa-lg"></i> ' . ((isset($this->_data['.'][0]['L_login'])) ? $this->_data['.'][0]['L_login'] : (($this->lang('login')) ? $this->lang('login') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'login'))) . '         }')) . '</a></li>
						';// IF U_REGISTER != ""
if ($this->_data['.'][0]['U_REGISTER'] != "") { 
echo '<li>' . ((isset($this->_data['.'][0]['U_REGISTER'])) ? $this->_data['.'][0]['U_REGISTER'] : '') . '</li>';// ENDIF
}
echo '
						
						<li>
							<div class="langswitch-tooltip-container">
								<a href="#" class="langswitch-tooltip-trigger tooltip-trigger" data-tooltip="langswitch-tooltip">' . ((isset($this->_data['.'][0]['USER_LANGUAGE_NAME'])) ? $this->_data['.'][0]['USER_LANGUAGE_NAME'] : '') . '</a>
								<ul class="dropdown-menu langswitch-tooltip" role="menu" id="langswitch-tooltip">
									';// BEGIN languageswitcher_row
$_languageswitcher_row_count = (isset($this->_data['languageswitcher_row.'])) ?  sizeof($this->_data['languageswitcher_row.']) : 0;
if ($_languageswitcher_row_count) {
for ($_languageswitcher_row_i = 0; $_languageswitcher_row_i < $_languageswitcher_row_count; $_languageswitcher_row_i++)
{
echo '
									<li><a href="' . ((isset($this->_data['languageswitcher_row.'][$_languageswitcher_row_i]['LINK'])) ? $this->_data['languageswitcher_row.'][$_languageswitcher_row_i]['LINK'] : '') . '">' . ((isset($this->_data['languageswitcher_row.'][$_languageswitcher_row_i]['LANGNAME'])) ? $this->_data['languageswitcher_row.'][$_languageswitcher_row_i]['LANGNAME'] : '') . '</a></li>
									';}}
// END languageswitcher_row
echo '
								</ul>
							</div>
						</li>
						
						';// BEGIN personal_area_addition
$_personal_area_addition_count = (isset($this->_data['personal_area_addition.'])) ?  sizeof($this->_data['personal_area_addition.']) : 0;
if ($_personal_area_addition_count) {
for ($_personal_area_addition_i = 0; $_personal_area_addition_i < $_personal_area_addition_count; $_personal_area_addition_i++)
{
echo '
						<li>' . ((isset($this->_data['personal_area_addition.'][$_personal_area_addition_i]['TEXT'])) ? $this->_data['personal_area_addition.'][$_personal_area_addition_i]['TEXT'] : '') . '</li>
						';}}
// END personal_area_addition
echo '
					</ul>
					
					';// ELSE
} else {
echo '
						<ul>
							<li>
								<div class="user-tooltip-container">
									<a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Settings' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" class="user-tooltip-trigger tooltip-trigger" data-tooltip="user-tooltip"><span class="user-avatar user-avatar-border user-avatar-smallest"><img src="' . ((isset($this->_data['.'][0]['USER_AVATAR'])) ? $this->_data['.'][0]['USER_AVATAR'] : '') . '" alt="' . ((isset($this->_data['.'][0]['USER_NAME'])) ? $this->_data['.'][0]['USER_NAME'] : '') . '"/></span> <span class="hiddenSmartphone">' . ((isset($this->_data['.'][0]['USER_NAME'])) ? $this->_data['.'][0]['USER_NAME'] : '') . '';// IF USER_IS_AWAY
if ($this->_data['.'][0]['USER_IS_AWAY']) { 
echo ' <i class="fa fa-suitcase fa-lg"></i>';// ENDIF
}
echo '</span></a>
									<ul class="dropdown-menu user-tooltip" role="menu" id="user-tooltip">
										<li><a href="' . ((isset($this->_data['.'][0]['U_USER_PROFILE'])) ? $this->_data['.'][0]['U_USER_PROFILE'] : '') . '">
												<div class="user-tooltip-avatar">
													<img src="' . ((isset($this->_data['.'][0]['USER_AVATAR'])) ? $this->_data['.'][0]['USER_AVATAR'] : '') . '" alt="' . ((isset($this->_data['.'][0]['USER_NAME'])) ? $this->_data['.'][0]['USER_NAME'] : '') . '"/>
												</div>
												<div class="user-tooltip-name">
													<span class="bold">' . ((isset($this->_data['.'][0]['USER_NAME'])) ? $this->_data['.'][0]['USER_NAME'] : '') . '</span><br />
													' . ((isset($this->_data['.'][0]['L_my_profile'])) ? $this->_data['.'][0]['L_my_profile'] : (($this->lang('my_profile')) ? $this->lang('my_profile') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'my_profile'))) . '         }')) . '
												</div>
											</a>
										</li>
										<li class="tooltip-divider"></li>
										';// BEGIN user_tooltip_addition
$_user_tooltip_addition_count = (isset($this->_data['user_tooltip_addition.'])) ?  sizeof($this->_data['user_tooltip_addition.']) : 0;
if ($_user_tooltip_addition_count) {
for ($_user_tooltip_addition_i = 0; $_user_tooltip_addition_i < $_user_tooltip_addition_count; $_user_tooltip_addition_i++)
{
echo '
										<li class="' . ((isset($this->_data['user_tooltip_addition.'][$_user_tooltip_addition_i]['CLASS'])) ? $this->_data['user_tooltip_addition.'][$_user_tooltip_addition_i]['CLASS'] : '') . '">' . ((isset($this->_data['user_tooltip_addition.'][$_user_tooltip_addition_i]['TEXT'])) ? $this->_data['user_tooltip_addition.'][$_user_tooltip_addition_i]['TEXT'] : '') . '</li>
										';}}
// END user_tooltip_addition
// IF USER_IS_AWAY
if ($this->_data['.'][0]['USER_IS_AWAY']) { 
echo '
										<li class="user_tooltip_awaymode"><a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Settings' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '#fragment-calendar"><i class="fa fa-suitcase fa-lg"></i> ' . ((isset($this->_data['.'][0]['L_calendar_user_is_away'])) ? $this->_data['.'][0]['L_calendar_user_is_away'] : (($this->lang('calendar_user_is_away')) ? $this->lang('calendar_user_is_away') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'calendar_user_is_away'))) . '         }')) . '</a></li>
										';// ENDIF
}
echo '
										<li><a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Settings' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><i class="fa fa-cog fa-lg"></i> ' . ((isset($this->_data['.'][0]['L_settings'])) ? $this->_data['.'][0]['L_settings'] : (($this->lang('settings')) ? $this->lang('settings') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'settings'))) . '         }')) . '</a></li>
										<li><a href="' . ((isset($this->_data['.'][0]['U_LOGOUT'])) ? $this->_data['.'][0]['U_LOGOUT'] : '') . '"><i class="fa fa-sign-out fa-lg"></i> ' . ((isset($this->_data['.'][0]['L_logout'])) ? $this->_data['.'][0]['L_logout'] : (($this->lang('logout')) ? $this->lang('logout') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'logout'))) . '         }')) . '</a></li>
									</ul>
								</div>
							</li>
							';// IF S_ADMIN
if ($this->_data['.'][0]['S_ADMIN']) { 
echo '<li><a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><i class="fa fa-cog fa-lg"></i> <span class="hiddenSmartphone">' . ((isset($this->_data['.'][0]['L_menu_admin_panel'])) ? $this->_data['.'][0]['L_menu_admin_panel'] : (($this->lang('menu_admin_panel')) ? $this->lang('menu_admin_panel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_admin_panel'))) . '         }')) . '</span></a></li>';// ENDIF
}
// IF U_CHARACTERS != ""
if ($this->_data['.'][0]['U_CHARACTERS'] != "") { 
echo '<li><a href="' . ((isset($this->_data['.'][0]['U_CHARACTERS'])) ? $this->_data['.'][0]['U_CHARACTERS'] : '') . '"><i class="fa fa-group fa-lg"></i> <span class="hiddenSmartphone">' . ((isset($this->_data['.'][0]['L_menu_members'])) ? $this->_data['.'][0]['L_menu_members'] : (($this->lang('menu_members')) ? $this->lang('menu_members') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_members'))) . '         }')) . '</span></a></li>';// ENDIF
}
// IF S_MYCHARS_POINTS and U_CHARACTERS != ""
if ($this->_data['.'][0]['S_MYCHARS_POINTS'] && $this->_data['.'][0]['U_CHARACTERS'] != "") { 
echo '
								<li class="hiddenSmartphone">
									<div class="mychars-points-tooltip-container">
									<a class="mychars-points-tooltip-trigger tooltip-trigger" data-tooltip="mychars-points-tooltip"><i class="fa fa-trophy fa-lg"></i> <span class="mychars-points-target"></span></a>
									<ul class="dropdown-menu mychars-points-tooltip" role="menu" id="mychars-points-tooltip"><li>
										<table>
										';// BEGIN mychars_points
$_mychars_points_count = (isset($this->_data['mychars_points.'])) ?  sizeof($this->_data['mychars_points.']) : 0;
if ($_mychars_points_count) {
for ($_mychars_points_i = 0; $_mychars_points_i < $_mychars_points_count; $_mychars_points_i++)
{
echo '
											<tr ';// IF mychars_points.IS_MAIN
if ($this->_data['mychars_points.'][$_mychars_points_i]['IS_MAIN']) { 
echo 'class="main"';// ENDIF
}
echo ' id="mcp' . ((isset($this->_data['mychars_points.'][$_mychars_points_i]['ID'])) ? $this->_data['mychars_points.'][$_mychars_points_i]['ID'] : '') . '">
												<td class="nowrap char hand"><span class="icons">' . ((isset($this->_data['mychars_points.'][$_mychars_points_i]['CHARICON'])) ? $this->_data['mychars_points.'][$_mychars_points_i]['CHARICON'] : '') . '</span> ' . ((isset($this->_data['mychars_points.'][$_mychars_points_i]['CHARNAME'])) ? $this->_data['mychars_points.'][$_mychars_points_i]['CHARNAME'] : '') . '</td>
												<td>' . ((isset($this->_data['mychars_points.'][$_mychars_points_i]['POOLNAME'])) ? $this->_data['mychars_points.'][$_mychars_points_i]['POOLNAME'] : '') . '</td>
												<td class="nowrap current">' . ((isset($this->_data['mychars_points.'][$_mychars_points_i]['CURRENT'])) ? $this->_data['mychars_points.'][$_mychars_points_i]['CURRENT'] : '') . '</td>
												<td><a href="' . ((isset($this->_data['mychars_points.'][$_mychars_points_i]['CHARLINK'])) ? $this->_data['mychars_points.'][$_mychars_points_i]['CHARLINK'] : '') . '"><i class="fa fa-external-link fa-lg"></i></a></td>
											</tr>
										';}}
// END mychars_points
echo '
										</table></li>
									</ul>
								</div>
								</li>
							';// ENDIF
}
echo '
							
							<li>
								<div class="notification-tooltip-container">
									<a class="notification-tooltip-trigger"><i class="fa fa-bell fa-lg"></i> <span class="hiddenSmartphone">' . ((isset($this->_data['.'][0]['L_notifications'])) ? $this->_data['.'][0]['L_notifications'] : (($this->lang('notifications')) ? $this->lang('notifications') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'notifications'))) . '         }')) . '</span></a>
									<span class="notification-tooltip-trigger bubble-red notification-bubble-red hand" ';// IF NOTIFICATION_COUNT_RED == 0
if ($this->_data['.'][0]['NOTIFICATION_COUNT_RED'] == 0) { 
echo 'style="display:none;"';// ENDIF
}
echo ' >' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_RED'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_RED'] : '') . '</span>
									<span class="notification-tooltip-trigger bubble-yellow notification-bubble-yellow hand" ';// IF NOTIFICATION_COUNT_YELLOW == 0
if ($this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'] == 0) { 
echo 'style="display:none;"';// ENDIF
}
echo '>' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'] : '') . '</span>
									<span class="notification-tooltip-trigger bubble-green notification-bubble-green hand" ';// IF NOTIFICATION_COUNT_GREEN == 0
if ($this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'] == 0) { 
echo 'style="display:none;"';// ENDIF
}
echo '>' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'] : '') . '</span>
									<ul class="dropdown-menu notification-tooltip" role="menu" id="notification-tooltip-all">
										<li class="notification-action-bar"> 
											<div class="floatLeft">
												<span class="bubble-red notification-bubble-red notification-filter hand" ';// IF NOTIFICATION_COUNT_RED == 0
if ($this->_data['.'][0]['NOTIFICATION_COUNT_RED'] == 0) { 
echo 'style="display:none;"';// ENDIF
}
echo ' >' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_RED'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_RED'] : '') . '</span>
												<span class="bubble-yellow notification-bubble-yellow notification-filter hand" ';// IF NOTIFICATION_COUNT_YELLOW == 0
if ($this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'] == 0) { 
echo 'style="display:none;"';// ENDIF
}
echo '>' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'] : '') . '</span>
												<span class="bubble-green notification-bubble-green notification-filter hand" ';// IF NOTIFICATION_COUNT_GREEN == 0
if ($this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'] == 0) { 
echo 'style="display:none;"';// ENDIF
}
echo '>' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'] : '') . '</span>
											</div>
												
											<div class="floatRight">
												<span class="hand notification-mark-all-read">' . ((isset($this->_data['.'][0]['L_mark_all_as_read'])) ? $this->_data['.'][0]['L_mark_all_as_read'] : (($this->lang('mark_all_as_read')) ? $this->lang('mark_all_as_read') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'mark_all_as_read'))) . '         }')) . '</span> &bull; <span class="hand" onclick="window.location=\'' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Settings' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '#fragment-notifications\'"><i class="fa fa-cog fa-lg"></i></span>
											</div>
											
											<div class="clear"></div>
										</li>
										<li class="tooltip-divider"></li>
										<li class="notification-content">
											<ul>' . ((isset($this->_data['.'][0]['NOTIFICATIONS'])) ? $this->_data['.'][0]['NOTIFICATIONS'] : '') . '</ul>
										</li>
										<li class="tooltip-divider"></li>
										<li class="notification-action-bar-btm"> <span class="hand" onclick="window.location=\'' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Notifications' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '\'">' . ((isset($this->_data['.'][0]['L_show_all'])) ? $this->_data['.'][0]['L_show_all'] : (($this->lang('show_all')) ? $this->lang('show_all') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'show_all'))) . '         }')) . '</span></li>
									</ul>
								</div>
							</li>
							
							
							';// IF S_SEARCH
if ($this->_data['.'][0]['S_SEARCH']) { 
echo '
							<li class="hiddenDesktop"><a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Search' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><i class="fa fa-search"></i></a></li>
							';// ENDIF
}
// BEGIN personal_area_addition
$_personal_area_addition_count = (isset($this->_data['personal_area_addition.'])) ?  sizeof($this->_data['personal_area_addition.']) : 0;
if ($_personal_area_addition_count) {
for ($_personal_area_addition_i = 0; $_personal_area_addition_i < $_personal_area_addition_count; $_personal_area_addition_i++)
{
echo '
							<li>' . ((isset($this->_data['personal_area_addition.'][$_personal_area_addition_i]['TEXT'])) ? $this->_data['personal_area_addition.'][$_personal_area_addition_i]['TEXT'] : '') . '</li>
							';}}
// END personal_area_addition
echo '
						</ul>
					';// ENDIF
}
echo '
				</div>
				<div id="personalAreaTime" class="hiddenSmartphone">
					<ul>
						<li class="personalAreaTime"><i class="fa fa-clock-o fa-lg"></i> <span class="user_time">' . ((isset($this->_data['.'][0]['USER_TIME'])) ? $this->_data['.'][0]['USER_TIME'] : '') . '</span></li>
						<li>';// IF S_SEARCH
if ($this->_data['.'][0]['S_SEARCH']) { 
echo '
						<form method="post" action="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Search' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" id="search_form">
							<input name="svalue" size="20" maxlength="30" class="input search" id="loginarea_search" type="text" value="' . ((isset($this->_data['.'][0]['L_search'])) ? $this->_data['.'][0]['L_search'] : (($this->lang('search')) ? $this->lang('search') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'search'))) . '         }')) . '..."/>
							<button type="submit" class="search_button" value="" title="' . ((isset($this->_data['.'][0]['L_search_do'])) ? $this->_data['.'][0]['L_search_do'] : (($this->lang('search_do')) ? $this->lang('search_do') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'search_do'))) . '         }')) . '">
								<i class="fa fa-search fa-lg"></i>
							</button>
						</form>
					';// ENDIF
}
echo '	</li>
					</ul>
				</div>
				<div class="clear"></div>
				</div>
			</div> ';echo '<!-- close personalArea -->';echo '
		</header>
		<div id="wrapper">
			
		<header>
			<div id="header">
				';echo '
				<div id="logoContainer" class="' . ((isset($this->_data['.'][0]['T_LOGO_POSITION'])) ? $this->_data['.'][0]['T_LOGO_POSITION'] : '') . '">
					<div id="logoArea">
						';// IF HEADER_LOGO
if ($this->_data['.'][0]['HEADER_LOGO']) { 
echo '
						<a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><img src="' . ((isset($this->_data['.'][0]['HEADER_LOGO'])) ? $this->_data['.'][0]['HEADER_LOGO'] : '') . '" alt="' . ((isset($this->_data['.'][0]['MAIN_TITLE'])) ? $this->_data['.'][0]['MAIN_TITLE'] : '') . '" id="mainlogo" /></a>
						';// ENDIF
}
echo '
					</div>';echo '<!-- close logoArea -->';echo '
					
					<hgroup id="titles">
							<h1>' . ((isset($this->_data['.'][0]['MAIN_TITLE'])) ? $this->_data['.'][0]['MAIN_TITLE'] : '') . '</h1><br />
							<h2>' . ((isset($this->_data['.'][0]['SUB_TITLE'])) ? $this->_data['.'][0]['SUB_TITLE'] : '') . '</h2>
					</hgroup>';echo '<!-- close titles-->';echo '
					<div class="clear noheight">&nbsp;</div>
				</div>
				<div class="portal_block1">' . ((isset($this->_data['.'][0]['PORTAL_BLOCK1'])) ? $this->_data['.'][0]['PORTAL_BLOCK1'] : '') . '</div>
				';echo '
			</div> ';echo '<!-- close header-->';echo '
		</header>
		
		
		<section id="contentContainer">
			<a id="content"></a>
			';echo '
			<header>
				<nav id="nav">
					<div id="mainmenu">
						<div class="hiddenSmartphone">
							' . ((isset($this->_data['.'][0]['MAIN_MENU'])) ? $this->_data['.'][0]['MAIN_MENU'] : '') . '
							<div class="clear noheight">&nbsp;</div>
						</div>
						<div class="hiddenDesktop nav-mobile">
							<i class="fa fa-list hand" onclick="$(\'.nav-mobile-overlay\').toggle();"></i>
							<div class="nav-mobile-overlay">
								<div class="nav-mobile-closebtn" onclick="$(\'.nav-mobile-overlay\').toggle();">
									<i class="fa fa-lg fa-times hand"></i>
								</div>
							' . ((isset($this->_data['.'][0]['MAIN_MENU_MOBILE'])) ? $this->_data['.'][0]['MAIN_MENU_MOBILE'] : '') . '
							';// IF S_IN_ADMIN
if ($this->_data['.'][0]['S_IN_ADMIN']) { 
echo '
							<div class="admin-headline"><i class="fa fa-cog fa-lg"></i> ' . ((isset($this->_data['.'][0]['L_menu_admin_panel'])) ? $this->_data['.'][0]['L_menu_admin_panel'] : (($this->lang('menu_admin_panel')) ? $this->lang('menu_admin_panel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_admin_panel'))) . '         }')) . '</div>
							' . ((isset($this->_data['.'][0]['ADMIN_MENU_MOBILE'])) ? $this->_data['.'][0]['ADMIN_MENU_MOBILE'] : '') . '
							';// ELSE
} else {
// IF S_ADMIN
if ($this->_data['.'][0]['S_ADMIN']) { 
echo '<div class="admin-headline"><a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><i class="fa fa-cog fa-lg"></i> ' . ((isset($this->_data['.'][0]['L_menu_admin_panel'])) ? $this->_data['.'][0]['L_menu_admin_panel'] : (($this->lang('menu_admin_panel')) ? $this->lang('menu_admin_panel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_admin_panel'))) . '         }')) . '</a></div>';// ENDIF
}
// ENDIF
}
echo '
							</div>
						</div>
						';echo '
					</div>';echo '<!-- close mainmenu -->';// IF S_IN_ADMIN
if ($this->_data['.'][0]['S_IN_ADMIN']) { 
echo '
					<div id="adminmenu">
						<div class="hiddenSmartphone">
							' . ((isset($this->_data['.'][0]['ADMIN_MENU'])) ? $this->_data['.'][0]['ADMIN_MENU'] : '') . '
						</div>
						';echo '
					</div>
					';// ENDIF
}
echo '
				</nav>
			</header>
			
			<div class="portal">
				';echo '
				<div class="columnContainer">
					';// IF S_PORTAL_LEFT
if ($this->_data['.'][0]['S_PORTAL_LEFT']) { 
echo '
					<aside class="first column portal-left" style="';// IF T_COLUMN_LEFT_WIDTH
if ($this->_data['.'][0]['T_COLUMN_LEFT_WIDTH']) { 
echo 'min-width:' . ((isset($this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'] : '') . ';max-width:' . ((isset($this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_LEFT_WIDTH'] : '') . ';';// ELSE
} else {
echo 'min-width: 200px;';// ENDIF
}
echo '">
						<div class="columnInner">
							';echo '
							' . ((isset($this->_data['.'][0]['PORTAL_LEFT'])) ? $this->_data['.'][0]['PORTAL_LEFT'] : '') . '
							';echo '
						</div> ';echo '<!-- close first column -->';echo '
					</aside>
					';// ENDIF
}
echo '
					
					<article class="second column ';// IF not S_PORTAL_RIGHT
if (! $this->_data['.'][0]['S_PORTAL_RIGHT']) { 
echo 'no_third_column';// ENDIF
}
echo '">
						<div class="columnInner">
							';// IF S_SHOW_COOKIE_HINT
if ($this->_data['.'][0]['S_SHOW_COOKIE_HINT']) { 
echo '
							<div class="infobox infobox-large infobox-blue clearfix">
								<i class="fa-info-circle fa pull-left fa-2x"></i> ' . ((isset($this->_data['.'][0]['COOKIE_HINT'])) ? $this->_data['.'][0]['COOKIE_HINT'] : '') . '
								<i class="fa-times fa pull-right hand" onclick="$(this).parent().hide()"></i>
							</div>
							';// ENDIF
}
// BEGIN global_warnings
$_global_warnings_count = (isset($this->_data['global_warnings.'])) ?  sizeof($this->_data['global_warnings.']) : 0;
if ($_global_warnings_count) {
for ($_global_warnings_i = 0; $_global_warnings_i < $_global_warnings_count; $_global_warnings_i++)
{
echo '
							<header>
								<div class="infobox infobox-large infobox-' . ((isset($this->_data['global_warnings.'][$_global_warnings_i]['CLASS'])) ? $this->_data['global_warnings.'][$_global_warnings_i]['CLASS'] : '') . ' clearfix">
									<i class="' . ((isset($this->_data['global_warnings.'][$_global_warnings_i]['ICON'])) ? $this->_data['global_warnings.'][$_global_warnings_i]['ICON'] : '') . ' fa-4x pull-left"></i> ' . ((isset($this->_data['global_warnings.'][$_global_warnings_i]['MESSAGE'])) ? $this->_data['global_warnings.'][$_global_warnings_i]['MESSAGE'] : '') . '
									';// IF global_warnings.S_DISMISS
if ($this->_data['global_warnings.'][$_global_warnings_i]['S_DISMISS']) { 
echo '
									<i class="fa-times fa pull-right hand" onclick="$(this).parent().hide()"></i>
									';// ENDIF
}
echo '
								</div>
							</header>
							';}}
// END global_warnings
echo '	
							<aside id="portal-middle">
								';echo '
								' . ((isset($this->_data['.'][0]['PORTAL_MIDDLE'])) ? $this->_data['.'][0]['PORTAL_MIDDLE'] : '') . '
								';echo '
							</aside>
							';// ENDIF
}
echo '
							<div id="contentBody" class="' . ((isset($this->_data['.'][0]['PAGE_CLASS'])) ? $this->_data['.'][0]['PAGE_CLASS'] : '') . '';// IF not S_NORMAL_HEADER
if (! $this->_data['.'][0]['S_NORMAL_HEADER']) { 
echo ' simple-header ';// ENDIF
}
// IF not S_NORMAL_FOOTER
if (! $this->_data['.'][0]['S_NORMAL_FOOTER']) { 
echo ' simple-footer ';// ENDIF
}
echo '">
								<div id="contentBody2">
									';echo '
									<div class="breadcrumb-container">
	<ul class="breamcrumb">
		<li><a href="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" title="' . ((isset($this->_data['.'][0]['L_home'])) ? $this->_data['.'][0]['L_home'] : (($this->lang('home')) ? $this->lang('home') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'home'))) . '         }')) . '"><i class="fa fa-home"></i></a></li>
		<li class="current"><a href="' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'admin/' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '">' . ((isset($this->_data['.'][0]['L_menu_admin_panel'])) ? $this->_data['.'][0]['L_menu_admin_panel'] : (($this->lang('menu_admin_panel')) ? $this->lang('menu_admin_panel') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'menu_admin_panel'))) . '         }')) . '</a>
	</ul>
	<div class="clear"></div>
</div>

';// IF SHOW_PHP_WARNING
if ($this->_data['.'][0]['SHOW_PHP_WARNING']) { 
echo '
<div class="infobox infobox-large infobox-red clearfix">
	<i class="fa fa-exclamation-triangle fa-4x pull-left"></i> ' . ((isset($this->_data['.'][0]['L_php_warning'])) ? $this->_data['.'][0]['L_php_warning'] : (($this->lang('php_warning')) ? $this->lang('php_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'php_warning'))) . '         }')) . '
</div>
';// ENDIF
}
// IF SHOW_BETA_WARNING
if ($this->_data['.'][0]['SHOW_BETA_WARNING']) { 
echo '
<div class="infobox infobox-large infobox-red clearfix">
	<i class="fa fa-exclamation-triangle fa-4x pull-left"></i> ' . ((isset($this->_data['.'][0]['L_beta_warning'])) ? $this->_data['.'][0]['L_beta_warning'] : (($this->lang('beta_warning')) ? $this->lang('beta_warning') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'beta_warning'))) . '         }')) . '
</div>
';// ENDIF
}
// IF SHOW_LIMITED_FUNCS
if ($this->_data['.'][0]['SHOW_LIMITED_FUNCS']) { 
// BEGIN lim_funcs
$_lim_funcs_count = (isset($this->_data['lim_funcs.'])) ?  sizeof($this->_data['lim_funcs.']) : 0;
if ($_lim_funcs_count) {
for ($_lim_funcs_i = 0; $_lim_funcs_i < $_lim_funcs_count; $_lim_funcs_i++)
{
echo '
<div class="infobox infobox-large infobox-red clearfix">
	<i class="fa fa-exclamation-triangle fa-4x pull-left"></i> ' . ((isset($this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'])) ? $this->_data['lim_funcs.'][$_lim_funcs_i]['TEXT'] : '') . '
</div>
';}}
// END lim_funcs
// ENDIF
}
echo '

<div id=\'admininfos_tabs\'>
  <ul>
    <li><a href=\'#fragment-1\'><span>' . ((isset($this->_data['.'][0]['L_adminc_news'])) ? $this->_data['.'][0]['L_adminc_news'] : (($this->lang('adminc_news')) ? $this->lang('adminc_news') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_news'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_adminc_system'])) ? $this->_data['.'][0]['L_adminc_system'] : (($this->lang('adminc_system')) ? $this->lang('adminc_system') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_system'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_adminc_statistics'])) ? $this->_data['.'][0]['L_adminc_statistics'] : (($this->lang('adminc_statistics')) ? $this->lang('adminc_statistics') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_statistics'))) . '         }')) . '</span></a></li>
    <li><a href=\'#fragment-4\'><span>' . ((isset($this->_data['.'][0]['L_adminc_support'])) ? $this->_data['.'][0]['L_adminc_support'] : (($this->lang('adminc_support')) ? $this->lang('adminc_support') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support'))) . '         }')) . '</span></a></li>
  </ul>

  <div id="fragment-1">
  	<div class="grid">
  		<div class="onerow">
  			<div class="col6">
  				<h2>' . ((isset($this->_data['.'][0]['L_rssadmin_head1'])) ? $this->_data['.'][0]['L_rssadmin_head1'] : (($this->lang('rssadmin_head1')) ? $this->lang('rssadmin_head1') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head1'))) . '         }')) . '</h2>
				<div id="notifications"></div>
  			</div>
  			<div class="col6 last">
  				<h2>' . ((isset($this->_data['.'][0]['L_rssadmin_head2'])) ? $this->_data['.'][0]['L_rssadmin_head2'] : (($this->lang('rssadmin_head2')) ? $this->lang('rssadmin_head2') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'rssadmin_head2'))) . '         }')) . ' <a href="https://twitter.com/EQdkpPlus" target="new" ><i class="fa fa-twitter-square fa-lg"></i></a>
					<a href="https://facebook.com/EQdkpPlus" target="new" ><i class="fa fa-facebook-square fa-lg"></i></a>
					<a href="https://google.com/+Eqdkp-plusEu" target="new" ><i class="fa fa-google-plus-square fa-lg"></i></a>
				</h2>
				<div id="twitterfeed"></div>
  			</div>
  			
  		</div>
  	</div>

  </div>

  <div id="fragment-2">	
	<fieldset class="settings smallsettings">
		<legend>EQdkp-Plus</legend>
		
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_liveupdate_installed_version'])) ? $this->_data['.'][0]['L_liveupdate_installed_version'] : (($this->lang('liveupdate_installed_version')) ? $this->lang('liveupdate_installed_version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'liveupdate_installed_version'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['EQDKP_VERSION'])) ? $this->_data['.'][0]['EQDKP_VERSION'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_backup_system_data'])) ? $this->_data['.'][0]['L_backup_system_data'] : (($this->lang('backup_system_data')) ? $this->lang('backup_system_data') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'backup_system_data'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DATA_FOLDER'])) ? $this->_data['.'][0]['DATA_FOLDER'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_db_name'])) ? $this->_data['.'][0]['L_db_name'] : (($this->lang('db_name')) ? $this->lang('db_name') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'db_name'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DATABASE_NAME'])) ? $this->_data['.'][0]['DATABASE_NAME'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_table_prefix'])) ? $this->_data['.'][0]['L_table_prefix'] : (($this->lang('table_prefix')) ? $this->lang('table_prefix') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'table_prefix'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['TABLE_PREFIX'])) ? $this->_data['.'][0]['TABLE_PREFIX'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_eqdkp_started'])) ? $this->_data['.'][0]['L_eqdkp_started'] : (($this->lang('eqdkp_started')) ? $this->lang('eqdkp_started') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'eqdkp_started'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['EQDKP_STARTED'])) ? $this->_data['.'][0]['EQDKP_STARTED'] : '') . '</dd>
		</dl>
	</fieldset>
	
	<fieldset class="settings smallsettings">
		<legend>' . ((isset($this->_data['.'][0]['L_adminc_server'])) ? $this->_data['.'][0]['L_adminc_server'] : (($this->lang('adminc_server')) ? $this->lang('adminc_server') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_server'))) . '         }')) . '</legend>
		<dl>
			<dt><label>PHP Version</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_PHP'])) ? $this->_data['.'][0]['SERVERINFO_PHP'] : '') . ' <a href="info_php.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '"><i class="fa fa-lg fa-question-circle"></i> ' . ((isset($this->_data['.'][0]['L_adminc_php_info'])) ? $this->_data['.'][0]['L_adminc_php_info'] : (($this->lang('adminc_php_info')) ? $this->lang('adminc_php_info') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_php_info'))) . '         }')) . '</a></dd>
		</dl>
		<dl>
			<dt><label>PHP Safe Mode</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_SAFEMODE'])) ? $this->_data['.'][0]['SERVERINFO_SAFEMODE'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>Register Globals</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_REGGLOBAL'])) ? $this->_data['.'][0]['SERVERINFO_REGGLOBAL'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>CURL</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_CURL'])) ? $this->_data['.'][0]['SERVERINFO_CURL'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>Fopen</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_FOPEN'])) ? $this->_data['.'][0]['SERVERINFO_FOPEN'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>MySQL Version</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['SERVERINFO_MYSQL'])) ? $this->_data['.'][0]['SERVERINFO_MYSQL'] : '') . '</dd>
		</dl>
		<dl>
			<dt><label>' . ((isset($this->_data['.'][0]['L_database_size'])) ? $this->_data['.'][0]['L_database_size'] : (($this->lang('database_size')) ? $this->lang('database_size') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'database_size'))) . '         }')) . '</label></dt>
			<dd>' . ((isset($this->_data['.'][0]['DATABASE_SIZE'])) ? $this->_data['.'][0]['DATABASE_SIZE'] : '') . '</dd>
		</dl>
	</fieldset>
		
  </div>
  
  <div id="fragment-3">
  	<div class="grid" style="overflow:hidden;">
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_users'])) ? $this->_data['.'][0]['L_users'] : (($this->lang('users')) ? $this->lang('users') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'users'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-1"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-1\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_USER_VALUE'])) ? $this->_data['.'][0]['CIRCLE_USER_VALUE'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['TOTAL_USERS'])) ? $this->_data['.'][0]['TOTAL_USERS'] : '') . '\';},
  			  colors:              [\'#DFF0D8\', \'#468847\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  		
  		</div>
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_chars'])) ? $this->_data['.'][0]['L_chars'] : (($this->lang('chars')) ? $this->lang('chars') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'chars'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-2"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-2\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_MEMBER_VALUE'])) ? $this->_data['.'][0]['CIRCLE_MEMBER_VALUE'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_MEMBERS'])) ? $this->_data['.'][0]['NUMBER_OF_MEMBERS'] : '') . '\';},
  			  colors:              [\'#BEE3F7\', \'#45AEEA\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  		
  		</div>
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_items'])) ? $this->_data['.'][0]['L_items'] : (($this->lang('items')) ? $this->lang('items') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'items'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-3"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-3\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_ITEMS'])) ? $this->_data['.'][0]['CIRCLE_ITEMS'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_ITEMS'])) ? $this->_data['.'][0]['NUMBER_OF_ITEMS'] : '') . '\';},
  			  colors:              [\'#FCE6A4\', \'#EFB917\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  			<div>' . ((isset($this->_data['.'][0]['L_items_per_day'])) ? $this->_data['.'][0]['L_items_per_day'] : (($this->lang('items_per_day')) ? $this->lang('items_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'items_per_day'))) . '         }')) . ': ' . ((isset($this->_data['.'][0]['ITEMS_PER_DAY'])) ? $this->_data['.'][0]['ITEMS_PER_DAY'] : '') . '</div>
  		</div>
  		<div class="col2">
  			<h3>' . ((isset($this->_data['.'][0]['L_raids'])) ? $this->_data['.'][0]['L_raids'] : (($this->lang('raids')) ? $this->lang('raids') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raids'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-4"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-4\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_RAIDS'])) ? $this->_data['.'][0]['CIRCLE_RAIDS'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_RAIDS'])) ? $this->_data['.'][0]['NUMBER_OF_RAIDS'] : '') . '\';},
  			  colors:              [\'#F8F9B6\', \'#D2D558\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  			<div>' . ((isset($this->_data['.'][0]['L_raids_per_day'])) ? $this->_data['.'][0]['L_raids_per_day'] : (($this->lang('raids_per_day')) ? $this->lang('raids_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raids_per_day'))) . '         }')) . ': ' . ((isset($this->_data['.'][0]['RAIDS_PER_DAY'])) ? $this->_data['.'][0]['RAIDS_PER_DAY'] : '') . '</div>
  		</div>
  		<div class="col2 last">
  			<h3>' . ((isset($this->_data['.'][0]['L_adjustments'])) ? $this->_data['.'][0]['L_adjustments'] : (($this->lang('adjustments')) ? $this->lang('adjustments') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adjustments'))) . '         }')) . '</h3>
  			<div class="circle" id="circles-5"></div>
  			<script>
  			var myCircle = Circles.create({
  			  id:                  \'circles-5\',
  			  radius:              60,
  			  value:               ' . ((isset($this->_data['.'][0]['CIRCLE_ADJUSTMENTS'])) ? $this->_data['.'][0]['CIRCLE_ADJUSTMENTS'] : '') . ',
  			  maxValue:            100,
  			  textClass:    	   \'circles-text\',
  			  width:               10,
  			  text:                function(value){return \'' . ((isset($this->_data['.'][0]['NUMBER_OF_ADJUSTMENTS'])) ? $this->_data['.'][0]['NUMBER_OF_ADJUSTMENTS'] : '') . '\';},
  			  colors:              [\'#F4BCBF\', \'#D43A43\'],
  			  duration:            400,
  			  styleWrapper:        true,
  			  styleText:           true
  			});
  			</script>
  			<div>' . ((isset($this->_data['.'][0]['L_adjustments_per_day'])) ? $this->_data['.'][0]['L_adjustments_per_day'] : (($this->lang('adjustments_per_day')) ? $this->lang('adjustments_per_day') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adjustments_per_day'))) . '         }')) . ': ' . ((isset($this->_data['.'][0]['ADJUSTMENTS_PER_DAY'])) ? $this->_data['.'][0]['ADJUSTMENTS_PER_DAY'] : '') . '</div>
  		</div>
  	</div>
  	<div class="clear"></div>
  </div>


  <div id="fragment-4">
    ' . ((isset($this->_data['.'][0]['L_adminc_support_intro'])) ? $this->_data['.'][0]['L_adminc_support_intro'] : (($this->lang('adminc_support_intro')) ? $this->lang('adminc_support_intro') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_intro'))) . '         }')) . '<br/><br/>
    <table class="table fullwidth">

      <tr>
      	<td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-question fa-stack-1x fa-inverse"></i></span></td>
      	<td>' . ((isset($this->_data['.'][0]['L_adminc_support_tour'])) ? $this->_data['.'][0]['L_adminc_support_tour'] : (($this->lang('adminc_support_tour')) ? $this->lang('adminc_support_tour') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_tour'))) . '         }')) . '</td>
     	</tr>
      <tr>
        <td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-wikipedia-w fa-stack-1x fa-inverse"></i></span></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_wiki'])) ? $this->_data['.'][0]['L_adminc_support_wiki'] : (($this->lang('adminc_support_wiki')) ? $this->lang('adminc_support_wiki') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_wiki'))) . '         }')) . '</td>
      </tr>
       <tr>
        <td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-bug fa-stack-1x fa-inverse"></i></span></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_bugtracker'])) ? $this->_data['.'][0]['L_adminc_support_bugtracker'] : (($this->lang('adminc_support_bugtracker')) ? $this->lang('adminc_support_bugtracker') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_bugtracker'))) . '         }')) . '</td>
      </tr>
      <tr>
        <td><span class="fa-stack fa-3x"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-users fa-stack-1x fa-inverse"></i></span></td>
        <td>' . ((isset($this->_data['.'][0]['L_adminc_support_forums'])) ? $this->_data['.'][0]['L_adminc_support_forums'] : (($this->lang('adminc_support_forums')) ? $this->lang('adminc_support_forums') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'adminc_support_forums'))) . '         }')) . '</td>
      </tr>
      <tr>
        <td id="support"><i class="fa fa-heart fa-5x" style="color:red;vertical-align:middle;"></i>
						<span class="fa-stack fa-lg" style="margin-left: -30px; margin-bottom: -10px; margin-right: 10px;">
						<i class="fa fa-circle fa-stack-2x"></i>
  						<i class="fa fa-usd fa-stack-1x fa-inverse"></i>
						</span></td>
        <td>' . ((isset($this->_data['.'][0]['L_support_eqdkplus'])) ? $this->_data['.'][0]['L_support_eqdkplus'] : (($this->lang('support_eqdkplus')) ? $this->lang('support_eqdkplus') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'support_eqdkplus'))) . '         }')) . '</td>
      </tr>
    </table>
  </div>
</div>
<br/>
';// IF S_WHO_IS_ONLINE
if ($this->_data['.'][0]['S_WHO_IS_ONLINE']) { 
echo '
<h2>' . ((isset($this->_data['.'][0]['L_who_online'])) ? $this->_data['.'][0]['L_who_online'] : (($this->lang('who_online')) ? $this->lang('who_online') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'who_online'))) . '         }')) . '</h2>
<table  class="table fullwidth colorswitch">
    <tr>
      <th class="w20p left nowrap">' . ((isset($this->_data['.'][0]['L_username'])) ? $this->_data['.'][0]['L_username'] : (($this->lang('username')) ? $this->lang('username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'username'))) . '         }')) . '</th>
      <th class="w20p lefthiddenSmartphone">' . ((isset($this->_data['.'][0]['L_logged_in'])) ? $this->_data['.'][0]['L_logged_in'] : (($this->lang('logged_in')) ? $this->lang('logged_in') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'logged_in'))) . '         }')) . '</th>
      <th class="w20p left">' . ((isset($this->_data['.'][0]['L_last_update'])) ? $this->_data['.'][0]['L_last_update'] : (($this->lang('last_update')) ? $this->lang('last_update') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'last_update'))) . '         }')) . '</th>
      <th class="w20p left">' . ((isset($this->_data['.'][0]['L_location'])) ? $this->_data['.'][0]['L_location'] : (($this->lang('location')) ? $this->lang('location') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'location'))) . '         }')) . '</th>
      <th class="w20p hiddenSmartphone left">' . ((isset($this->_data['.'][0]['L_ip_address'])) ? $this->_data['.'][0]['L_ip_address'] : (($this->lang('ip_address')) ? $this->lang('ip_address') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ip_address'))) . '         }')) . '</th>
      <th class="hiddenSmartphone left">' . ((isset($this->_data['.'][0]['L_browser'])) ? $this->_data['.'][0]['L_browser'] : (($this->lang('browser')) ? $this->lang('browser') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'browser'))) . '         }')) . '</th>
    </tr>
    ';// BEGIN online_row
$_online_row_count = (isset($this->_data['online_row.'])) ?  sizeof($this->_data['online_row.']) : 0;
if ($_online_row_count) {
for ($_online_row_i = 0; $_online_row_i < $_online_row_count; $_online_row_i++)
{
echo '
    <tr>
      <td class="nowrap">' . ((isset($this->_data['online_row.'][$_online_row_i]['USERNAME'])) ? $this->_data['online_row.'][$_online_row_i]['USERNAME'] : '') . '</td>
      <td class="hiddenSmartphone">' . ((isset($this->_data['online_row.'][$_online_row_i]['LOGIN'])) ? $this->_data['online_row.'][$_online_row_i]['LOGIN'] : '') . '</td>
      <td>' . ((isset($this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'])) ? $this->_data['online_row.'][$_online_row_i]['LAST_UPDATE'] : '') . '</td>
      <td>' . ((isset($this->_data['online_row.'][$_online_row_i]['LOCATION'])) ? $this->_data['online_row.'][$_online_row_i]['LOCATION'] : '') . '</td>
      <td class="hiddenSmartphone"><span class="ip_resolver" title="' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '">' . ((isset($this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_data['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '</span></td>
      <td class="hiddenSmartphone center">' . ((isset($this->_data['online_row.'][$_online_row_i]['BROWSER'])) ? $this->_data['online_row.'][$_online_row_i]['BROWSER'] : '') . '</td>
    </tr>
    ';}}
// END online_row
echo '
    <tr>
      <th colspan="6" class="footer">' . ((isset($this->_data['.'][0]['ONLINE_FOOTCOUNT'])) ? $this->_data['.'][0]['ONLINE_FOOTCOUNT'] : '') . '</th>
    </tr>
  </table>
';// ENDIF
}
// IF S_LOGS
if ($this->_data['.'][0]['S_LOGS']) { 
echo '
<br />
<h2>' . ((isset($this->_data['.'][0]['L_new_actions'])) ? $this->_data['.'][0]['L_new_actions'] : (($this->lang('new_actions')) ? $this->lang('new_actions') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'new_actions'))) . '         }')) . '</h2>
<table  class="table fullwidth colorswitch">
  ' . ((isset($this->_data['.'][0]['LOGS_TABLE'])) ? $this->_data['.'][0]['LOGS_TABLE'] : '') . '  
</table>
';// ENDIF
}
echo '
								</div>	
							</div>';echo '<!-- close contentBody -->';// IF S_NORMAL_FOOTER
if ($this->_data['.'][0]['S_NORMAL_FOOTER']) { 
echo '
							<aside id="portal-footer">
							';echo '
							' . ((isset($this->_data['.'][0]['PORTAL_BOTTOM'])) ? $this->_data['.'][0]['PORTAL_BOTTOM'] : '') . '
							';echo '
							</aside>
							<footer class="debug">
							';// IF S_SHOW_QUERIES
if ($this->_data['.'][0]['S_SHOW_QUERIES']) { 
echo '<br />' . ((isset($this->_data['.'][0]['DEBUG_TABS'])) ? $this->_data['.'][0]['DEBUG_TABS'] : '') . '';// ENDIF
}
// IF S_SHOW_DEBUG
if ($this->_data['.'][0]['S_SHOW_DEBUG']) { 
echo '
							<br /><div class="center">
								<span class="debug-info">SQL Querys: ' . ((isset($this->_data['.'][0]['EQDKP_QUERYCOUNT'])) ? $this->_data['.'][0]['EQDKP_QUERYCOUNT'] : '') . ' | in ' . ((isset($this->_data['.'][0]['EQDKP_RENDERTIME'])) ? $this->_data['.'][0]['EQDKP_RENDERTIME'] : '') . ' | ' . ((isset($this->_data['.'][0]['EQDKP_MEM_PEAK'])) ? $this->_data['.'][0]['EQDKP_MEM_PEAK'] : '') . ' |
									<a href="http://validator.w3.org/check/referer" target="_top">XHTML Validate</a>
								</span>
							</div>
							';// ENDIF
}
echo '
							</footer>
						</div>
					</article>';echo '<!-- close second column -->';// IF S_PORTAL_RIGHT
if ($this->_data['.'][0]['S_PORTAL_RIGHT']) { 
echo '
					<aside class="third column portal-right" style="';// IF T_COLUMN_RIGHT_WIDTH
if ($this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH']) { 
echo 'min-width:' . ((isset($this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'] : '') . ';max-width:' . ((isset($this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'])) ? $this->_data['.'][0]['T_COLUMN_RIGHT_WIDTH'] : '') . '';// ELSE
} else {
echo 'min-width: 200px;';// ENDIF
}
echo '">
						<div class="columnInner">
							';echo '
							' . ((isset($this->_data['.'][0]['PORTAL_RIGHT'])) ? $this->_data['.'][0]['PORTAL_RIGHT'] : '') . '
							';echo '
						</div>
					</aside>
					';// ENDIF
}
echo '
				</div>
			</div>
			
			<footer id="contentFooter">
				';echo '
				<div class="floatLeft">
					';// IF S_REPONSIVE
if ($this->_data['.'][0]['S_REPONSIVE']) { 
echo '
					<div class="hiddenDesktop toggleResponsive"><a href="' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&toggleResponsive=desktop"><i class="fa fa-lg fa-desktop"></i> ' . ((isset($this->_data['.'][0]['L_desktop_version'])) ? $this->_data['.'][0]['L_desktop_version'] : (($this->lang('desktop_version')) ? $this->lang('desktop_version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'desktop_version'))) . '         }')) . '</a></div>
					';// ELSE
} else {
echo '
					<div class="toggleResponsive"><a href="' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&toggleResponsive=mobile"><a href="' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&toggleResponsive=mobile"><i class="fa fa-lg fa-mobile-phone"></i> ' . ((isset($this->_data['.'][0]['L_mobile_version'])) ? $this->_data['.'][0]['L_mobile_version'] : (($this->lang('mobile_version')) ? $this->lang('mobile_version') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'mobile_version'))) . '         }')) . '</a></div>
					';// ENDIF
}
echo '
				</div>
				<div class="floatRight">
					';// IF not S_LOGGED_IN and S_STYLECHANGER
if (! $this->_data['.'][0]['S_LOGGED_IN'] && $this->_data['.'][0]['S_STYLECHANGER']) { 
echo '
					<a href="javascript:change_style();"><i class="fa fa-paint-brush"></i> ' . ((isset($this->_data['.'][0]['L_change_style'])) ? $this->_data['.'][0]['L_change_style'] : (($this->lang('change_style')) ? $this->lang('change_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'change_style'))) . '         }')) . '</a>
					';// ENDIF
}
// IF S_GLOBAL_RSSFEEDS
if ($this->_data['.'][0]['S_GLOBAL_RSSFEEDS']) { 
echo '
					<div class="rss-tooltip-container">
						<a class="rss-tooltip-trigger tooltip-trigger" data-tooltip="rss-tooltip"><i class="fa hand fa-rss fa-lg"></i></a>
						<ul class="dropdown-menu right-bottom rss-tooltip" role="menu" id="rss-tooltip">
							';// BEGIN global_rss_row
$_global_rss_row_count = (isset($this->_data['global_rss_row.'])) ?  sizeof($this->_data['global_rss_row.']) : 0;
if ($_global_rss_row_count) {
for ($_global_rss_row_i = 0; $_global_rss_row_i < $_global_rss_row_count; $_global_rss_row_i++)
{
echo '
							<li><a href="' . ((isset($this->_data['global_rss_row.'][$_global_rss_row_i]['LINK'])) ? $this->_data['global_rss_row.'][$_global_rss_row_i]['LINK'] : '') . '"><i class="fa hand fa-rss fa-lg"></i> ' . ((isset($this->_data['global_rss_row.'][$_global_rss_row_i]['NAME'])) ? $this->_data['global_rss_row.'][$_global_rss_row_i]['NAME'] : '') . '</a></li>
							';}}
// END global_rss_row
echo '
						</ul>
					</div>
					';// ENDIF
}
echo '
				</div>
			</footer>
		</section>
		
		<footer id="footer">
				';echo '
				<div class="portal_block2">' . ((isset($this->_data['.'][0]['PORTAL_BLOCK2'])) ? $this->_data['.'][0]['PORTAL_BLOCK2'] : '') . '</div>
				' . ((isset($this->_data['.'][0]['EQDKP_PLUS_COPYRIGHT'])) ? $this->_data['.'][0]['EQDKP_PLUS_COPYRIGHT'] : '') . '
				';echo '
		</footer>';echo '<!-- close footer -->';echo '
	</div>';echo '<!-- close wrapper -->';// ELSE
} else {
// IF S_SHOW_QUERIES
if ($this->_data['.'][0]['S_SHOW_QUERIES']) { 
echo '<br />' . ((isset($this->_data['.'][0]['DEBUG_TABS'])) ? $this->_data['.'][0]['DEBUG_TABS'] : '') . '';// ENDIF
}
// ENDIF
}
// IF not S_LOGGED_IN
if (! $this->_data['.'][0]['S_LOGGED_IN']) { 
echo '
	<div id="dialog-login" title="' . ((isset($this->_data['.'][0]['L_login'])) ? $this->_data['.'][0]['L_login'] : (($this->lang('login')) ? $this->lang('login') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'login'))) . '         }')) . '">
		<form method="post" action="' . ((isset($this->_data['.'][0]['EQDKP_CONTROLLER_PATH'])) ? $this->_data['.'][0]['EQDKP_CONTROLLER_PATH'] : '') . 'Login' . ((isset($this->_data['.'][0]['SEO_EXTENSION'])) ? $this->_data['.'][0]['SEO_EXTENSION'] : '') . '' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '" name="login" id="login" class="fv_checkit">
			';// IF S_BRIDGE_INFO
if ($this->_data['.'][0]['S_BRIDGE_INFO']) { 
echo '
			<div class="infobox infobox-large infobox-blue clearfix">
				<i class="fa fa-info-circle fa-4x pull-left"></i> ' . ((isset($this->_data['.'][0]['L_login_bridge_notice'])) ? $this->_data['.'][0]['L_login_bridge_notice'] : (($this->lang('login_bridge_notice')) ? $this->lang('login_bridge_notice') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'login_bridge_notice'))) . '         }')) . '
			</div>
			';// ENDIF
}
echo '
			<fieldset class="settings mediumsettings">
				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_username'])) ? $this->_data['.'][0]['L_username'] : (($this->lang('username')) ? $this->lang('username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'username'))) . '         }')) . ':</label></dt>
					<dd>
						<div class="input-icon">
							<i class="fa fa-user"></i><input type="text" name="username" size="30" maxlength="30" class="input username" id="username" placeholder="' . ((isset($this->_data['.'][0]['L_username'])) ? $this->_data['.'][0]['L_username'] : (($this->lang('username')) ? $this->lang('username') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'username'))) . '         }')) . '" required />
							<div class="fv_msg" data-errormessage="' . ((isset($this->_data['.'][0]['L_fv_required_user'])) ? $this->_data['.'][0]['L_fv_required_user'] : (($this->lang('fv_required_user')) ? $this->lang('fv_required_user') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_user'))) . '         }')) . '"></div>
						</div>
						
					</dd>
				</dl>
				<dl>
					<dt><label>' . ((isset($this->_data['.'][0]['L_password'])) ? $this->_data['.'][0]['L_password'] : (($this->lang('password')) ? $this->lang('password') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'password'))) . '         }')) . ':</label></dt>
					<dd>
						<div class="input-icon">
							<i class="fa fa-key"></i>
							<input type="password" name="password" pattern=".{3,}" size="30" maxlength="32" class="input password" id="password" placeholder="' . ((isset($this->_data['.'][0]['L_password'])) ? $this->_data['.'][0]['L_password'] : (($this->lang('password')) ? $this->lang('password') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'password'))) . '         }')) . '" required />
							<div class="fv_msg" data-errormessage="' . ((isset($this->_data['.'][0]['L_fv_required_password_pattern'])) ? $this->_data['.'][0]['L_fv_required_password_pattern'] : (($this->lang('fv_required_password_pattern')) ? $this->lang('fv_required_password_pattern') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'fv_required_password_pattern'))) . '         }')) . '"></div>
						</div>
						';// IF S_SHOW_PWRESET_LINK
if ($this->_data['.'][0]['S_SHOW_PWRESET_LINK']) { 
echo '
						<br />' . ((isset($this->_data['.'][0]['U_PWRESET_LINK'])) ? $this->_data['.'][0]['U_PWRESET_LINK'] : '') . '<br />
						';// ENDIF
}
echo '
						<br /><label><input type="checkbox" name="auto_login" />' . ((isset($this->_data['.'][0]['L_remember_password'])) ? $this->_data['.'][0]['L_remember_password'] : (($this->lang('remember_password')) ? $this->lang('remember_password') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'remember_password'))) . '         }')) . '</label>
					</dd>
				</dl>
			</fieldset>
			<input type="text" name="' . ((isset($this->_data['.'][0]['HONEYPOT_VALUE'])) ? $this->_data['.'][0]['HONEYPOT_VALUE'] : '') . '" size="30" maxlength="30" class="userpass" />
			<button type="submit" name="login" class="mainoption"><i class="fa fa-sign-in"></i> ' . ((isset($this->_data['.'][0]['L_login'])) ? $this->_data['.'][0]['L_login'] : (($this->lang('login')) ? $this->lang('login') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'login'))) . '         }')) . '</button>
			';// IF AUTH_LOGIN_BUTTON != ""
if ($this->_data['.'][0]['AUTH_LOGIN_BUTTON'] != "") { 
echo '
			<br /><br />
			<fieldset class="settings mediumsettings">
				<legend>' . ((isset($this->_data['.'][0]['L_login_use_authmethods'])) ? $this->_data['.'][0]['L_login_use_authmethods'] : (($this->lang('login_use_authmethods')) ? $this->lang('login_use_authmethods') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'login_use_authmethods'))) . '         }')) . '</legend>
				' . ((isset($this->_data['.'][0]['AUTH_LOGIN_BUTTON'])) ? $this->_data['.'][0]['AUTH_LOGIN_BUTTON'] : '') . '
			</fieldset>
			';// ENDIF
}
echo '
		</form>
	</div>
	';// ENDIF
}
echo '
	
	<div class="reponsiveTestClass" style="display:none;">';echo '<!-- This div is for testing the responsiveness -->';echo '</div>
	<script type="text/javascript">
		//<![CDATA[			
			';// IF not S_LOGGED_IN
if (! $this->_data['.'][0]['S_LOGGED_IN']) { 
echo '
			$(document).ready(function() {
				/* Login Dialog */
				$( "#dialog-login" ).dialog({
					height: ';// IF S_BRIDGE_INFO
if ($this->_data['.'][0]['S_BRIDGE_INFO']) { 
echo '450';// ELSE
} else {
echo '350';// ENDIF
}
echo ',
					width: 530,
					modal: true,
					autoOpen: false,
				});
			});
			';// ENDIF
}
// IF S_NORMAL_HEADER
if ($this->_data['.'][0]['S_NORMAL_HEADER']) { 
echo '
			
			function recalculate_notification_bubbles(){
				var red = 0; var green = 0; var yellow = 0;
				$(\'.notification-content ul li\').each(function( index ) {
					var myclass = $(this).attr(\'class\');
					var count = $(this).data(\'count\');
					
					if (myclass == \'prio_0\') green += parseInt(count);
					if(myclass == \'prio_1\') yellow += parseInt(count);
					if(myclass == \'prio_2\') red += parseInt(count);
				});
				if (green > 0) {
					$(\'.notification-bubble-green\').html(green).show();
				} else {
					$(\'.notification-bubble-green\').html(green).hide();
				}
				if (yellow > 0) {
					$(\'.notification-bubble-yellow\').html(yellow).show();
				} else {
					$(\'.notification-bubble-yellow\').html(yellow).hide();
				}
				if (red > 0) {
					$(\'.notification-bubble-red\').html(red).show();
				} else {
					$(\'.notification-bubble-red\').html(red).hide();
				}
				
				if (yellow ==0 && green==0 && red==0){
					$(\'.notification-content ul\').html('.$this->handleModifier('' . ((isset($this->_data['.'][0]['L_notification_none'])) ? $this->_data['.'][0]['L_notification_none'] : (($this->lang('notification_none')) ? $this->lang('notification_none') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'notification_none'))) . '         }')) . '', 'jsencode').');
				}
				
				notification_favicon(red, yellow, green);
			}
			

			function change_style(){
				$(\'<div>\').html(\'<div class="style-switch-container"><i class="fa fa-lg fa-spin fa-spinner"></i></div>\').dialog(
					{ open: function( event, ui ) {
						$.get("' . ((isset($this->_data['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_data['.'][0]['EQDKP_ROOT_PATH'] : '') . 'exchange.php' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&out=styles", function(data){
							$(\'.style-switch-container\').html(data);
						});
					}, title: '.$this->handleModifier('' . ((isset($this->_data['.'][0]['L_change_style'])) ? $this->_data['.'][0]['L_change_style'] : (($this->lang('change_style')) ? $this->lang('change_style') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'change_style'))) . '         }')) . '', 'jsencode').', width: 600, height: 500}
				);
			}
			
			/* User clock */
			var user_clock_format = "dddd, "+mmocms_user_dateformat_long+" "+ mmocms_user_timeformat;
			var mymoment = moment(mmocms_user_timestamp_atom).utcOffset(mmocms_user_timezone);
			
			$(document).ready(function() {
				$(\'.notification-mark-all-read\').on(\'click\', function() {
				    $(\'.notification-content ul\').html('.$this->handleModifier('' . ((isset($this->_data['.'][0]['L_notification_none'])) ? $this->_data['.'][0]['L_notification_none'] : (($this->lang('notification_none')) ? $this->lang('notification_none') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'notification_none'))) . '         }')) . '', 'jsencode').');
					$(\'.notification-bubble-red, .notification-bubble-yellow, .notification-bubble-green\').hide();
					notification_favicon(0, 0, 0);
					$.get(mmocms_controller_path+"Notifications"+mmocms_seo_extension+mmocms_sid+"&markallread");
				});
	
				//Update Favicon
				favicon = new Favico({animation:\'none\'});
				notification_favicon(' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_RED'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_RED'] : '') . ', ' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_YELLOW'] : '') . ', ' . ((isset($this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'])) ? $this->_data['.'][0]['NOTIFICATION_COUNT_GREEN'] : '') . ');
			});
			';// ELSE
} else {
echo '<!-- JS for simple header. Above is for normal header only -->';// ENDIF
}
echo '

		' . ((isset($this->_data['.'][0]['JS_CODE_EOP'])) ? $this->_data['.'][0]['JS_CODE_EOP'] : '') . '
		
		//Reset Favicon, for Bookmarks
		$(window).on(\'unload\', function() {
            if (typeof favicon !== \'undefined\'){ favicon.reset(); }
   		 });
   		 //]]>
	</script>
	' . ((isset($this->_data['.'][0]['FOOTER_CODE'])) ? $this->_data['.'][0]['FOOTER_CODE'] : '') . '
	';echo '
	<a id="bottom"></a>
	</body>
</html>
';// ENDIF
}

}
?>