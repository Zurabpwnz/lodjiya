/* --------------
--- Mobile menu--
--------------- */
const burger = document.querySelector(".nav__burger");
const nav = document.querySelector(".nav__burger-menu");
const closeNav = document.querySelector(".nav__burger-close");
const body = document.body;

const toggleElements = function () {
    nav.classList.toggle("show");
    body.classList.toggle("overflow");
};

burger.onclick = toggleElements;
closeNav.onclick = toggleElements;


/* --------------
--- Swiper Set --
--------------- */

const swiperCase = new Swiper('.swiper_case', {
    slidesPerView: 1,
    autoHeight: true,
    effect: 'fade',
    loop: true,
    simulateTouch: false,
    fadeEffect: {
        crossFade: true
    },
    navigation: {
        nextEl: '.case-study__next',
        prevEl: '.case-study__prev',
    },
})

const swiperRev = new Swiper('.reviews__swiper', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 32,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.reviews__next',
        prevEl: '.reviews__prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 20,
            autoHeight: true
        },
        993: {
            slidesPerView: 2,
            spaceBetween: 32
        }
    }
})

const swiperPartner = new Swiper('.partners__swiper', {
    slidesPerView: 5,
    spaceBetween: 32,
    loop: true,
    speed: 5000,
    autoplay: {
        enabled: true,
        delay: 1,
    },
    freeMode: {
        enabled: true
    },
    on: {
        init() {
            this.el.addEventListener('mouseenter', () => {
                this.autoplay.stop();
            });

            this.el.addEventListener('mouseleave', () => {
                this.autoplay.start();
            });
        }
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        480: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        1300: {
            slidesPerView: 5,
            spaceBetween: 32
        }
    }
})


if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
    for (const el of document.querySelectorAll('*[data-target]')) {
        const target = document.querySelector(`*[data-ankor="${el.dataset.target}"]`);
        el.addEventListener('click', e => target.scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "nearest"
        }));
    }
}

/* ----––---------
----jquery tab---
---------------- */

$(function () {

    $('.bullets__tab').on('click', '.bullets__tab-item:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.bullets__grid').find('div.bullets__content-item').removeClass('active').eq($(this).index()).addClass('active');
    });

});


$('#menu-mobile-menu a').on('click', function () {
    $('body').removeClass('overflow');
    $('.nav__burger-menu').removeClass('show');
});

document.addEventListener('wpcf7mailsent', function (event) {
    if ('6' == event.detail.contactFormId) {
        $('.footer__right .wpcf7-submit').addClass('success').val('');

        setTimeout(function () {
            $('.footer__right .wpcf7-submit').removeClass('success').val('Send inquiry');
        }, 3000);
    }
}, false);


// Make all the columns of the same height
function setEqualHeight(columns) {
    var tallestcolumn = 0;

    columns.each(function () {
        currentHeight = $(this).height();
        if (currentHeight > tallestcolumn) {
            tallestcolumn = currentHeight;
        }
    });

    columns.height(tallestcolumn);
}

setEqualHeight($(".case-study__item-top p"));


/* ------------------
--- RToggle Footer --
------------------ */

$('#footer-small__action').click(function () {
    $('.footer-small').slideToggle("slow");
    $('.footer').slideToggle("slow");

    // $('html,body').animate({scrollTop: $('html,body').get(0).scrollHeight});
});

$('#toggleFooter').on('click', function () {
    $('.footer-small').slideToggle("slow");
    $('.footer').slideToggle("slow");
})


/*
Ajax Load Posts
 */
$(document).ready(function () {

    var ppp = 5; // Post per page
    var pageNumber = 1;

    function load_posts() {
        pageNumber++;
        var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function (data) {
                var $data = $(data);
                if ($data.length) {
                    $("#ajax-posts").append($data);
                    //$("#more_posts").attr("disabled",false); // Uncomment this if you want to disable the button once all posts are loaded
                    $("#more_posts").hide(); // This will hide the button once all posts have been loaded
                } else {
                    $("#more_posts").attr("disabled", true);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    $(window).on('scroll', function () {
        console.log(jQuery(window).scrollTop() + jQuery(window).height());
        console.log(jQuery(document).height() - 100);
        if (jQuery(window).scrollTop() + jQuery(window).height() >= jQuery(document).height() - 100) {
            load_posts();
        }
    });

});





/*
new js
 */

(function (){
    var btn = $('#backTop');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
})();

