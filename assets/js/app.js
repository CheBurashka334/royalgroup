'use strict';

import $ from 'jquery';
import ui from 'jquery-ui';
var tabs = ui.tabs;
var accordion = ui.accordion;

$(document).ready(function(){
	
	// tabs
	// http://api.jqueryui.com/tabs/
	$('.tabs').tabs({
		active: ($(this).find('.tab--active').index() != -1) ? $(this).find('.tab--active').index() : 0,
		create: function( event, ui){
			var disabledTabs = [];
			$(this).find('.tab--disable').each(function(){
				disabledTabs.push($(this).index());
			});
			$(this).tabs("option", "disabled", disabledTabs);
		}
	});
	
	// accordeon
	// http://api.jqueryui.com/accordion/
	$('.ui-accordion').accordion({
		collapsible: true,
		icons: false,
		active: false
	});
	$('.ui-accordion-header').on('click', 'a', function(e){
		e.stopPropagation();
	});
});