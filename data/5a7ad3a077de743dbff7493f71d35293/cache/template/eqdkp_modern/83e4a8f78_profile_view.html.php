<?php
if ($this->security()) {
echo '<div class="profile_header">
	' . ((isset($this->_data['.'][0]['IMG_CLASSICON'])) ? $this->_data['.'][0]['IMG_CLASSICON'] : '') . '
	<div class="charname">' . ((isset($this->_data['.'][0]['CHARDATA_NAME'])) ? $this->_data['.'][0]['CHARDATA_NAME'] : '') . '</div>
	<div class="charlevel">' . ((isset($this->_data['.'][0]['L_level'])) ? $this->_data['.'][0]['L_level'] : (($this->lang('level')) ? $this->lang('level') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'level'))) . '         }')) . ' ' . ((isset($this->_data['.'][0]['DATA_LEVEL'])) ? $this->_data['.'][0]['DATA_LEVEL'] : '') . ', ' . ((isset($this->_data['.'][0]['DATA_CLASSNAME'])) ? $this->_data['.'][0]['DATA_CLASSNAME'] : '') . '</div>
	<div class="charguild">' . ((isset($this->_data['.'][0]['DATA_GUILDTAG'])) ? $this->_data['.'][0]['DATA_GUILDTAG'] : '') . '</div>
</div>

<table class="table fullwidth borderless">
	<tr>
		';// IF S_CHARDATA_PICTURE
if ($this->_data['.'][0]['S_CHARDATA_PICTURE']) { 
echo '
		<td width="1">
			<div class="profile_picture">
			' . ((isset($this->_data['.'][0]['CHARDATA_PICTURE'])) ? $this->_data['.'][0]['CHARDATA_PICTURE'] : '') . '
			</div>
		</td>
		';// ENDIF
}
// IF S_PFIELDS
if ($this->_data['.'][0]['S_PFIELDS']) { 
echo '
		<td>
			<div class="profile_information" id="profile_field_data">
				<ul>
					';// BEGIN cat_data
$_cat_data_count = (isset($this->_data['cat_data.'])) ?  sizeof($this->_data['cat_data.']) : 0;
if ($_cat_data_count) {
for ($_cat_data_i = 0; $_cat_data_i < $_cat_data_count; $_cat_data_i++)
{
echo '
					<li><a href=\'#' . ((isset($this->_data['cat_data.'][$_cat_data_i]['ID'])) ? $this->_data['cat_data.'][$_cat_data_i]['ID'] : '') . '\'><span>' . ((isset($this->_data['cat_data.'][$_cat_data_i]['NAME'])) ? $this->_data['cat_data.'][$_cat_data_i]['NAME'] : '') . '</span></a></li>
					';}}
// END cat_data
echo '
				</ul>
				
				';// BEGIN cat_data
$_cat_data_count = (isset($this->_data['cat_data.'])) ?  sizeof($this->_data['cat_data.']) : 0;
if ($_cat_data_count) {
for ($_cat_data_i = 0; $_cat_data_i < $_cat_data_count; $_cat_data_i++)
{
echo '
				<div id="' . ((isset($this->_data['cat_data.'][$_cat_data_i]['ID'])) ? $this->_data['cat_data.'][$_cat_data_i]['ID'] : '') . '">
					<fieldset class="settings mediumsettings">
						';// BEGIN pfield_data
$_pfield_data_count = (isset($this->_data['cat_data.'][$_cat_data_i]['pfield_data.'])) ? sizeof($this->_data['cat_data.'][$_cat_data_i]['pfield_data.']) : 0;
if ($_pfield_data_count) {
for ($_pfield_data_i = 0; $_pfield_data_i < $_pfield_data_count; $_pfield_data_i++)
{
echo '
						<dl>
							<dt><label>' . ((isset($this->_data['cat_data.'][$_cat_data_i]['pfield_data.'][$_pfield_data_i]['NAME'])) ? $this->_data['cat_data.'][$_cat_data_i]['pfield_data.'][$_pfield_data_i]['NAME'] : '') . '</label></dt>
							<dd>' . ((isset($this->_data['cat_data.'][$_cat_data_i]['pfield_data.'][$_pfield_data_i]['VALUE'])) ? $this->_data['cat_data.'][$_cat_data_i]['pfield_data.'][$_pfield_data_i]['VALUE'] : '') . '</dd>
						</dl>
						';}}
// END pfield_data
echo '
					</fieldset>
				</div>
				';}}
// END cat_data
echo '
				
			</div>
		</td>
		';// ENDIF
}
echo '
	</tr>
</table>



';// IF MEMBER_POINTS
if ($this->_data['.'][0]['MEMBER_POINTS']) { 
echo '
<div class="tableHeader">
	<h2>' . ((isset($this->_data['.'][0]['L_DKP_NAME'])) ? $this->_data['.'][0]['L_DKP_NAME'] : (($this->lang('DKP_NAME')) ? $this->lang('DKP_NAME') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DKP_NAME'))) . '         }')) . '</h2>
</div>
<input type="checkbox" onchange="window.location=\'' . ((isset($this->_data['.'][0]['SID'])) ? $this->_data['.'][0]['SID'] : '') . '&with_twinks=\'+ ((this.checked) ? 0 : 1)" name="with_twinks" value="1" ';// IF not S_WITH_TWINK_DKP
if (! $this->_data['.'][0]['S_WITH_TWINK_DKP']) { 
echo 'checked="checked"';// ENDIF
}
echo '/> ' . ((isset($this->_data['.'][0]['L_points_for_this_char'])) ? $this->_data['.'][0]['L_points_for_this_char'] : (($this->lang('points_for_this_char')) ? $this->lang('points_for_this_char') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'points_for_this_char'))) . '         }')) . '
<br /><br />
<table class="table fullwidth borderless colorswitch">
	' . ((isset($this->_data['.'][0]['MEMBER_POINTS'])) ? $this->_data['.'][0]['MEMBER_POINTS'] : '') . '
