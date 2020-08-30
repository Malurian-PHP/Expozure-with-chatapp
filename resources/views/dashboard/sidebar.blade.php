{{-- Start of Sidebar --}}



            {{-- start of sidebar --}}

            <div class="col-md-6 col-xl-4">
                <div class="main-card mb-3 card">
                    <div class="card-header">Add to your feed
                        <div class="btn-actions-pane-right">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                                <div class="scroll-area-sm">
                                    <div class="scrollbar-container">
                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">

                                            @foreach ($featured as $profile)
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="/avatars/{{ $profile->avatar }}" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                        <div class="widget-heading">{{ $profile->name }}</div>
                                                            <div class="widget-subheading">{{ $profile->current_position }}</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <button class="btn-wide btn btn-success">
                                                            <a style="color:white;" href="{{ url('view/'. $profile->id) }}">View</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-card mb-3 card">
                    <div class="card-header">Get Expozure Premium
                        <div class="btn-actions-pane-right">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <p class="">Get free access to premium and try out these helpful features</p>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="btn btn-success">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="main-card mb-3 card">
                    <div class="card-header">Promoted
                        <div class="btn-actions-pane-right">
                        </div>
                    </div>

                    <div class="mb-3 text-center card-body"><h5 class="card-title">Special Course One</h5>With supporting text below as a natural lead-in to additional content.
                        <br><button class="btn btn-danger">Go There</button>
                    </div>
                </div>


            </div>

            {{-- end of sidebar --}}



{{-- End of Sidebar --}}
