function showAJAXDebugInfo(info, owner) {
    var debugBlockId = ((owner != null) ? owner + 'AJAX':'generalAJAX') + 'debugInfo';

    if ($('#_debugArea div[id="' + debugBlockId + '"]').length) {
        $('#' + debugBlockId).html(info);
    }
    else {
        $('#_debugArea').append('<div id="' + debugBlockId + '">' + info + '</div>');
    }
}
$("ul.sf-menu").superfish().find('ul').bgIframe({opacity:false});
$('#nav li:last').addClass('last');
$('form:first input[type=text]:first').focus();   
$('.startup1').html('SecureComparison').attr('href', 'http://securecomparison.co.uk/');
$('.startup2').html('GiftHulk').attr('href', 'http://www.gifthulk.com/');
$('.startup3').html('SmartVitaminClub').attr('href', 'http://smartvitaminclub.com/');
$('#foo6').carouFredSel({
    auto: true,
    responsive: true,
    prev: '#prev6',
    next: '#next6',
    pagination: "#pager6",
    swipe: true,
    mousewheel: true,
    width: '100%',
    scroll: 1,
    items: {
    width: 160,
    visible: {
        min: 2,
        max: 4
            }
    }	
});

$(document).ready(function() {
    /*
    $('.salesemail').html('sales' + '@' + 'stableflow' + '.' + 'com').attr('href', 'mail' + 'to' + ':' + 'sales' + '@' + 'stableflow' + '.' + 'com');
    $('.contactemail').html('contact' + '@' + 'stableflow' + '.' + 'com').attr('href', 'mail' + 'to' + ':' + 'contact' + '@' + 'stableflow' + '.' + 'com');
    $('.requestemail').html('sales' + '@' + 'stableflow' + '.' + 'com').attr('href', 'mail' + 'to' + ':' + 'sales' + '@' + 'stableflow' + '.' + 'com');
    $('.cvemail').html('cv' + '@' + 'stableflow' + '.' + 'com').attr('href', 'mail' + 'to' + ':' + 'cv' + '@' + 'stableflow' + '.' + 'com');
    $('.hrphone').html('+38&nbsp;(093)&nbsp;091&nbsp;60&nbsp;40').attr('href', 'tel:' + '+380930916040');
    $('.salesphone1').html('+1&nbsp;718&nbsp;395&nbsp;3674').attr('href', 'tel:' + '+17183953674');
    $('.salesphone2').html('+44&nbsp;020&nbsp;8144&nbsp;8618').attr('href', 'tel:' + '+4402081448618');
    $('.hrskype').html('olga_kiporenko').attr('href', 'skype:' + 'olga_kiporenko?chat');
    */
    
    var mySlidebars = new $.slidebars({
        siteClose: true
    });
    $(".sb-menu").find(".sb-submenu").each(function() {
        $(this).parent().find(">:first-child").addClass("sb-toggle-submenu").append("<span class=\"sb-caret\"></span>");
    });
    $(".active-sbmenu").find(".sb-submenu").each(function() {
        $(this).slideDown(200).parent().toggleClass('sb-submenu-active-li').find(">:first-child").add(this).toggleClass('sb-submenu-active');
    });
    $('.sb-toggle-submenu').off('click').on('click', function() {
        $(this).parent().toggleClass('sb-submenu-active-li');
        $submenu = $(this).parent().children('.sb-submenu');
        $(this).add($submenu).toggleClass('sb-submenu-active');
        if ($submenu.hasClass('sb-submenu-active')) {
            $submenu.slideDown(200);
        } 
        else {
            $submenu.slideUp(200);
        }
    });
    $(window).resize(function() {
       if ($( window ).width() > 979)
       {    
            if (mySlidebars.active('left'))
            {
                mySlidebars.close();
            }
            if (mySlidebars.active('right'))
            {
                mySlidebars.close();
            }
       }
    });
});