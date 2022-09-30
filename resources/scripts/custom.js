jQuery(document).ready(function($) {
    // Wrap submenu in extra div
    if (window.matchMedia('(min-width: 1024px)').matches) {
        $('.menu-item-has-children > .sub-menu').wrap("<div class='sub-menu-wrapper bg-dark-navy absolute w-full bg-dark-navy inset-x-0 grid grid-cols-6 gap-4'></div>");
    }

    // search form
    $('.close-form').click(function() {
        $('.search-menu').toggleClass('search-open');
    });

    // Notice header
    var InfoKey = 'notice_header',
        InfoHeader = $('#' + InfoKey),
        InfoCookie = InfoKey + '_cookie';
    $(".primary-header .close").click(function() {
        $('.primary-header').hide();
        $('.hero-section').addClass('lg:pt-36 pt-20');
        $('.hero-section').removeClass('lg:pt-52 pt-40');

        $('.inner-hero-section').addClass('lg:mt-36 mt-24');
        $('.inner-hero-section').removeClass('lg:mt-52 mt-40');

        $('#main').removeClass('show_slider');
        heightNew = 93;
        $('.sidenav').css('top', heightNew);

        if (Cookies.get(InfoCookie) !== '1') {
            Cookies.set(InfoCookie, '1');
        }

    });
    if (Cookies.get(InfoCookie) == '1') {
        $('.primary-header').hide();
        $('.hero-section').addClass('lg:pt-36 pt-20');
        $('.hero-section').removeClass('lg:pt-52 pt-40');

        $('.inner-hero-section').addClass('lg:mt-36 mt-24');
        $('.inner-hero-section').removeClass('lg:mt-52 mt-40');
        $('#main').removeClass('show_slider');

    } else {
        $('.primary-header').show();
        $('#main').addClass('show_slider');
        // set_height();
        setTimeout(set_height, 100)
    }

    $(window).on('resize', function() {
        heightNew = '';
        if (Cookies.get(InfoCookie) != '1') {
            setTimeout(set_height, 100)
        }
        location.reload();
    });

    function set_height() {
        heightt = $('.primary-header').outerHeight();
        // console.log(heightt);
        topp = 93;
        heightNew = heightt + topp;
        $('.sidenav ').css('top', heightNew);
    }

    if ($('.two-column-content-section').next('section').hasClass('two-column-with-bg-image-blue-pattren-section')) {
        $('.orange_with_single_circle').addClass('z-20');
        $('.orange_with_single_circle img').addClass('z-20');
    }


    // mobile sub-menu
    if (window.matchMedia('(max-width: 1023px)').matches) {
        $(".menu-item").removeClass("menu-open");

        $(".menu-item-has-children").click(function(e) {
            e.stopPropagation();
            var elem = $(this);
            if (elem.is('.menu-open')) {
                elem.children('ul').slideUp(200);
                elem.removeClass('menu-open');
            } else {
                $('.menu-item-has-children').removeClass('.menu-open');
                elem.addClass('menu-open').children('ul').slideDown(200);
            }
        });

        $(document).click(function() {
            $('.menu-open').removeClass('menu-open');
        });
    }


    $('.responsive').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.hero-responsive').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.therapy-slide').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.services-options').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });



    $('.testimonial-slider').slick({
        infinite: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                arrows: false,
                adaptiveHeight: true,
                centerMode: true,
                slidesToShow: 1,
            }
        }]
    });

    // Mobile Menu
    $(".navbar-toggler").on("click", function() {
        if ($('.sidenav, #main, body').hasClass('show')) {

            $('.sidenav, #main, body').removeClass('show');

        } else {

            $('.sidenav, #main, body').removeClass('show');

            $('.sidenav, #main, body').addClass('show');

        }
        if ($('.navbar-toggler-icon').hasClass('open')) {
            $('.navbar-toggler-icon').removeClass('open');
        } else {
            $('.navbar-toggler-icon').removeClass('open');
            $('.navbar-toggler-icon').addClass('open');
        }
    });
    $(".show_content").click(function(e) {
        e.preventDefault()
        id = $(this).attr("data-id")
        $("#show_section-" + id).slideDown('slow');
        $(this).hide('slow');
    });

    $(".hide_content").click(function(e) {
        e.preventDefault()
        id = $(this).attr("data-id")
        $("#show_section-" + id).slideUp("slow");
        $("#show_content-" + id).show('slow');
    });

    k = 1;
    jQuery('.main section').each(function() {
        if (!$('body').hasClass('home')) {
            if (k == 1) {
                if (!$(this).hasClass('inner-hero-section')) {
                    if ($(this).hasClass('full-width-section')) {
                        $(this).addClass('pt-24 mt-40 lg:mt-52');
                        $(this).removeClass('-mt-16 pt-48');
                    } else {
                        $(this).addClass('mt-40 lg:mt-52');
                    }

                }
            }
        }


        k++;
    });

    $.fn.equalHeights = function() {
        var selector = this;
        var heights = [];

        // Save the heights of every element into an array
        selector.each(function() {
            var height = $(this).height();
            heights.push(height);
        });

        // Get the biggest height
        var maxHeight = Math.max.apply(null, heights);

        // Set the maxHeight to every selected element
        selector.each(function() {
            $(this).height(maxHeight);
            // console.log("kjhkjh");
        });
    }
    $('.outpatient-locations-section .therapist-profile-main').equalHeights();

    if ($('.accordion-wrapper').length) {
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                var links = this.el.find('.accordion-title');
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                var $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('active');

                if (!e.data.multiple) {
                    $el.find('.accordion-content').not($next).slideUp().parent().removeClass('active');
                };
            }
            var accordion = new Accordion($('.accordion-container'), false);
        });
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#accordion').length) {
                $(this).parent().toggleClass('active');
            }
        });
    }

});


// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function() {
//         this.classList.toggle("active");
//         var panel = this.nextElementSibling;
//         if (panel.style.display === "block") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     });

// }


// function openCity(evt, cityName) {
//     var i, tabcontent, tablinks;
//     tabcontent = document.getElementsByClassName("tabcontent");
//     for (i = 0; i < tabcontent.length; i++) {
//         tabcontent[i].style.display = "none";
//     }
//     tablinks = document.getElementsByClassName("tablinks");
//     for (i = 0; i < tablinks.length; i++) {
//         tablinks[i].className = tablinks[i].className.replace(" active", "");
//     }
//     document.getElementById(cityName).style.display = "block";
//     evt.currentTarget.className += " active";
// }

// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();