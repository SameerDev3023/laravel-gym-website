$(document).ready(function(){
  $('#cart-form').on('submit',function(){
    console.log($(this).find('input[type="hidden"]').last().val());
  })
})