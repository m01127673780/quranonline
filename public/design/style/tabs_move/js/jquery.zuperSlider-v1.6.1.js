/*
 * zuperSlider v1.6.1 - http://hotwp.net/
 *
 * Copyright - 2012 Mihai Buricea (http://hotwp.net/)
 * All rights reserved.
 *
 * You may not modify and/or redistribute this file
 * save cases where Extended License has been purchased
 *
*/

(function ($) {
        
    /**
     * zuperSlider constructor
     * 
     * obj - the current slider instance
     * settings - slider seetings
     */          
    var zuperSlider = function (obj, settings) {
        
        var t = this, parent;
        
        // script versione
        t.ver = 'v1.6.1';
        
        // browser type (for ie support)
        if ($.browser.msie) {
            if (parseInt($.browser.version) <= 8) {
                t.ie78 = true;
            } else if (parseInt($.browser.version) == 9) {
                t.ie9 = true;
				t.ie9ResponsiveProblem = true;
            }
        }
        
        // the slider
        t.obj = obj;
        
        // settings
        t.settings = settings;
        
        // effect status
        t.active =  false; 
        
        // variable used by auto & destroy method
        t.delayStop = false;
        
        // get the ul element from slider
        t.ul = t.obj.find('>ul');
        
        // get the ul length
        t.ul_nr = t.ul.children().length;        
                
        // if  slider has only one <li> stops the slide
        if (t.ul_nr < 2) {
			// set the slider width and height
			t.ul.css({visibility: 'visible'});
			return;
        }
        
        // internal needs (do not modify)
        t.settings.animate.perPage = 1;       
        
        // callback function for public methods
        t.callbackFunction = null;
        
        // callback function for start or end of slides
        t.callbackFunctionItemsStart = [];
        t.callbackFunctionItemsEnd = [];
		
        // callback function for captions
        t.callbackCaption = null;
		
        // add loader
        t.obj.addClass('zuperSliderLoader');               
        
        // wrap container to ul element
        t.obj.wrapInner('<div class="container" />');
        
        // get the container width and height
        t.widthContainer = t.ul.width();
        t.heightContainer = t.ul.height(); 

        // get the slider width and height           
        t.sliderWidth   = t.obj.width();
        t.sliderHeight  = t.obj.height();
        
        if (t.settings.animate.type != 'carousel') {
                // get te zuper parent
                parent = t.obj.parent();

                // if attr style is on, remove it and get original max-width and height
                var parentStyle = parent.attr("style");
                parent.removeAttr('style');

                // get the original width and height if mode is 'none' or 'fullscreen' or 'fullwidth'
                if (t.settings.mode == 'none') {
                        t.originalWidth = parseInt(parent.css("max-width"));	
                        if (!t.originalWidth) {
                                t.originalWidth = parseInt(parent.css("width"));					
                        }	

                        t.originalHeight = parseInt(parent.css("height"));

                } else if (t.settings.mode == 'fullscreen') {
                        t.originalWidth = 1920;
                        t.originalHeight = 1200;
                } else if (t.settings.mode == 'fullwidth') {
                        t.originalWidth = 1920;
                        t.originalHeight = parseInt(parent.css("height"));
                }

                parent.attr("style", parentStyle);

                // set the proportion for width and for height
                t.propH = t.sliderWidth / t.originalWidth;
                t.propV = t.sliderHeight / t.originalHeight;		
        } else  {
            // set the proportion for width and for height
            t.propH = 1;
            t.propV = 1;
        }        

        // detect a 'touch screen'
        t.touchDevice = !!('ontouchstart' in window) ? 1 : 0;        

        // create the html, css and events for slider (sets up the slider structure)
        t.htmlCssEvents();
        
        // load the images and background-images of the slider
        t.loading();        
    }    
    
    // PRIVATE METHODS
    zuperSlider.prototype = {
        
        /**
         * Create html and css for slider
         */
        htmlCssEvents: function () {
            var t = this, i, j, temp, indexOrder;

            // index order of the slides
            if (t.settings.order.firstSlide == 'middle') {
                indexOrder = Math.floor(t.ul_nr / 2);
            } else {
                indexOrder  = (t.settings.order.firstSlide < 1)? 0 : parseInt(t.settings.order.firstSlide) - 1;
            }

            // create an array with <li> elements
            t.children  = [];
            t.ul.children().each(function () {
                t.children.push($(this));
            });            

            // create css for carousel slider
            if (t.settings.animate.type == 'carousel') {

                var k, li_nr, curr, el, posL = 0, marginTop, kk, marginLeftBool, opacity, contor,
                    car_nr2 = Math.floor(t.settings.animate.car_nr / 2);

                // calculate the slider width
                for (i = 10, k = 0; i >= 9 - car_nr2; i--) {
                    k += i;
                }

                // set the width for slider elements
                t.obj.css({
                    width: t.sliderWidth * k / 10
                }); 
                t.ul.parent().css({
                    width: t.sliderWidth * k / 10
                });
                t.ul.css({
                    width: t.sliderWidth * k / 10
                });

                // clone <li> to have minim "t.settings.animate.car_nr" li on the page
                li_nr = t.settings.animate.car_nr - t.ul_nr;                    
                for (i = 0; i < li_nr; i++) {                        
                    if (i % 2 == 0) {                            
                        el = t.children[t.ul_nr - 1].clone();
                        t.ul.append(el);
                        t.children.push(el);                            
                    } else {                            
                        el = t.children[0].clone();
                        t.ul.prepend(el);
                        t.children.unshift(el);                            
                    }
                    t.ul_nr++;                        
                }

                // order the elements with index order
                temp = t.children.slice();
                for (i = 0, k = car_nr2; i < t.ul_nr; i++, indexOrder++, k++) {                        
                    if (indexOrder >= t.ul_nr) {
                        indexOrder = 0;
                    } 
                    if (k >= t.ul_nr) {
                        k = 0;
                    }

                    t.children[k] = temp[indexOrder];
                }

                // clones the <li> if I have too few slides
                if (t.ul_nr - t.settings.animate.car_nr < car_nr2) {
                    for (i = 0; i < t.ul_nr; i++) {
                        j = t.children[i].clone();
                        t.ul.append(j);
                        t.children.push(j);
                    }
                    t.ul_nr *= 2;
                }
                
                // add class active3 on the middle slide
                t.children[car_nr2].addClass('active3');
                t.index = car_nr2;

                // contor that hold the variable to manipulate the li
                contor      = 9 - car_nr2; 
                 // align the slide verticaly
                marginTop   = [5, 6, 7, 7.5, 7.7, 7.8, 7.9, 7.92, 7.94, 7.96, 7.98],
                // kk is index for marginTop
                kk          = car_nr2,  
                // image opacity
                opacity     = 0; 

                // build the <li> position
                for (i = 0; i < t.ul_nr; i++) {
                    curr = t.children[i];
                    curr.hide();
                    if (i < t.settings.animate.car_nr) {
                        if (i <= car_nr2) {
                            posL += t.sliderWidth * contor / 20;
                            contor++;
                            kk--;
                            opacity = contor / 10;
                        } else if (i >  car_nr2) {
                            posL += t.sliderWidth * (contor + 1) / 20;
                            contor--;
                            kk++;
                            opacity = contor / 10;
                        }

                        if (typeof marginTop[kk] === "undefined") marginTop[kk] = 0;

                        // change the <li>
                        curr.css({ 
                            width:      t.sliderWidth * contor / 10,
                            height:     t.sliderHeight * contor / 10,
                            zIndex:     contor,
                            left:       posL,
                            marginTop:  (t.sliderHeight - t.sliderHeight * contor / 10) * (marginTop[kk] / 10)
                        });

                        // positioning images of slider
                        curr.find('img').css({ 
                            width:      t.sliderWidth * contor / 10,
                            height:     t.sliderHeight * contor / 10,
                            opacity:    opacity
                        });

                    } else {
                        contor = 9 - car_nr2;

                        curr.css({
                            width:      t.sliderWidth * contor / 10,
                            height:     t.sliderHeight * contor / 10,
                            zIndex:     contor,
                            left:       0,
                            marginTop:  (t.sliderHeight - t.sliderHeight * contor / 10) * (marginTop[kk] / 10),
                            opacity:    0
                        });

                        curr.find('img').css({ 
                            width:      t.sliderWidth * contor / 10,
                            height:     t.sliderHeight * contor / 10,
                            opacity:    contor / 10
                        });
                    }
                }

                // on click animate the carousel
                t.ul.children().bind('click', function (e) {

                    var elem = $(this);

                    for (i = 0; i < t.children.length; i++) {
                        if (elem[0] == t.children[i][0]) {
                            break;
                        }
                    }

                    if (!t.children[i].hasClass('active3')) {
                        hotwp.jumpToItem(i, t);
                        return false;
                    }
                });
            } else {                
                // ordonate de slides
                temp = t.children.slice();
                for (i = 0; i < t.ul_nr; i++, indexOrder++) {
                    if (indexOrder >= t.ul_nr) indexOrder = 0;
                    t.children[i] = temp[indexOrder];
                }

                // start slide
                if (t.settings.order.startSlide == 'middle') {
                    t.index = Math.floor(t.ul_nr / 2);
                } else {
                    t.index  = (t.settings.order.startSlide < 1)? 0 : parseInt(t.settings.order.startSlide) - 1;
                }
                
                // multiple effects is active
                if (t.settings.multipleEff.active) {
                    t.multipleEffects(t.index);
                }                
                
           
            }

            // touch navigation is enabled
            if (t.propertyIsActive('touchNavigation')) {                           
                
                t.ul.addClass('grab');

                if (t.touchDevice) {
                    t.mousedown = "touchstart.hs";
                    t.mousemove = "touchmove.hs";
                    t.mouseup   = "touchend.hs";
                } else {
                    t.mousedown = "mousedown.hs";
                    t.mousemove = "mousemove.hs";
                    t.mouseup   = "mouseup.hs"
                }

                t.ul.bind(t.mousedown, function (e) {            												
					
                    // state for links
                    t.clickState = true;                    				
					
                    // if current element has class nonDrag -> don't do drag or is link                    
                    if ($(e.target).hasClass('nonDrag')) {
                        e.stopImmediatePropagation();
                        e.stopPropagation();
                        return true;
                    }
                    
                    // if 'touch device' is false
                    if (!t.touchDevice) {
                        if (e.preventDefault) { 
                            e.preventDefault();
                        }                        
                    }                                      
                   
                    var ee = e;
                                        
                    if (t.touchDevice) {
                        var b = e.originalEvent.touches;
                        if (b.length > 1) {
                            return false
                        }
                        e = b[0];
                    }           
                    
                    // touch is started
                    t.touchStart = 0;
                    
                    t.touchPos = 0

                    if (t.ie78) {
						// disable multiple effects 
						if (t.active) return false;
						
						t.active = true;           
						
                        var s = {};
                        s.pageX = e.pageX;
                        
                        $(document).bind(t.mousemove, function (e) {
                            if (e.preventDefault) { 
                                e.preventDefault();
                            }
                            
                            s.pageX1 = e.pageX;
                          
                            t.touchMouseMove(s);   
                        });

                        $(document).bind(t.mouseup, t, t.touchMouseUp);
                        
                    } else  {
					
                        $(document).bind(t.mousemove, {pageX: e.pageX, pageY: e.pageY, me: t, ee: ee}, t.preTouchMouseMove);

                        $(document).bind(t.mouseup, t, t.touchMouseUp);                        
                    }

                    return true;

                }).bind('click', function (e) {   
                    return t.clickState;
                });
            }

            // if navigation is enabled
            if (t.propertyIsActive('nav')) {

                var nav_class = "nav", cnt, ulNavChildren;

                // add nav items
                if (t.settings.nav.type == 'numbers') {
                    nav_class = "nav_num";
                } else if (t.settings.nav.type == 'images') {
                    nav_class = "nav_img";
                }

                cnt = '<div class="zuperNav"><ul class="' + nav_class + '">';

                for (i = 0; i < t.ul_nr; i++) {
                    cnt += (i == t.index)? '<li class="active">' : '<li>';
                    // numbers
                    if (t.settings.nav.type == 'numbers') {
                        cnt += i+1;
                    }
                    cnt += '</li>';
                }

                cnt += '</ul></div>';

                t.nav = $(cnt);

                // add navigation to slider
                t.nav.appendTo(t.obj);               
                
                // create an array with navagation <li> elements
                t.navChildren = [];
                ulNavChildren = t.nav.find('ul').children();
                
                ulNavChildren.each(function () {
                    t.navChildren.push($(this));
                });
                
                if (t.settings.navigateOnHover) {
                    ulNavChildren.bind('mouseenter', function (e) {
                        hotwp.jumpToItem($(this).index(), t);
                    });                     
                }
                
                ulNavChildren.bind('click', function (e) {
                    hotwp.jumpToItem($(this).index(), t);
                });                  

                // thumbs for navigation is enabled
                if (t.settings.nav.thumbs) {

                    var thumb;

                    // on hover show the thumbs
                    t.nav.find('li').hover(
                        function () {

                            var what = $(this), position = what.position(), img, temp, src, index = what.index();

                            if (t.children[index].attr('dataThumbSrc')) {
                                src = t.children[index].attr('dataThumbSrc');
                            } else {
                                src = t.children[index].find('img').attr('src');
                            }

                            temp    = t.settings.nav.thumbsDimension.split('x');
                            img     = t.cropResizeImage(src, temp[0], temp[1]);

                            thumb = $('<div class="nav_thumb"><div style="width:' + temp[0] + 'px;height:' + temp[1] + 'px;"><img src="' + img.src + '" width="' + img.width + '" height="' + img.height + '" style="margin-left:' + img.style.marginLeft + ';margin-top:' + img.style.marginTop + ';" /></div></div>');
                            t.nav.append(thumb);

                            thumb.css({
                                top: position.top - thumb.outerHeight(true) - 4,
                                left: position.left - thumb.outerWidth(true) / 2 + what.outerWidth(true) / 2
                            });
                            
                            // if 'touch device' trigger the click event on navigation
                            if (t.touchDevice) {
                                what.trigger('click');
                            }
                        },
                        function () {
                            if (thumb) {
                                thumb.remove();
                            }
                        }
                        );
                }
            }

            // next/prev is enabled
            var next_prev = "";

            // if next button is active
            if (t.settings.arrows.next) {
                next_prev = '<div class="arrow next"></div>';
            }

            // if prev button is active
            if (t.settings.arrows.prev) {
                next_prev += '<div class="arrow prev"></div>';
            }

            if (next_prev) {
                var nextPrev = $(next_prev);

                // add to slider
                nextPrev.appendTo(t.obj);

                // events for arrows
                nextPrev.bind('click', function () {
                    
                    var elem = $(this);

                    if (elem.hasClass('next') ) {
                        hotwp.nextItem(t);
                    } else if (elem.hasClass('prev')) {
                        hotwp.prevItem(t);
                    }
                });
                
                if (t.settings.navigateOnHover) {
                    nextPrev.bind('mouseenter', function () {
                        var elem = $(this);

                        if (elem.hasClass('next') ) {
                            hotwp.nextItem(t);
                        } else if (elem.hasClass('prev')) {
                            hotwp.prevItem(t);
                        }
                    });                  
                }                
            }

            // auto is enabled
            if (t.settings.auto.active) {
                
                // the slider flag that is false by default
                t.flagStop = false;
                
                // stop slider on hover (if that option is enabled)                
                t.hoverStop = false;
                
                // stop the auto when the touch is on
                t.touchStop = false;
                          
                // circular is not supported on ie7 and ie8
                if (t.settings.auto.timer == 'circular' && t.ie78) {
                    t.settings.auto.timer = 'none';
                }
                
                // none
                if (t.settings.auto.timer == 'none') { 
                    t.intervalTimer = '';
                    t.intervalContor = 5;

                // line
                } else if (t.settings.auto.timer == 'line') { 
                    var wrapTimer = $('<div class="wrapTimer"><div class="timer"></div></div>');
                    t.obj.append(wrapTimer);
                    wrapTimer.css({
                        top : t.customPosition(wrapTimer, t.settings.auto.posVertical, 'vertical'),
                        left: t.customPosition(wrapTimer, t.settings.auto.posHorizontal, 'horizontal')
                    });

                    t.intervalTimer = wrapTimer.find('.timer');
                    t.lineWidth = parseInt(wrapTimer.css("width"));
                    t.intervalTimer.css({width: 0});

                    t.intervalContor = parseInt(t.lineWidth / 2);

                // circular
                } else if (t.settings.auto.timer == 'circular') {
                    t.intervalTimer = $('<div class="circular"><div class="circularWrap"><div class="circularLeft"></div><div class="circularRight"></div></div></div>');
                    t.obj.append(t.intervalTimer);

                    t.intervalTimer.css({
                        top : t.customPosition(t.intervalTimer, t.settings.auto.posVertical, 'vertical'),
                        left: t.customPosition(t.intervalTimer, t.settings.auto.posHorizontal, 'horizontal')
                    });

                    t.intervalCircularRight = t.intervalTimer.find('.circularRight');
                    t.intervalCircularLeft = t.intervalTimer.find('.circularLeft');
                    t.intervalCircularWrap = t.intervalTimer.find('.circularWrap');

                    t.intervalContor = 360;

                // numbers
                } else if (t.settings.auto.timer == 'numbers') {
                    t.intervalTimer = $( '<div class="numbers"></div>' );
                    t.obj.append(t.intervalTimer);

                    t.intervalTimer.css({
                        top : t.customPosition(t.intervalTimer, t.settings.auto.posVertical, 'vertical'),
                        left: t.customPosition(t.intervalTimer, t.settings.auto.posHorizontal, 'horizontal')
                    });

                    t.intervalContor = 99;
                }
				
                    t.intervalTimeInter = t.settings.auto.time / t.intervalContor;

                // if play/pause buton is enabled
                if (t.settings.auto.playPause) {
                    var play = $('<div class="playPause play"></div>');
                    t.obj.append(play);

                    play.css({
                        top : t.customPosition(play, t.settings.auto.playPauseVertical, 'vertical'),
                        left: t.customPosition(play, t.settings.auto.playPauseHorizontal, 'horizontal')
                    });

                    // on click pause/resume the slider
                    play.bind('click', function () {
                        if (t.settings.auto.playPause) {
                            t.settings.auto.playPause = false;
                            
                            play.removeClass('play').addClass('pause');

                            // pause the auto
                            t.flagStop = true;
                            clearInterval(t.run);
                        } else {                         
                            t.settings.auto.playPause = true;
                            
                            play.removeClass('pause').addClass('play');

                            // start the auto
                            t.flagStop = false;
                            t.startAuto();
                        }
                    });

                    // play / pause state on hover and 'touch device' is false
                    if (t.settings.auto.playPauseHover && !t.touchDevice) {                       
                        t.obj.hover(
                            function () {
                                play.show();
                            },
                            function () {                                
                                play.hide();
                            }
                            );
                    }
                }
                
                // on slider hover stop the auto and 'touch device' is false
                if (t.settings.auto.hoverStop && !t.touchDevice) {

                    t.obj.hover(
                        function () {
                            t.hoverStop = true;
                            clearInterval(t.run);
                        },
                        function () {
                            t.hoverStop = false;
                            t.startAuto();
                        }
                    );
                }
            }  
            
            // if mouse wheel is enabled 
            if (t.settings.navigateWithMouseWheel) {

                /** Event handler for mouse wheel event.
                */
                function wheel(event){
                        var delta = 0;
                        event = event || window.event;
                        
                        if (event.wheelDelta) {
                            delta = event.wheelDelta/120;
                        } else if (event.detail) {
                            delta = -event.detail/3;
                        }                                                
                        
                        if (delta > 0) {                            
                            hotwp.prevItem(t);
                        } else {
                            hotwp.nextItem(t);                            
                        }
 
                        if (event.preventDefault)
                                event.preventDefault();
                        event.returnValue = false;
                }

                if (window.addEventListener) {
                    t.obj[0].addEventListener('DOMMouseScroll', wheel, false);
                    
					if (t.propertyIsActive('nav')) {
						t.nav[0].addEventListener('DOMMouseScroll', function (event) {
							return true;
							event.stopPropagation();
							
							var delta = 0;
							event = event || window.event;
							
							if (event.wheelDelta) {
								delta = event.wheelDelta/120;
							} else if (event.detail) {
								delta = -event.detail/3;
							}                                                
							
							var scrollBar = t.nav.find('.zuperScrollbar'),
								scrollUl = t.nav.find('ul'),
								topRight, topLeft;                              
							
							if (delta > 0) {                            

								topRight = parseInt(scrollBar.css("top")) - t.tempRight;
								topLeft = parseInt(scrollUl.css("top")) + t.tempLeft; 

								if (topLeft >= 0) {
									topRight = 0;
									topLeft = 0;
								}

							} else {
								
								var ulHeight = t.nav.height();
								
								topRight = parseInt(scrollBar.css("top")) + t.tempRight;
								topLeft = parseInt(scrollUl.css("top")) - t.tempLeft;                                                                                     
								
								if (Math.abs(topLeft) >= Math.abs(scrollUl.height() - ulHeight)) {
																	
									topRight = ulHeight - scrollBar.height() + 1;
									topLeft = -scrollUl.height() + ulHeight;                                
								}
							   
							}
							
							t.nav.find('.zuperScrollbar').css({top: topRight});
							t.nav.find('ul').css({top: topLeft}); 
	 
							if (event.preventDefault)
									event.preventDefault();
							event.returnValue = false;
							
						}, false);
					}
                }
                t.obj[0].onmousewheel = wheel;

            }
            
            // if responsive is enabled
            if (t.settings.responsive && t.settings.animate.type != 'carousel') {
                //var resize = 'onorientationchange' in window ? 'orientationchange.hs' : 'resize.hs';				
                var resize = 'resize.hs';
				
                $(window).bind(resize, function () {							

                    if (t.ie9ResponsiveProblem) {
                        t.ie9ResponsiveProblem = false;
                        return;
                    }				

                    var newWidth = t.obj.width(),
                        newHeight = t.obj.height();		

                    if (newWidth != t.sliderWidth || newHeight != t.sliderHeight) {
                        
                        t.sliderWidth = newWidth;
                        t.sliderHeight = newHeight;

                        // get the container width and height
                        t.widthContainer = t.ul.width();
                        t.heightContainer = t.ul.height();                         

                        t.propH = t.sliderWidth / t.originalWidth;
                        t.propV = t.sliderHeight / t.originalHeight;

                        // update position for slider elements
                        t.updateSliderDimension();	
                    }

					
                });        
            }            
        },

        /**
         * Load all images slide
         */
        loading: function () {

            var imgs = [], i, img, propertyValue, t = this, src;

            $.expr[':'].uncached = function (elem) {
                if (!$(elem).is('img[src!=""]')) {
                    return false;
                }

                img = document.createElement('img');
                img.src = elem.src;

                return !img.complete;
            }

            var matchUrl = /url\((['"]?)(.*?)\1\)/g;

            // get all elements
            t.obj.find('*').each(function () {

                var elem = $(this);

                if (elem.is('img:uncached')) {
                    imgs.push({
                        src: elem.attr('src'),
                        element: elem[0]
                    });
                }

                // background image
                propertyValue = elem.css('backgroundImage');
                if (propertyValue) {
                    var match;
                    while ((match = matchUrl.exec(propertyValue))) {
                        imgs.push({
                            src: match[2],
                            element: elem[0]
                        });
                    }
                }

                // if dataThumbSrc attribute is set get the value
                propertyValue = elem.attr('dataThumbSrc');
                if (propertyValue) {
                    imgs.push({
                        src:propertyValue,
                        element: elem[0]
                    });
                }
            });

            // slider has background-image
            propertyValue = t.obj.css('backgroundImage');
            if ( propertyValue) {
                var match;
                while ((match = matchUrl.exec(propertyValue))) {
                    imgs.push({
                        src: match[2]
                    });
                }
            }

            var imgsLength = imgs.length, imgsLoaded = 0;

            if (imgsLength == 0) {
                t.showSlider(t.obj);
            }

            // load  the image and call showSlider method on done
            for (i = 0; i < imgsLength; i++) {
                img = new Image();
                $(img).bind('load.hs error.hs', function () {
                    imgsLoaded++;

                    if (imgsLoaded == imgsLength) {
                        t.showSlider(t.obj);
                        return false;
                    }
                });
                img.src = imgs[i].src;
            }
        },
        
        /**
         * After the images is loaded show the slider
         */
        showSlider: function () {
            var i, img, txt, temp, src, img, oneTime = true, t = this;

            // if navigation 'type = images' recalculate the navigation dimension
            if (t.propertyIsActive('navImages')) {

                // crop & resize & append images
                for (i = 0; i < t.ul_nr; i++) {
                    if (t.children[i].attr('dataThumbSrc')) {
                        src = t.children[i].attr('dataThumbSrc');
                    } else {
                        src = t.children[i].find('img').attr('src');
                    }

                    temp    = t.settings.nav.imagesDimension.split('x');
                    img     = t.cropResizeImage(src, temp[0], temp[1]);

                    t.navChildren[i].css({
                        width: temp[0],
                        height: temp[1]
                    });

                    t.navChildren[i].append(img);
                    txt = t.children[i].attr('dataThumbContent');

                    if (txt) t.navChildren[i].append(txt);
                }
                
                var scrollWrap = t.nav.height(),
                    scrollUl = t.nav.find('ul').height();
                
                t.scrollHeight = 50;
                
                temp = scrollWrap - scrollUl;
                
                if (temp <= 0) {
                    temp = Math.abs(temp);
                    var temp2 = Math.ceil(temp / t.scrollHeight);
                    
                    t.tempLeft = Math.ceil(temp / temp2);

                    t.tempRight = scrollWrap / (temp2 + 1);
                    
                } else {
                    
                }

                //t.nav.append('<div class="zuperWrapScrollbar"><div class="zuperScrollbar" style="height:' + t.tempRight + 'px"></div></div>');
            }
            
            // positiong the slider elements
            t.updateSliderDimension();
            
            // remove the loader
            t.obj.removeClass('zuperSliderLoader');

            // show the slider
            if (t.settings.animate.type == 'carousel') {
                t.ul.parent().css({visibility: 'visible'});

                var car_nr2 = Math.floor(t.settings.animate.car_nr / 2), showLi;

                // show the slide elements
                i = car_nr2;
                showLi = setInterval(function () {
                    if (i == car_nr2) {
                        t.children[i].fadeIn();
                    } else {
                        t.children[i].fadeIn();
                        t.children[t.settings.animate.car_nr - 1 - i].fadeIn();
                    }

                    if (i <= 0) {
                        clearInterval(showLi);

                        t.obj.children().each(function () {
                            var tt = $(this);
                            if (!tt.hasClass('container')) {
                                tt.css({display: 'none', visibility: 'visible'});
                            }
                            
                        });
                        t.obj.children().show();
                        
                        if(t.propertyIsActive('caption')) {
                            t.caption(t.children[t.index], 'on');
                        }
                            
                        if(t.propertyIsActive('caption')) {
                            t.caption(t.children[t.index], 'on');
                        }                            
                        if (t.settings.auto.playPauseHover) {
                            t.obj.find('.playPause').hide();
                        }                                
                            
                    }

                    i--;
                }, 150);
                
                
            } else {
                t.obj.children().each(function () {                    
                    $(this).css({display: 'none', visibility: 'visible'});
                });
                
                // add class active3 on slide
                t.children[t.index].addClass('active3');
                
                // show de slider with fadeIn method
                t.obj.children().fadeIn('normal',
                    function () {                      
                        if (oneTime) {
                            oneTime = false;
                            if(t.propertyIsActive('caption')) {
                                t.caption(t.children[t.index], 'on');

                            }
                            
                            // if  play/pause button is enabled hide it
                            if (t.settings.auto.playPauseHover) {
                                t.obj.find('.playPause').hide();
                            }
                        }
                    });
            }
            
            // start the auto if auto is enabled
            if (t.settings.auto.active){            
                t.startAuto();
            }
        },
        
        /**
         * Update slider elements position
         */
        updateSliderDimension: function () {
            var temp, t = this;
			
            t.active = true;
            // scale and center images that have class="zuper"
            if (t.settings.bgImageScaleAndCenter) {
                // array with images
                var imagesArray = [], i, j, dim, widthImg, heightImg, propWidth, propHeight, img, originalW, originalH;

                for(i = 0; i < t.children.length; i++) {
                    img = t.children[i].find('img.zuper');
                    
                    if (img.length){
                        imagesArray.push(img[0]);
                    }
                }
                
                if (imagesArray.length > 0) {
                    for (i = 0; i < imagesArray.length; i++) {        
                        
						widthImg = parseInt(imagesArray[i].getAttribute('data-width'));
						heightImg = parseInt(imagesArray[i].getAttribute('data-height'));
						
						if (!widthImg) {
							widthImg    = imagesArray[i].width;
							imagesArray[i].setAttribute('data-width', widthImg)							
						}						
						if (!heightImg) {
							heightImg    = imagesArray[i].height;
							imagesArray[i].setAttribute('data-height', heightImg)							
						}
						
                        propWidth   = widthImg / t.sliderWidth;
                        propHeight  = heightImg / t.sliderHeight;								
								
						// remove img style
						imagesArray[i].setAttribute('style', '');						
						
                        if (propWidth < 1 || propHeight < 1) {
                            if (widthImg > t.sliderWidth) {
                                imagesArray[i].style.marginLeft = -Math.floor((widthImg - t.sliderWidth) / 2) + "px";
                            } else if (widthImg < t.sliderWidth) {
                                imagesArray[i].style.marginLeft = Math.floor((t.sliderWidth - widthImg) / 2) + "px";
                            }

                            if (heightImg > t.sliderHeight) {
                                imagesArray[i].style.marginTop = -Math.floor((heightImg - t.sliderHeight) / 2) + "px";
                            } else if (heightImg < t.sliderHeight) {
                                imagesArray[i].style.marginTop = Math.floor((t.sliderHeight - heightImg) / 2) + "px";
                            }
                        } else if (propWidth > propHeight) {
                            imagesArray[i].width = Math.ceil(widthImg / propHeight);
                            imagesArray[i].height = Math.ceil(heightImg / propHeight);

                            imagesArray[i].style.marginLeft = -Math.floor((widthImg / propHeight - t.sliderWidth) / 2) + "px";
                        } else if (propHeight > propWidth) {
                            imagesArray[i].width = Math.ceil(widthImg / propWidth);
                            imagesArray[i].height = Math.ceil(heightImg / propWidth);

                            imagesArray[i].style.marginTop = -Math.floor((heightImg / propWidth - t.sliderHeight) / 2) + "px";
                        } else {
                            imagesArray[i].width = Math.ceil(widthImg / propWidth);
                            imagesArray[i].height = Math.ceil(heightImg / propHeight);
                        }
                    } 
                }
            }             
            
            // update arrows position
            if (t.settings.arrows.next) {
                temp = t.obj.find('.next');

                //set the css for next button
                temp.css({
                    top : t.customPosition(temp, t.settings.arrows.nextVertical, 'vertical'),
                    left: t.customPosition(temp, t.settings.arrows.nextHorizontal, 'horizontal')
                });
            }

            if (t.settings.arrows.prev) {
                temp = t.obj.find('.prev');

                //set the css for prev button
                temp.css({
                    top : t.customPosition(temp, t.settings.arrows.prevVertical, 'vertical'),
                    left: t.customPosition(temp, t.settings.arrows.prevHorizontal, 'horizontal')
                });
            }   

            // update auto position
            if (t.settings.auto.active) {  
                if (t.settings.auto.timer == 'line') {
                    temp = t.obj.find('.wrapTimer');
                    
                    temp.css({
                        top : t.customPosition(temp, t.settings.auto.posVertical, 'vertical'),
                        left: t.customPosition(temp, t.settings.auto.posHorizontal, 'horizontal')                    
                    });
                    
                    t.lineWidth  = parseInt(temp.css('width')) * t.propH;

                } else if (t.settings.auto.timer == 'circular') {
                    temp = t.obj.find('.circular');                                        
                    
                    temp.css({
                        top : t.customPosition(temp, t.settings.auto.posVertical, 'vertical'),
                        left: t.customPosition(temp, t.settings.auto.posHorizontal, 'horizontal')
                    });

                } else if (t.settings.auto.timer == 'numbers') {
                    temp = t.obj.find('.numbers');

                   temp.css({
                        top : t.customPosition(temp, t.settings.auto.posVertical, 'vertical'),
                        left: t.customPosition(temp, t.settings.auto.posHorizontal, 'horizontal')
                    });
                }

                if (t.settings.auto.playPause) {
                    temp = t.obj.find('.playPause');

                    temp.css({
                        top : t.customPosition(temp, t.settings.auto.playPauseVertical, 'vertical'),
                        left: t.customPosition(temp, t.settings.auto.playPauseHorizontal, 'horizontal')
                    });
                }
            }              
            
            // update nav position
            if (t.propertyIsActive('nav')) {
                t.nav.css({
                    top : t.customPosition(t.nav, t.settings.nav.navVertical, 'vertical'),
                    left: t.customPosition(t.nav, t.settings.nav.navHorizontal, 'horizontal')
                })
            }            
            
			// if caption is enabled run the calback function for captions
			if(t.propertyIsActive('caption')) {
				t.settings.captionCallback.call(t.obj, t.sliderWidth, t.sliderHeight);
			}							
			
            t.active = false;
        },
        
        /**
         * Update caption position and dimension
         */
        updateCaptionPosition: function () {   
                var cap = [], t = this, i, valTop, valLeft;
                
                // get all the captions
                t.obj.find('.caption').each(function () {
                    cap.push($(this));
                });                  
                
                // update position and dimension
                for (i = 0; i < cap.length; i++) {
                    valTop = 0;
                    valLeft = 0;
                    
                    cap[i].removeAttr('style');
                    var paddingLeft, paddingTop, paddingRight, paddingBottom, css = {};
                    
                    if (parseInt(cap[i].css("top")) > t.originalHeight / 2) {
                        if (t.propV < 0.9) {
                            valTop = 40;
                        }

                        if (t.propV < 0.8) {
                            valTop = 60;
                        }

                        if (t.propV < 0.7) {
                            valTop = 80;
                        }                        
                    }
                    
					// @bug cu t.originalWidth
                    if (parseInt(cap[i].css("left")) > t.originalWidth / 2) {
                        if (t.propH < 0.9) {
                            valLeft = 40;
                        }

                        if (t.propH < 0.8) {
                            valLeft = 60;
                        }

                        if (t.propH < 0.7) {
                            valLeft = 80;
                        }                      
                    }

                            
                    css.opacity = 1;
                    css.top = parseInt(cap[i].css("top")) * t.propV - valTop;
                    css.left = parseInt(cap[i].css("left")) * t.propH - valLeft;
                    
                    cap[i].css(css);
                    
                    if (t.propH < 0.6) {
                        cap[i].hide();
                    }                    
                }            
        },
        
        /**
         * When the touch is finished
         */
        touchMouseUp: function (e) {
            var t = e.data;

            $(document).unbind(t.mousemove + ' ' + t.mouseup);            
           
            t.ul.removeClass('grabbing');

            var index2 = t.index, index1 = t.index, pos;

            t.touchStop = false;

            if (t.touchPos == 0) {
                t.active = false;
            } else if (Math.abs(t.touchPos) < 31) {
                
                // disable multiple effects
                t.off(index1, index2);
                
                // animate the slide position
                t.ul.animate({left: 0}, t.settings.animate.speed, 'easeOutBounce',
                    function () {
                        t.ul.children().removeClass('active2').removeAttr('style');
                        t.on(index2);
                    }
                );
            } else {
                if (t.touchPos > 0) {
                    index2 = Math.ceil(t.touchPos / t.widthContainer) + t.index;
                    pos = -Math.abs(t.index - index2) * t.widthContainer;
                    if (index2 > t.ul_nr - 1) {
                        index2 = index2 - t.ul_nr;
                    }
                } else if (t.touchPos < 0) {
                    index2 = t.index - Math.ceil(-t.touchPos / t.widthContainer);
                    pos = Math.abs(t.index - index2) * t.widthContainer;
                    if (index2 < 0) {
                        index2 = t.ul_nr + index2;
                    }

                }

                // disable multiple effects
                t.off(index1, index2);

                // move the ul element
                t.ul.animate({
                    left: pos
                }, t.settings.animate.speed,
                function () {
                    t.ul.children().removeClass().removeAttr('style');
                    t.children[index2].addClass('active3');

                    t.ul.css({
                        left: 0
                    });

                    // enable efects
                    t.on(index2);
                });
            }

            return true;
        },
        
        /**
         * Prepare the touch feature
         */
        preTouchMouseMove: function (e) {
            var t = e.data.me, pageX = e.data.pageX, pageY = e.data.pageY, ee = e.data.ee, eee = e, s = {};             
			
            // desktop or mobile
            if (t.touchDevice) {
                var b = e.originalEvent.touches;
                if (b.length > 1) {
                    return false
                }
                e = b[0];
            }           
            
            
            // if touchNafigation is on => go to touchMouseMove function
            if (t.touchStart === 1) {   
                s.pageX = pageX;
                s.pageX1 = e.pageX;
                t.touchMouseMove(s);
            } else if (t.touchStart === 0) {
                
                if (Math.abs(pageX - e.pageX) > 5) {
                    // prevent default effects
                    if (ee.preventDefault) { 
                        ee.preventDefault();
                    }
                    
                    // prevent default effects
                    if (eee.preventDefault) { 
                        eee.preventDefault();
                    }                      

                    // disable multiple effects
                    if (t.active) return false;

                    // clear interval auto
                    if (t.settings.auto.active) { 
                        t.touchStop = true;
                        clearInterval(t.run);
                    }

                    t.active = true;

                    t.touchPos = 0;
                    t.ul.addClass('grabbing');
                                        
                    t.touchStart = 1;
                    
                    t.touchMouseMove(pageX, e.pageX, t);
                 
                } else if (Math.abs(pageY - e.pageY) > 5) {
                    t.touchStart = 2;
                    $(document).unbind(t.mousemove + ' ' + t.mouseup);
                }
            }
            
        },
        
        /**
         * If touch is on, update slider position
         */
        touchMouseMove: function (s) {
            
            var index2, pageX = s.pageX, pageX1 = s.pageX1, t = this;                        
            
            t.touchPos = pageX - pageX1;
            
            // on touch move return false for links
            t.clickState = false;
            
            // next Item
            if (t.touchPos > 0) {
                
                // calculate the slide index who is animate
                index2 = Math.ceil(t.touchPos / t.widthContainer) + t.index;

                // I reached the end of the slider
                if (index2 > t.ul_nr - 1) {
                    index2 = index2 - t.ul_nr;
                }

                // I made ??a complete loop => stop the touch
                if (t.touchPos >= t.widthContainer * (t.ul_nr - 1)) {
                    t.touchPos = t.widthContainer * (t.ul_nr - 1);
                } else {
                    t.children[index2].addClass('active2').css({
                        left:  Math.ceil(t.touchPos / t.widthContainer) * t.widthContainer
                    });
                }
            // prev Item
            } else if (t.touchPos < 0) {
                
                // calculate the slide index who is animate
                index2 = t.index - Math.ceil(-t.touchPos / t.widthContainer);

                // I reached the end of the slider
                if (index2 < 0) {
                    index2 = t.ul_nr + index2;
                }

                // I made a complete loop => stop the touch
                if (Math.abs(t.touchPos) >= t.widthContainer * (t.ul_nr - 1)) {
                    t.touchPos = -t.widthContainer * (t.ul_nr - 1);
                } else {
                    t.children[index2].addClass('active2').css({
                        left:  -Math.ceil(-t.touchPos / t.widthContainer) * t.widthContainer
                    });
                }
            }
            
            t.ul.css({
                left: -t.touchPos
            });

            return false;
        },
        
        /**
         * Start the auto function
         */
        startAuto: function () {
            var t = this;
			
            // if auto is disabled by other elements stop here
            if (!t.active && !t.flagStop && !t.touchStop && !t.hoverStop) {

                // create the auto
                t.run = setInterval(function () {

                    if (t.intervalContor < 0) {             
                        // stop the auto
                        clearInterval(t.run);

                        // trigger next item
                        hotwp.nextItem(t);     

                        return;
                    }   
                    
                    if (t.settings.auto.timer == 'line') {
                        t.intervalTimer.css( 'width', function (index, value) {return parseInt(value) + 2;});
                        
                    } else if (t.settings.auto.timer == 'circular') {        
                        var grade = 181 - t.intervalContor;

                        if (grade < 0) {
                            t.intervalCircularRight.css({
                                "-ms-transform": "rotate(" + grade + "deg)",
                                "-webkit-transform": "rotate(" + grade + "deg)",
                                "-o-transform": "rotate(" + grade + "deg)",
                                "-moz-transform": "rotate(" + grade + "deg)"
                            });
                        } else if (grade == 0) {
                            t.intervalCircularRight.css({
                                "-ms-transform": "rotate(" + grade + "deg)",
                                "-webkit-transform": "rotate(" + grade + "deg)",
                                "-o-transform": "rotate(" + grade + "deg)",
                                "-moz-transform": "rotate(" + grade + "deg)"
                            });

                            var clip = t.intervalCircularWrap.css("clip").replace(/,|rect\(|\)/g, '').split(' ');
                                                        
                            clip = 'rect(0 ' + clip[1] + ' ' + clip[2] + ' 0)';
                            
                            t.intervalCircularWrap.css('clip', clip);
                            t.intervalCircularLeft.show();

                        } else {
                            grade = - t.intervalContor;
                            t.intervalCircularLeft.css({
                                "-ms-transform": "rotate(" + grade + "deg)",
                                "-webkit-transform": "rotate(" + grade + "deg)",
                                "-o-transform": "rotate(" + grade + "deg)",
                                "-moz-transform": "rotate(" + grade + "deg)"
                            });
                        }
                    } else if (t.settings.auto.timer == 'numbers') {
                        var time = 100 - t.intervalContor;

                        if (time < 10) {
                            time = "00" + time;
                        } else if (time < 100) {
                            time = "0" + time;
                        }
                        t.intervalTimer.text(time);
                    }
                    t.intervalContor--;                      
                    
                }, t.intervalTimeInter);
            }
        },
        
        /**
         * Reset the auto and all the elements composing
         **/
        resetAuto: function () {
           
            var t = this;
            
            clearInterval(t.run);

            if (t.settings.auto.timer == 'none') {
                t.intervalContor = 5;                
            } else if (t.settings.auto.timer == 'line') {
                t.intervalContor = parseInt(t.lineWidth / 2);
                t.intervalTimer.css({width: 0});				
				
            } else if (t.settings.auto.timer == 'circular') {
                t.intervalCircularRight.css({
                    "-moz-transform": "rotate(180deg)",
                    "-webkit-transform": "rotate(180deg)",
                    "-o-transform": "rotate(180deg)",
                    "-ms-transform": "rotate(180deg)"
                });

                t.intervalCircularLeft.css({
                    "-moz-transform": "rotate(180deg)",
                    "-webkit-transform": "rotate(180deg)",
                    "-o-transform": "rotate(180deg)",
                    "-ms-transform": "rotate(180deg)"
                });

                t.intervalCircularLeft.hide();

                var clip = t.intervalCircularWrap.css("clip").replace(/,|rect\(|\)|px/g, '').split(' ');

                clip = 'rect(0 ' + clip[1] + 'px ' + clip[2] + 'px ' + clip[2]  / 2 + 'px)';
                t.intervalCircularWrap.css('clip', clip);
                t.intervalContor = 360;
                
            } else if (t.settings.auto.timer == 'numbers') {
                t.intervalTimer.text("");
                t.intervalContor = 99;
            }
        },
        
        /**
         * If random is active mix slides
         * 
         * param index1 - index of current slide
         */
        randomSlide: function (index1) {
            var rand = index1;
            while (rand == index1) {
                rand = Math.floor(Math.random() * this.ul_nr);
            }

            return rand;
        },
        
        /**
         * Caption method
         * 
         * elem - the current slide
         * method - init | destory the captions
         */
        caption: function (elem, method) {

            // dataOffset - number
            // dataDelay - number
            // dataSpeed - number, 'slow', 'normal' or 'fast'
            // dataEasing - 'easing'
            // dataEffects - top, left, right, bottom, fade

            var caption = [], dataOffset, dataEffects, dataEasing, dataDelay, dataSpeed, anim = {}, t = this, i, j, leftPos, topPos, newPos = [], pos;
            
			
			t.obj.find('.caption').css({opacity: 0});
			
            // init the caption
            if (method == 'on') {
                
                // get all captions of current slide
                elem.find('.caption').each(function () {                    
                    caption.push($(this));
                });
				
                // parse the current caption and get 'data' selectors
                for (i = 0; i < caption.length; i++) {
                    
                    pos = caption[i].position();
                    
                    leftPos = pos.left;
                    topPos = pos.top;
					
                    dataOffset = parseInt(caption[i].attr('dataOffset'));
                    if (isNaN(dataOffset)) dataOffset = 10;
                    
                    dataDelay = parseInt(caption[i].attr('dataDelay'));
                    if (isNaN(dataDelay)) dataDelay = 0;
                    
                    dataSpeed = caption[i].attr('dataSpeed');
                    if (typeof dataSpeed === 'undefined') dataSpeed = 'normal';
                    if (!(dataSpeed == 'slow' || dataSpeed == 'normal' || dataSpeed == 'fast')) {
                        dataSpeed = parseInt(dataSpeed);
                    }                    

                    dataEasing = caption[i].attr('dataEasing');
                    if (typeof dataEasing === 'undefined') dataEasing = 'linear';

                    dataEffects = caption[i].attr('dataEffects');
                    if (typeof dataEffects === 'undefined') {
                        dataEffects = ['fade', 'left'];
                    } else {
                        dataEffects = dataEffects.split(" ");
                    }
                    
                    // get the current effects                    
                    if ($.inArray('fade', dataEffects) != -1) {
                        anim.opacity = 1;
                    } else {
                        caption[i].css({opacity: 1});
                    }
                    
                    if ($.inArray('left', dataEffects) != -1) {
                        caption[i].css({left: ((leftPos - dataOffset) * 100 / t.sliderWidth) + '%'});
                        anim.left = (leftPos * 100 / t.sliderWidth) + '%';
                    }                     
                    
                    if ($.inArray('top', dataEffects) != -1) {
                        caption[i].css({top: ((topPos - dataOffset) * 100 / t.sliderHeight) + '%'});
                        anim.top = (topPos * 100 / t.sliderHeight) + '%';
                    }                     
                    
                    if ($.inArray('right', dataEffects) != -1) {
                        caption[i].css({left: ((leftPos + dataOffset) * 100 / t.sliderWidth) + '%'});
                        anim.left = (leftPos * 100 / t.sliderWidth) + '%';
                    }                     
                    
                    if ($.inArray('bottom', dataEffects) != -1) {
                        caption[i].css({top: ((topPos + dataOffset) * 100 / t.sliderHeight) + '%'});
                        anim.top = (topPos * 100 / t.sliderHeight) + '%'; 
                    }     

                    // make the caption effect
                    caption[i].delay(dataDelay).animate(anim, dataSpeed, dataEasing);
                    
                    anim = {};
                                        
                }
            } else if (method == 'off') {}
        },
        
        /**
         * Multiple effects on slider (each slider will have different effect)
         * 
         * param index = index of current element
         */
        multipleEffects: function (index2) {

            var nr, rand, arr, t = this;
            
            // randomize the effects
            if (t.settings.multipleEff.random) {
                rand = Math.floor(Math.random() * t.settings.multipleEff.eff.length);
                nr = (rand >= t.ul_nr)? rand % (t.ul_nr - 1) : rand;
            } else {
                nr = (index2 > (t.settings.multipleEff.eff.length - 1))? (t.settings.multipleEff.eff.length - 1) : index2;
            }

            arr = t.settings.multipleEff.eff[nr].split("|");
            arr[2] = arr[2].split(',');
            arr[3] = arr[3].split(',');
 
            if (arr[0]) {
                t.settings.animate.type = arr[0];
            }
            
            if (arr[1]) {
                t.settings.animate.speed = parseInt(arr[1]);
            }
            
            if (arr[2]) {
                t.settings.animate.position = arr[2];
            }
            
            if (arr[3]) {
                t.settings.animate.effect = arr[3];
            }
            
            if (arr[4]) {
                t.settings.animate.cols = parseInt(arr[4]);
            }
            
            if (arr[5]) {
                t.settings.animate.rows = parseInt(arr[5]);
            }
            
            if (arr[6]) {
                t.settings.animate.delay = parseInt(arr[6]);
            }
            
            if (arr[7]) {
                t.settings.animate.easing = arr[7];
            }
            
            
            if (arr[8]) {
                t.settings.auto.time = parseInt(arr[8]);
            }            
                     
        }, 
        
        /**
         * Disable multiple effects
         * 
         * param index1 = index of current slide
         * param index2 = index of the next slide
         */
        off: function (index1, index2) {
            
            var t = this;
            
            t.active = true;
            
            // reset auto
            if (t.settings.auto.active) {
                t.resetAuto();
            }

            // end callback for slides
            if ($.isFunction(t.callbackFunctionItemsEnd[index1])) {
                t.callbackFunctionItemsEnd[index1].apply(t);
            }

            // start callback for slides
            if ($.isFunction(t.callbackFunctionItemsStart[index2])) {
                t.callbackFunctionItemsStart[index2].apply(t);
            }

            if (t.propertyIsActive('nav')) {
                t.navChildren[index1].removeClass('active');
                t.navChildren[index2].addClass('active');
            }

            if(t.propertyIsActive('caption')) t.caption(t.children[index1], 'off');
        },            
        
        /**
         * Enable effects, change the navigation
         * 
         * param index2 = index of the next slide
         */
        on: function (index2) {
            
            var t = this;
            
            if (t.delayStop) {
                delete this;
                return;
            }
            
            t.active  = false;
            
            // start auto
            if (t.settings.auto.active) {
                // if multiple effects enabled
                if (t.settings.multipleEff.active) {
                    t.intervalTimeInter = t.settings.auto.time / t.intervalContor;   
                }                
                t.startAuto();
            }
            
            // init caption for next slide
            if(t.propertyIsActive('caption')) {                
                t.caption(t.children[index2], 'on');
            }

            t.index  = index2;
			
            if (t.callbackFunction) {
                    t.callbackFunction.call(t.obj);
                    t.callbackFunction = null;
            } 
            
        },           
        
        /**
         * Returns the position of the element
         * 
         * param elem        =  the element that I what to positionate
         * param position    = direction (horizontal or vertical)
         * param where       =  direction of the custom position            
         */
        customPosition: function (elem, position, where) {
            
            var t = this, operation, pos;
            
            var width = t.sliderWidth;

            if (t.settings.animate.type == 'carousel') {
                width = parseInt(t.ul.css("width"));
            }
            
            if (typeof position === 'number') {
				if (where == 'vertical') {
					position = position * t.propV;
				} else if (where == 'horizontal') {
					position = position * t.propH;
				}
				
                return position;
            } else {
                if (position.search(/\+/) !== -1) {
                    pos = position.split('+');                    
                    position = pos[0];
                    operation = 'plus';
                } else if (position.search(/-/) !== -1) {
                    pos = position.split('-');                    
                    position = pos[0];
                    operation = 'minus';
                }
                
            }

            switch (position) {
                case 'middle':
                    if (where == 'vertical') {
                        position = parseInt((t.sliderHeight - elem.outerHeight(true)) / 2);
                    } else {
                        position = parseInt((width - elem.outerWidth(true)) / 2);
                    }
                    break;

                case 'start':
                    if (where == 'vertical') {
                        position = -elem.outerHeight(true);
                    } else {
                        position = -elem.outerWidth(true);
                    }
                    break;

                case 'end':
                    if (where == 'vertical') {
                        position = parseInt(t.sliderHeight);
                    } else {
                        position = parseInt(width);
                    }
                    break;
            }
            
            if (operation == 'plus') {
                position += parseInt(pos[1]);
            } else if (operation == 'minus') {
                position -= parseInt(pos[1]);
            }            
            
            return position;
        },
        
        /**
         * If a property is enabled or disabled
         * 
         * param property = name of the property that I will check
         */
        propertyIsActive: function (property) {
            
            var t = this;
                        
            if (property == 'caption') {
                if (t.settings.caption == false || ((t.settings.animate.type == 'sliderHorizontal' || t.settings.animate.type == 'sliderVertical' ) && t.settings.animate.perPage != 1)) {
                    return false;
                } else if (t.settings.caption) {
                    return true;
                }
            } else if (property == 'touchNavigation') {
                if (t.settings.animate.type == 'carousel' || t.settings.touchNavigation == false || ((t.settings.animate.type == 'sliderHorizontal' || t.settings.animate.type == 'sliderVertical' ) && t.settings.animate.perPage != 1)) {
                    return false;
                } else if (t.settings.touchNavigation) {
                    return true;
                }
            } else if (property == 'nav') {
                if (t.settings.animate.type == 'carousel' || t.settings.nav.active == false || ((t.settings.animate.type == 'sliderHorizontal' || t.settings.animate.type == 'sliderVertical' ) && t.settings.animate.perPage != 1)) {
                    return false;
                } else if (t.settings.nav.active) {
                    return true;
                }
            } else if (property == 'navImages') {
                if (t.settings.animate.type == 'carousel' || t.settings.nav.active == false || t.settings.nav.type != 'images' || ((t.settings.animate.type == 'sliderHorizontal' || t.settings.animate.type == 'sliderVertical' ) && t.settings.animate.perPage != 1)) {
                    return false;
                } else if (t.settings.nav.active && t.settings.nav.type == 'images') {
                    return true;
                }
            }
        },
        
        /**
         * Crop and resize an image
         * param src = path to source image
         * param width = width that I want for image
         * param width = height that I want for image
         */
        cropResizeImage: function (src, width, height) {

            var img = new Image(), widthImg, heightImg, propWidth, propHeight;

            img.src = src;

            widthImg    = img.width;
            heightImg   = img.height;

            propWidth   = widthImg / width;
            propHeight  = heightImg / height;

            if (propWidth < 1 || propHeight < 1) {
                if (widthImg > width) {
                    img.style.marginLeft = -Math.floor((widthImg - width) / 2) + "px";
                } else if (widthImg < width) {
                    img.style.marginLeft = Math.floor((width - widthImg) / 2) + "px";
                }

                if (heightImg > height) {
                    img.style.marginTop = -Math.floor((heightImg - height) / 2) + "px";
                } else if (heightImg < height) {
                    img.style.marginTop = Math.floor((height - heightImg) / 2) + "px";
                }
            } else if (propWidth > propHeight) {
                img.width = Math.ceil(widthImg / propHeight);
                img.height = Math.ceil(heightImg / propHeight);

                img.style.marginLeft = -Math.floor((widthImg / propHeight - width) / 2) + "px";
            } else if (propHeight > propWidth) {
                img.width = Math.ceil(widthImg / propWidth);
                img.height = Math.ceil(heightImg / propWidth);

                img.style.marginTop = -Math.floor((heightImg / propWidth - height) / 2) + "px";
            } else {
                img.width = Math.ceil(widthImg / propWidth);
                img.height = Math.ceil(heightImg / propHeight);
            }

            return img;
        },        
        
        /**
         * No effect
         * 
         * param elem1   = the current slide
         * param elem2	= the next slide
         */
        noEffect: function (index1, index2, direction) {
            var t = this;
            
            // disable multiple effects
            t.off(index1, index2);

            t.children[index2].addClass('active3');
            t.children[index1].removeClass('active3');

            // enable efects
            t.on(index2);
        },   
        
        /**
         * Fade (cinematic) effect
         * 
         * param elem1   = the current slide
         * param elem2	= the next slide
         */
        fade: function (index1, index2, direction) {    
            
            var t = this;
            
            // disable multiple effects
            t.off(index1, index2);

            var elem1 = t.children[index1], elem2 = t.children[index2];

            elem1.siblings().css({
                opacity:0
            });

            elem2.addClass('active2');

            elem1.fadeTo(t.settings.animate.speed, 0,
                function () {
                    elem1.removeClass('active3');
                    elem2.addClass('active3').removeClass('active2');
                    elem2.fadeTo(t.settings.animate.speed, 1, function () {                            
                        t.ul.children().removeAttr('style');

                        // enable efects
                        t.on(index2);
                    });	
                });
        },            
        
        /**
         * CrossFade effect
         * 
         * param elem1	- the current slide
         * param elem2	- the next slide
         */
        crossFade: function (index1, index2, direction) {
            
            var t = this;
                        
            // disable multiple effects
            t.off(index1, index2);
            
            var elem1 = t.children[index1], elem2 = t.children[index2];

            elem2.addClass('active2');

            elem1.fadeTo(t.settings.animate.speed, 0,
                function () {
                    elem1.removeClass('active3').removeAttr('style');
                    elem2.addClass('active3').removeClass('active2');

                    // enable efects
                    t.on(index2);
                });
        },        
        
        /**
         * Slider horizontal effect
         * 
         * param elem1	- the current slide
         * param elem2	- the next slide
         */
        sliderHorizontal: function (index1, index2, direction) {
            
            var t = this;
            
            // disable multiple effects
            t.off(index1, index2);

            var elem1 = t.children[index1], elem2 = t.children[index2], left;

            // for next direction
            if (direction == 'next') {
                left = t.widthContainer;            
            } else { // for prev direction
                left = -t.widthContainer;
            }

            // move the elem2 & add class .activ2
            elem2.addClass('active2').css({
                left: left
            });

            var inter_width = (parseFloat(t.ul.css("left")))? parseFloat(t.ul.css("left")) : 0;

            t.ul.animate({
                left: -left / t.settings.animate.perPage + inter_width
            }, t.settings.animate.speed, t.settings.animate.easing, //move the ul
            function () {
                if (-parseFloat(t.ul.css("left")) == left) {
                    t.ul.css({
                        left: 0
                    });

                    elem1.removeClass('active3');

                    elem2.css({
                        left: 0
                    }).removeClass('active2')
                    .addClass('active3');
                } else {
                    index2 = index1;
                }

                // enable efects
                t.on(index2); 
            } 
            );

        },
        
        /**
         * Slider vertical effect
         * 
         * param elem1	- the current slide
         * param elem2	- the next slide
         */
        sliderVertical: function (index1, index2, direction) {
            
            var t = this;
            
            // disable multiple effects
            t.off(index1, index2);

            var elem1 = t.children[index1], elem2 = t.children[index2], top;

            // for next direction
            if (direction == 'next') {
                top = t.heightContainer;            
            } else { // for prev direction
                top = -t.heightContainer;
            }

            // move the elem2
            elem2.addClass('active2').css({
                top: top
            });

            var inter_height = (parseFloat(t.ul.css("top")))? parseFloat(t.ul.css("top")) : 0;

            // move the ul
            t.ul.animate({
                top: -top / t.settings.animate.perPage + inter_height
            }, t.settings.animate.speed, t.settings.animate.easing,
            function () {
                if (-parseFloat(t.ul.css("top")) == top) {
                    t.ul.css({
                        top: 0
                    });

                    elem1.removeClass('active3');

                    elem2.css({
                        top: 0
                    }).removeClass('active2')
                    .addClass('active3');
                } else {
                    index2 = index1;
                }
                // enable efects
                t.on(index2);
            }
            );
        },               
        /**
         * The carousel effect
         * 
         * param index1 = the current slide
         * param index2 = the next slide
         * param direction = direction of the transition
         */
        carousel: function (index1, index2, direction) {
            
            var t = this;
            
            // disable multiple effects
            t.off(index1, index2); 

            var dirr, deplasare, i, 
                curr,
                elem1   = t.children[index1],
                elem2   = t.children[index2],
                arr     = [],
                car_nr2 = Math.floor(t.settings.animate.car_nr / 2),
                // the position where the slider start
                start   = (index2 - car_nr2 >= 0)? index2 - car_nr2 : t.ul_nr + index2 - car_nr2,
                // to now when the effect is finished 
                eff_on  = 0,          
                // contor that hold the variable to manipulate the <li>
                contor  = 9 - car_nr2,
                posL    = 0,
                opacity = 0;

            // add class active3 on the elem2 slide
            elem2.addClass('active3');
            // remove class active3 on the current slide
            elem1.removeClass('active3');

            if (index1 > t.ul_nr - 1 - car_nr2 && index2 < car_nr2) {
                direction = 'next';
            } else if (index2 > t.ul_nr - 1 - car_nr2 && index1 < car_nr2) {
                direction = 'prev';
            }

            if (direction == 'next') {
                // direction right
                dirr        = 1;
                // deplacement
                deplasare   = index2 - index1;

                if (deplasare < 0) {
                    deplasare = t.ul_nr - index1 + index2;
                }
            } else { // prev
                // direction right
                dirr        = 0;
                // deplacement
                deplasare   = index1 - index2;

                if (deplasare < 0) {
                    deplasare = t.ul_nr - index2 + index1;
                }
            }

            // for direction right
            if (dirr) {
                start = (start - deplasare >= 0)? start - deplasare: t.ul_nr + start - deplasare; // the position left where the slider start
            }

            for (i = 0; i < t.settings.animate.car_nr + deplasare; i++) {
                arr.push(start);

                if (start >= t.ul_nr - 1) {
                    start = 0;
                } else {
                    start++;
                }
            }

            // values used to align the <li> verticaly
            var marginTop   = [5, 6, 7, 7.5, 7.7, 7.8, 7.9, 7.92, 7.94, 7.96, 7.98],
                kk          = car_nr2;

            var opacityLi = 0;
            
            for (i = 0; i < arr.length; i++) {
                curr = t.children[arr[i]];

                if (dirr) { // to right

                    if (i < deplasare) {
                        opacityLi = 0;
                    } else {

                        if (i <= car_nr2 + deplasare) {
                            posL += t.sliderWidth * contor / 20;
                            contor++;
                            kk--;
                            opacity = contor / 10;
                        } else if(i >  car_nr2 + deplasare) {
                            posL += t.sliderWidth * (contor + 1) / 20;
                            contor--;
                            kk++;
                            opacity = contor / 10;
                        }

                        opacityLi = 1;

                        if (i >= arr.length - deplasare) {
                            curr.show();

                            curr.css({
                                left: t.ul.width() - (9 - car_nr2) * t.sliderWidth / 10
                            });
                        }
                    }

                } else { 
                    if (i <= car_nr2) {
                        posL += t.sliderWidth * contor / 20;
                        contor++;
                        kk--;
                        opacity = contor / 10;
                    } else if (i >  car_nr2) {
                        posL += t.sliderWidth * (contor + 1) / 20;
                        contor--;
                        kk++;
                        opacity = contor / 10;
                    }

                    opacityLi = 1;
                    if (i >= t.settings.animate.car_nr) {
                        opacityLi = 0;
                    }
                    if (i < deplasare) {
                        curr.css({
                            left: 0
                        });

                        curr.show();
                    }
                }

                var r = setTimeout(function () {

                    var contorIn = 10 - car_nr2, u; 

                    for (u = 0; u < arr.length; u++) {
                        t.children[arr[u]].css({
                            zIndex: contorIn
                        });

                        if (dirr) {
                            if (u < car_nr2 + deplasare) {
                                contorIn++;
                            } else if(u >=  car_nr2 + deplasare) {
                                contorIn--;
                            }
                        } else {
                            if (u < car_nr2) {
                                contorIn++;
                            } else if(u >=  car_nr2) {
                                contorIn--;
                            }
                        }
                    }

                }, t.settings.animate.speed / 3.5);
                
                if (typeof marginTop[kk] === "undefined") marginTop[kk] = 0;
                
                $(function () {   
                    
                    // update <li> position
                    curr.animate({ 
                        width:      t.sliderWidth * contor / 10,
                        height:     t.sliderHeight * contor / 10,
                        left:       posL,
                        opacity:    opacityLi,
                        marginTop:  (t.sliderHeight - t.sliderHeight * contor / 10) * (marginTop[kk] / 10) // align vertically
                    }, t.settings.animate.speed);
                    
                    // update position of images
                    curr.find('img').animate({
                        width:	t.sliderWidth * contor / 10,
                        height: 	t.sliderHeight * contor / 10,
                        opacity:	opacity
                    }, t.settings.animate.speed,
                        function () {
                            
                            eff_on++;
                            if (eff_on == arr.length) {
                                if (dirr) {
                                    for (i = 0; i < deplasare; i++) {
                                        t.children[arr[i]].hide();
                                    }
                                } else { // to left
                                    for (i = t.settings.animate.car_nr; i < arr.length; i++) {
                                        t.children[arr[i]].hide();
                                    }
                                }
                                t.on(index2);
                            }                            
                        }                        
                    );                    
                });                
            }
        },        
        
        /**
         * Square effect
         * 
         * param elem1       = the current slide
         * param elem2       = the next slide
         * param direction   = direction of the transition
         */
        square: function (index1, index2, direction) {
            
            var t = this;
            
            // disable multiple effects
            t.off(index1, index2); 

            var elem1           = t.children[index1],
                elem2           = t.children[index2],
                // width of one square
                dim_w           = Math.ceil(t.widthContainer / t.settings.animate.cols),
                // height of one square
                dim_h           = Math.ceil(t.heightContainer / t.settings.animate.rows),
                animateEffects  = {}, i;

             // buil the blocks
            t[t.settings.animate.position[0]](elem1.html(), dim_w, dim_h, t.settings.animate.position[1]);

            // add class active2 on the next slide
            elem2.addClass('active3');
            
            // remove class active3 on the current slide
            elem1.removeClass('active3');

            // check what effects is enabled
            if ($.inArray('fade', t.settings.animate.effect) != -1) {
                animateEffects.opacity = 0;
            }

            if ($.inArray('slideUp', t.settings.animate.effect) != -1) {
                animateEffects.height = 0;
            }

            if ($.inArray('slideUpLeft', t.settings.animate.effect) != -1) {
                animateEffects.height = 0;
                animateEffects.width = 0;
            }

            if ($.inArray('slideUpRight', t.settings.animate.effect) != -1) {
                animateEffects.height = 0;
                animateEffects.width = 0;
                animateEffects.marginLeft = dim_w;
            }

            if ($.inArray('slideDown', t.settings.animate.effect) != -1) {
                animateEffects.marginTop = dim_h;
                animateEffects.height = 0;
            }

            if ($.inArray('slideDownLeft', t.settings.animate.effect) != -1) {
                animateEffects.marginTop = dim_h;
                animateEffects.height = 0;
                animateEffects.width = 0;
            }

            if ($.inArray('slideDownRight', t.settings.animate.effect) != -1) {
                animateEffects.marginTop = dim_h;
                animateEffects.marginLeft = dim_w;
                animateEffects.height = 0;
                animateEffects.width = 0;
            }

            if ($.inArray('slideLeft', t.settings.animate.effect) != -1) {
                animateEffects.width = 0;
            }

            if ($.inArray('slideRight', t.settings.animate.effect) != -1) {
                animateEffects.width = 0;
                animateEffects.marginLeft = dim_w;
            }

            if ($.inArray('slideHCenter', t.settings.animate.effect) != -1) {
                animateEffects.width = 0;
                animateEffects.marginLeft = parseInt(dim_w/2, 10);
            }

            if ($.inArray('slideVCenter', t.settings.animate.effect) != -1) {
                animateEffects.height = 0;
                animateEffects.marginTop = parseInt(dim_h/2, 10);
            }

            if ($.inArray('slideCenter', t.settings.animate.effect) != -1) {
                animateEffects.width = 0;
                animateEffects.marginLeft = parseInt(dim_w/2, 10);
                animateEffects.height = 0;
                animateEffects.marginTop = parseInt(dim_h/2, 10);
            }

            if ($.inArray('moveTop', t.settings.animate.effect) != -1) {
                animateEffects.top = -dim_h;
            }
            
            if ($.inArray('moveLeft', t.settings.animate.effect) != -1) {
                animateEffects.left = -dim_w;
            }
            
            if ($.inArray('moveRight', t.settings.animate.effect) != -1) {
                animateEffects.left = t.widthContainer;
            }
            
            if ($.inArray('moveBottom', t.settings.animate.effect) != -1) {
                animateEffects.top = t.heightContainer;
            }

            var r,
                q       = 0,
                end     = 0,                    
                blocks  = t.ul.find('.block'),
                alter   = true;

            for (i = 0; i < t.settings.animate.cols * t.settings.animate.rows; i++) {
                
                if ($.inArray('slideRand', t.settings.animate.effect) != -1) {
                    
                    if (animateEffects.opacity == 0) {
                        animateEffects = {};
                        animateEffects.opacity = 0;
                    } else {
                        animateEffects = {};
                    }

                    q++;

                    if ((t.settings.animate.cols % 2 == 0) && (i % t.settings.animate.cols == 0) && (i != 0)) {
                        q--;
                    }

                    r = (q % 2 == 0)? Math.ceil(Math.random()*2) : Math.ceil(Math.random()*2 + 2);

                    if (r == 1) {
                        animateEffects.height = 0; // slideUp
                    } else if (r == 2) {
                        animateEffects.marginTop = dim_h; // slideDown
                        animateEffects.height = 0; // slideDown
                    } else if (r == 3) {
                        animateEffects.width = 0; // slideLeft
                    } else if (r == 4) {
                        animateEffects.width = 0; // slideRight
                        animateEffects.marginLeft = dim_w; // slideRight
                    }
                } else if ($.inArray('slideAlternativeV', t.settings.animate.effect) != -1) {
                    
                    if (animateEffects.opacity == 0) {
                        animateEffects = {};
                        animateEffects.opacity = 0;
                    } else {
                        animateEffects = {};
                    }                    
                    
                    animateEffects.height = 0;

                    if (alter) {
                        alter = false;
                    } else {
                        animateEffects.marginTop = dim_h;
                        alter = true;
                    }
                } else if ($.inArray('slideAlternativeH', t.settings.animate.effect) != -1) {
                    
                    if (animateEffects.opacity == 0) {
                        animateEffects = {};
                        animateEffects.opacity = 0;
                    } else {
                        animateEffects = {};
                    }                    
                                        
                    animateEffects.width = 0;

                    if (alter) {
                        alter = false;
                    } else {
                        animateEffects.marginLeft = dim_w;
                        alter = true;
                    }
                }
                
                // make the effect and delete the blocks
                blocks.eq(i).delay(t.settings.animate.delay * i).animate(animateEffects, t.settings.animate.speed, t.settings.animate.easing, function () {
                    if (++end == t.settings.animate.cols * t.settings.animate.rows) {
                        blocks.remove();
                        t.on(index2);
                    }
                });
            }
        },            
        
        /**
         * Liniar effect
         * 
         * param elemHTML    = the current slide
         * pram dim_w        = block width
         * param dim_h       = blocks height
         * param direction   = direction of the effect
         */
        liniarSquare: function (elemHTML, dim_w, dim_h, direction) {
            
            var t = this;
            
            var r, c, dir1, dir2, blocks = '', i, j;

            if (direction == 'rtl' || direction == 'ltr') {
                dir1 = t.settings.animate.cols;
                dir2 = t.settings.animate.rows;           
            } else {
                dir1 = t.settings.animate.rows;
                dir2 = t.settings.animate.cols;
            }

            for (i = 0; i < dir1; i++) {
                for (j = 0; j < dir2; j++) {
                    switch (direction) {
                        case 'ltr': // left to right squares
                            r = j;
                            c = i;
                            break;

                        case 'rtl': // right to left squares
                            r = j;
                            c = t.settings.animate.cols - 1 - i;
                            break;

                        case 'ttb': // top to bottom squares
                            r = i;
                            c = j;
                            break;

                        default: // btt bottom to top squares
                            r = t.settings.animate.rows - 1 - i;
                            c = j;
                    }

                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + r * dim_h + 'px;left:' + c * dim_w + 'px"><li style="top:-' + r * dim_h +'px;left:-' + c * dim_w + 'px">' + elemHTML + '</li></div>';

                }
            }
            
            t.ul.append(blocks);
        },            
        
        /**
         * Random effect
         * 
         * param elemHTML    = the current slide
         * pram dim_w        = block width
         * param dim_h       = blocks height
         * param direction   = direction of the effect
         */
        randomSquare: function (elemHTML, dim_w, dim_h, direction) {
            
            var t = this;
            
            var block = [], blocks = '', i, j;

            for (i = 0; i < t.settings.animate.cols; i++) {
                for (j = 0; j < t.settings.animate.rows; j++) {
                    block.push(new Array(j, i));
                }
            }

            // shuffle the array blocks
            for (i = 0; i < block.length; i++) {
                var rand        = Math.floor(Math.random() * (block.length)),
                    temp        = block[rand];
                    block[rand] = block[i];
                    block[i]    = temp;
            }           

            for (i = 0; i < block.length; i++) {
                blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + block[i][0] * dim_h + 'px;left:' + block[i][1] * dim_w + 'px"><li style="top:-' + block[i][0] * dim_h +'px;left:-' + block[i][1] * dim_w + 'px">' + elemHTML + '</li></div>';
            }

            t.ul.append(blocks);
        },            
        
        /**
         * Margin to center effect
         * 
         * param elemHTML    = the current slide
         * pram dim_w        = block width
         * param dim_h       = blocks height
         * param direction   = direction of the effect (horizontal or vertical)
         */
        marginToCenterSquare: function (elemHTML, dim_w, dim_h, direction) {
            
            var t = this;
            
            var r, c, blocks = '', dir1, dir2, i, j, contor, bool;

            // for next direction
            if (direction == 'horizontal') {
                dir1 = t.settings.animate.cols;
                dir2 = t.settings.animate.rows;
            // for prev direction
            } else {
                dir1 = t.settings.animate.rows;
                dir2 = t.settings.animate.cols;
            }

            bool = true;

            for (i = 0, contor = 0; contor < dir1; contor++) {
                for (j = 0; j < dir2; j++) {                
                    // horizontal effect
                    if (direction == 'horizontal') { 
                        r = j;
                        c = i;
                    } else { // vertical effect
                        r = i;
                        c = j;
                    }

                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + r * dim_h + 'px;left:' + c * dim_w + 'px"><li style="top:-' + r * dim_h +'px;left:-' + c * dim_w + 'px">' + elemHTML + '</li></div>';
                }
                if (bool) {
                    i = dir1 - Math.ceil(contor/2) - 1;
                    bool = false;
                } else {
                    i = Math.ceil(contor/2);
                    bool = true;
                }
            }

            t.ul.append(blocks); // make the blocks
        },            
        
        /**
         * Center to margin effect
         * 
         * param elemHTML    = the current slide
         * pram dim_w        = block width
         * param dim_h       = blocks height
         * param direction   = direction of the effect (horizontal or vertical)
         */
        centerToMarginSquare: function (elemHTML, dim_w, dim_h, direction) {
            
            var t = this;
            
            var r, c, blocks = '', dir1, dir2, i, j, center, bool, contor;

            // for next direction
            if (direction == 'horizontal') {
                dir1 = t.settings.animate.cols;
                dir2 = t.settings.animate.rows;            
            } else { // for prev direction
                dir1 = t.settings.animate.rows;
                dir2 = t.settings.animate.cols;
            }

            center = Math.floor(dir1 / 2);
            bool = true;

            for (i = center, contor = 0; contor < dir1; contor++) {
                for (j = 0; j < dir2; j++) {                        
                    // horizontal effect
                    if (direction == 'horizontal') { 
                        r = j;
                        c = i;
                    // vertical effect
                    } else { 
                        r = i;
                        c = j;
                    }

                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + r * dim_h + 'px;left:' + c * dim_w + 'px"><li style="top:-' + r * dim_h +'px;left:-' + c * dim_w + 'px">' + elemHTML + '</li></div>';

                }

                if (bool) {
                    i = center - Math.ceil((contor + 1)/2);
                    bool = false;
                } else {
                    i = center + Math.ceil((contor + 1)/2);
                    bool = true;
                }
            }

            t.ul.append(blocks);
        },            
        
        /**
         * Sinus effect
         * 
         * param elemHTML    = the current slide
         * pram dim_w        = block width
         * param dim_h       = blocks height
         * param direction   = direction of the effect (horizontal or vertical)
         */
        sinusSquare: function (elemHTML, dim_w, dim_h, direction) {
            
            var t = this;
            
            var r, c, blocks = '', dir1, dir2, i, j, posSinus = 0, bool = true, m;

            // for next direction
            if (direction == 'horizontal') {
                dir1 = t.settings.animate.rows;
                dir2 = t.settings.animate.cols;            
            } else { // for prev direction
                dir1 = t.settings.animate.cols;
                dir2 = t.settings.animate.rows;
            }

            for (i = posSinus; i <= dir1; i++) {
                for (j = 0, m = posSinus; j < dir2; j++) {                        
                    // horizontal effect
                    if (direction == 'horizontal') {
                        r = m;
                        c = i;                    
                    } else { // vertical effect
                        r = i;
                        c = m;
                    }

                    m = (posSinus - j > 0)? posSinus - j - 1 : j + 1;                    
                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + c * dim_h + 'px;left:' + r * dim_w + 'px"><li style="top:-' + c * dim_h +'px;left:-' + r * dim_w + 'px">' + elemHTML + '</li></div>';
                }

                if (bool) {
                    posSinus = dir2 - 1;
                    bool = false;
                } else {
                    posSinus = 0;
                    bool = true;
                }
            }

            t.ul.append(blocks); // make the blocks
        },  
        
        /**
         * Diagonal square effect
         * 
         * param elemHTML    = the current slide
         * pram dim_w        = block width
         * param dim_h       = blocks height
         * param direction   = direction of the effect (horizontal or vertical)
         */        
        diagonalSquare: function (elemHTML, dim_w, dim_h, direction) {
            
            var t = this;
            
            var blocks = '', i, n, m, k, block = [], blocks_len;

            // left-top direction
            if (direction == 'LT') {
                m = 0;

                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = n;

                    if (n > t.settings.animate.rows) {
                        k = t.settings.animate.rows;
                    }

                    if (n > t.settings.animate.cols) { 
                        m++;
                    }

                    for (i = k-1; i >= m; i--) {
                        block.push(new Array(i, 0));
                    }
                }

                blocks_len = 0;

                m = 0;
                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = n;

                    if (n > t.settings.animate.cols) {
                        k = t.settings.animate.cols;
                    } 

                    if (n > t.settings.animate.rows) {
                        m++;  
                    } 

                    for (i = m; i < k; i++) {
                        block[blocks_len][1] = i;
                        blocks_len++;
                    }
                }

                for (i = 0; i < block.length; i++) {
                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + block[i][0] * dim_h + 'px;left:' + block[i][1] * dim_w + 'px"><li style="top:-' + block[i][0] * dim_h +'px;left:-' + block[i][1] * dim_w + 'px">' + elemHTML + '</li></div>';
                }
                
            // right-top direction
            } else if (direction == 'RT') {
                
                block   = [];                    
                m       = t.settings.animate.cols;

                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = t.settings.animate.cols - n;

                    if (n > t.settings.animate.rows) {
                        m--;
                    } 
                    if (n > t.settings.animate.cols) {
                        k = 0;
                    }

                    for (i = k; i < m; i++) {
                        block.push(new Array(0, i));
                    }
                }

                blocks_len = 0;

                m = 0;
                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = n;

                    if (n > t.settings.animate.rows) {
                        k = t.settings.animate.rows;
                    }

                    if (n > t.settings.animate.cols) {
                        m++;
                    }

                    for (i = m; i < k; i++) {
                        block[blocks_len][0] = i;
                        blocks_len++;
                    }
                }

                for (i = 0; i < block.length; i++) {
                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + block[i][0] * dim_h + 'px;left:' + block[i][1] * dim_w + 'px"><li style="top:-' + block[i][0] * dim_h +'px;left:-' + block[i][1] * dim_w + 'px">' + elemHTML + '</li></div>';
                }

            } else if(direction == 'LB') {
                
                block = [];
                m = t.settings.animate.cols;

                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = t.settings.animate.cols - n;

                    if (n > t.settings.animate.rows) {
                        m--;
                    }

                    if (n > t.settings.animate.cols) {
                        k = 0;
                    }

                    for (i = k; i < m; i++) {
                        block.push(new Array(i, 0));
                    }
                }
                blocks_len = 0;

                m = 0;
                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = n;

                    if (n > t.settings.animate.rows) {
                        k = t.settings.animate.rows;
                    }

                    if (n > t.settings.animate.cols) {
                        m++;
                    }

                    for (i = m; i < k; i++) {
                        block[blocks_len][1] = i;
                        blocks_len++;
                    }
                }

                for (i = 0; i < block.length; i++) {
                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + block[i][0] * dim_h + 'px;left:' + block[i][1] * dim_w + 'px"><li style="top:-' + block[i][0] * dim_h +'px;left:-' + block[i][1] * dim_w + 'px">' + elemHTML + '</li></div>';
                }
            // right-bottom direction
            } else if(direction == 'RB') {
                
                block = [];
                m = t.settings.animate.rows;

                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = t.settings.animate.rows - n;

                    if (n > t.settings.animate.rows) {
                        k = 0;
                    }

                    if (n > t.settings.animate.cols) {
                        m--;
                    }

                    for (i = k; i < m; i++) {
                        block.push(new Array(i, 0));
                    }
                }
                blocks_len = 0;

                m = t.settings.animate.cols;
                for (n = 1; n < t.settings.animate.cols + t.settings.animate.rows; n++) {
                    k = t.settings.animate.cols - n;

                    if (n > t.settings.animate.cols) {
                        k = 0;
                    }

                    if (n > t.settings.animate.rows) {
                        m--;
                    }

                    for (i = m - 1; i >= k; i--) {
                        block[blocks_len][1] = i;
                        blocks_len++;
                    }
                }

                for (i = 0; i < block.length; i++) {
                    blocks += '<div class="block" style="width:' + dim_w + 'px;height:' + dim_h + 'px;top:' + block[i][0] * dim_h + 'px;left:' + block[i][1] * dim_w + 'px"><li style="top:-' + block[i][0] * dim_h +'px;left:-' + block[i][1] * dim_w + 'px">' + elemHTML + '</li></div>';
                }
            }

            t.ul.append(blocks);
        }         
    }
    
    // PUBLIC METHODS
    var hotwp = {
        
        /**
         * Initialize slider
         */
        init: function (options, arg) {
    
            // Plugin default parameters
            var settings = {
                    mode:						'none', // set the slider mode: 'none', 'fullscreen', 'fullwidth'
					
                    arrows: {
                        next:                   true, // if the next button is active or not (true / false)
                        nextHorizontal:         25, // next button position horizontal (integer values | 'start' | 'end', | 'middle')
                        nextVertical:           403, // next button position vertical (integer values | 'start' | 'end', | 'middle')
                        prev:                   true, // if the prev button is active or not (true / false)
                        prevHorizontal:         25, // prev button position horizontal (integer values | 'start' | 'end', | 'middle')
                        prevVertical:           403 // prev button position vertical (integer values | 'start' | 'end', | 'middle')
                    },
					
                    nav: {
                        active:                 true,  // if the navigation is active or not (true / false)
                        type:                   'bullets', // navigation type ('bullets', 'numbers', 'images')
                        imagesDimension:        '100x100', // the images size for navigation type = 'images' ('WIDTHxHEIGHT')
                        navHorizontal:          96, // position horizontal of navigation (integer values | 'start' | 'end', | 'middle')
                        navVertical:            34,  // position vertical of navigation (integer values | 'start' | 'end', | 'middle')
                        thumbs:                 true, // if the thumbs is active or not (true / false)
                        thumbsDimension:        '100x100' // thumbs dimension ('WIDTHxHEIGHT')
                    },
					
                    auto: {
                        active:                 false, // enables / disable the autostart feature of the slider. (true / false)
                        time:                   3000, // you can set the delay of the slides. How much time pass until the next slide will apear. This time is set in milisecconds. 1000 milliseconds equals 1 second.
                        timer:                  'none', // type of timer: 'none', 'line', 'circular', 'numbers'
                        hoverStop:              true, // when user hovers the slider the slidings stops. (true / false)
                        posHorizontal:		567, // position horizontal of auto (integer values | 'start' | 'end', | 'middle')
                        posVertical:		50, // position vertical of auto (integer values | 'start' | 'end', | 'middle')
                        playPause:              true, // enables / disables the play / pause feature (true / false)
                        playPauseHover:         true, // if play / button is hover on slider (true / false)
                        playPauseHorizontal:    580, // position horizontal of play / pause (integer values | 'start' | 'end', | 'middle')
                        playPauseVertical:      62 // position vertical of play / pause (integer values | 'start' | 'end', | 'middle')
                    },
					
                    animate:{
                        type:                   'square',// effect type ('noEffect', 'sliderHorizontal', 'sliderVertical', 'fade', 'crossFade', 'square', 'carousel')
                        speed:                  1000, // slide transition speed in ms (1s = 1000ms)
                        position:               ['liniarSquare', 'rtl'],
                        effect:                 ['fade'], // effects available (see configurator on hotwp.net/zuper for more info)
                        cols:                   10, // numbers of cols (only integer values)
                        rows:                   1,  // numbers of rows (only integer values)
                        delay:                  20, // delay between square animation (only integer values)
                        easing:                 'swing', // type of easing
                        car_nr:                 7 // numbers of slide for carousel effect (only integer values)
                    },
					
                    multipleEff: {
                        active:                 false, // you can set on each slide different effects and you can randomize them (true / false)
                        random:                 false, // random the different effects
                        eff:                    [''] // put here the different effects here separated by commas.
                    },
                    order: {
                        random:                 false, // randomize the slides (true / false)
                        firstSlide:             1, // what slide will be first (integer values or 'middle')
                        startSlide:             1 // Set start slide index (integer values or 'middle')
                    },
					
                    caption:                    true, // add captions with simple text or HTML text (true / false)
					captionCallback:			function () {}, // function to reposition the captions when the slider dimension is change
                    touchNavigation:            true, // if the touch feature is active or not (true / false)
                    bgImageScaleAndCenter:      true, // scale image and center (true / false)
                    responsive:                 true, // responsive feature (true / false)
                    navigateOnHover:            true, // change the slide on hover 
                    navigateWithMouseWheel:     true
                };  
            
            var t = $(this), hwp;
            
            if (options) $.extend(settings, options);
            
            hwp = new zuperSlider(t, settings);
            
            t.data('zuperSlider', hwp);
			
			if ($.isFunction(arg)) {
				arg.call(t.obj);
			}	

        },
        
        /**
        * Trigger the next slide
        * 
	* arg = callback function or 'this' object of slider
        */
        nextItem: function (arg) {
            var t;

            if ($.isFunction(arg)) {
                    t = $(this).data('zuperSlider');
                    t.callbackFunction = arg;
            } else {
                    t = arg;
                    t.callbackFunction = null;
            }
            
            // disable multiple effects
            if (t.active) return false;

            var index1 = t.index, index2 = index1 + 1;

            if (t.settings.order.random) {
                index2 = t.randomSlide(index1);
            } else if (index2 > t.ul_nr - 1) {
                index2 = 0;
            }

            if (t.settings.multipleEff.active) t.multipleEffects(index2);

            // bulid the effects
            t[t.settings.animate.type](index1, index2, 'next');
        },
        
        /**
         * Trigger the previous slide
         * 
         * arg = callback function or 'this' object of slider
         */
        prevItem: function (arg) {
			var t;
			
			if ($.isFunction(arg)) {
				t = $(this).data('zuperSlider');
				t.callbackFunction = arg;
			} else {
				t = arg;
				t.callbackFunction = null;
			}
            
            // disable multiple effects
            if (t.active) return false;

            var index1 = t.index, index2 = index1 - 1;

            if (t.settings.order.random) {
                index2 = t.randomSlide(index1);
            } else if (index2 < 0) {
                index2 = t.ul_nr - 1;
            }

            if (t.settings.multipleEff.active) t.multipleEffects(index2);

            // build the effects
            t[t.settings.animate.type](index1, index2, 'prev');
        },   
        
        /**
         * Trigger a specific slide
         * 
         * index2 = index of slide
         * arg = callback function or 'this' object of slider
         */        
        jumpToItem: function (index2, arg) {
            var t;
			
			if (arg) {
			
				if ($.isFunction(arg)) {
					t = $(this).data('zuperSlider');
					t.callbackFunction = arg;
				} else {
					t = arg;
					t.callbackFunction = null;
				}	
				
			} else {
				t = $(this).data('zuperSlider');
			}
			
			
            if (!index2) {
                index2 = 0;
            }
            
            // disable multiple effects
            if (t.active) return false;

            var index1 = t.index, direction;

            if (index1 < index2) {
                direction = 'next';
            } else if (index1 > index2) {
                direction = 'prev';
            } else {
                return false;
            }

            if (t.settings.multipleEff.active ) t.multipleEffects(index2);

            // build the effects
            t[t.settings.animate.type](index1, index2, direction);
        },
        
        /**
         * Stop slideshow if this property is enabled
		 *
		 * arg = callback function 
         */
        stopSlideshow: function (arg) {
            
            var t = $(this).data('zuperSlider'),
                playPause = t.obj.find('.playPause'), runCallbackFunction = false;				
                        
            if (playPause.length) {
                if (playPause.hasClass('play')) {
                    playPause.trigger('click');
					runCallbackFunction = true;
                }
            } else {
                if (t.settings.auto.active && !t.flagStop) {
                    // pause the auto
                    t.flagStop = true;
                    clearInterval(t.run);
					runCallbackFunction = true;
                }                
            }   

			if ($.isFunction(arg) && runCallbackFunction) {
				arg.call(t.obj);
			}			
        },
        
        /**
         * Resume slideshow
		 *
		 * arg = callback function 
         */        
        resumeSlideshow: function (arg) {

            var t = $(this).data('zuperSlider'),
                playPause = t.obj.find('.playPause'), runCallbackFunction = false;

            if (playPause.length) {
                if (playPause.hasClass('pause')) {
                    playPause.trigger('click');
					runCallbackFunction = true;
                }
            } else {
                if (t.settings.auto.active && t.flagStop) {
                    // start the auto
                    t.flagStop = false;
                    t.startAuto();   
					runCallbackFunction = true;					
                }
            }   

			if ($.isFunction(arg) && runCallbackFunction) {
				arg.call(t.obj);
			}	
        },
        
        /**
         * Destroy the slider
		 *
		 * arg = callback function 
         */
        destroy: function (arg) {
            var t = $(this).data('zuperSlider');
            
            // unbind and delete all elements of slider
            if (t.settings.auto.active) {            
                clearInterval(t.run);             
                t.delayStop = true;
            }            

            t.obj.unbind();
            t.obj.parent().find('*').unbind();

            $(document).unbind(t.mousemove + ' ' + t.mouseup);
            
            $(window).unbind('resize.hs');

            t.obj.remove();
			
            if ($.isFunction(arg)) {
                    arg.call(t.obj);
            }			
        },
        
        /**
         * Start callback function for slides
         */
        startCallback: function () {
            var t = $(this).data('zuperSlider'), i, arg = arguments;
            
            if (arg.length < 1 || !$.isFunction(arg[0])) {
                return;
            } else if (arg.length == 1) {
                for (i = 0; i < t.ul_nr; i++) {
                    t.callbackFunctionItemsStart[i] = arg[0];
                }
            } else {
                for (i = 1; i < arg.length; i++) {
                    if (arg[i] == 0) continue;
                    t.callbackFunctionItemsStart[arg[i] - 1] = arg[0];
                    
                    if (t.index == arg[i] - 1) {
                        arg[0].apply(t);
                    }                    
                }                
            }            
        },
        
        /**
         * End callback function for slides
         */     
        endCallback: function () {
            var t = $(this).data('zuperSlider'), i, arg = arguments;
            
            if (arg.length < 1 || !$.isFunction(arg[0])) {
                return;
            } else if (arg.length == 1) {
                for (i = 0; i < t.ul_nr; i++) {
                    t.callbackFunctionItemsEnd[i] = arg[0];
                }
            } else {
                for (i = 1; i < arg.length; i++) {
                    if (arg[i] == 0) continue;
                    t.callbackFunctionItemsEnd[arg[i] - 1] = arg[0];                
                }                
            }
        }
    };   
    
    /**
     * jQuery plugin initializer
     */    
    $.fn.zuperSlider = function (arg) {
        var args  = arguments;
        
        return this.each(function () {
            
            // public method calling
            if (hotwp[arg]) {

                return hotwp[arg].apply(this, Array.prototype.slice.call(args, 1));

            } else if (typeof arg === 'object' || ! arg) {

                return hotwp.init.apply(this, args);

            } else {

                alert('Method ' +  arg + ' does not exist on jQuery.zuperSlider');
            }
            
        });
        
    };
})(jQuery);