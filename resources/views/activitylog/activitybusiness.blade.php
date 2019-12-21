@extends('layouts.main_lay')

@section('content')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-6">
                            <aside class="sidebar static">
                                <div class="widget">
                                        <h4 class="widget-title">Recent Activity</h4>
                                        <ul class="activitiez">
                                            <li>
                                                <div class="activity-meta">
                                                    <i>10 hours Ago</i>
                                                    <span><a title="" href="#">Commented on Video posted </a></span>
                                                    <h6>by <a href="time-line.html">black demon.</a></h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>30 Days Ago</i>
                                                    <span><a title="" href="#">Posted your status. “Hello guys, how are you?”</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="activity-meta">
                                                    <i>2 Years Ago</i>
                                                    <span><a title="" href="#">Share a video on her timeline.</a></span>
                                                    <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                            </aside>
                        </div>
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="messages">
                                    <h5 class="f-title"><i class="fa fa-line-chart"></i>Statistics <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
                                    <div class="insight-box">
                                        <div class="x_panel">
                                          <div class="x_title">
                                            <h2>Connections Insights</h2>
                                            <ul class="toolbox">
                                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                              </li>
                                              <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                  <li><a href="#">Settings 1</a>
                                                  </li>
                                                  <li><a href="#">Settings 2</a>
                                                  </li>
                                                </ul>
                                              </li>
                                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                                              </li>
                                            </ul>
                                          </div>
                                          <div class="x_content">

                                            <div id="mainb"></div>

                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- centerl meta -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
