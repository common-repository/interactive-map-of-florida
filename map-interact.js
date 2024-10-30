function isTouchEnabled() {
 	return (('ontouchstart' in window)
      	|| (navigator.MaxTouchPoints > 0)
      	|| (navigator.msMaxTouchPoints > 0));
}
jQuery(function(){
	jQuery("path[id^=\"flr_\"]").each(function (i, e) {
		addEvent( jQuery(e).attr('id') );
	});
})
function addEvent(id,relationId){
	var _obj = jQuery('#'+id);
	var _Textobj = jQuery('#'+id+','+'#'+flr_config[id]['visnames']);
	var _h = jQuery('#map').height();

	jQuery('#'+['visnames']).attr({'fill':flr_config['default']['visnames']});

		_obj.attr({'fill':flr_config[id]['upclr'],'stroke':flr_config['default']['borderclr']});
		_Textobj.attr({'cursor':'default'});
		if(flr_config[id]['enbl'] == true){
			if (isTouchEnabled()) {
				_Textobj.on('touchstart', function(e){
					var touch = e.originalEvent.touches[0];
					var x=touch.pageX-10, y=touch.pageY+(-15);
					var maptipw=jQuery('#tipflr').outerWidth(), maptiph=jQuery('#tipflr').outerHeight(), 
					x=(x+maptipw>jQuery(document).scrollLeft()+jQuery(window).width())? x-maptipw-(20*2) : x
					y=(y+maptiph>jQuery(document).scrollTop()+jQuery(window).height())? jQuery(document).scrollTop()+jQuery(window).height()-maptiph-10 : y
					if(flr_config[id]['targt'] != 'none'){
						jQuery('#'+id).css({'fill':flr_config[id]['dwnclr']});
					}
					jQuery('#tipflr').show().html(flr_config[id]['hover']);
					jQuery('#tipflr').css({left:x, top:y})
				})
				_Textobj.on('touchend', function(){
					jQuery('#'+id).css({'fill':flr_config[id]['upclr']});
					if(flr_config[id]['targt'] == '_blank'){
						window.open(flr_config[id]['url']);	
					}else if(flr_config[id]['targt'] == '_self'){
						window.parent.location.href=flr_config[id]['url'];
					}
					jQuery('#tipflr').hide();
				})
			}
			_Textobj.attr({'cursor':'pointer'});
			_Textobj.hover(function(){
				//moving in/out effect
				jQuery('#tipflr').show().html(flr_config[id]['hover']);
				_obj.css({'fill':flr_config[id]['ovrclr']})
			},function(){
				jQuery('#tipflr').hide();
				jQuery('#'+id).css({'fill':flr_config[id]['upclr']});
			})
			if(flr_config[id]['targt'] != 'none'){
				//clicking effect
				_Textobj.mousedown(function(){
					jQuery('#'+id).css({'fill':flr_config[id]['dwnclr']});
				})
			}
			_Textobj.mouseup(function(){
				jQuery('#'+id).css({'fill':flr_config[id]['ovrclr']});
				if(flr_config[id]['targt'] == '_blank'){
					window.open(flr_config[id]['url']);	
				}else if(flr_config[id]['targt'] == '_self'){
					window.parent.location.href=flr_config[id]['url'];
				}
			})
			_Textobj.mousemove(function(e){
				var x=e.pageX+10, y=e.pageY+15;
				var maptipw=jQuery('#tipflr').outerWidth(), maptiph=jQuery('#tipflr').outerHeight(), 
				x=(x+maptipw>jQuery(document).scrollLeft()+jQuery(window).width())? x-maptipw-(20*2) : x
				y=(y+maptiph>jQuery(document).scrollTop()+jQuery(window).height())? jQuery(document).scrollTop()+jQuery(window).height()-maptiph-10 : y
				jQuery('#tipflr').css({left:x, top:y})
			})
		}	
}