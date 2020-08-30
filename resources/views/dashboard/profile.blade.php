@extends('dashboard.layouts')

@section('content')


<div class="row">
    <div class="col-md-8">
        {{-- <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>User Profile
                        <div class="page-title-subheading">Customize your profile and let recruiters see you.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>             --}}
        {{-- <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Layout</span>
                </a>
            </li>
        </ul> --}}
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Your Profile</h5>
                        <div class="card-body">
                            <div class="row justify-content-center">

                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="/avatars/{{ auth()->user()->avatar }}" />
                                        <!-- badge --><br><br>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">Talk about yourself</div>
                                </div>
                                <p class="text-muted">{{ auth()->user()->about}}.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->name}}</div>
                            <div class="widget-subheading">Profile Name</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->email}}</div>
                            <div class="widget-subheading">Email</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->address}}</div>
                            <div class="widget-subheading">Primary Address</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->address2}}</div>
                            <div class="widget-subheading">Secondary Address</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->current_company}}</div>
                            <div class="widget-subheading">Currently Employed by</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->position_company}}</div>
                            <div class="widget-subheading">Current Position</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->education}}</div>
                            <div class="widget-subheading">Studied at</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->industry}}</div>
                            <div class="widget-subheading">Primary Major</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->country}}</div>
                            <div class="widget-subheading">Currently Living in</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->website}}</div>
                            <div class="widget-subheading">Affiliated Website</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->zip}}</div>
                            <div class="widget-subheading">Z|ip Code</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->state}}</div>
                            <div class="widget-subheading">State</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->primary_category}}</div>
                            <div class="widget-subheading">Primary Category</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->secondary_category}}</div>
                            <div class="widget-subheading">Secondary Category</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">{{ auth()->user()->tertiary_category}}</div>
                            <div class="widget-subheading">Tertiary Category</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('dashboard.sidebar')
</div>

@include('dashboard.footer')
@endsection
