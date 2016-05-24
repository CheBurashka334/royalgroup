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
	
	$('.content-places').on('mouseover mouseleave click', '.content-places__item', function(e){
		var componentClass = e.delegateTarget.className;
		var itemClass = componentClass + '__item';
		var hoverClass = itemClass + '--hover';
		var activeClass = itemClass + '--active';
		var disableClass = itemClass + '--disable';
		var inputClass = componentClass + '__input';
		var currentClass;
		if($(e.target).hasClass(disableClass)){
			e.preventDefault();
		} else {
			if(e.type == 'click'){
				currentClass = activeClass;
				$('.'+inputClass).val($(e.target).index() + 1);
			} else {
				currentClass = hoverClass;
			}
			if(e.type == 'mouseleave'){
				$(e.target).removeClass(currentClass);
				$(e.target).siblings().removeClass(currentClass);
			} else {
				$(e.target).addClass(currentClass);
				$(e.target).prevAll().addClass(currentClass);
				$(e.target).nextAll().removeClass(currentClass);
			}
		}
	});
	
});