{{-- Start of Top Navigation Bar --}}

<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div id="input" class="search-wrapper">
                <div class="input-holder">
                    <form method="POST" action="search">
                        @csrf
                        <input type="text" name="search" class="search-input" placeholder="Type to search">
                        <button class="search-icon" onmouseover="document.getElementById('input').classList.add('active');"><span></span></button>
                    </form>
                </div>
                <button class="close"></button>
            </div>
            <ul class="header-menu nav">
                <li class="dropdown nav-item">
                    <a href="{{ url('logout') }}" class="nav-link">
                        <i class="nav-link-icon fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="post-btn p-2 mt-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn mr-2 mb-2 btn-info" data-toggle="modal" data-target="#exampleModal">
                                Add a Post
                            </button>
                        </div>
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" height="42" class="rounded-circle" src="/avatars/{{ auth()->user()->avatar }}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ url('edit-profile') }}">
                                        <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                    </a>
                                    <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                    <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ auth()->user()->name }}
                            </div>
                            <div class="widget-subheading">
                                {{ auth()->user()->position_company }} at {{ auth()->user()->current_company }}
                            </div>
                        </div>
                        <div class="widget-content-right header-user-info ml-3">
                            <div class="d-inline-block dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-business-time fa-w-20"></i>
                                    </span>
                                    Notifications
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

                                @foreach ( auth()->user()->unreadNotifications as $notification)
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div>
                                        <strong>{{ $notification->data['body'] }}</strong>
                                        <div class="small text-muted">{{  $notification->created_at->diffInHours() }} Hours ago</div>
                                    </div>
                                </a>
                                @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- End of Top Navigation Bar --}}
