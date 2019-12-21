@extends('layouts.main_lay')

@section('content')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-12">
                            <div class="inbox-sec">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <div class="inbox-navigation">
                                            <div class="inbox-panel-head">
                                                <img alt="" src="{{Auth::user()->profile_picture}}">
                                                <h1>{{Auth::user()->name}}</h1>
                                            <a title="" href="{{url('viewprofilebusiness')}}"><i class="fa fa-user"></i>Profile</a>
                                                <a title="" href="{{url('editinfobusiness')}}"><i class="fa fa-cog"></i>Setting</a>
                                                <ul>
                                                    <li><a class="compose-btn" title="" href="#">Compose</a></li>
                                                </ul>
                                            </div><!-- Inbox Panel Head -->
                                            <ul>
                                                <li class="active"><a title=""><i class="fa fa-inbox"></i>Inbox</a><span>4</span></li>
                                                <li><a title=""><i class="fa fa-paper-plane-o"></i>Draft</a></li>
                                                <li><a title=""><i class="fa fa-repeat"></i>Outbox</a><span>6</span></li>
                                                <li><a title=""><i class="fa fa-plane"></i>Sent</a></li>
                                                <li><a title=""><i class="fa fa-trash-o"></i>Trash</a></li>
                                            </ul>
                                            <div class="flaged">
                                                <h3><i class="fa fa-flag"></i>FLAGGED</h3>
                                                <ul>
                                                    <li><a title="" href="#"><i style="color:#ff5c5c;" class="fa fa-tag"></i>Urgent</a></li>
                                                    <li><a title="" href="#"><i style="color:#f3d547;" class="fa fa-tag"></i>Private</a></li>
                                                    <li><a title="" href="#"><i style="color:#b447f3;" class="fa fa-tag"></i>Office Staff</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <div class="inbox-lists">
                                            <div class="inbox-action">
                                                <ul>
                                                    <li><label><input type="checkbox" name="select-all" id="select_all" /> Select all</label></li>
                                                    <li><a class="delete-email" title=""><i class="fa fa-trash-o"></i> Delete</a></li>
                                                    <li><a title=""><i class="fa fa-refresh"></i> Refresh</a></li>
                                                </ul>
                                            </div>
                                            <div class="mesages-lists">
                                                <form method="post">
                                                    <input type="text" placeholder="Search Email">
                                                </form>
                                                <ul id="message-list" class="message-list">
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Darlina Jaze</h3>
                                                        <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>It is a long established fact that a reader will be distracted</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Barlina Maze</h3>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>That a reader will be distracted by the readable content..</p>
                                                    </li>
                                                    <li class="read">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Jonathan Dae</h3>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>Will be distracted by the readable..</p>
                                                    </li>
                                                    <li class="read">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Humaina Burb</h3>
                                                        <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                        <span class="make-important important-done"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>It is a long established fact by the readable ponkaa..</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Barlina Maze</h3>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>Long  will be distracted by the readable..</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Darlina Jaze</h3>
                                                        <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>Reader will be distracted by the nalanye..</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Darlina Jaze</h3>
                                                        <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>It is a long established fact that a reader will be distracted</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Barlina Maze</h3>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>That a reader will be distracted by the readable content..</p>
                                                    </li>
                                                    <li class="read">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Jonathan Dae</h3>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>Will be distracted by the readable..</p>
                                                    </li>
                                                    <li class="read">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Humaina Burb</h3>
                                                        <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                        <span class="make-important important-done"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>It is a long established fact by the readable ponkaa..</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this "><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Barlina Maze</h3>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>Long  will be distracted by the readable..</p>
                                                    </li>
                                                    <li class="unread">
                                                        <input class="select-message" type="checkbox" />
                                                        <span class="star-this starred"><i class="fa fa-star-o"></i></span>

                                                        <h3 class="sender-name">Darlina Jaze</h3>
                                                        <a title="" data-toggle="tooltip" data-original-title="Attachment"><i class="fa fa-paperclip"></i></a>
                                                        <span class="make-important"><i class="fa fa-thumb-tack"></i></span>

                                                        <p>Reader will be distracted by the nalanye..</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- Inbox lists -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
