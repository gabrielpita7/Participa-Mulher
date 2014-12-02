/* Responsive Menu */
      $(function() {
        $( '#dl-menu' ).dlmenu();
      });
/* Responsive Menu */

/* Flex Slider */
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
/* Flex Slider */

/* Scroll Top */
$('.scroll').click(function(){
  $("html, body").animate({ scrollTop: 0 }, 1000);
  return false;
});
/* Scroll Top */

/* Tabs */
$(function() {

  $('ul.tabs').on('click', 'li:not(.current)', function() {
    $(this).addClass('current').siblings().removeClass('current')
      .parents('div.tab-device').find('div.box').eq($(this).index()).fadeIn(1000).siblings('div.box').hide();
  })
})
/* Tabs */

/* Tabs Shortcodes*/
jQuery('.shortcode_tabs').each(function (index) {
    var i = 1;
    jQuery('.shortcode_tab_item_title').each(function (
        index) {
        jQuery(this).addClass('it' + i);
        jQuery(this).attr('whatopen', 'body' + i);
        jQuery(this).addClass('head' + i);
        jQuery(this).parents('.shortcode_tabs').find(
            '.all_heads_cont').append(this);
        i++;
    });
    var i = 1;
    jQuery('.shortcode_tab_item_body').each(function (
        index) {
        jQuery(this).addClass('body' + i);
        jQuery(this).addClass('it' + i);
        jQuery(this).parents('.shortcode_tabs').find(
            '.all_body_cont').append(this);
        i++;
    });
});
jQuery('.shortcode_tabs .all_body_cont div:first-child')
    .addClass('active-tabs');
jQuery(
    '.shortcode_tabs .all_heads_cont div:first-child').addClass(
    'active-tabs');

jQuery('.shortcode_tab_item_title').click(function () {
    jQuery(this).parents('.shortcode_tabs').find(
        '.shortcode_tab_item_body').removeClass('active-tabs');
    jQuery(this).parents('.shortcode_tabs').find(
        '.shortcode_tab_item_title').removeClass('active-tabs');
    var whatopen = jQuery(this).attr('data-open');
    jQuery(this).parents('.shortcode_tabs').find('.' +
        whatopen).addClass('active-tabs');
    jQuery(this).addClass('active-tabs');
});
/* Tabs Shortcodes*/

/* Scroll To Services*/
$(document).ready(function(){
    $('.service-link').click(function(){
        var speed = 1000;
        var top = $('#service-scroll').offset().top;
        $('html, body').animate({scrollTop: top}, speed);
        return false;
    });
});
/* Scroll To Services*/