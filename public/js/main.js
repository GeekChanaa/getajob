
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

(function ($) {
	"use strict";
	$('.column100').on('mouseover',function(){
		var table1 = $(this).parent().parent().parent();
		var table2 = $(this).parent().parent();
		var verTable = $(table1).data('vertable')+"";
		var column = $(this).data('column') + "";

		$(table2).find("."+column).addClass('hov-column-'+ verTable);
		$(table1).find(".row100.head ."+column).addClass('hov-column-head-'+ verTable);
	});

	$('.column100').on('mouseout',function(){
		var table1 = $(this).parent().parent().parent();
		var table2 = $(this).parent().parent();
		var verTable = $(table1).data('vertable')+"";
		var column = $(this).data('column') + "";

		$(table2).find("."+column).removeClass('hov-column-'+ verTable);
		$(table1).find(".row100.head ."+column).removeClass('hov-column-head-'+ verTable);
	});


})(jQuery);
