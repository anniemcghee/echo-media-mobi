/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// Card quotes flipping on a set interval - delay betwen cards increases over time because of set Interval
$(document).ready(function()
{
    setInterval( function()
    {
        $("#card1").toggleClass("flipped");
    },16100);
    setInterval( function()
    {
        $("#card2").toggleClass("flipped");
    }, 16200);
    setInterval( function()
    {
        $("#card3").toggleClass("flipped");
    }, 16300);

});

// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Image popovers
jQuery(function($) {
    $('.popover-markup > .trigger').popover({
    html : true,
    title: function() {
        return $(this).parent().find('.head').html();
    },
    content: function() {
        return $(this).parent().find('.content').html();
    },
    container: 'body',
    placement: 'bottom'
    });

});

