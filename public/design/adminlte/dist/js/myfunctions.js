function check_all() 
  {
    $('input[class="item_checkbox"]:checkbox').each(function(){

    if($('input[class="check_all"]:checkbox:checked').length == 0){
      $(this).prop('checked',false);

    } else{
            $(this).prop('checked',true);

    } 
  });
}
///////////////logo/////////////////////////////////////////////////////

 function readURL(input) {

} 
 ////////////////////////////////////////////////////////////////////

function delete_all()
{
	$(document).on('click','.del_all',function(){
		$('#form_data').submit();
	});
	$(document).on('click','.delBtn',function(){
	var item_checked = $('input[class="item_checkbox"]:checkbox').filter(":checked").length;
	if (item_checked > 0 ) 
	{
		$('.record_count').text(item_checked);
		$('.not_empty_record').removeClass('hidden');		
		$('.empty_record').addClass('hidden');

	}else{
		$('.record_count').text('');
		$('.not_empty_record').addClass('hidden');
		$('.empty_record').removeClass('hidden');

 	}
	$('#mutlipleDelete').modal('show');
	});
} 