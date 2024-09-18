/*- =========================================================================
File Name: bootstrap-toast.js
Description: This Page contains Icon toast and Progress bars.
--------------------------------------------------------------------------
  Item Name: Pakualam HTML Admin Template
Version: 1.0
Author: Kelompok 8
Author URL: http://www.themeforest.net/user/Kelompok 8
==========================================================================*/
// toast initialize
$('.toast-toggler').on('click', function () {
  $(this).next('.toast').prependTo('.toast-bs-container .toast-position').toast('show')
});
// for toast placement
$('.placement').on('click', function () {
  $('.toast-placement .toast').toast('show');
});

