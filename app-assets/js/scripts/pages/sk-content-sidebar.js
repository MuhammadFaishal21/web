/*=========================================================================================
    File Name: content-sidebar.js
    Description: Invoices list datables configurations
    ----------------------------------------------------------------------------------------
    Item Name: Pakualam HTML Admin Template
    Version: 1.0
    Author: Kelompok 8
    Author URL: http://www.themeforest.net/user/Kelompok 8
==========================================================================================*/

$(document).ready(function() {

    if($(".sidebar-sticky").length){
        var headerNavbarHeight,
            footerNavbarHeight;

        // Header & Footer offset only for right & left sticky sidebar
        if($("body").hasClass('content-right-sidebar') || $("body").hasClass('content-left-sidebar')){
            headerNavbarHeight = $('.header-navbar').height();
            footerNavbarHeight = $('footer.footer').height();
        }
        // Header & Footer offset with padding for detached right & left dsticky sidebar
        else{
            headerNavbarHeight = $('.header-navbar').height()+24;
            footerNavbarHeight = $('footer.footer').height()+10;
        }

        $(".sidebar-sticky").sticky({
            topSpacing: headerNavbarHeight,
            bottomSpacing: footerNavbarHeight
        });
    }
});
