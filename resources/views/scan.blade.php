@extends('layouts.front')

@section('title', 'Upload Image')
@section('content')
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-12 scan">
        <label for="img-scan_path">Upload and preview image</label>
        <div class="row" style="transition: .6s">
            <div class="col-md-4 colm">
                <div class='preview'>
                    <img src="" id="preview-img" height="100" class="img-fluid w-auto">
                </div>
                <div>
                    <input type="file" id="img-scan" name="img_scan"
                        class="custom-file img-scan" required data-target="#preview-img" />
                       
                </div>
            </div>

            <button class="btn btn-lg btn-success" type="submit">Upload</button>
    </div>
</form>
@stop
@section('javascript')
<script src="{{asset('js/scan.js')}}"></script>
@endsection
