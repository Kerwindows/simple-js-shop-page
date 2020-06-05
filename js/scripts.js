/*
 * scripts
 */

jQuery(document).ready(function($){
  $('#css-code').hide();
  $('#css-btn2').hide();
  $('#css-btn1').click(function(){
    $('#css-code').show();
    $('#css-btn2').show();
    $('#css-btn1').hide();
  });
  $('#css-btn2').click(function(){
    $('#css-code').hide();
    $('#css-btn1').show();
    $('#css-btn2').hide();
  });
});