<?php $flr_map = $this->options; ?>
var flr_config = {
	'default':{
		'borderclr':'<?php echo $flr_map['borderclr']; ?>',
		'visnames':'<?php echo $flr_map['visnames']; ?>',
	}<?php echo (isset($flr_map['url_1']))?',':''; ?><?php $i = 1; 	while (isset($flr_map['url_'.$i])) { ?>'flr_<?php echo $i; ?>':{
		'hover': '<?php echo str_replace(array("\n","\r","\r\n","'"),array('','','','’'), is_array($flr_map['info_'.$i]) ?
				array_map('stripslashes_deep', $flr_map['info_'.$i]) : stripslashes($flr_map['info_'.$i])); ?>',
		'url':'<?php echo $flr_map['url_'.$i]; ?>',
		'targt':'<?php echo $flr_map['turl_'.$i]; ?>',
		'upclr':'<?php echo $flr_map['upclr_'.$i]; ?>',
		'ovrclr':'<?php echo $flr_map['ovrclr_'.$i]; ?>',
		'dwnclr':'<?php echo $flr_map['dwnclr_'.$i]; ?>',
		'enbl':<?php echo $flr_map['enbl_'.$i]=='1'?'true':'false'; ?>,
		'visnames':'flr_vn<?php echo $i; ?>',
		}
		<?php echo (isset($flr_map['url_'.($i+1)]))?',':''; ?><?php $i++;} ?>
}