@extends('dashboard.layouts')

@section('content')


<div class="row">
    <div class="col-md-8">
        <div class="main-card mb-3 card">
            <div class="card-header">There are {{ $searchResults->count() }} results.
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        {{-- <button class="active btn btn-focus">Last Week</button>
                        <button class="btn btn-focus">All Month</button> --}}
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">Zip</th>
                        <th>Name</th>
                        <th class="text-center">Country</th>
                        <th class="text-center">State</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)

                            @foreach($modelSearchResults as $searchResult)
                            <tr>
                                <td class="text-center text-muted">{{ $searchResult->searchable['zip'] }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="40" class="rounded-circle" src="/avatars/{{ $searchResult->searchable['avatar'] }}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $searchResult->searchable['name'] }}</div>
                                                <div class="widget-subheading opacity-7">{{ $searchResult->searchable['postion_company'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $searchResult->searchable['country'] }}</td>
                                <td class="text-center">
                                    <div class="badge badge-warning">{{ $searchResult->searchable['state'] }}</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"> <a style="color:white;" href="{{ url('view/'. $searchResult->searchable['id']) }}">View Profile</a></button>
                                </td>
                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="d-block text-center card-footer">
                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                <button class="btn-wide btn btn-success">Save</button>
            </div> --}}
        </div>
    </div>

    @include('dashboard.sidebar')
</div>

@include('dashboard.footer')
@endsection
