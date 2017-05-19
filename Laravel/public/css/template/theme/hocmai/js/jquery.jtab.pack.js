(function($){ 
     $.fn.extend({  
         tabify: function(option) { 
            
            return this.each(function() { 
                //Creating a reference to the object 
                var obj = $(this);
				var container = $('#'+option.contentId);
				
                //Create a reference for all headings and it's content using .next() 
                //Remember to pass the object reference "obj" into the identifier. 
                var headings = $('a', obj);
				
                //Prepend the object with the tab container (ul). 
                //$('ul', obj).addClass('tabs');
                $('ul', obj).css({display : 'block'});
                
				var tabId = new Array();
				var i = 0;
				//Create a reference to the tabs for each obj 
                var tabs = $("ul.tabs li", obj);
                var tabs_url = $("ul.tabs li a", obj);
                
				//For every heading create an item (<li>) 
                headings.each(function() {
                    tabs.eq(0).addClass("sel");
                    
                   // if (tabs_url.(i).attr('href')
                    
					if (i+1 == headings.length && $.browser.msie && $.browser.version == '6.0' ) {
						tabs.eq(i).html('<a><span>' + $(this).text() + '. &nbsp;</span></a>');
					} else {
						tabs.eq(i).html('<a><span>' + $(this).text() + '</span></a>');
					}
					var anchor = $(this).attr('href');
					if (anchor.substring(0, 1) == '#') {
						$(anchor).hide();
					}
					tabId[i] = anchor;
					i++;
                }); 
				
				if (tabId[0].substring(0, 1) == '#') {
					container.html($(tabId[0]).html());
				} else {
                    container.html(option.indicator);
					container.load(tabId[0]);
				}

                tabs.click(function() {
                    //When a tab is clicked "de-activate" the old one 
                    tabs.removeClass("sel");
                    $(this).addClass("sel");
					
                    //And display the clicked tab 
                    var current = tabs.index($(this));
					if (tabId[current].substring(0, 1) == '#') {
						container.html($(tabId[current]).html());
					} else {
                        container.html(option.indicator);
						container.load(tabId[current]);
					}
					return false;
                });
            }); 
        } 
    }); 
})(jQuery);
