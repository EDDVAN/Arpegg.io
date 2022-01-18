"use strict";

$('.LM-dropdown').hide();
$('.LM-dropdown').css("margin-left", $('#Link1').width());
$('#Link2').on("click", function () {
  if ($(".LM-dropdown").is(":hidden")) {
    $('.LM-dropdown').slideDown(200);
  } else {
    $('.LM-dropdown').slideUp(200);
  }
});
$('.aside-mobile').css("top", $('nav-mobile').height());
$('.aside-mobile').hide();
$('#Mobile-Menu').on("click", function () {
  if ($('.aside-mobile').is(":hidden")) {
    $('.aside-mobile').show(200);
  } else {
    $('.aside-mobile').hide(200);
  }
});
$('.UserDropDown').hide();
$('#nav-cog').on("click", function () {
  if ($(".UserDropDown").is(":hidden")) {
    $('.UserDropDown').slideDown(200);
  } else {
    $('.UserDropDown').slideUp(200);
  }
});