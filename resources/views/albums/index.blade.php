@extends('layouts.app')

@section('content')
<div class="imageGallery-wrap">
    <img src="/images/rewind.png" id="rwnbtn">
    <div class="imageGallery">
        <div>
            <span><img src="/images/Image-1.jpg"></span>
            <span><img src="/images/Image-2.jpg"></span>
            <span><img src="/images/Image-3.jpeg"></span>
        </div>
        <div>
            <span><img src="/images/Image-4.jpeg"></span>
            <span><img src="/images/Image-5.jpg"></span>
            <span><img src="/images/Image-6.jpeg"></span>
        </div>
    </div>
    <img src="/images/forward.png" id="fwbtn">
</div>
@endsection