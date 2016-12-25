 
/* ./libraries/tinyMCE/tinymce/jquery.tinymce.min.js*/ 
!function(a){function b(){function b(a){"remove"===a&&this.each(function(a,b){var c=e(b);c&&c.remove()}),this.find("span.mceEditor,div.mceEditor").each(function(a,b){var c=tinymce.get(b.id.replace(/_parent$/,""));c&&c.remove()})}function d(a){var c,d=this;if(null!=a)b.call(d),d.each(function(b,c){var d;(d=tinymce.get(c.id))&&d.setContent(a)});else if(d.length>0&&(c=tinymce.get(d[0].id)))return c.getContent()}function e(a){var b=null;return a&&a.id&&g.tinymce&&(b=tinymce.get(a.id)),b}function f(a){return!!(a&&a.length&&g.tinymce&&a.is(":tinymce"))}var h={};a.each(["text","html","val"],function(b,g){var i=h[g]=a.fn[g],j="text"===g;a.fn[g]=function(b){var g=this;if(!f(g))return i.apply(g,arguments);if(b!==c)return d.call(g.filter(":tinymce"),b),i.apply(g.not(":tinymce"),arguments),g;var h="",k=arguments;return(j?g:g.eq(0)).each(function(b,c){var d=e(c);h+=d?j?d.getContent().replace(/<(?:"[^"]*"|'[^']*'|[^'">])*>/g,""):d.getContent({save:!0}):i.apply(a(c),k)}),h}}),a.each(["append","prepend"],function(b,d){var g=h[d]=a.fn[d],i="prepend"===d;a.fn[d]=function(a){var b=this;return f(b)?a!==c?("string"==typeof a&&b.filter(":tinymce").each(function(b,c){var d=e(c);d&&d.setContent(i?a+d.getContent():d.getContent()+a)}),g.apply(b.not(":tinymce"),arguments),b):void 0:g.apply(b,arguments)}}),a.each(["remove","replaceWith","replaceAll","empty"],function(c,d){var e=h[d]=a.fn[d];a.fn[d]=function(){return b.call(this,d),e.apply(this,arguments)}}),h.attr=a.fn.attr,a.fn.attr=function(b,g){var i=this,j=arguments;if(!b||"value"!==b||!f(i))return g!==c?h.attr.apply(i,j):h.attr.apply(i,j);if(g!==c)return d.call(i.filter(":tinymce"),g),h.attr.apply(i.not(":tinymce"),j),i;var k=i[0],l=e(k);return l?l.getContent({save:!0}):h.attr.apply(a(k),j)}}var c,d,e,f=[],g=window;a.fn.tinymce=function(c){function h(){var d=[],f=0;e||(b(),e=!0),l.each(function(a,b){var e,g=b.id,h=c.oninit;g||(b.id=g=tinymce.DOM.uniqueId()),tinymce.get(g)||(e=new tinymce.Editor(g,c,tinymce.EditorManager),d.push(e),e.on("init",function(){var a,b=h;l.css("visibility",""),h&&++f==d.length&&("string"==typeof b&&(a=-1===b.indexOf(".")?null:tinymce.resolve(b.replace(/\.\w+$/,"")),b=tinymce.resolve(b)),b.apply(a||tinymce,d))}))}),a.each(d,function(a,b){b.render()})}var i,j,k,l=this,m="";if(!l.length)return l;if(!c)return window.tinymce?tinymce.get(l[0].id):null;if(l.css("visibility","hidden"),g.tinymce||d||!(i=c.script_url))1===d?f.push(h):h();else{d=1,j=i.substring(0,i.lastIndexOf("/")),-1!=i.indexOf(".min")&&(m=".min"),g.tinymce=g.tinyMCEPreInit||{base:j,suffix:m},-1!=i.indexOf("gzip")&&(k=c.language||"en",i=i+(/\?/.test(i)?"&":"?")+"js=true&core=true&suffix="+escape(m)+"&themes="+escape(c.theme||"modern")+"&plugins="+escape(c.plugins||"")+"&languages="+(k||""),g.tinyMCE_GZ||(g.tinyMCE_GZ={start:function(){function b(a){tinymce.ScriptLoader.markDone(tinymce.baseURI.toAbsolute(a))}b("langs/"+k+".js"),b("themes/"+c.theme+"/theme"+m+".js"),b("themes/"+c.theme+"/langs/"+k+".js"),a.each(c.plugins.split(","),function(a,c){c&&(b("plugins/"+c+"/plugin"+m+".js"),b("plugins/"+c+"/langs/"+k+".js"))})},end:function(){}}));var n=document.createElement("script");n.type="text/javascript",n.onload=n.onreadystatechange=function(b){b=b||window.event,2===d||"load"!=b.type&&!/complete|loaded/.test(n.readyState)||(tinymce.dom.Event.domLoaded=1,d=2,c.script_loaded&&c.script_loaded(),h(),a.each(f,function(a,b){b()}))},n.src=i,document.body.appendChild(n)}return l},a.extend(a.expr[":"],{tinymce:function(a){var b;return a.id&&"tinymce"in window&&(b=tinymce.get(a.id),b&&b.editorManager===tinymce)?!0:!1}})}(jQuery); 
/* ./templates/eqdkp_modern/eqdkp_modern.js*/ 
$(document).ready(function(){
	if(mmocms_header_type == 'full'){		
		/* My Chars Points */
		$('.mychars-points-tooltip .char').on('click', function(){
			$(this).parent().parent().children('tr').removeClass("active");
			$(this).parent().addClass("active");
			var current = $(this).parent().find('.current').html();
			var icons = $(this).parent().find('.icons').html();
			$(".mychars-points-target").html(icons + " "+current);
			var id = $(this).parent().attr('id');
			if(test_localstorage()) localStorage.setItem('mcp_'+mmocms_userid, id);
		});
		var saved = (test_localstorage()) ? localStorage.getItem('mcp_'+mmocms_userid) : "";
		
		if (saved && saved != "" && $('#'+saved).find('.current').html() != undefined){
			$('#'+saved).addClass("active");
			var current = $('#'+saved).find('.current').html();
			var icons = $('#'+saved).find('.icons').html();
			$(".mychars-points-target").html(icons + " "+current);
		} else {
			$('.mychars-points-tooltip .main').addClass("active");
			var current = $('.mychars-points-tooltip .main').find('.current').html();
			var icons = $('.mychars-points-tooltip .main').find('.icons').html();
			$(".mychars-points-target").html(icons + " "+current);
		}
		
		/* Main Menu */
		$('ul.mainmenu li.link_li_indexphp a.link_indexphp, ul.mainmenu li.link_li_entry_home a.link_entry_home').html('');
		$('ul.mainmenu').addClass('sf-menu');
		jQuery('ul.mainmenu').superfish({
				delay:		400,
				animation:	{opacity:'show',height:'show'},
				speed:		'fast'
		});
		
		/* Tooltip Triggers */
		$('.tooltip-trigger').on('click', function(event){
			event.preventDefault();
			var mytooltip = $(this).data('tooltip');
			$("#"+mytooltip).show('fast');
			$(document).on('click', function(event) {
				var count = $(event.target).parents('.'+mytooltip+'-container').length;
				if (count == 0){
					$("#"+mytooltip).hide('fast');
				}
			});
		});
		
		/* User Tooltip Doubleclick */
		$('.user-tooltip-trigger').on('dblclick', function(event){
			$("#user-tooltip").hide('fast');
			window.location=mmocms_controller_path+"Settings"+mmocms_seo_extension+mmocms_sid;
		});
		
		user_clock();
		
		$( ".openLoginModal" ).on('click', function() {
			$( "#dialog-login" ).dialog( "open" );
		});
		
		/* Notifications */
		$('.notification-tooltip-trigger').on('click', function(event){
			$(".notification-tooltip").hide('fast');
			$("#notification-tooltip-all").show('fast');
			notification_show_only('all');
			var classList = $(this).attr('class').split(/\s+/);
			for (var i = 0; i < classList.length; i++) {
			   if (classList[i] === 'notification-bubble-red' || classList[i] === 'notification-bubble-yellow' || classList[i] === 'notification-bubble-green') {
			     notification_show_only(classList[i]);
			     break;
			   }
			}
			
			$(document).on('click', function(event) {
				var count = $(event.target).parents('.notification-tooltip-container').length;
				if (count == 0 && (!$(event.target).hasClass('notification-markasread')) ){
					$(".notification-tooltip").hide('fast');
				}
			});
			
		});
		
		$('.notification-content').on('click', '.notification-markasread', function() {
			var ids = $(this).parent().parent().data('ids');
			$(this).parent().parent().remove();
			recalculate_notification_bubbles();
			$.get(mmocms_controller_path+"Notifications"+mmocms_seo_extension+mmocms_sid+"&markread&ids="+ids);
		});
		$('.notification-filter').on('click', function(event){
			if ($(this).hasClass('filtered')){
				//Show all of this
				if ($(this).hasClass('notification-bubble-green')) $('.notification-content ul li.prio_0').show();
				if ($(this).hasClass('notification-bubble-yellow')) $('.notification-content ul li.prio_1').show();
				if ($(this).hasClass('notification-bubble-red')) $('.notification-content ul li.prio_2').show();
				
				$(this).removeClass('filtered');
			} else {
				//hide all of this
				if ($(this).hasClass('notification-bubble-green')) $('.notification-content ul li.prio_0').hide();
				if ($(this).hasClass('notification-bubble-yellow')) $('.notification-content ul li.prio_1').hide();
				if ($(this).hasClass('notification-bubble-red')) $('.notification-content ul li.prio_2').hide();
				$(this).addClass('filtered');
			}
		});
		//Periodic Update of Notifications
		window.setTimeout("notification_update()", 1000*60*5);
	}
})

