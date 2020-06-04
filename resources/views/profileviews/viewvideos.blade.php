@extends('layouts.profile_lay')

@section('profilecontent')
@if ($c==1 || $c == 2)
<div class="row">
    <div class="col-lg-12">
        <div class="row merged20" id="page-contents">
            <div class="col-lg-3">
                <aside class="sidebar static">
                    <div class="widget stick-widget">
                        <h4 class="widget-title">Shortcuts</h4>
                        <ul class="naves">
                            <li>
                                <i class="fas fa-stream"></i>
                                <a href="{{ route('viewprofile',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">Timeline</a>
                            </li>
                            <li>
                                <i class="far fa-images"></i>
                                <a href="{{ route('viewphotos',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Photos</a>
                            </li>
                            <li>
                                <i class="fas fa-film"></i>
                                <a href="{{ route('viewvideos',['id'=>$profile_id,'circle_id'=>$circle_id]) }}"
                                    title="">Videos</a>
                            </li>
                            @if (Auth::user()->user_id==$profile_id)
                            <li>
                                <i class="fas fa-users"></i>
                                <a href="{{ route('viewfriends',['id'=>Auth::user()->user_id,'circle_id'=>$circle_id]) }}" title="">Friends Circle</a>
                            </li>
                            @endif
                            <li>
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('viewabout',['id'=>$profile_id,'circle_id'=>$circle_id]) }}" title="">About</a>
                            </li>
                        </ul>
                    </div><!-- Shortcuts -->
                </aside>
            </div><!-- sidebar -->
            <div class="col-md-9">
                <div class="central-meta">
                    <ul class="photos">
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo1.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo2.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                            C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo3.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo4.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo5.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo6.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                            C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo7.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo8.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo9.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo10.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo11.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=MIbbtEjdYrc" title="" data-strip-group="mygroup"
                                class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img
                                    src="/images/resources/photo12.jpg" alt="">
                                <i>
                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px"
                                        width="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                        xml:space="preserve">
                                        <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                        C97.3,23.7,75.7,2.3,49.9,2.5" />
                                        <path class="icon" fill=""
                                            d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                    </svg>
                                </i>
                            </a>
                        </li>
                    </ul>
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div><!-- photos -->
            </div><!-- centerl meta -->
        </div>
    </div>
</div>

@endif
@endsection
