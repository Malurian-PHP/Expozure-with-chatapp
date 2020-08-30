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
                </div>    </div>
        </div>             --}}
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Your Profile</h5>
                        <form class="" method="post" action="{{ url('update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">

                                <div class="profile-header-container p-3">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="/avatars/{{ auth()->user()->avatar }}" />
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <div class="col-sm-10 pt-4 mt-3">
                                        <input name="avatar" value="Change Display Picture" id="exampleFile" type="file" class="form-control-file">
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="">Name</label>
                                    <input name="name" id="exampleEmail11" value="{{ auth()->user()->name }}" type="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail11" class="">Email</label>
                                        <input name="email" id="exampleEmail11" value="{{ auth()->user()->email }}" type="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleEmail11" class="">What should recruiters know about you?</label>
                                <textarea name="about" id="exampleEmail11"  type="text" class="form-control">{{ auth()->user()->about }}</textarea>
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Address</label>
                                <input name="address" id="exampleAddress" value="{{ auth()->user()->address }}" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress2" class="">Address 2</label>
                                <input name="address2" id="exampleAddress2" value="{{ auth()->user()->address2 }}" type="text" class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Country</label>
                                        <input name="country" id="exampleCity" value="{{ auth()->user()->country }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">State</label>
                                        <input name="state" id="exampleState" value="{{ auth()->user()->state }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">Current Company</label>
                                        <input name="current_company" id="exampleState" value="{{ auth()->user()->current_company }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">Current Position</label>
                                        <input name="position_company" id="exampleState" value="{{ auth()->user()->position_company }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">What school did you get your degree</label>
                                        <input name="education" id="exampleState" value="{{ auth()->user()->education }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">Major</label>
                                        <input name="industry" id="exampleState" value="{{ auth()->user()->industry }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleZip" class="">Zip</label>
                                        <input name="zip" id="exampleZip" value="{{ auth()->user()->zip }}" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleZip" class="">Website</label>
                                        <input name="website" id="exampleZip" value="{{ auth()->user()->website }}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleAddress" class="">Phone</label>
                                <input name="phone" id="exampleAddress" value="{{ auth()->user()->phone }}" type="text" class="form-control">
                            </div>
                            <button class="mt-2 btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Grid</h5>
                        <form class="">
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                                <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                                <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                                <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                </div>
                            </div>
                            <fieldset class="position-relative row form-group">
                                <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                        one</label></div>
                                    <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                </div>
                            </fieldset>
                            <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                                </div>
                            </div>
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-secondary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    @include('dashboard.sidebar')
</div>

@if ( $skills ?? '' )
<div class="row">
    <div class="col-md-8">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Update Your Skills</h5>
                        <form class="" method="post" action="{{ url('skill-update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">First Skill</label>
                                        <input name="skill_1" id="exampleAddress2" value="{{ auth()->user()->skill->skill_1 }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">Second Skill</label>
                                        <input name="skill_2" id="exampleAddress2" value="{{ auth()->user()->skill->skill_2 }}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">Third Skill</label>
                                        <input name="skill_3" id="exampleAddress2" value="{{ auth()->user()->skill->skill_3 }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">Fourth Skill</label>
                                        <input name="skill_4" id="exampleAddress2" value="{{ auth()->user()->skill->skill_4 }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">Fifth Skill</label>
                                        <input name="skill_5" id="exampleAddress2" value="{{ auth()->user()->skill->skill_5 }}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<h5 class="pb-5"><a href="{{ url('/resume') }}">Create a skill</a></h5>

@endif

@include('dashboard.footer')
@endsection
