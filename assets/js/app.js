'use strict';
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
	
	// selectmenu
	// http://api.jqueryui.com/selectmenu/
	$('.custom-select').each(function(){
		var componentClass = this.className.split(' ', 1)[0];
		var id = componentClass + '-' + $(this).index();
		$(this).attr('id', id);
		var selectClass = componentClass + '__select';
		var isImgs = $(this).hasClass(componentClass + '--with-icons');
		var componentAppendTo = '#' + id;
		
		if(isImgs){
			if(!$(this).attr('data-icons-path')) {
				console.err('Where\'s icons?');
			} else {
				var imgsPath = $(this).attr('data-icons-path');
				$('.'+selectClass).selectmenu({
					appendTo: componentAppendTo,
					width: '100%',
					'isImgs': true,
					'imgsPath': imgsPath,
					'componentClass': componentClass,
					create: function(event, ui){
						var buttonWidget = $(this).selectmenu("widget");
						var img = $('<img>');
						img.attr('src', imgsPath + this.value + '.png');
						img.addClass(componentClass + '__icon');
						img.prependTo(buttonWidget);
					},
					change: function(event, ui){
						var buttonWidget = $(this).selectmenu("widget");
						buttonWidget.find('img').attr('src',ui.item.img.attr('src'));
					}
				});
			}
		} else {
			$('.'+selectClass).selectmenu({
				appendTo: componentAppendTo,
				width: '100%'
			});
		}
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

$.widget('ui.selectmenu', $.ui.selectmenu, {
	options: {
		isImgs: false,
		imgsPath: '',
		componentClass: ''
	},
	_renderItem: function(ul,item){
		var li = $('<li>');
		if(item.disabled){
			li.addClass('ui-state-disabled');
		}
		if(this.options.isImgs){
			item.img = $('<img>');
			item.img.attr('src', this.options.imgsPath + item.value + '.png');
			item.img.addClass(this.options.componentClass + '__icon');
			this._setText(li, item.label);
			item.img.prependTo(li);
		} else {
			this._setText(li, item.label);
		}
		return li.appendTo(ul);
	}
});