@extends('dashboard.layouts')

@section('content')

            {{-- start of content --}}

        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-header card-header-tab-animation">
                        <ul class="nav nav-justified">
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-0" class="active nav-link">Feed</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-1" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-2" class="nav-link">Messages</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-3" class="nav-link">Likes</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-eg115-0" role="tabpanel">
                                @foreach ($posts as $post)
                                <div class="content-box">
                                <div class="widget-heading"><a style="font-weight:bold;font-size: 1rem" href="{{ url('view/'. $post->user->id) }}">{{ $post->user->name }}</a> ~ {{ $post->user->position_company }}</div>
                                    <p class="text-muted p-2">
                                        {{ $post->body }}
                                    </p>
                                    {{ $post->created_at->diffForHumans() }}
                                    <div class="row">
                                    <div class="font-icon-wrapper nav nav-justified col-md-4" style="border:none;">
                                        <i style="font-size: 1.1rem;" class="nav-item pe-7s-like2">

                                        </i>
                                    </div>
                                    <div class="font-icon-wrapper nav nav-justified col-md-4" style="border:none;">
                                            <i data-toggle="modal" data-target=".bd-example-modal-sm" style="font-size: 1.1rem;" class="nav-item pe-7s-comment">

                                            </i>
                                    </div>
                                    <div class="font-icon-wrapper nav nav-justified col-md-4" style="border:none;">
                                        <i style="font-size: 1.1rem;" class="nav-item pe-7s-share">

                                        </i>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane" id="tab-eg115-1" role="tabpanel">
                                @foreach ( auth()->user()->unreadNotifications as $notification)
                                        <a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>{{ $notification->data['body'] }}</strong>
												<div class="small text-muted">{{  $notification->created_at->diffForHumans() }}</div>
											</div>
										</a>
                                        @endforeach
                            </div>
                            <div class="tab-pane" id="tab-eg115-2" role="tabpanel">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <div class="font-icon-wrapper nav nav-justified" style="border:none;"><i class="nav-item pe-7s-like2"> 2</i><i class="nav-item pe-7s-comment"> 2</i><i class="nav-item pe-7s-share"> 2</i></div>
                            </div>
                            <div class="tab-pane" id="tab-eg115-3" role="tabpanel">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <div class="font-icon-wrapper nav nav-justified" style="border:none;"><i class="nav-item pe-7s-like2"> 2</i><i class="nav-item pe-7s-comment"> 2</i><i class="nav-item pe-7s-share"> 2</i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- end of content --}}

            @include('dashboard.sidebar')

        </div>

        {{-- <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="card-title">Basic Examples</div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            Long Content
                        </button>
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                    </div>
                </div>
            </div>
        </div> --}}
@include('dashboard.footer')
@endsection
