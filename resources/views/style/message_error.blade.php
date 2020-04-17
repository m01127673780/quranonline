@if(count($errors->all()) > 0)

    <div class="btn btn-danger message_error  text-left message content_alert_eroor pos_r" >
                    <button class="w_28px_h_28px_custom button_close_alert_eroor btn-danger  "   >
                        <i class="fa fa-times"></i> </button>

        <ol >
            <img class="w_28px_h_28px_custom   "src="{{url('default')}}/sad7.png"   >
            @foreach($errors->all() as $error)
                <div class=" "> <img class="w_18px_h_18px "src="{{url('default')}}/d_like6.png" > {{$error}} 
{{--                <img class="w_20px_h_20px_custom "src="{{url('default')}}/pont.png" > --}}
                </div>
            @endforeach
        </ol>
    </div>
@endif
<script>
    // start public code
    $(document).ready(function(){
        $(".button_close_alert_eroor").click(function(){
            $(".content_alert_eroor").fadeOut(700);
        });
    });
</script>
