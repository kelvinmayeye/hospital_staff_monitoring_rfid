@extends('layouts.master')
@section('content')
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    {{-- <div class="caption pro-sl-hd">
                                        <span class="caption-subject"><b>University Earnings</b></span>
                                    </div> --}}
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp graph-rp-dl">
                                        <p>All Earnings are in million $</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div
                        class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <h3 class="box-title">Total Patient</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                    class="counter text-success">1500</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                        <h3 class="box-title">Total service Hours</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                    class="counter text-purple">3000</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                        <h3 class="box-title">Average Attended Patient</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span
                                    class="counter text-info">5000</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
                        <h3 class="box-title">Today's Service Hours</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right graph-four-ctn"><i class="fa fa-level-down" aria-hidden="true"></i> <span
                                    class="text-danger"><span class="counter">18</span>%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="courses-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Browser Status</h3>
                        <ul class="basic-list">
                            <li>Google Chrome <span class="pull-right label-danger label-1 label">95.8%</span></li>
                            <li>Mozila Firefox <span class="pull-right label-purple label-2 label">85.8%</span></li>
                            <li>Apple Safari <span class="pull-right label-success label-3 label">23.8%</span></li>
                            <li>Internet Explorer <span class="pull-right label-info label-4 label">55.8%</span></li>
                            <li>Opera mini <span class="pull-right label-warning label-5 label">28.8%</span></li>
                            <li>Mozila Firefox <span class="pull-right label-purple label-6 label">26.8%</span></li>
                            <li>Safari <span class="pull-right label-purple label-7 label">31.8%</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                        <h3 class="box-title">Visits from countries</h3>
                        <ul class="country-state">
                            <li>
                                <h2><span class="counter">1250</span></h2> <small>From Australia</small>
                                <div class="pull-right">75% <i class="fa fa-level-up text-danger ctn-ic-1"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span
                                            class="sr-only">75% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">1050</span></h2> <small>From USA</small>
                                <div class="pull-right">48% <i class="fa fa-level-up text-success ctn-ic-2"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span
                                            class="sr-only">48% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">6350</span></h2> <small>From Canada</small>
                                <div class="pull-right">55% <i class="fa fa-level-up text-success ctn-ic-3"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success ctn-vs-3" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:55%;">
                                        <span class="sr-only">55% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">950</span></h2> <small>From India</small>
                                <div class="pull-right">33% <i class="fa fa-level-down text-success ctn-ic-4"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success ctn-vs-4" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:33%;">
                                        <span class="sr-only">33% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <h2><span class="counter">3250</span></h2> <small>From Bangladesh</small>
                                <div class="pull-right">60% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                        <span class="sr-only">60% Complete</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/1.jpg" alt="" /></a>
                            <h2>Apps Development</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
