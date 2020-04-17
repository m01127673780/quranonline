<!-- ==========start quick_register========================== -->
<article class="d-none--"style="height: 1px!important"><span style="color: transparent;" >dd</span>
    <div class="container  content_form_effecte active">
        <div class="card card-form_effecte " ></div>
        <div class="wow fadeInRight card card_form_effecte alt" data-wow-duration="1s"
             data-wow-iteration="1" style="visibility: visible;  animation-name: fadeInRight;">
            <div style="display: block" class="toggle" style="width: 100px;height: 100px;">  {{trans('admin.quick')}} </div>
            <h1 class="title">{{trans('admin.Free_Trial_Registeration')}}
                <div class="close"></div>
            </h1>
            <form method="post"  class="form-contact form_quick"action ="{{url('user_quick/register')}}" >

                <input type="hidden" name="_token" value="{{ csrf_token ()}}">



                <div class="input-container">
                    <input type="text" name="name"  oninvalid="this.setCustomValidity('{{trans('admin.Please_the_name_field_is_required')}}')"   />
                    <label for="#{label}"> {{trans('admin.name')}}</label>
                    <div class="bar"></div>
                </div>



                <div class="input-container">
                    <input type="email" name="email"  oninvalid="this.setCustomValidity('{{trans('admin.Please_the_email_field_is_required')}}')"   />

                    <label for="#{label}">{{trans('admin.email')}}</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                    <input type="number" id="#{label}"  name="phone"/>
                    <label for="phone">
                        {{--                        <img src="https://media.giphy.com/media/Q8I2fYA773h5wmQQcR/giphy.gif" class="icon_wahtsapp_quick">--}}
                        <img src="{{url('default/whatsapp.gif')}}" class="icon_wahtsapp_quick">
                        {{--                        <img src="https://3.bp.blogspot.com/-b5Dhc1s_6eg/WDFZPRS9W2I/AAAAAAAAG8M/q7eGaHF1GK8PuwN5r_oad30zlykSD1uQACLcB/s1600/dr-murat-enoz-contact-details.gif" class="icon_wahtsapp_quick">--}}
                        {{trans('admin.phone')}}
                    </label>
                    <div class="bar"></div>
                </div>
                <div class="button-container">
                    <button class="btn btn-primary btn-lg btn-block ">   {{trans('admin.send')}}  <i class="fa fa-paper-plane-o "></i> </button>

                </div>
            </form>

        </div>
    </div>
    <div id="whyus-loction"></div>
</article>
<!-- ==========End   quick_register========================== -->