</table>
<br />
';// ENDIF
}
echo '

<div id=\'profile_information\'>
	<ul>
		<li><a href=\'#fragment-2\'><span>' . ((isset($this->_data['.'][0]['L_tab_raids'])) ? $this->_data['.'][0]['L_tab_raids'] : (($this->lang('tab_raids')) ? $this->lang('tab_raids') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_raids'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-3\'><span>' . ((isset($this->_data['.'][0]['L_tab_items'])) ? $this->_data['.'][0]['L_tab_items'] : (($this->lang('tab_items')) ? $this->lang('tab_items') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_items'))) . '         }')) . '</span></a></li>
		';// IF not S_POINTS_DISABLED
if (! $this->_data['.'][0]['S_POINTS_DISABLED']) { 
echo '
		<li><a href=\'#fragment-4\'><span>' . ((isset($this->_data['.'][0]['L_tab_adjustments'])) ? $this->_data['.'][0]['L_tab_adjustments'] : (($this->lang('tab_adjustments')) ? $this->lang('tab_adjustments') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_adjustments'))) . '         }')) . '</span></a></li>
		';// ENDIF
}
echo '
		<li><a href=\'#fragment-5\'><span>' . ((isset($this->_data['.'][0]['L_tab_attendance'])) ? $this->_data['.'][0]['L_tab_attendance'] : (($this->lang('tab_attendance')) ? $this->lang('tab_attendance') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_attendance'))) . '         }')) . '</span></a></li>
		<li><a href=\'#fragment-6\'><span class="adminicon">' . ((isset($this->_data['.'][0]['L_tab_notes'])) ? $this->_data['.'][0]['L_tab_notes'] : (($this->lang('tab_notes')) ? $this->lang('tab_notes') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'tab_notes'))) . '         }')) . '</span></a></li>
	</ul>

	';echo '<!-- RAIDS TABLE -->';echo '
	<div id="fragment-2">
		<div class="tableHeader">
			<h2>' . ((isset($this->_data['.'][0]['L_raid_attendance_history'])) ? $this->_data['.'][0]['L_raid_attendance_history'] : (($this->lang('raid_attendance_history')) ? $this->lang('raid_attendance_history') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'raid_attendance_history'))) . '         }')) . '</h2>
		</div>
		<table class="table fullwidth hptt colorswitch scrollable-x">
		' . ((isset($this->_data['.'][0]['RAID_OUT'])) ? $this->_data['.'][0]['RAID_OUT'] : '') . '
		</table>
		<div class="center pagination_wrapper">
			' . ((isset($this->_data['.'][0]['RAID_PAGINATION'])) ? $this->_data['.'][0]['RAID_PAGINATION'] : '') . '
		</div>
	</div>

	';echo '<!-- ITEMS TABLE -->';echo '
	<div id="fragment-3">
		<div class="tableHeader">
			<h2>' . ((isset($this->_data['.'][0]['L_item_purchase_history'])) ? $this->_data['.'][0]['L_item_purchase_history'] : (($this->lang('item_purchase_history')) ? $this->lang('item_purchase_history') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'item_purchase_history'))) . '         }')) . '</h2>
		</div>
		<table class="table fullwidth hptt colorswitch scrollable-x">
		' . ((isset($this->_data['.'][0]['ITEM_OUT'])) ? $this->_data['.'][0]['ITEM_OUT'] : '') . '
		</table>
		<div class="center pagination_wrapper">
			' . ((isset($this->_data['.'][0]['ITEM_PAGINATION'])) ? $this->_data['.'][0]['ITEM_PAGINATION'] : '') . '
		</div>
	</div>
	
	';// IF not S_POINTS_DISABLED
if (! $this->_data['.'][0]['S_POINTS_DISABLED']) { 
echo '<!-- ADJUSTMENTS TABLE-->';echo '
	<div id="fragment-4">
		<div class="tableHeader">
			<h2>' . ((isset($this->_data['.'][0]['L_individual_adjustment_history'])) ? $this->_data['.'][0]['L_individual_adjustment_history'] : (($this->lang('individual_adjustment_history')) ? $this->lang('individual_adjustment_history') : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'individual_adjustment_history'))) . '         }')) . '</h2>
		</div>
		<table class="table fullwidth hptt colorswitch scrollable-x">
		' . ((isset($this->_data['.'][0]['ADJUSTMENT_OUT'])) ? $this->_data['.'][0]['ADJUSTMENT_OUT'] : '') . '
		</table>
		<div class="center pagination_wrapper">
			' . ((isset($this->_data['.'][0]['ADJUSTMENT_PAGINATION'])) ? $this->_data['.'][0]['ADJUSTMENT_PAGINATION'] : '') . '
		</div>
	</div>
	';// ENDIF
}
echo '<!-- ATTENDANCE -->';echo '
	<div id="fragment-5">
		<table class="table fullwidth hptt colorswitch scrollable-x">
		' . ((isset($this->_data['.'][0]['EVENT_ATT_OUT'])) ? $this->_data['.'][0]['EVENT_ATT_OUT'] : '') . '
		</table>
	</div>

	';echo '<!-- NOTES TABLE -->';echo '
	<div id="fragment-6">
		' . ((isset($this->_data['.'][0]['NOTES'])) ? $this->_data['.'][0]['NOTES'] : '') . '
	</div>
</div>
<br />';
}
?>