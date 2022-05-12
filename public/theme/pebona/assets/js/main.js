/******************************

INDEX:

    s00 - Predefined Variables
    s01 - Nice Select Init
    s02 - Main Navigation Menu
    s03 - Image Background Settings
    s04 - Primary Slider Settings
    s05 - Elements Spacing & Classes
    s06 - Elements Carousel
    s07 - Tooltips
    s08 - Product Gallery with Thumbnails
    s09 - Testimonial Carousel
    s10 - Scroll to Top JS
    s11 - Interactive Behaviour
    s12 - Instagram Settings
    s13 - MailChimp Settings



******************************/

(function($) {

    "use strict";

    // Declaring main variable
    var PEBONA = {};


    /************************************************************
        s00 - Predefined Variables
    *************************************************************/

    var $window             = $(window),
        $document           = $(document),
        $niceSelect         = $(".nice-select"),
        $mainMenu           = $(".stellarnav"),
        $headerfl           = $(".floating-header"),
        $pSlider            = $("#primary_slider"),
        $elCarousel         = $(".element-carousel"),
        $galleryThumbs      = $(".gallery-with-thumbs"),
        $testimonial        = $(".testimonial-container"),
        $toTop              = $("#to_top"),
        $intelHeader        = $(".main-nav-area"),
        $footer             = $("#colophon"),
        $priceRange         = $("#price_slider"),
        $instagram          = $("#instagram_feed"),
        $mailChimp          = $(".mc-subscribe-form");


    // Check if element exists
    $.fn.elExists = function() {
        return this.length > 0;
    };


    /************************************************************
        s01 - Nice Select Init
    *************************************************************/
    PEBONA.niceInit = function() {
        $niceSelect.niceSelect();
    };


    /************************************************************
        s02 - Main Navigation Menu
    *************************************************************/

    PEBONA.mainNav = function() {
        $mainMenu.stellarNav({
            theme: 'plain',
            breakpoint: 991,
            openingSpeed: 300,
            closingDelay: 100
        });

        // Adding active class to nav menu depending on page
        var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
        $("#main_nav a").each(function() {
            if ($(this).attr("href") === pageUrl || $(this).attr("href") === '') {
                $(this).closest('li').addClass("active");
                $(this).parents('li').addClass('active');
            }
            else if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
                $('#main_nav a[href="index.html"]').parent('li').addClass('active');
            }
        })
    };


    /************************************************************
        s03 - Image Background Settings
    *************************************************************/

    PEBONA.imageBgSettings = function() {
        $(".bg-img-wrapper").each(function() {
            var $this = $(this);
            var img = $this.find("img.visually-hidden").attr("src");

            $this.find(".image-placeholder").css({
                backgroundImage: "url(" + img + ")",
                backgroundSize: "cover",
                backgroundPosition: "center center"
            })
        });
    };


    /************************************************************
        s04 - Primary Slider Settings
    *************************************************************/

    PEBONA.primarySlider = function() {
        if ($pSlider.elExists()) {

            var interleaveOffset = 0.5;

            if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
                 // Firefox-related activities
                 var interleaveOffset = 0;
            }

            var swiperOptions = {
                loop: true,
                speed: 1000,
                effect: (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) ? 'fade' : 'slide', // Show fade effect instead of parallax slide in Firefox
                watchSlidesProgress: true,
                mousewheelControl: true,
                keyboardControl: true,
                disableOnInteraction: true,

                autoplay: {
                    delay: 7000
                },

                navigation: {
                    nextEl: ".swiper-arrow.next.slide",
                    prevEl: ".swiper-arrow.prev.slide"
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },

                // Giving slider a background parallax sliding effect
                on: {
                    progress: function() {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            var slideProgress = swiper.slides[i].progress;
                            var innerOffset = swiper.width * interleaveOffset;
                            var innerTranslate = slideProgress * innerOffset;
                            swiper.slides[i].querySelector(".slide-inner").style.transform =
                                "translate3d(" + innerTranslate + "px, 0, 0)";
                        }
                    },
                    touchStart: function() {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = "";
                        }
                    },
                    setTransition: function(speed) {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = speed + "ms";
                            swiper.slides[i].querySelector(".slide-inner").style.transition =
                                speed + "ms";
                        }
                    }
                }
            };

            var swiper = new Swiper($pSlider, swiperOptions);
        }
    };


    /************************************************************
        s05 - Elements Spacing & Classes
    *************************************************************/

    PEBONA.ElementsSpacingClasses = function() {

        // Fixed Navigation Menu Height
        var headerHeight = $intelHeader[0].getBoundingClientRect().height;
        var topBarHeight = ( $('header .top-bar').elExists() ) ? $('header .top-bar')[0].getBoundingClientRect().height : 0;
        var headerMainHeight = $('header .header-area')[0].getBoundingClientRect().height;
        var headerTotalHeight = topBarHeight + headerMainHeight;

        // Sticky header
        $window.on('scroll', function() {
            var height = $window.scrollTop();
            if (height < headerTotalHeight) {
                $(".fixed-header-space").height(0);
                $intelHeader.removeClass("sticky");
            } else if (height > headerHeight + headerTotalHeight) {
                $(".fixed-header-space").height(headerHeight);
                $intelHeader.addClass("sticky");
            }
        });

        // For header to float over Main Content
        if ($headerfl.elExists()) {
            var navHeight = ($window.width() > 991) ? $headerfl[0].getBoundingClientRect().height : 0;
            $("#content").css("margin-top", -navHeight);
        }

        // Slider content dynamic height
        if ($pSlider.elExists()) {
            var topBannersheight = ($('.top-promo-banners').elExists()) ? $('.top-promo-banners')[0].getBoundingClientRect().height : 0;
            var sliderHeight = $pSlider[0].getBoundingClientRect().height;
            var mainHeight = (sliderHeight === 0) ? topBannersheight : sliderHeight;
            $("#primary_slider .slide-content").parent(this).css("height", mainHeight);
        }

        // Equal height columns in slider section
        if ($window.width() > 991) {
            if ($(".top-promo-banners").elExists()) {
                var topBanners = $('.top-promo-banners')[0].getBoundingClientRect().height;
                $pSlider.height(topBanners);
            }
        }

        // Equal height columns in Google Map section
        if ($window.width() > 767) {
            if ($("#gmap").elExists()) {
                var formHeight = $(".contact-form-wrapper")[0].getBoundingClientRect().height;
                $('#gmap').css("height", formHeight);
            }
        }
    };


    /************************************************************
        s06 - Elements Carousel
    *************************************************************/

    PEBONA.elementsCarousel = function() {

        var visibleSlides       = null;
        var visibleSlides_xl    = null;
        var visibleSlides_lg    = null;
        var visibleSlides_md    = null;
        var visibleSlides_sm    = null;
        var visibleSlides_xs    = null;
        var slideLoop           = null;
        var slideSpeed          = null;
        var slideSpace          = null;
        var slideAutoPlayDelay  = null;
        var slideEffect         = null;

        if ($elCarousel.elExists()) {

            var swiperInstances = [];

            $elCarousel.each(function(index, element) {

                var $this = $(this);

                // Fetching from data attributes
                var visibleSlides       = $this.attr("data-visible-slide") ? parseInt($this.attr("data-visible-slide"), 10) : 5;
                var visibleSlides_xl    = $this.attr("data-visible-xl-slide") ? parseInt($this.attr("data-visible-xl-slide"), 10) : 5;
                var visibleSlides_lg    = $this.attr("data-visible-lg-slide") ? parseInt($this.attr("data-visible-lg-slide"), 10) : 4;
                var visibleSlides_md    = $this.attr("data-visible-md-slide") ? parseInt($this.attr("data-visible-md-slide"), 10) : 3;
                var visibleSlides_sm    = $this.attr("data-visible-sm-slide") ? parseInt($this.attr("data-visible-sm-slide"), 10) : 2;
                var visibleSlides_xs    = $this.attr("data-visible-xs-slide") ? parseInt($this.attr("data-visible-xs-slide"), 10) : 1;
                var slideSpeed          = $this.attr("data-speed") ? parseInt($this.attr("data-speed"), 10) : 1000;
                var slideLoop           = $this.attr("data-loop") === 'true' ? 1 : 0;
                var slideSpace          = $this.attr("data-space-between") ? parseInt($this.attr("data-space-between"), 10) : 30;
                var slideAutoPlayDelay  = $this.attr("data-autoplay-delay") ? parseInt($this.attr("data-autoplay-delay"), 10) : 100000000;
                var slideEffect         = $this.attr("data-effect") ? $this.attr("data-effect") : 'slide';

                // Adding slider and slider-nav instances to use multiple times in a page
                $this.addClass("instance-" + index);
                $this.parent().find(".prev").addClass("prev-" + index);
                $this.parent().find(".next").addClass("next-" + index);

                swiperInstances[index] = new Swiper(".instance-" + index, {
                    slidesPerView: visibleSlides,
                    spaceBetween: slideSpace,
                    speed: slideSpeed,
                    loop: slideLoop,
                    effect: slideEffect,
                    observer: true,
                    observeParents: true,
                    watchSlidesProgress: true,
                    watchSlidesVisibility: true,
                    loopAdditionalSlides: 10,
                    autoplay: {
                        delay: slideAutoPlayDelay
                    },

                    navigation: {
                        nextEl: '.swiper-arrow.next',
                        prevEl: '.swiper-arrow.prev'
                    },

                    pagination: {
                        el: '.pagination-' + index,
                        type: 'bullets',
                        clickable: true
                    },

                    // Responsive breakpoints
                    breakpoints: {
                        1400: {
                            slidesPerView: visibleSlides_xl,
                            autoplay: {
                                delay: slideAutoPlayDelay
                            }
                        },
                        1199: {
                            slidesPerView: visibleSlides_lg,
                            autoplay: {
                                delay: slideAutoPlayDelay
                            }
                        },
                        991: {
                            slidesPerView: visibleSlides_md,
                            autoplay: {
                                delay: slideAutoPlayDelay
                            }
                        },
                        767: {
                            slidesPerView: visibleSlides_sm,
                            autoplay: {
                                delay: slideAutoPlayDelay
                            }
                        },
                        479: {
                            slidesPerView: visibleSlides_xs,
                            autoplay: {
                                delay: 5000
                            }
                        }
                    }
                });
            });
            
            // Updating the sliders
            setTimeout(function () {
                swiperInstances.forEach(function(slider) {
                    slider.update();
                })
            }, 50);

            // Updating the sliders in tab
            $('body').on('shown.bs.tab', 'a[data-toggle="tab"], a[data-toggle="pill"]', function (e) {
                swiperInstances.forEach(function(slider) {
                    slider.update();
                })
            });
        }
    };


    /************************************************************
        s07 - Tooltips
    *************************************************************/

    PEBONA.toolTips = function() {
        $('body').tooltip( {selector: '[data-toggle=tooltip]'} );
    };


    /************************************************************
        s08 - Product Gallery with Thumbnails
    *************************************************************/

    PEBONA.galleryWithThumb = function() {
        if ($galleryThumbs.elExists()) {

            // Params
            var mainSliderSelector = '.main-slider',
                navSliderSelector = '.nav-slider';

            // Main Slider
            var mainSliderOptions = {
                effect: 'fade',
                loop: true,
                speed:1000,
                spaceBetween: 0,
                loopAdditionalSlides: 10,
                watchSlidesProgress: true,
                observer: true,
                observeParents: true
            };
            var mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

            // Navigation Slider
            var navSliderOptions = {
                loop: true,
                speed:1000,
                slidesPerView: 3,
                mousewheel: true,
                loopAdditionalSlides: 10,
                direction: 'vertical',
                centeredSlides: true,
                spaceBetween: 15,
                autoplay: {
                    delay: 100000000
                },
                touchRatio: 0.2,
                grabCursor: true,
                slideToClickedSlide: true,
                observer: true,
                observeParents: true,

                navigation: {
                    nextEl: '.swiper-arrow.next',
                    prevEl: '.swiper-arrow.prev'
                },

                // Responsive breakpoints
                breakpoints: {
                    991: {
                        direction: 'horizontal',
                    },
                    479: {
                        direction: 'horizontal',
                        autoplay: {
                            delay: 5000
                        }
                    }
                }
            };
            var navSlider = new Swiper(navSliderSelector, navSliderOptions);

            // Connecting the sliders
            mainSlider.controller.control = navSlider;
            navSlider.controller.control = mainSlider;

            // Updating slider in modal
            $('body').on('shown.bs.modal', '#product_quick_view', function() {
                setTimeout(function() {
                    navSlider.update();
                    mainSlider.update();
                }, 500);
            });
        }
    };


    /************************************************************
        s09 - Testimonial Carousel
    *************************************************************/

    PEBONA.testimonialCarousel = function() {
        if ($testimonial.elExists()) {
            var testimonial = new Swiper($testimonial, {
                loop: true,
                spaceBetween: 0,
                parallax: true,
                speed: 1000,
                autoplay: {
                    delay: 6000
                },

                pagination: {
                    el: '.swiper-pagination-testimonial',
                    clickable: true
                },

                navigation: {
                    nextEl: '.swiper-arrow.next.testimonial-slide',
                    prevEl: '.swiper-arrow.prev.testimonial-slide'
                }
            });
        }
    };


    /************************************************************
        s10 - Scroll to Top JS
    *************************************************************/

    PEBONA.scrollToTop = function() {
        $toTop.hide();
        $window.on('scroll', function() {
            if ($window.scrollTop() > 300) {
                $toTop.fadeIn();
            } else {
                $toTop.fadeOut();
            }
        });

        $toTop.on('click', function() {
            $("html,body").animate({
                scrollTop: 0
            }, 1000)
        });
    };


    /************************************************************
        s11 - Interactive Behaviour
    *************************************************************/

    PEBONA.interactiveBehaviour = function() {

        // Checkout Page Accordion Behaviour
        $( '#show_login' ).on('click', function() {
            $( '#checkout_login' ).slideToggle(300);
        });

        $( '#show_coupon' ).on('click', function() {
            $( '#checkout_coupon' ).slideToggle(300);
        });

        $("#different_shipping").on("change",function(){
            $(".ship-box-info").slideToggle(300);
        });

        $("#create_account").on("change",function(){
            $(".new-account-info").slideToggle(300);
        });
        

        // Header Custom dropdowns
        $("header .dropdown-toggle").on("click", function() {
            $(this).toggleClass('open').next('.dropdown-menu').toggleClass('open');
            $(this).parents().siblings().find('.dropdown-menu, .dropdown-toggle').removeClass('open');
        });

        // Closing the dropdown by clicking in the menu button or anywhere in the screen
        $('body').on('click', function (e) {
            var target = e.target;
            if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
                $('.dropdown-toggle, .dropdown-menu').removeClass('open');
            }
        });

        // Prevent closing dropdown upon clicking inside the dropdown
        $("header .dropdown-menu").on("click", function(e) {
            e.stopPropagation();
        });


        // Newsletter Popup
        setTimeout(function () {
            $('#newsletter_popup').css({
                "opacity": "1",
                "visibility": "visible"
            });

            // Closing the popup by clicking in the close button or anywhere in the screen
            $('body, .popup-close').on('click', function () {
                $("#newsletter_popup").css('visibility', 'hidden').animate({opacity: 0}, 100);
            });

            // Prevent closing popup upon clicking inside the popup
            $('#newsletter_popup .popup-container').on('click', function (e) {
                e.stopPropagation();
            });
        }, 2500);


        // Custom INC/DESC clickable button
        $(".cart-input").append('<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>');
        $(".qtybutton").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find("input").val(newVal);
        });

    };


    /************************************************************
        s12 - Instagram Settings
    *************************************************************/

    PEBONA.instagramSettings = function() {
        if ($instagram.elExists()) {
            var feed = new Instafeed({
                get: 'user',
                userId: 8580578245,
                accessToken: '8580578245.1677ed0.b2e421cca71c48eaa4531f42aa1503bc',
                target: 'instagram_feed',
                resolution: 'standard_resolution',
                limit: 9,
                template: '<figure class="swiper-slide"><a href="{{image}}" data-size="640x640"><img src="{{image}}"/></a><figcaption class="visually-hidden"><span>{{caption}}</span></figcaption></figure>',

                after: function () {

                    var swiper = new Swiper('.instagram-container', {
                        loop: true,
                        slidesPerView: 5,
                        spaceBetween: 20,
                        speed: 1000,
                        centeredSlides: true,
                        grabCursor: true,
                        autoplay: {
                            delay: 5000
                        },

                        // Responsive breakpoints
                        breakpoints: {
                            1199: {
                                slidesPerView: 4,
                                centeredSlides: false
                            },
                            991: {
                                slidesPerView: 4,
                                centeredSlides: false
                            },
                            767: {
                                slidesPerView: 3
                            },
                            575: {
                                slidesPerView: 3
                            },
                            479: {
                                slidesPerView: 2,
                                centeredSlides: false
                            }
                        }
                    });
                }
            });
            
            feed.run();
        }
    };


    /************************************************************
        s13 - MailChimp Settings
    *************************************************************/

    PEBONA.mcSettings = function() {
        if ($mailChimp.elExists()) {
            $mailChimp.ajaxChimp({
                language: 'en',
                callback: mailChimpResponse,
                
                // ADD YOUR MAILCHIMP URL BELOW HERE!
                url: 'https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'
            });

            function mailChimpResponse(resp) {
                if (resp.result === 'success') {
                    $('.mailchimp-success').addClass('active').html('' + resp.msg).fadeIn(900);
                    $('.mailchimp-error').removeClass('active').fadeOut(400);
                } else if(resp.result === 'error') {
                    $('.mailchimp-error').addClass('active').html('' + resp.msg).fadeIn(900);
                }
            }
        }
    };



    // Window load functions
    $window.on('load', function() {
        PEBONA.primarySlider(),
        PEBONA.interactiveBehaviour();
        PEBONA.imageBgSettings();
    });

    // Document ready functions
    $document.on('ready', function() {
        PEBONA.niceInit(),
        PEBONA.mainNav(),
        PEBONA.elementsCarousel(),
        PEBONA.galleryWithThumb(),
        PEBONA.testimonialCarousel(),
        PEBONA.scrollToTop(),
        PEBONA.toolTips(),
        PEBONA.mcSettings(),
        PEBONA.instagramSettings();
    });

    // Window load and resize functions
    $window.on('load resize', function() {
        PEBONA.ElementsSpacingClasses();
    });

})(jQuery);