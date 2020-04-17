{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
@endphp

{{-----------------------------------}}

{{-----------------------------------}}
 
     

    @if (session('lang')== 'ar'))
 
     <style>
             .content_tabe p {
    font-size: 16px;
    font-style: italic;
    font-family: sans-serif;
    max-height: 100%;
    line-height: 2.5!important;
}
  </style>
      
     @else
       <style>
             .content_tabe p{
            font-size: 18px;
            font-style: italic;
            font-family: sans-serif;
            max-height: 100%;
                    line-height: 1.5!important;

        }
          </style>
             @endif

 

{{-----------------------------------}}
<!--====== start Why Choose Us ?=============================== -->

<!----------------start  section title---------------------->
<section class=" title back-fff d-none"     >
    <div class="container ">
        <div class="section-header text-center">
            <h2 class="h2-section-title" id="whyus_top" >
                {{trans('admin.taps')}} <i  class="fa fa-th"></i>
            </h2>
            <div class="line">
            </div><!--/.heazder-->
            <span class="span-border"></span>
        </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
<!-- Button to Open the Modal -->
<!-- The Modal -->

<!-- ===================================== -->
<!--start section  statistk-->

<section class="tabs_move">
    <div class="  " >
        <div class="container-fluid custom_new sectino_tabs">
            <div class="row">
            <div class="col-md-6">
                <!-- ----------------------------------------------------------------------------- -->
  <section class="content_tabe">
<div class="container theme-cactus">
   <div class="ui-tabgroup">
    <input class="ui-tab1" type="radio" id="tgroup_c1_tab1" name="tgroup_c1" checked />
    <input class="ui-tab2" type="radio" id="tgroup_c1_tab2" name="tgroup_c1" />
    <input class="ui-tab3" type="radio" id="tgroup_c1_tab3" name="tgroup_c1" />
    <input class="ui-tab4" type="radio" id="tgroup_c1_tab4" name="tgroup_c1" />
     <div class="ui-tabs">
      <label class="ui-tab1" for="tgroup_c1_tab1"><i class="fa fa-certificate"></i>{{trans('admin.about_us')}}</label>
      <label class="ui-tab2" for="tgroup_c1_tab2"><i class="fa fa-user-secret"></i>{{trans('admin.general_manager')}}</label>
      <label class="ui-tab3" for="tgroup_c1_tab3"><i class="fa fa-rocket"></i>{{trans('admin.educational_system')}}</label>
      <label class="ui-tab4" for="tgroup_c1_tab4"><i class="fa fa-code"></i>{{trans('admin.developed_by')}}</label>
    </div>
    <div class="ui-panels">
      <div class="ui-tab1">
        <!--<h3>About US </h3>-->
          <p>
              {{trans('admin.tabe_1')}}
          </p>
           </div>
      <div class="ui-tab2">
          <center>{{trans('admin.general_manager')}}</center>
         <p>{{trans('admin.text_general_manager')}}</p>
           {{-------------------------------}}
          <article>
              <div class="ui-tabgroup left-side">
                  <input class="ui-tab1" type="radio" id="tgroup_c2_tab1" name="tgroup_c2" checked />
                  <input class="ui-tab2" type="radio" id="tgroup_c2_tab2" name="tgroup_c2" />
                  <input class="ui-tab3" type="radio" id="tgroup_c2_tab3" name="tgroup_c2" />
                  <input class="ui-tab4" type="radio" id="tgroup_c2_tab4" name="tgroup_c2" />
                  <div class="ui-tabs">
                      <label class="ui-tab1" for="tgroup_c2_tab1"><i class="fa fa-envelope-o"></i> {{trans('admin.our_message')}} </label>
                      <label class="ui-tab2" for="tgroup_c2_tab2"><i class="fa fa-free-code-camp"></i>{{trans('admin.our_vision')}}</label>
                      <label class="ui-tab3" for="tgroup_c2_tab3"><i class="fa fa-futbol-o fa-spin"></i>{{trans('admin.our_goals')}}</label>
                      <!--<label class="ui-tab4" for="tgroup_c2_tab4"><i class="fa fa-cloud-upload"></i>Minim</label>-->
                  </div>
                  <div class="ui-panels">
                      <div class="ui-tab1">
                          <h3> {{trans('admin.our_message')}} </h3>
                          <p> {{trans('admin.text_our_message')}}  </p>
                       </div>
                      <div class="ui-tab2">
                          <h3>{{trans('admin.our_vision')}}</h3>
                          <p>{{trans('admin.text_our_vision')}}</p>
                      </div>
                      <div class="ui-tab3">
                              <h3>{{trans('admin.our_goals')}}</h3>
                          <p>{{trans('admin.text_our_goals')}}</p>
                       </div>
                      <!--<div class="ui-tab4">-->
                      <!--    <h3>Ut enim ad minim veniam</h3>-->
                      <!--    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, <a href="#">a link</a>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                      <!--</div>-->
                  </div>
              </div>
          </article>
          {{-------------------------------}}      </div>
      <div class="ui-tab3">
        <h3>{{trans('admin.educational_system')}}</h3>
 <p>{{trans('admin.text_educational_system')}}</p>
  <article>
              <div class="ui-tabgroup left-side">
                  <input class="ui-tab1" type="radio" id="tgroup_c2_tab1system" name="tgroup_c2" checked />
                  <input class="ui-tab2" type="radio" id="tgroup_c2_tab2system" name="tgroup_c2" />
                  <input class="ui-tab3" type="radio" id="tgroup_c2_tab3system" name="tgroup_c2" />
                  <input class="ui-tab4" type="radio" id="tgroup_c2_tab4system" name="tgroup_c2" />
                  <input class="ui-tab5" type="radio" id="tgroup_c2_tab5system" name="tgroup_c2" />
                  <div class="ui-tabs">
                      <label class="ui-tab1" for="tgroup_c2_tab1system"><i class="fa fa-cube"></i> {{trans('admin.The_base_of_light_for_beginners')}} </label>
                      <label class="ui-tab2" for="tgroup_c2_tab2system"><i class="fa fa-cube"></i>{{trans('admin.department_of_memorizing')}}</label>
                      <label class="ui-tab3" for="tgroup_c2_tab3system"><i class="fa fa-cube fa-spin"></i>{{trans('admin.Department_of_sprouts_Al_Furqan')}}</label>
                      <label class="ui-tab4" for="tgroup_c2_tab4system"><i class="fa fa-cube"></i>{{trans('admin.View_recitationeducationsection')}}</label>
                      <label class="ui-tab5" for="tgroup_c2_tab5system"><i class="fa fa-cube"></i>{{trans('admin.Parent_Education_Department')}}</label>
                  </div>
                  <div class="ui-panels">
                      <div class="ui-tab1">
                          <h3> {{trans('admin.The_base_of_light_for_beginners')}} </h3>
                          <p> {{trans('admin.text_The_base_of_light_for_beginners')}}  </p>
                       </div>
                      <div class="ui-tab2">
                          <h3>{{trans('admin.department_of_memorizing')}}</h3>
                          <center>{{trans('admin.text_department_of_memorizing')}}</center>
                      </div>
                      <div class="ui-tab3">
                              <h3>{{trans('admin.Department_of_sprouts_Al_Furqan')}}</h3>
                          <p>{{trans('admin.text_Department_of_sprouts_Al_Furqan')}}</p>
                       </div>
                      <div class="ui-tab4">
                          
                          <h3>{{trans('admin.View_recitationeducationsection')}}</h3>
                          <p>{{trans('admin.text_View_recitationeducationsection')}}</p>
                       </div>
                         <div class="ui-tab5">
                          
                          <h3>{{trans('admin.developed_by')}}</h3>
                          <p>{{trans('admin.text_developed_by')}}</p>
                       </div>
                       
                       
                       
                  </div>
              </div>
          </article>
      </div>
     <div class="ui-tab4">
        <h3>{{trans('admin.developed_by')}}</h3>
 <p>{{trans('admin.text_developed_by')}}</p>
 
 <br>
 <p>{{trans('admin.text_in_sayadweb')}}</p>
 
      </div>
    </div>
  </div>


