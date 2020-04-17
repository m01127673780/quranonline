(function($){
	function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass();
				}
			});
		});
	}
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");
})(jQuery);


  $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });

// ----------------------------------
// -----------------------------
/*start shufil portofile */
$(".buttons  .option").click(function() {
  
  // $(this).addClass("active-btn").siblings().removeClass("active-btn");
  
  var cssFilter = $(this).attr('id');
  
    if( cssFilter === "all" ) {
  $(".images > div").fadeIn();
  $(".red-more").not($(".red-more").fadeIn(".red-more").fadeOut());
  } else {
   $(".images > div ") .fadeOut(0);
    
   $(".images").contents().filter("." + cssFilter).fadeIn(0);

  }
 
});