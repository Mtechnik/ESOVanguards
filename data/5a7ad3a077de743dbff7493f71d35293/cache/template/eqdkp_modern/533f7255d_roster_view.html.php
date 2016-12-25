<?php
if ($this->security()) {
// BEGIN class_row
$_class_row_count = (isset($this->_data['class_row.'])) ?  sizeof($this->_data['class_row.']) : 0;
if ($_class_row_count) {
for ($_class_row_i = 0; $_class_row_i < $_class_row_count; $_class_row_i++)
{
echo '
	<div class="roster_class_container" data-level-id="' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_LEVEL'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_LEVEL'] : '') . '" ';// IF class_row.IS_PRIMARY
if ($this->_data['class_row.'][$_class_row_i]['IS_PRIMARY']) { 
echo 'data-is-primary="1" data-class-id="' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_ID'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_ID'] : '') . '"';// ENDIF
}
echo '>
		<h' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_LEVEL'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_LEVEL'] : '') . ' class="';// IF class_row.IS_PRIMARY
if ($this->_data['class_row.'][$_class_row_i]['IS_PRIMARY']) { 
echo 'class_' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_ID'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_ID'] : '') . '';// ENDIF
}
echo ' level_' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_LEVEL'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_LEVEL'] : '') . '">' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_ICONS'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_ICONS'] : '') . ' ' . ((isset($this->_data['class_row.'][$_class_row_i]['CLASS_NAME'])) ? $this->_data['class_row.'][$_class_row_i]['CLASS_NAME'] : '') . '</h1>
		';// IF class_row.ENDLEVEL
if ($this->_data['class_row.'][$_class_row_i]['ENDLEVEL']) { 
echo '
		<table class="table fullwidth colorswitch hoverrows">
			' . ((isset($this->_data['class_row.'][$_class_row_i]['MEMBER_LIST'])) ? $this->_data['class_row.'][$_class_row_i]['MEMBER_LIST'] : '') . '
		</table>
		<br /><br />
	</div>
	';// ENDIF
}
}}
// END class_row

}
?>