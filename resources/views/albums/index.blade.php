@extends('layouts.app')

@section('content')
<h1>PhotoGallery</h1>
<div class="imageGallery">
    <span><img src="/images/Image-1.jpg"></span>
    <span><img src="/images/Image-2.jpg"></span>
    <span><img src="/images/Image-3.jpeg"></span>
</div>
<script>
    window.ws = new WebSlides();
</script>
@endsection