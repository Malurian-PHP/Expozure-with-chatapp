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
                    <div>{{ $view->name }}'s Profile
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
        </div> --}}


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $view->name }}'s Profile</h5>

                        <div class="col-lg-6 col-xl-6">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="row justify-content-center">
                                                <div class="profile-header-container">
                                                    <div class="profile-header-img">
                                                        <img width="" class="rounded-circle" src="/avatars/{{ $view->avatar }}" />
                                                        <!-- badge -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">{{ $view->name}}</h2>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">Current Position</div>
                            </div>
                            <div class="widget-heading">
                                <h2 class="card-title">{{ $view->position_company}} at {{ $view->current_company}}</h2>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">Current Location</div>
                            </div>
                            <h2 class="card-title">{{ $view->country}} ~ {{ $view->state}}</h2>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">More about {{ $view->name }}</div>
                            </div>
                            <p class="text-muted">{{ $view->about}}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="main-card mb-3 card">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Website</div>
                                    <div class="widget-subheading">{{ $view->website}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Email</div>
                                    <div class="widget-subheading">{{ $view->email}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">First Address</div>
                                    <div class="widget-subheading">{{ $view->address}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Second Address</div>
                                    <div class="widget-subheading">{{ $view->address2}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-card mb-3 card">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Cell</div>
                                    <div class="widget-subheading">{{ $view->phone}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Zip</div>
                                    <div class="widget-subheading">{{ $view->zip}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Major in College</div>
                                    <div class="widget-subheading">{{ $view->industry}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">College</div>
                                    <div class="widget-subheading">{{ $view->education}}</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"></div>
                                </div>
                            </div>
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
