@extends('layouts/main')
@section('content')
<section class="blog-section spad">
    <div class="container">
        @if(!$posts->count())
            <p style="text-align: center;">No results from your search</p>
        @endif

        <!-- Blog post -->
        @foreach ($posts as $post )
        <div class="blog-item">
            <a href="{{ url($post->slug) }}"><img src="{{asset('front/img/blog/'.$post->photo)}}" alt=""></a>
            <div class="blog-date">{{ Carbon\Carbon::parse($post->created_at)->format('M d Y')}}</div>
            <h3><a href="{{ url($post->slug) }}">{{ $post->title }}</a></h3>
            {{-- <div class="blog-meta">by Admin</div> --}}
            <p>{!! $post->description !!} </p>
            <a href="{{ url($post->slug) }}" class="site-btn">Read more</a>
        </div>
        @endforeach 
        
        <div class="site-pagination">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection