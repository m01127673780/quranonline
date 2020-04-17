
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $(".message.alert_success").animate({right: '1px'},400);
        $(".message.alert_success").stop().delay("2720").animate({right: '300-px'},400);
        $(".message.alert_success").fadeOut('100px');
         $(".message.message_error ").stop().delay("3720").fadeOut(400);
        $(".content_MULTIPLE_BORDERS").stop().delay("3720").fadeOut(400);
        // $(".section_news").stop().delay("31720").fadeOut(400);

    });
</script>
@if(session()->has('success'))
    <div class="alert btn-success  alert_success message "> <img class="w_22px_h_22px "src="{{url('default')}}/like7.png" > {{ session()->get('success') }} <img class="w_25px_h_25px m_b_6px"src="{{url('default')}}/clap.png" ></div>
@endif

@if(session()->has('error'))

    <div class="alert btn-danger message ">  {{ session()->get('error') }} </div>

@endif

<style>
    .message.alert_success{
        right: 0;
        width: auto;
        position: absolute;
        z-index: 99;
        top: 64px;
    }
    .modal_massage  .w_20px_h_20px_custom {

        left: 60% !important;
    }
    .w_20px_h_20px_custom{
        width: 20px;
        height: 20px;
        border-radius: 50%;
        position: absolute;
        left: 70%;
        /*display: none;*/
    }







    .w_22px_h_22px{

        width: 22px;
        height: 22px;
        border-radius: 50%;
    }
    .w_28px_h_28px{

        width: 28px;
        height: 28px;
        border-radius: 50%;
    }
    .w_18px_h_18px{
        width: 18px;
        height: 18px;
        border-radius: 50%;
    }  .w_28px_h_28px_custom{
           width: 28px;
           height: 28px;
           border-radius: 50%;
           margin-bottom: 10px;
           margin-top: 5px;
       }
    .m_b_6px{
        margin-bottom: 6px;
    }
    .w_25px_h_25px{

        width: 25px;
        height: 25px;
        border-radius: 50%;
    }

</style>