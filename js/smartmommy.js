/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//$( document ).ready(function(){
//  $('.carousel').carousel({fullWidth: true });
//        }
//                   );
           
//$('a.vorige').click(function() {
//    $('.slider').slider('prev');
//});
//
//$('a.volgende').click(function() {
//    $('.slider').slider('next');
//});
//
//$(document).ready(function(){
//      $('.slider').slider({full_width: true});
//});
$(document).ready(function(){
$('.carousel').carousel();
});

$(document).ready(function() {
  $("#review-carousel").swiperight(function() {
    $(this).carousel('prev');
  });
  $("#review-carousel").swipeleft(function() {
    $(this).carousel('next');
  });
});