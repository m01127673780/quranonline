<script>
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
 
       
        $('#zero').click(function() {
        $('.zero').slideDown(10 ,function(){
            $('.one,.two,.three,.four,.five').hide(10);
        });
    }); 

           $('#one').click(function() {
        $('.one').slideDown(10 ,function(){
            $('.two,.three,.four,.five').hide(10);
        });
    });

    $('#two').click(function() {
        $('.two').slideDown(10 ,function(){
            $('.three,.four,.five').hide(10 ,function(){
                $('.two input').attr("required", "required");
            });
        });
    });


    $('#three').click(function() {
        $('.two,.three').slideDown(10,function(){
            $('.four,.five').hide(10 ,function(){
                $('.two,.three input').attr("required", "required");
            });
        });
    });

    $('#four').click(function() {
        $('.two,.three,.four').slideDown(10,function(){
            $('.five').hide(10 ,function(){
                $('.two,.three,.four input').attr("required", "required");
            });
        });
    });

    $('#five').click(function() {
        $('.two,.three,.four,.five').slideDown(10 ,function(){
            $('.two,.three,.four,.five input').attr("required", "required");
        });
    });


</script>