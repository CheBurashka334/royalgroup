/*
 * jQuery autoResize (textarea auto-resizer)
 * @copyright James Padolsey http://james.padolsey.com
 * @version 1.04
 */

(function($){
    
    $.fn.autoResize = function(options) {
        
        // Just some abstracted details,
        // to make plugin users happy:
        var settings = $.extend({
            onResize : function(){
				 
			},
            animate : true,
            animateDuration : 150,
            animateCallback : function(){},
            extraSpace : 20,
            limit: 1000
        }, options);
        
        // Only textarea's auto-resize:
        this.filter('textarea').each(function(){
            
                // Get rid of scrollbars and disable WebKit resizing:
            var textarea = $(this).css({resize:'none','overflow-y':'hidden'}),
            
                // Cache original height, for use later:
                origHeight = textarea.outerHeight(),
				
				                
                // Need clone of textarea, hidden off screen:
                clone = (function(){

                    // Properties which may effect space taken up by chracters:
                    var props = ['width','padding','border','lineHeight','textDecoration','letterSpacing'],
                        propOb = {};
  
                    // Create object of styles to apply:
                    $.each(props, function(i, prop){
                        propOb[prop] = textarea.css(prop);
                    });
                    
                    // Create <div> as hidden clone the actual textarea
                    // and insert before original textarea:
					var clone = document.createElement('div');
					return $(clone).css({
                        position: 'absolute',
                        top: 0,
                        left: 0,
						wordWrap: 'break-word',
						zIndex: -100,
						visibility: 'hidden',
						opacity: 0
                    }).css(propOb).attr('tabIndex','-1').insertBefore(textarea);
					
                })(),
                lastMaxHeight = null,
                updateSize = function() {
                    // Prepare the clone:
                    //clone.height(0).val($(this).val()).maxHeight(10000);
                    clone/*.height(0)*/.text($(this).val())/*.maxHeight(10000)*/;
					
					
                    // Find the height of text:
                    var maxHeight = Math.max(clone.outerHeight(), origHeight) + settings.extraSpace,
                        toChange = $(this)/*.add(clone)*/;
						
                    // Don't do anything if scrollTip hasen't changed:
                    if (lastMaxHeight === maxHeight) { return; }
                    lastMaxHeight = maxHeight;
                    // Check for limit:
                    if ( maxHeight >= settings.limit ) {
                        $(this).css('overflow-y','auto');
                        return;
                    }
                    // Fire off callback:
                    settings.onResize.call(this);
					
                    // Either animate or directly apply height:
                   settings.animate && textarea.css('display') === 'block' ?
                        toChange.stop().animate({height:maxHeight}, settings.animateDuration, settings.animateCallback)
                        : toChange.outerHeight(maxHeight);
						
					
                };
                                  
            // Bind namespaced handlers to appropriate events:
            textarea
                .unbind('.dynSiz')
                .bind('keyup.dynSiz', updateSize)
                .bind('keydown.dynSiz', updateSize)
                .bind('change.dynSiz', updateSize);
            
        });
        
        // Chain:
        return this;
        
    };
    
    
    
})(jQuery);