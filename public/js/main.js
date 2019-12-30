$(".search-form input").focus(function(e){
  $(this).siblings("label,svg").addClass('moveup');
});
$(".search-form input").blur(function(e){
  console.log($(this).val().length);
    if($(this).val()==''){
      $(this).siblings("label,svg").removeClass('moveup');
    }
});
