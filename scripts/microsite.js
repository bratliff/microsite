/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

	'use strict';

	$(document).ready(function () {

	    var scrolled,
	        freezeframe_top = $('.freezeframe').position().top - 150,
	        imgslider2_top,
	        textbox1_top,
	        threadtext_top,
	        isMobile = false;

	    var cfer = {
	        frozen: false,
	        activeSection: 'about',
	        targetScroll: 0,
	        snapbacktimeout: '',
	        mobileBtnHide: true,
	        pagelock: false,
	        resetThreadText: function resetThreadText() {
	            $('#cfer-braid-layers').removeClass();
	            $('.threadtext p, .threadtext h3').css({ 'opacity': '.2' });
	        },
	        freezeWindow: function freezeWindow() {

	            var sounds_top = $('h3.sounds').position().top,
	                letters_top = $('h3.letters').position().top,
	                words_top = $('h3.words').position().top,
	                gist_top = $('h3.gist').position().top,
	                connections_top = $('h3.connections').position().top,
	                sentences_top = $('h3.sentences').position().top,
	                vocab_top = $('h3.vocab').position().top,
	                knowledge_top = $('h3.knowledge').position().top;{}

	            //$('nav li').css({'opacity':'.3'})


	            if (!cfer.frozen) {
	                $('.freezeframe').css({ 'position': 'fixed', 'top': '155px' });
	                cfer.frozen = true;
	            }

	            if (sounds_top > 370) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-initial');
	            }

	            if (sounds_top < 240) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-sounds');
	                $('.sounds').css({ 'opacity': '1' });
	            }

	            if (letters_top < 400) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-letters');
	                $('.letters').css({ 'opacity': '1' });
	            }

	            if (words_top < 380) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-words');
	                $('.words').css({ 'opacity': '1' });
	            }

	            if (gist_top < 380) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-gist');
	                $('.gist').css({ 'opacity': '1' });
	            }

	            if (connections_top < 380) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-connections');
	                $('.connections').css({ 'opacity': '1' });
	            }

	            if (sentences_top < 380) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-sentences');
	                $('.sentences').css({ 'opacity': '1' });
	            }

	            if (vocab_top < 380) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-vocabulary');
	                $('.vocab').css({ 'opacity': '1' });
	            }

	            if (vocab_top < 200) {
	                this.resetThreadText();
	                $('#cfer-braid-layers').addClass('braid-knowledge');
	                $('.knowledge').css({ 'opacity': '1' });
	            }
	        },
	        unfreezeUpperWindow: function unfreezeUpperWindow(scrolled) {

	            if (cfer.frozen) {
	                $('nav li').css({ 'opacity': '1' });
	                $('.freezeframe').css({ 'position': 'absolute', 'top': freezeframe_top + 180 });
	                $('.elements-text .inner').css('margin-top', '0px');
	                $('#cfer-braid-layers').addClass('braid-initial');
	                cfer.frozen = false;
	            }
	        },
	        unfreezeLowerWindow: function unfreezeLowerWindow(scrolled) {

	            if (cfer.frozen) {
	                $('nav li').css({ 'opacity': '1' });
	                $('.freezeframe').css({ 'position': 'absolute', 'top': scrolled + 'px' });
	                $('.elements-text .inner').css('margin-top', '-2379px');

	                if (isMobile) {
	                    $('.elements-text .inner').css('margin-top', '-1800px');
	                }

	                $('.element9').show();
	                $('.knowledge').css({ 'opacity': '1' });
	                cfer.frozen = false;
	            }
	        },
	        delayedReload: function delayedReload(section) {
	            console.log('delayed reload');

	            setTimeout(function () {
	                window.location.hash = section;
	            }, 1000);
	        },
	        navAction: function navAction() {
	            $('.nav li').click(function (e) {
	                console.log(cfer.frozen);

	                window.location.hash = "";

	                switch ($(this).index()) {
	                    case 0:
	                        window.location.hash = "about";
	                        break;
	                    case 1:
	                        $(window).css({ 'top': '1460px' });
	                        console.log("window scrolltop: " + $(window).scrollTop());
	                        window.location.hash = "curriculum";

	                        break;
	                    case 2:
	                        window.location.hash = "assessment";
	                        break;
	                    case 3:
	                        window.location.hash = "intervention";
	                        break;
	                    case 4:
	                        window.location.hash = "form";
	                        break;
	                }
	            });
	        },
	        checkSection: function checkSection() {
	            var curric = $('.curriculum')[0].getBoundingClientRect();
	            var currtop = curric.top;

	            if (currtop > 300) {
	                $('.nav li').removeClass('active');
	            }
	            if (currtop > 1000) {
	                $('.nav li').removeClass('active');
	                $('li.about').addClass('active');
	            }
	            if (currtop < 90) {
	                $('.nav li').removeClass('active');
	                $('li.curric').addClass('active');
	            }
	            if (currtop < -647) {
	                $('.nav li').removeClass('active');
	                $('li.assess').addClass('active');
	            }
	            if (currtop < -1480) {
	                $('.nav li').removeClass('active');
	                $('li.inter').addClass('active');
	            }
	            if (currtop < -2030) {
	                $('.nav li').removeClass('active');
	                //window.location.hash = "";
	            }
	        },
	        mobileNav: function mobileNav() {
	            $('.hamburger').removeClass('is-open').addClass('is-closed');

	            $('#sidebar-wrapper li').click(function (e) {

	                window.location.hash = "";

	                switch ($(this).index()) {
	                    case 0:
	                        //window.location.hash = "curriculum";
	                        $(window).animate({ 'scrollTop': '2008px' }, 500);
	                        break;
	                    case 1:
	                        //window.location.hash = "assessment";
	                        $(window).animate({ 'scrollTop': '4300px' }, 500);
	                        break;
	                    case 2:
	                        //window.location.hash = "intervention";
	                        $(window).animate({ 'scrollTop': '6300px' }, 500);
	                        break;
	                    case 3:
	                        //window.location.hash = "form";
	                        $(window).animate({ 'scrollTop': '8000px' }, 100);
	                        break;
	                }
	            });
	        },
	        resetMobile: function resetMobile() {
	            if (!cfer.mobileBtnHide) {
	                $('.btn, .learn-more, .fixed-btn-bg, .get-guide, .mobile-fix').hide();
	                cfer.mobileBtnHide = true;
	            }
	        },
	        mobileFix: function mobileFix(section) {
	            $('.btn, .learn-more, .fixed-btn-bg, .get-guide').hide();

	            switch (section) {
	                case 'elements':
	                    $('.elements .fixed-btn-bg, .get-guide').show();
	                    cfer.mobileBtnHide = false;
	                    break;
	                case 'curriculum':
	                    //$('.curriculum h1').css({'position':'fixed'});
	                    $('.curriculum .curr-btn, .curriculum .learn-more, .curriculum .fixed-btn-bg, .curriculum h1.mobile-fix').show();
	                    cfer.mobileBtnHide = false;
	                    break;
	                case 'assessment':
	                    $('.assessment .btn, .assessment .learn-more, .assessment .fixed-btn-bg, .assessment h1.mobile-fix').show();
	                    cfer.mobileBtnHide = false;
	                    break;
	                case 'intervention':
	                    $('.intervention .btn, .intervention .learn-more, .intervention .fixed-btn-bg, .intervention h1.mobile-fix').show();
	                    cfer.mobileBtnHide = false;
	                    break;
	            }
	        },
	        initMobile: function initMobile() {
	            isMobile = true;
	            cfer.mobileNav();

	            $('.contact-btn').addClass('mobile');

	            $('.navbar-header .mobile').click(function () {
	                $(window).animate({ 'scrollTop': '8200px' }, 500);
	            });

	            $(window).bind('scroll', function () {
	                var sounds_top = $('h3.sounds').position().top,
	                    letters_top = $('h3.letters').position().top,
	                    words_top = $('h3.words').position().top,
	                    gist_top = $('h3.gist').position().top,
	                    connections_top = $('h3.connections').position().top,
	                    sentences_top = $('h3.sentences').position().top,
	                    vocab_top = $('h3.vocab').position().top,
	                    knowledge_top = $('h3.knowledge').position().top,
	                    elem = $('.elements')[0].getBoundingClientRect(),
	                    curric = $('.curriculum')[0].getBoundingClientRect(),
	                    assess = $('.assessment')[0].getBoundingClientRect(),
	                    intervention = $('.intervention')[0].getBoundingClientRect(),
	                    elemtop = elem.top,
	                    currtop = curric.top,
	                    assesstop = assess.top,
	                    intertop = intervention.top;

	                scrolled = $(window).scrollTop();
	                var targetval = currtop - scrolled;

	                threadtext_top = scrolled * 3 - 1800;

	                if (elemtop < 0) {
	                    cfer.mobileFix('elements');
	                }

	                if (elemtop < -330) {
	                    cfer.resetMobile();
	                }

	                if (currtop < 0) {
	                    cfer.mobileFix('curriculum');
	                }
	                if (currtop < -1670) {
	                    cfer.resetMobile();
	                }

	                if (assesstop < -140) {
	                    cfer.mobileFix('assessment');
	                }
	                if (assesstop < -1240) {
	                    cfer.resetMobile();
	                }

	                if (intertop < 0) {
	                    cfer.mobileFix('intervention');
	                }
	                if (intertop < -1400) {
	                    cfer.resetMobile();
	                }
	            });
	        }
	    };

	    $('.imgslider1').slick({
	        autoplay: true,
	        autoplaySpeed: 3000,
	        arrows: false,
	        pauseOnHover: false,
	        dots: true
	    });

	    $('.imgslider1').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	        $('.hero .textbox p').hide();
	        $('.hero .textbox').find('p').eq(currentSlide).show("fast");
	    });

	    // Page behavior if not mobile

	    if (window.innerWidth > 769) {

	        $('.inner').css({ 'marginTop': '0' });

	        $('.imgslider2, .imgslider3, .imgslider4').slick({
	            autoplay: true,
	            autoplaySpeed: 3000,
	            fade: true,
	            arrows: false,
	            pauseOnHover: false,
	            dots: true
	        });

	        $('.imgslider2').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	            $('.curriculum .textbox p').hide();
	            $('.curriculum .textbox').find('p').eq(currentSlide).show("fast");
	        });

	        $('.imgslider3').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	            $('.assessment .textbox p').hide();
	            $('.assessment .textbox').find('p').eq(currentSlide).show("fast");
	        });
	        $('.imgslider4').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	            $('.intervention .textbox p').hide();
	            $('.intervention .textbox').find('p').eq(currentSlide).show("fast");
	        });

	        $(document).on("scrollstop", function () {
	            //cfer.snapback(cfer.activeSection);
	        }).on("scrollstart", function () {
	            //clearTimeout(cfer.snapbacktimeout);
	        });

	        $(window).bind('scroll', function () {
	            scrolled = $(window).scrollTop();
	            textbox1_top = -(scrolled / 5);
	            threadtext_top = scrolled * 3 - 1290;
	            imgslider2_top = scrolled / 1.5 - 1300;

	            console.log(scrolled);

	            cfer.checkSection();

	            if (scrolled > freezeframe_top && scrolled < 1200) {
	                $('.elements-text .inner').css('margin-top', -threadtext_top + 'px');
	                cfer.freezeWindow();
	            }
	            if (scrolled > 1300) {
	                cfer.unfreezeLowerWindow(scrolled);
	            }
	            if (scrolled < freezeframe_top) {
	                cfer.unfreezeUpperWindow(scrolled);
	            }

	            if (scrolled > 2750 && scrolled < 3200) {
	                $('.imgslider3').addClass('slidein');
	                $('.assess-bg').addClass('movein');
	                $('.intervention-bg').removeClass('movedown');
	            }
	            if (scrolled > 3300 && scrolled < 4100) {
	                $('.imgslider4').addClass('slidein');
	                $('.assess-bg').removeClass('movein');
	                $('.intervention-bg').addClass('movedown');
	            }
	        });
	    } else {
	        cfer.initMobile();
	    }

	    $.mobile.loading("show", {
	        text: "",
	        textVisible: false,
	        theme: "z",
	        html: ""
	    });

	    // Sidebar menu action
	    var trigger = $('.hamburger'),
	        overlay = $('.overlay'),
	        isClosed = false;

	    $('.sidebar-nav').click(function () {
	        $('#wrapper').removeClass('toggled');
	        trigger.removeClass('is-open');
	        trigger.addClass('is-closed');
	    });

	    trigger.click(function () {
	        hamburger_cross();
	    });

	    function hamburger_cross() {

	        if (isClosed == true) {
	            overlay.hide();
	            trigger.removeClass('is-open');
	            trigger.addClass('is-closed');
	            isClosed = false;
	        } else {
	            overlay.show();
	            trigger.removeClass('is-closed');
	            trigger.addClass('is-open');
	            isClosed = true;
	        }
	    }

	    $('[data-toggle="offcanvas"]').click(function () {
	        $('#wrapper').toggleClass('toggled');
	    });

	    cfer.navAction();
	});

/***/ })
/******/ ]);
