// Search form animation
$(".search-form input").focus(function(e){
  $(this).siblings("label,svg").addClass('moveup');
});
$(".search-form input").blur(function(e){
    if($(this).val()==''){
      $(this).siblings("label,svg").removeClass('moveup');
    }
});
// Feed forms animation
$(".form-field input").focus(function(e){
  $(this).siblings("label").addClass('moveup');
});
$(".form-field input").blur(function(e){
    if($(this).val()==''){
      $(this).siblings("label").removeClass('moveup');
}
});
// Dashboard form animation
$(".db-form input").focus(function(e){
  $(this).siblings("label").addClass('moveup');
});
$(".db-form input").blur(function(e){
    if($(this).val()==''){
      $(this).siblings("label").removeClass('moveup');
      $(this).siblings("label").css('color','#a1a3ab');
    }
    else{
      $(this).css('border','1px solid var(--dark-gray)');
    }
});
