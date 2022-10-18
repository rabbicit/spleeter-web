@extends('layouts/main')
@section('content')
<section class="blog-section spad">
    <div class="container">
        <div class="blog-section">
            <div class="section-title">
                <h1>{{ $details->title }}</h1>
            </div>
        </div>
        <div class="blog-details">

            <div class="details-image">
                <img src="{{asset('front/img/blog/'.$details->photo)}}" alt="">
            </div>

            <div class="blog-date">{{ Carbon\Carbon::parse($details->created_at)->format('M d Y')}}</div>

            <div class="text">
                <p>{!! $details->description !!}</p>
                @foreach ($details->contect as $blog )
                <h2>{{ $details->title }}</h2>
                {!! $details->description !!}
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection