/*=========================================================================================
  File Name: footer.js
  Description: Template footer js.
  ----------------------------------------------------------------------------------------
  Item Name: Pakualam HTML Admin Template
 Version: 1.0
  Author: Kelompok 8
  Author URL: hhttp://www.themeforest.net/user/Kelompok 8
==========================================================================================*/

//Check to see if the window is top if not then display button
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scroll-top').click(function(){
        $('html, body').animate({scrollTop : 0},1000);
    });

});
