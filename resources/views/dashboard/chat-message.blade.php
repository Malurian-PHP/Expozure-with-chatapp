@extends('dashboard.layouts')

@section('content')

    {{-- start of content --}}

    <div class="row" id="app">
        <div class="col-sm-12">
                <chat-app :user="{{ auth()->user() }}"></chat-app>
        </div>
        {{-- end of content --}}

        {{-- @include('dashboard.sidebar') --}}

    </div>

@include('dashboard.footer')
@endsection
