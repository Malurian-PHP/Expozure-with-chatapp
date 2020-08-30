@extends('dashboard.layouts')

@section('content')
<form method="post" class="card">
    <div class="card-header">
        <h3 class="card-title">File Upload</h3>
    </div>
    <div class=" card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <input type="file" class="dropify" data-height="180">
            </div>
            <div class="col-lg-4 col-sm-12">
                <input type="file" class="dropify" data-default-file="assets/images/media/media1.jpg" data-height="180">
            </div>
            <div class="col-lg-4 col-sm-12">
                <input type="file" class="dropify" disabled="disabled">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="example-file-input-custom">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
    </div>
</form>

@include('dashboard.footer')
@endsection
