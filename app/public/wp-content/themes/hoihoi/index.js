$(function(){

  $(".button").click(function(){
    $(".upload__modal--window,.upload__modal--overlay").fadeIn();
  });

  $(".upload__modal--close").click(function(){
    $(".upload__modal--window,.upload__modal--overlay").fadeOut();
  });

  $(".sp__header--humberger").click(function(){
    $(this).toggleClass("active");
  });

  $(".sp__header--humberger").click(function(){
    $(".sp__nav").fadeIn();
  });

  $(".active").click(function(){
    $(".sp__nav").fadeOut();
  });

});