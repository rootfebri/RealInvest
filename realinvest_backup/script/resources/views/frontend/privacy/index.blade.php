@extends('layouts.frontend.app')

@section('content')
<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area py-36  bg-img" style="background-image:url({{ asset('frontend/img/bg-img/5.png') }})">
    <div class="breadcrumb-content-text h-100 flex items-center">
        <div class="container ">
            <div class="grid grid-cols-12 gap-4 items-center">
                <div class="breadcrumb-text mt-28 col-span-12 text-center">
                    @if(isset($data['headings']['heading.privacy']))
                        @php
                        $heading = $data['headings']['heading.privacy'];
                        @endphp
                        <h4 class="text-5xl mb-3 font-extrabold capitalize">{{ $heading['title'] ?? null }}</h4>
                        <p class="text-lg max-w-xl mx-auto">{{ $heading['description'] ?? null }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Privacy Area -->
<div class="privacy-content-area section-padding-100">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                {!! $heading['contents'] ?? null !!}
            </div>
        </div>
    </div>
</div>
<!-- Privacy Area -->
@endsection
