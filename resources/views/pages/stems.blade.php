@extends('layouts/main')
@section('content')
	<!-- Player section -->
	<section class="player-section set-bg black" data-setbg="{{asset('front/img/music-player.png') }}">
        <div class="container">
            <div class="top-search-b0x">
                <div class="search-song">
                    <form action="">
                        <button type="submit"><svg height="30px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M344.5,298c15-23.6,23.8-51.6,23.8-81.7c0-84.1-68.1-152.3-152.1-152.3C132.1,64,64,132.2,64,216.3  c0,84.1,68.1,152.3,152.1,152.3c30.5,0,58.9-9,82.7-24.4l6.9-4.8L414.3,448l33.7-34.3L339.5,305.1L344.5,298z M301.4,131.2  c22.7,22.7,35.2,52.9,35.2,85c0,32.1-12.5,62.3-35.2,85c-22.7,22.7-52.9,35.2-85,35.2c-32.1,0-62.3-12.5-85-35.2  c-22.7-22.7-35.2-52.9-35.2-85c0-32.1,12.5-62.3,35.2-85c22.7-22.7,52.9-35.2,85-35.2C248.5,96,278.7,108.5,301.4,131.2z"/></svg></button>
                        <input type="text" name="search" placeholder="Search Song from here">
                        <div class="web">
                            <svg enable-background="new 0 0 32 32" height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="globe_sphere"><g><path d="M16.499,9.162c-2.735,0-5.469-0.315-8.123-0.937C8.107,8.162,7.94,7.894,8.003,7.624    c0.063-0.268,0.325-0.435,0.602-0.373c5.793,1.358,11.95,1.187,17.678-0.498c0.27-0.076,0.544,0.073,0.621,0.338    c0.078,0.266-0.073,0.543-0.338,0.621C23.295,8.674,19.908,9.162,16.499,9.162z" fill="#263238"/><path d="M26.424,26.362c-0.047,0-0.094-0.007-0.142-0.021c-6.359-1.871-13.207-1.871-19.566,0    c-0.269,0.075-0.544-0.073-0.621-0.338c-0.078-0.266,0.073-0.543,0.338-0.621c6.545-1.926,13.588-1.926,20.133,0    c0.265,0.078,0.416,0.355,0.338,0.621C26.84,26.222,26.64,26.362,26.424,26.362z" fill="#263238"/><path d="M15.888,30.639c-0.098,0-0.195-0.028-0.282-0.087c-4.667-3.185-7.453-8.422-7.453-14.009    c0-4.527,1.781-8.788,5.017-11.998c0.197-0.197,0.514-0.193,0.707,0.002c0.195,0.196,0.193,0.513-0.002,0.707    c-3.045,3.021-4.722,7.03-4.722,11.289c0,5.256,2.623,10.185,7.018,13.183c0.228,0.155,0.286,0.467,0.131,0.695    C16.204,30.563,16.047,30.639,15.888,30.639z" fill="#263238"/><path d="M17.153,30.639c-0.159,0-0.316-0.076-0.413-0.218c-0.155-0.229-0.097-0.54,0.131-0.695    c4.395-2.998,7.018-7.927,7.018-13.183S21.266,6.358,16.871,3.36c-0.228-0.155-0.286-0.467-0.131-0.695    c0.156-0.228,0.468-0.284,0.695-0.131c4.667,3.185,7.453,8.422,7.453,14.009s-2.786,10.824-7.453,14.009    C17.349,30.61,17.251,30.639,17.153,30.639z" fill="#263238"/><g><path d="M16.499,30.49c-0.276,0-0.5-0.224-0.5-0.5V3.096c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5V29.99     C16.999,30.267,16.775,30.49,16.499,30.49z" fill="#263238"/></g><g><path d="M30.446,17.043H4.552c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h25.895c0.276,0,0.5,0.224,0.5,0.5     S30.723,17.043,30.446,17.043z" fill="#263238"/></g><path d="M16.499,31.043c-7.995,0-14.5-6.505-14.5-14.5c0-3.521,1.278-6.919,3.6-9.565    C5.781,6.77,6.096,6.75,6.305,6.932C6.512,7.114,6.532,7.43,6.351,7.638c-2.161,2.463-3.352,5.626-3.352,8.905    c0,7.444,6.056,13.5,13.5,13.5s13.5-6.056,13.5-13.5s-6.056-13.5-13.5-13.5c-3.078,0-5.976,1.008-8.379,2.915    C7.904,6.13,7.59,6.095,7.418,5.877c-0.172-0.216-0.136-0.53,0.081-0.702c2.581-2.049,5.693-3.132,9-3.132    c7.995,0,14.5,6.505,14.5,14.5S24.494,31.043,16.499,31.043z" fill="#263238"/></g></g></svg>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="full-box-category">
            <div class="whole-category">
                <div class="single-category">
                    <h2>Drums</h2>
                    <div class="category-slideshow">
                        <div class="single catslidsho owl-carousel">
                            <div class="single-image">
                                <img src="{{asset('front/img/f-1.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-2.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-category">
                    <h2>Samples</h2>
                    <div class="category-slideshow">
                        <div class="single catslidsho owl-carousel">
                            <div class="single-image">
                                <img src="{{asset('front/img/f-4.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-5.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-category">
                    <h2>Vocals</h2>
                    <div class="category-slideshow">
                        <div class="single catslidsho owl-carousel">
                            <div class="single-image">
                                <img src="{{asset('front/img/f-4.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-5.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-category">
                    <h2>Instrumentals</h2>
                    <div class="category-slideshow">
                        <div class="single catslidsho owl-carousel">
                            <div class="single-image">
                                <img src="{{asset('front/img/f-4.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-5.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-category">
                    <h2>Bass/808</h2>
                    <div class="category-slideshow">
                        <div class="single catslidsho owl-carousel">
                            <div class="single-image">
                                <img src="{{asset('front/img/f-4.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-5.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-category">
                    <h2>SFX</h2>
                    <div class="category-slideshow">
                        <div class="single catslidsho owl-carousel">
                            <div class="single-image">
                                <img src="{{asset('front/img/f-4.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-5.jpg') }}" alt="">
                            </div>
                            <div class="single-image">
                                <img src="{{asset('front/img/f-6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
		    <div class="music-playlist">
		        <div class="total-playlist">
		            <div class="single-playlist">
		                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="music-files/1.mp3"></div>
		                <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                            <div class="play-step-1">
		                        <button class="jp-play player_button" tabindex="0"></button>
                                <button class="jp-stop player_button" tabindex="0"></button>
                            </div>
                            <div class="play-step-2">
                                <img src="{{asset('front/img/playlist/1.jpg') }}" alt="">
                            </div>
                            <div class="play-step-3">
                                <p>Sample music name will go here</p>
                            </div>
                            <div class="play-step-4">
                                <p><span>WAV</span> <span>MP3</span></p>
                            </div>
                            <div class="play-step-5">
                                <p>September 10, 2022</p>
                            </div>
                            <div class="play-step-6">
                                <a href=""><img src="{{asset('front/img/icons/p-1.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-2.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-3.png') }}" alt=""></a>
                            </div>
		                </div>
		            </div>
		            <div class="single-playlist">
		                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="music-files/2.mp3"></div>
		                <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                            <div class="play-step-1">
		                        <button class="jp-play player_button" tabindex="0"></button>
                                <button class="jp-stop player_button" tabindex="0"></button>
                            </div>
                            <div class="play-step-2">
                                <img src="{{asset('front/img/playlist/1.jpg') }}" alt="">
                            </div>
                            <div class="play-step-3">
                                <p>Sample music name will go here</p>
                            </div>
                            <div class="play-step-4">
                                <p><span>WAV</span> <span>MP3</span></p>
                            </div>
                            <div class="play-step-5">
                                <p>September 10, 2022</p>
                            </div>
                            <div class="play-step-6">
                                <a href=""><img src="{{asset('front/img/icons/p-1.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-2.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-3.png') }}" alt=""></a>
                            </div>
		                </div>
		            </div>
		            <div class="single-playlist">
		                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3" data-url="music-files/3.mp3"></div>
		                <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                            <div class="play-step-1">
		                        <button class="jp-play player_button" tabindex="0"></button>
                                <button class="jp-stop player_button" tabindex="0"></button>
                            </div>
                            <div class="play-step-2">
                                <img src="{{asset('front/img/playlist/1.jpg') }}" alt="">
                            </div>
                            <div class="play-step-3">
                                <p>Sample music name will go here</p>
                            </div>
                            <div class="play-step-4">
                                <p><span>WAV</span> <span>MP3</span></p>
                            </div>
                            <div class="play-step-5">
                                <p>September 10, 2022</p>
                            </div>
                            <div class="play-step-6">
                                <a href=""><img src="{{asset('front/img/icons/p-1.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-2.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-3.png') }}" alt=""></a>
                            </div>
		                </div>
		            </div>
		            <div class="single-playlist">
		                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4" data-url="music-files/4.mp3"></div>
		                <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                            <div class="play-step-1">
		                        <button class="jp-play player_button" tabindex="0"></button>
                                <button class="jp-stop player_button" tabindex="0"></button>
                            </div>
                            <div class="play-step-2">
                                <img src="{{asset('front/img/playlist/1.jpg') }}" alt="">
                            </div>
                            <div class="play-step-3">
                                <p>Sample music name will go here</p>
                            </div>
                            <div class="play-step-4">
                                <p><span>WAV</span> <span>MP3</span></p>
                            </div>
                            <div class="play-step-5">
                                <p>September 10, 2022</p>
                            </div>
                            <div class="play-step-6">
                                <a href=""><img src="{{asset('front/img/icons/p-1.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-2.png') }}" alt=""></a>
                                <a href=""><img src="{{asset('front/img/icons/p-3.png') }}" alt=""></a>
                            </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
	<!-- Player section end -->
@endsection