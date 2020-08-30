<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard - Expozure.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{ URL::asset('assets/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        @include('dashboard.topnav')

        <div class="app-main">

            @include('dashboard.nav')






<div class="app-main__outer">
    <div class="app-main__inner">
        {{-- <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Welcome to your Dashboard {{ auth()->user()->name }}
                        <div class="page-title-subheading">Expozure offers over a thousand new features to help find your dream job.
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">New Jobs Available</div>
                            <div class="widget-subheading">Within the last 4 days</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>3896</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Happy Users</div>
                            <div class="widget-subheading">Who found that dream job</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>568</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Jobs Applied</div>
                            <div class="widget-subheading">In past year</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>4</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        @yield('content')


    </div>
</div>







                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>



{{-- <script>
    var search = document.getElementByClassName('search-icon');
    search.onHover(){
        console.log('pickem')
    }
</script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="{{ URL::asset('assets/scripts/main.js') }}"></script>
</body>
</html>

@include('dashboard.modal')
@include('dashboard.post-modal')
@include('dashboard.comment-modal')