</div>

</section>




<!-- ----------------------------------------------------------------------------- -->
            </div><!--Col-md-6-->
            <div class="col-md-6 col_content_accordion">
{{--     ------------------------------------------------------------}}
    <h2>{{trans('admin.WHAT_YOU_WILL_LEARN')}}</h2>
                 <!-- Contenedor -->
                <ul id="accordion" class="accordion">
                    <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.lern_quran')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_lern_quran')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}

                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Quran_for_Kids')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Quran_for_Kids')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                    
                    
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Qirat_Online')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Qirat_Online')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                    
                     
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Noorani_Qaida')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Noorani_Qaida')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                        
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Quran_Memorization')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Quran_Memorization')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                        
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Reading_Quran')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Reading_Quran')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                    
                                
                    
                     
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Quranic_Arabic')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Quranic_Arabic')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                    
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Tajweed_Rules')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Tajweed_Rules')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                                 
                     <li>
                       <div class="link">
                                <i class="fa fa-globe"></i>{{trans('admin.Learn_Arabic_Language')}}<i class="fa fa-chevron-down"></i>
                      </div>
                      <ul class="submenu">
                                <li><article> {{trans('admin.text_Learn_Arabic_Language')}} </article> </li>
                      </ul>
                    </li>{{-- ----End li--}}      
                    
                    
                    
                    
                    </ul>
{{--     -------------------------------------------------------9-----}}

            </div><!-- col-md-6" -->

            </div><!-- row" -->
        </div><!--  container -->
    </div><!--  data-n -->

</section><!--End section  -->
<!--End section stitstk -->
<!--====================================== End  Why Choose Us ?=============================== -->
