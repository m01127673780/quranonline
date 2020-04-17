@include('style.tawk_to')
@include('style.layouts.modal')
@include('style.layouts.modal_countdown')

<!--====== start Slider  show in mobile=============================== -->
<section class="content_sidbar">
    <div class="md_show d-none" id="container33">

        <aside></aside>

        <div class="wrapper cf">

            <nav id="main-nav">



                <ul class="second-nav">


                    <li class="store">
                        <a href="#">Store</a>
                        <ul>
                            <li>
                                <a href="#">Clothes</a>
                                <ul>
                                    <li>
                                        <a href="#">Women's Clothing</a>
                                        <ul>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Sale</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Men's Clothing</a>
                                        <ul>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Sale</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Jewelry</a>
                            </li>
                            <li>
                                <a href="#">Music</a>
                            </li>
                            <li>
                                <a href="#">Grocery</a>
                            </li>
                        </ul>
                    </li>
                    <li class="home"><a href="{{url('/')}}">{{trans('admin.home')}}</a></li>
                    <li class="home"><a href="{{url('/#whyus')}}"> <i class="fa fa-question-circle-o"></i><span>{{trans('admin.whyus')}}</span></a></li>
                    <li class="courses"><a href="{{url('/#courses')}}"> <i class="fa fa-book"></i><span>{{trans('admin.courses')}}</span></a></li>
                    <li class="Package"><a href="{{url('/#Package')}}"> <i class="fa fa-fa-money"></i><span>{{trans('admin.Package')}}</span></a></li>
                    <li class="Package"><a data-toggle="modal" data-target="#myModal2" > <i class="fa fa-fa-handshake-o"></i><span>{{trans('admin.contactus')}}</span></a></li>
                    {{--start Login ---------------  --}}
                    <li class="login">
                        <a href="#">{{trans('admin.login')}}</a>
                        <ul class="content_login">
                            <li>
                                <a href="{{url('/student')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/student.jpg" alt="student.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.student_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                <a href="{{url('/student')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.teacher_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                        </ul><!--content_login-->
                    </li>
                    {{--End   Login ---------------  --}}
                    {{--start register ---------------  --}}
                    <li class="register">
                        <a href="#">{{trans('admin.register')}}</a>
                        <ul class="content_login">
                            <li>
                                <a href="{{url('/student')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/student.jpg" alt="student.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.student_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                                <a href="{{url('/student')}}" >
                                    <!-- Message Start -->
                                    <div class="media">
                                        <img src="{{url('default')}}/teacher.jpg" alt="teacher.png"  class="img_lang">
                                        <div class="media-body"><h6 class="dropdown-item-title">{{trans('admin.teacher_login')}} </h6> </div></div>
                                    <!-- Message End -->
                                </a>
                        </ul><!--content_login-->
                    </li>
                    {{--End   register ---------------  --}}
                                </ul>
                            </li><!--register-->

                        </ul>
                    </li>


                </ul>


                <ul class="bottom-nav">
                    <li class="github">
                        <a href="https://github.com/somewebmedia" target="_blank">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </li>
                    <li class="email">
                        <a href="mailto:hi@somewebmedia.com" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                        </a>
                    </li>
                    <li class="ko-fi">
                        <a href="https://ko-fi.com/somewebguy" target="_blank">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.881 8.948c-.773-4.085-4.859-4.593-4.859-4.593H.723c-.604 0-.679.798-.679.798s-.082 7.324-.022 11.822c.164 2.424 2.586 2.672 2.586 2.672s8.267-.023 11.966-.049c2.438-.426 2.683-2.566 2.658-3.734 4.352.24 7.422-2.831 6.649-6.916zm-11.062 3.511c-1.246 1.453-4.011 3.976-4.011 3.976s-.121.119-.31.023c-.076-.057-.108-.09-.108-.09-.443-.441-3.368-3.049-4.034-3.954-.709-.965-1.041-2.7-.091-3.71.951-1.01 3.005-1.086 4.363.407 0 0 1.565-1.782 3.468-.963 1.904.82 1.832 3.011.723 4.311zm6.173.478c-.928.116-1.682.028-1.682.028V7.284h1.77s1.971.551 1.971 2.638c0 1.913-.985 2.667-2.059 3.015z"/></svg>
                        </a>
                    </li>
                </ul>

            </nav>





            <a class="toggle toggle_icon navbar-toggler">
                <span style="width: 50px" class="d-block"></span>

            </a>

        </div>

        </aside></aside>>



        <script>
            (function($) {
                var $main_nav = $('#main-nav');
                var $toggle = $('.toggle');

                var defaultData = {
                    maxWidth: false,
                    customToggle: $toggle,
                    navTitle: '',
                    levelTitles: true,
                    pushContent: '#container',
                    insertClose: 2,
                    closeLevels: false
                };

                // add new items to original nav
                $main_nav.find('li.add').children('a').on('click', function() {
                    var $this = $(this);
                    var $li = $this.parent();
                    var items = eval('(' + $this.attr('data-add') + ')');

                    $li.before('<li class="new"><a>'+items[0]+'</a></li>');

                    items.shift();

                    if (!items.length) {
                        $li.remove();
                    }
                    else {
                        $this.attr('data-add', JSON.stringify(items));
                    }

                    Nav.update(true);
                });

                // call our plugin
                var Nav = $main_nav.hcOffcanvasNav(defaultData);

                // demo settings update

                const update = (settings) => {
                    if (Nav.isOpen()) {
                        Nav.on('close.once', function() {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    }
                    else {
                        Nav.update(settings);
                    }
                };

                $('.actions').find('a').on('click', function(e) {
                    e.preventDefault();

                    var $this = $(this).addClass('active');
                    var $siblings = $this.parent().siblings().children('a').removeClass('active');
                    var settings = eval('(' + $this.data('demo') + ')');

                    update(settings);
                });

                $('.actions').find('input').on('change', function() {
                    var $this = $(this);
                    var settings = eval('(' + $this.data('demo') + ')');

                    if ($this.is(':checked')) {
                        update(settings);
                    }
                    else {
                        var removeData = {};
                        $.each(settings, function(index, value) {
                            removeData[index] = false;
                        });

                        update(removeData);
                    }
                });
            })(jQuery);
        </script>

    </div>

</section><!--content_sidbar-->
<!--====== End   Slider  show in mobile=============================== -->