/* User clock */
function user_clock(){	
	var mydate = mymoment.format(user_clock_format);
	$('.user_time').html(mydate);
	mymoment.add(1, 's');
	window.setTimeout("user_clock()", 1000);
}

/* Some static Notification Functions */
var favicon;
function notification_favicon(red, yellow, green){
	if (typeof favicon === 'undefined') return;
	
	if (red > 0) {
		favicon.badge(red, {bgColor: '#d00'});
		return;
	}
	if (yellow > 0) {
		favicon.badge(yellow, {bgColor: '#F89406'});
		return;
	}
	if (green > 0) {
		favicon.badge(green, {bgColor: '#468847'});
		return;
	}
	favicon.reset();
}

function notification_show_only(name){
	if (name === 'all'){
		$('.notification-filter').removeClass('filtered');
		$('.notification-content ul li.prio_0, .notification-content ul li.prio_1, .notification-content ul li.prio_2').show();
	} else {
		$('.notification-content ul li.prio_0, .notification-content ul li.prio_1, .notification-content ul li.prio_2').hide();
		$('.notification-filter').addClass('filtered');
		$('.'+name+'.notification-filter').removeClass('filtered');
		if (name === 'notification-bubble-green') $('.notification-content ul li.prio_0').show();
		if (name === 'notification-bubble-yellow') $('.notification-content ul li.prio_1').show();
		if (name === 'notification-bubble-red') $('.notification-content ul li.prio_2').show();
	}
}

