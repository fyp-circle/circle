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
    <link rel="icon" href="/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/introjs.css">
    <link rel="stylesheet" href="/css/introjs-rtl.css">

    <link rel="stylesheet" href="/css/main.8d288f825d8dffbbe55e.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/spinner_wrapper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css"> --}}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/d1bf4e5d94.js" crossorigin="anonymous"></script>

    {{-- AJAX KI SCRIPT --}}
    {{-- <script>
        function showResult(str) {
          if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
          }
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById("livesearch").innerHTML=this.responseText;
              document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
          }
          xmlhttp.open("GET","livesearch.php?q="+str,true);
          xmlhttp.send();
        }
    </script> --}}

</head>

<body>
    <div class="theme-layout">
        <div class="postoverlay"></div>
        <div class="responsive-header" data-spy="affix" data-offset-top="0">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="#" title="Home"><img src="/images/logo2.png" alt=""></a>
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
                <a title="Home" href="#"><img src="/images/logo.png" alt=""></a>
            </div>

            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <div class="author-thmb">
                            <a href="" onclick="">
                                <img src="{{ asset('/images/default.png') }}" alt=""
                                    style="border-radius:50%; width:45px; height:45px; object-fit:cover">
                                <span class="status f-online" style="bottom: 32px; background: black"></span>
                            </a>
                        </div>
                    </li> <!-- friend mainscreen -->
                    <li>
                        <div class="author-thmb">
                            <a href="#">
                                <img src="{{ asset('/images/default.png') }}" alt=""
                                    style="border-radius:50%; width:45px; height:45px; object-fit:cover">
                                <span class="status f-online" style="bottom: 32px; background-color: red"></span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <a href="#">
                                <img src="{{ asset('/images/default.png') }}" alt=""
                                    style="border-radius:50%; width:45px; height:45px; object-fit:cover">
                                <span class="status f-online"
                                    style="bottom: 32px; background-color:cornflowerblue"></span>
                            </a>
                        </div>
                    </li>
                    <li><a href="#" title="Add Circle" data-toggle="tooltip" data-placement="center"
                            style="-webkit-text-fill-color: black; padding-left: 0"><i class="ti-plus"></i></a>
                    </li>

                </ul>
                <ul class="setting-area">
                    <li>
                        <a href=""><i class="fas fa-search"></i></a>
                        <div class="searched">
                            <form method="POST" role="search" class="form-search">
                                <input type="text" size="30" placeholder="Search Friend">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="dropdown-notifications">
                        {{-- <a  href="#notifications-panel" title="Notification" data-ripple="" class="dropdown-toggle" data-toggle="dropdown"> --}}
                        <a href="#" title="Notification" data-ripple="" class="dropdown-toggle"
                            href="#notifications-panel" data-toggle="dropdown">
                            <i class="fas fa-bell" data-count="2"></i><span class="notif-count">2</span>
                        </a>
                        <div class="dropdowns">
                            <span>New Notifications</span>
                            <ul class="drops-menu" id="test2" class="dropdown-menu">
                                <li>
                                    <a href="#" title="">
                                        <img src="{{ asset('/images/default.png') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Friend Request</h6>
                                            <span>User X has sent a friend request</span>
                                            <i>Dec 12, 2019</i>
                                        </div>
                                    </a>
                                    <span class="tag green"
                                        style="background-color:black;-webkit-text-fill-color: white">Friend</span>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <img src="{{ asset('/images/default.png') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Family Request</h6>
                                            <span>User X has sent a family request</span>
                                            <i>Dec 13, 2019</i>
                                        </div>
                                    </a>
                                    <span class="tag green"
                                        style="background-color:red;-webkit-text-fill-color: white">Family</span>
                                </li>
                            </ul>
                            <a href="#" title="" class="more-mesg">viewmore</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="fas fa-envelope"></i><span>3</span></a>
                        <div class="dropdowns">
                            <span>3 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="#" title="">
                                        <img src="/images/resources/thumb-1.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green" style="background-color:black">Friends</span>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <img src="/images/resources/thumb-2.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Family</span>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <img src="/images/resources/thumb-3.jpg" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue" style="background-color:cornflowerblue">Business</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="user-img" style="left: 10px">
                    <img src="{{ asset('/images/default.png') }}" alt=""
                        style="width:45px; height:45px; object-fit:cover">
                    {{-- <span class="status f-online"></span> --}}
                    John Doe
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        <a href="#" title=""><span class="status f-away"></span>away</a>
                        <a href="#" title=""><span class="status f-off"></span>offline</a>
                        <a href="{{ route('main.settings',['circle_id'=>1]) }}" title=""><i
                                class="ti-settings"></i>Account Setting</a>
                        <a href="{{ route('allactivities',['circle_id'=>1]) }}" title=""><i
                                class="fa fa-bar-chart-o"></i>Activity Log</a>

                        <a href="#" title=""><i class="ti-power-off"></i>Log-out</a>
                    </div>
                </div>
                {{-- <span class="ti-menu main-menu" data-ripple=""></span> --}}
            </div>
        </div><!-- topbar -->
        <div class="fixed-sidebar right">
            <div class="chat-friendz">
                <ul class="chat-users">
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb" style="width: 66%">
                            <a href="#" title=""><img src="{{ asset('/images/default.png') }}" alt=""></a>
                            <span class="status f-online"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- right sidebar user chat -->

        <div class="fixed-sidebar left">
            <div class="menu-left">
                <ul class="left-menu">
                    <li><a href="#" title="Newsfeed Page" data-toggle="tooltip" data-placement="right"><i
                                class="far fa-newspaper" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" title="Messages" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-envelope"></i></a></li>
                    <li><a href="#" title="Friends Circle" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-users"></i></a>
                    </li>
                    <li><a href="#" title="View Profile" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-user"></i></a>
                    </li>
                    <li><a href="#" title="Nearby Friends" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-street-view"></i></a>
                    </li>
                    <li><a href="#" title="Activity" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-tasks"></i></a></li>
                    <li><a href="#" title="Edit Profile Info" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-user-edit"></i></a></li>
                    <li><a href="#" title="Main Setting" data-toggle="tooltip" data-placement="right"><i
                                class="fas fa-cogs"></i></a></li>
                </ul>
            </div>
        </div><!-- left sidebar menu -->

        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Shortcuts</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="far fa-newspaper"></i>
                                                    <a href="#" title="">News
                                                        feed</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-users"></i>
                                                    <a href="#" title="">Friends Circle</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-envelope"></i>
                                                    <a href="#" title="">Messages</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-bell"></i>
                                                    <a href="#" title="">Notifications</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-street-view"></i>
                                                    <a href="#" title="">People Nearby</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-tasks"></i>
                                                    <a href="#" title="">Activity Log</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    <a href="#" title="">View Profile</a>
                                                </li>
                                                <li>
                                                    <i class="fas fa-user-edit"></i>
                                                    <a href="#" title="">Edit Info</a>
                                                </li>
                                            </ul>
                                        </div><!-- Shortcuts -->
                                        <div class="widget">
                                            <h4 class="widget-title">Recent Activity</h4>
                                            <ul class="activitiez">
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>Dec 11, 2019</i>
                                                        <span><a href="#" title="">You viewed user X's
                                                                profile</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>Dec 11, 2019</i>
                                                        <span><a href="#" title="">You viewed user Y's
                                                                profile</a></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- recent activites -->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Friend Requests</h4>
                                            <ul class="followers">
                                                <li>
                                                    <a href="#" title="">
                                                        <figure><img src="{{ asset('/images/default.png') }}" alt="">
                                                        </figure>
                                                    </a>
                                                    <div class="friend-meta">
                                                        <h4><a href="#" title="">User X</a></h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- Friend Requests -->
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <div class="central-meta new-pst">
                                        <div class="new-postbox">
                                            <figure>
                                                <img src="{{ asset('/images/default.png') }}" alt=""
                                                    style="width:60px; height:52px; object-fit:cover">
                                            </figure>
                                            <div class="newpst-input">
                                                <form method="post">
                                                    <textarea rows="2" placeholder="write something... "
                                                        name="content"></textarea>
                                                    <div class="attachments">
                                                        <ul>
                                                            <li>
                                                                <i class="fas fa-music"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="audio" accept="audio/*">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-image"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="image" accept="image/*">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-video-camera"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="video" accept="video/*">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <button type="submit">Publish</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- add post new box -->
                                    <div class="loadMore">
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <a href="#"><img src="{{ asset('/images/default.png') }}"
                                                                alt=""></a>
                                                    </figure>
                                                    <div class="friend-name" style="width: 86%; ">
                                                        <ins><a href="#" title="">John Doe</a></ins>
                                                        <span>published: Dec 10, 2019</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="description">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                exercitation ullamco laboris nisi ut aliquip ex ea
                                                                commodo consequat. Duis aute irure dolor in
                                                                reprehenderit in voluptate velit esse cillum dolore eu
                                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                non proident, sunt in culpa qui officia deserunt mollit
                                                                anim id est laborum.
                                                            </p>
                                                        </div>
                                                        <img src="{{ asset('/images/networking.jpg') }}" alt="">
                                                        <div class="we-video-info">
                                                            <div>
                                                                <hr style="margin-top: 10px; margin-bottom:10px; ">
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <span class="Views" data-toggle="tooltip"
                                                                        title="views" style="color:grey ">
                                                                        <i class="fas fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    {{-- jab comment nhi hoga to i class = far fa-comments --}}
                                                                    <span class="comment" data-toggle="tooltip"
                                                                        title="Comments"
                                                                        style="color:rgb(206, 177, 12) ">
                                                                        <i class="fas fa-comments"></i>
                                                                        <ins>12</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    {{-- jab like nhi hoga to i class = far fa-heart --}}
                                                                    <span class="like" id="likebutton"
                                                                        data-toggle="tooltip" title="Like">
                                                                        <i class="fas fa-heart"></i>
                                                                        <ins id="test">34</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" id="sharebutton"
                                                                        data-toggle="tooltip" title="Share"
                                                                        style="color:black ">
                                                                        <i class="fas fa-share-square"></i>
                                                                        <ins>2</ins>
                                                                    </span>
                                                                </li>
                                                                <li style="margin-right:0; margin-left:40%;">
                                                                    <span class="like" id="sharebutton"
                                                                        data-toggle="tooltip" title="Report"
                                                                        style="color:rgb(107, 0, 0) ">
                                                                        <i class="fas fa-exclamation-triangle"></i>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div>
                                                    <hr style="margin-top: 0; margin-bottom:10px; ">
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="/images/resources/comet-1.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Jason
                                                                            borne</a></h5>
                                                                    <span>1 year ago</span>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this car
                                                                    is very
                                                                    awesome for
                                                                    the youngster. please vote this car and like our
                                                                    post</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="/images/resources/comet-1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea
                                                                        placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span title="add icon">&#128515;</span>
                                                                    </div>
                                                                    <div class="smiles-bunch">
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128512;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128513;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128514;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128515;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128516;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128517;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128518;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128519;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128520;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128521;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128522;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128523;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128524;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128525;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128526;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128527;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128528;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128529;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128530;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128531;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128532;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128533;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128534;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128535;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128536;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128537;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128538;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128539;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128540;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128541;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128542;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128543;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128544;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128545;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128546;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128547;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128548;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128549;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128550;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128551;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128552;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128553;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128554;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128555;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128556;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128557;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128558;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128559;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128560;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128561;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128562;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128563;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128564;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128565;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128566;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128567;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128577;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128578;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128579;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#128580;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129296;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129297;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129298;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129299;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129300;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129301;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129312;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129313;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129314;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129315;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129316;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129317;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129319;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129320;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129321;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129322;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129323;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129324;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129325;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129326;</a>
                                                                        <a href="#"
                                                                            style="text-decoration: none;">&#129327;</a>


                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- centerl meta -->
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget friend-list stick-widget">
                                            <h4 class="widget-title">Suggestions</h4>
                                            <div id="searchDir"></div>
                                            <ul id="people-list">
                                                <li>
                                                    <figure>
                                                        <img src="/images/resources/users/71.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="{{ url('viewprofile')}}">bucky barnes</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/images/resources/users/2.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">Sarah Loren</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/images/resources/users/75.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">jason borne</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/images/resources/users/80.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">Cameron diaz</a>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="/images/resources/users/40.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">daniel warber</a>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="/images/resources/users/17.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">andrew</a>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="/images/resources/users/37.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">amy watson</a>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="/images/resources/users/60.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">daniel warber</a>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="/images/resources/users/65.jpg" alt="">
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="#">Sarah Loren</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- Suggestions -->
                                    </aside>
                                </div><!-- sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="/js/main.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/map-init.js"></script>
        <script src="/js/intro.js"></script>
        <script src="/js/main.8d288f825d8dffbbe55e.js"></script>
        <script src="{{asset('/js/echarts.min.js')}}"></script>
        <script src="{{asset('/js/world.js')}}"></script>
        <script src="{{asset('/js/custom.js')}}"></script>
        <script src="{{ URL::asset('/js/first_theme_js_after_beautifier.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="{{asset('/js/message.js')}}"></script>
        <script>
            < script >
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
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="//js.pusher.com/3.1/pusher.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>




</body>

</html>
