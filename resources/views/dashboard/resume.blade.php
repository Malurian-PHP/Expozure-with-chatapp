@extends('dashboard.layouts')

@section('content')

@forelse ($skills as $view)

<div class="row">
    <div class="col-md-8">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}'s Resume</h5>

                        <div class="col-lg-6 col-xl-6">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="row justify-content-center">
                                                <div class="profile-header-container">
                                                    <div class="profile-header-img">
                                                        <img width="" class="rounded-circle" src="/avatars/{{ $user->avatar }}" />
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
                            <span class="text-success">Name: <span class="card-title">{{ $user->name}}</span></span>

                            <div class="row mt-2">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">Current Position</div>
                                    </div>
                                    <div class="widget-heading">
                                        <h2 class="card-title">{{ $user->position_company}} at {{ $user->current_company}}</h2>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6">
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success">Current Location</div>
                                    </div>
                                    <h2 class="card-title">{{ $user->country}} ~ {{ $user->state}}</h2>
                                </div>
                            </div>

                            <div class="widget-content-right">
                                <div class="widget-numbers text-success">More about {{ $user->name }}</div>
                            </div>
                            <p class="text-muted">{{ $user->about}}</p>


                            <div class="widget-numbers text-success">Current Skills</div>
                            <div class="row mt-2">
                                <div class="col-lg-4 col-xl-4">
                                    <div class="widget-content-right">
                                    </div>
                                    <div class="widget-heading">
                                        <h2 class="card-title">{{ $view->skill_1}}</h2>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xl-4">
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success"></div>
                                    </div>
                                    <h2 class="card-title">{{ $view->skill_2}}</h2>
                                </div>

                                <div class="col-lg-4 col-xl-4">
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success"></div>
                                    </div>
                                    <h2 class="card-title">{{ $view->skill_3}}</h2>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success"></div>
                                    </div>
                                    <div class="widget-heading">
                                        <h2 class="card-title">{{ $view->skill_4}}</h2>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6">
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-success"></div>
                                    </div>
                                    <h2 class="card-title">{{ $view->skill_5}}</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Accomplishments</h5>
                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/avatars/walls.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/avatars/wallie.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/avatars/wall.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Accomplishments</h5>
                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/avatars/jam.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/avatars/jammy.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/avatars/jamy.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="row">
                <div class="col">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Video Showcasing Skills</div>
                                    <div class="widget-subheading justify-content-center mt-4">
                                        <iframe width="620" height="400" src="https://www.youtube.com/embed/SWZ_4YBFBhs?list=TLPQMTkwMjIwMjCq2b6ZulXldg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@include('dashboard.sidebar')

@empty


<div class="row">
    <div class="col-md-8">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h2 class="card-title">Please update your skills to view your resume</h2>
                        <form class="" method="post" action="{{ url('skills') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="position-relative form-group">
                                <label for="exampleAddress2" class="">First Skill</label>
                                <input name="skill_1" id="exampleAddress2" value="{{ auth()->user()->skill_1 }}" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress2" class="">Second Skill</label>
                                <input name="skill_2" id="exampleAddress2" value="{{ auth()->user()->skill_2 }}" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress2" class="">Third Skill</label>
                                <input name="skill_3" id="exampleAddress2" value="{{ auth()->user()->skill_3 }}" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress2" class="">Fourth Skill</label>
                                <input name="skill_4" id="exampleAddress2" value="{{ auth()->user()->skill_4 }}" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress2" class="">Fifth Skill</label>
                                <input name="skill_5" id="exampleAddress2" value="{{ auth()->user()->skill_5 }}" type="text" class="form-control">
                            </div>
                            <button class="mt-2 btn btn-primary">Add Skill</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.sidebar')
</div>


@endforelse


@include('dashboard.footer')
@endsection