function notification_update(){			
	$.get(mmocms_controller_path+"Notifications"+mmocms_seo_extension+mmocms_sid+"&load", function(data){
		$('.notification-content ul').html(data);
		recalculate_notification_bubbles();
	});
		
	//5 Minute
	window.setTimeout("notification_update()", 1000*60*5);
}

function test_localstorage(){
	try {
		return ('localStorage' in window) && window[localstorage] !== null;
	} catch(e) {
		return false;
	}
}
 /* static code*/ 
$(document).ready(function(){$('.trcheckboxclick tr').click(function(event) {
						if (event.target.type !== 'checkbox') {
							$(':checkbox', this).trigger('click');
						}
					});
					
					$(function(){
						var search = $('#loginarea_search');
						original_val = search.val();
						search.focus(function(){
							if($(this).val()===original_val){
								$(this).val('');
							}
						})
						.blur(function(){
							if($(this).val()===''){
								$(this).val(original_val);
							}
						});
					});

			$('a.lightbox').each(function(index) {
				var image = $(this).html();
				var image_obj = $(this).find('img');
				var image_parent = image_obj.parent();
				var image_string = image_parent.html();
					
				var fullimage = $(this).attr('href');
				var imagetitle = image_obj.attr('alt');
				$(this).attr('title', imagetitle);			

				var image_style = $(this).children().attr('style');
				if (image_style) {
					if (image_style == "display: block; margin-left: auto; margin-right: auto;") image_style = image_style + " text-align:center;";
					$(this).attr('style', image_style);
				}
				var randomId = parseInt(Math.random() * 1000);
				var zoomIcon = '<div class="image_resized" onmouseover="$(\'#imgresize_'+randomId+'\').show()" onmouseout="$(\'#imgresize_' +randomId+'\').hide()" style="display:inline-block;"><div id="imgresize_'+randomId+'" class="markImageResized"><a title="'+imagetitle+'" href="'+fullimage+'" class="lightbox"><span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x image_zoom"></i><i class="fa fa-search-plus fa-stack-1x fa-inverse"></i></span><\/a><\/div>'+image_string+'<\/div>';
				$(this).html(zoomIcon);
			});
			});