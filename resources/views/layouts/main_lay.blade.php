<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Circle</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/main.8d288f825d8dffbbe55e.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/spinner_wrapper.css') }}" rel="stylesheet">

</head>

<body>
    {{-- If you want to remove the laoder then just umcomment the follwing 8 lines --}}
    {{-- <div class="spinner-wrapper">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div> --}}
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="postoverlay"></div>
        <div class="responsive-header" data-spy="affix" data-offset-top="0">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="{{ url('/') }} title=" Home"><img src="images/logo2.png" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span>Time Line</span>
                        <ul>
                            <li><a href="time-line.html" title="">timeline</a></li>
                            <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                            <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                            <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                            <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                            <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                            <li><a href="fav-page.html" title="">favourit page</a></li>
                            <li><a href="groups.html" title="">groups page</a></li>
                            <li><a href="page-likers.html" title="">Likes page</a></li>
                            <li><a href="people-nearby.html" title="">people nearby</a></li>


                        </ul>
                    </li>
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="create-fav-page.html" title="">create fav page</a></li>
                            <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                            <li><a href="edit-interest.html" title="">edit-interest</a></li>
                            <li><a href="edit-password.html" title="">edit-password</a></li>
                            <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                            <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                            <li><a href="messages.html" title="">message box</a></li>
                            <li><a href="inbox.html" title="">Inbox</a></li>
                            <li><a href="notifications.html" title="">notifications page</a></li>
                        </ul>
                    </li>
                    <li><span>forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum Page</a></li>
                            <li><a href="forums-category.html" title="">Fourm Category</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                        </ul>
                    </li>
                    <li><span>Our Shop</span>
                        <ul>
                            <li><a href="shop.html" title="">Shop Products</a></li>
                            <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                            <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                            <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                            <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                        </ul>
                    </li>
                    <li><span>Our Blog</span>
                        <ul>
                            <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                            <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                            <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                            <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                            <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                            <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                            <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                            <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Portfolio</span>
                        <ul>
                            <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                            <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                            <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                        </ul>
                    </li>
                    <li><span>Support & Help</span>
                        <ul>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a>
                            </li>
                        </ul>
                    </li>
                    <li><span>More pages</span>
                        <ul>
                            <li><a href="careers.html" title="">Careers</a></li>
                            <li><a href="career-detail.html" title="">Career Detail</a></li>
                            <li><a href="404.html" title="">404 error page</a></li>
                            <li><a href="404-2.html" title="">404 Style2</a></li>
                            <li><a href="faq.html" title="">faq's page</a></li>
                            <li><a href="insights.html" title="">insights</a></li>
                            <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">about</a></li>
                    <li><a href="about-company.html" title="">About Us2</a></li>
                    <li><a href="contact.html" title="">contact</a></li>
                    <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                    <li><a href="widgets.html" title="">Widgts</a></li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->

        <div class="topbar stick">
            <div class="logo">
                <a title="Home" href="{{ url('/') }}"><img src="images/logo.png" alt=""></a>
            </div>

            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <div class="author-thmb">
                            <a href="{{ url('mainscreen') }}">
                                <img src="images/resources/users/default.png" alt="" style="border-radius:50%; width:45px">
                                <span class="status f-online" style="bottom: 32px; background: black"></span>
                            </a>
                        </div>
                    </li> <!-- friend mainscreen -->
                    @if ($has_fam ?? ''==true)
                        <li>
                            <div class="author-thmb">
                                <a href="{{ url('mainscreenfamily') }}">
                                    <img src="images/resources/users/default.png" alt="" style="border-radius:50%; width:45px">
                                    <span class="status f-online" style="bottom: 32px; background-color: red"></span>
                                </a>
                            </div>
                        </li>
                    @else
                        @if ($has_bus ?? ''==true)
                            <li>
                                <div class="author-thmb">
                                    <a href="{{ url('mainscreenbusiness') }}">
                                        <img src="images/resources/users/default.png" alt="" style="border-radius:50%; width:45px">
                                        <span class="status f-online" style="bottom: 32px; background-color:cornflowerblue"></span>
                                    </a>
                                </div>
                            </li>
                        @else

                        @endif
                    @endif

                    @if (($has_bus ?? ''== false) || ($has_fam ?? ''== false))
                        <li><a href="{{ url('addnewcircle') }}" title="Add Circle" data-toggle="tooltip"
                            data-placement="center" style="-webkit-text-fill-color: black; padding-left: 0"><i class="ti-plus"></i></a>
                        </li>
                    @else

                    @endif

                </ul>
                <ul class="setting-area">
                    <li>
                        <a href="" title="Search" data-ripple=""><i class="ti-search"></i></a>
                        <div class="searched">
                            <form method="post" class="form-search">
                                <input type="text" placeholder="Search Friend">
                                <button data-ripple><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li><a href="{{ url('mainscreen') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-4.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-5.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-4.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="images/resources/thumb-5.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="messages.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                </ul>
                <div class="user-img" style="left: 10px">
                    <img src="{{Auth::user()->profile_picture}}" alt="" style="width:45px; height:45px">
                    {{-- <span class="status f-online"></span> --}}
                    {{Auth::user()->name}}
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        <a href="#" title=""><span class="status f-away"></span>away</a>
                        <a href="#" title=""><span class="status f-off"></span>offline</a>
                    <a href="{{url('mainsettings')}}" title=""><i class="ti-settings"></i>account setting</a>
                        <a href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                {{-- <span class="ti-menu main-menu" data-ripple=""></span> --}}
            </div>
        </div><!-- topbar -->

        @include('sweetalert::alert')
        @yield('content')

    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/map-init.js"></script>
    <script src="js/main.8d288f825d8dffbbe55e.js"></script>
    <script src="{{asset('js/echarts.min.js')}}"></script>
    <script src="{{asset('js/world.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
    <script src="{{ URL::asset('js/first_theme_js_after_beautifier.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        $(document).ready(function () {
            //Preloader
            $(window).on("load", function () {
                preloaderFadeOutTime = 1;

                function hidePreloader() {
                    var preloader = $('.spinner-wrapper');
                    preloader.fadeOut(preloaderFadeOutTime);
                }
                hidePreloader();
            });
        });
    </script>


</body>

</html>
