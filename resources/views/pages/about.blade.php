@extends('layouts/main')
@section('content')
<section class="about-section spad">
    <div class="container">
        <div class="about-title text-center">
            <h1>About Us</h1>
            <p>Sample Split is a free and secure online platform that gives music and their teams the ability to <br>easily create and verify their split information and agreements.</p>
        </div>
    </div>
</section>
<div class="about-secondart">
    <div class="container">
        <div class="details-about">
            <h2> There is no music business without the song split. </h2>
            <h5> Did you create the song alone? Did you collaborate with other writers, musicians or producers? Those details matter when it comes to how you’ll get paid for your work. </h5>
            <p>Here’s the deal.<br><br>

                It takes a lot of paperwork, phone calls and emails to get the correct information registered.<br>
                Until the song split information is registered and verified, the labels, publishers, licensors and any other third-party using your song hold the money until the conflict is cleared up.<br>
                Which means you don’t see any money.<br>
                This isn’t right. There is a better way. SongSplits.
            </p>

            <img src="{{asset('front/img/about.png')}}">
        </div>
    </div>
</div>
<div class="how-it">
    <div class="container">
        <div class="how-itworks">
            <h2>How SampleSplit Works</h2>
            <p>No paperwork. No chasing people around to get information. No missed licensing opportunities<br> and no hold up on getting paid.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box-icon">
                    <div class="stop">1</div>
                    <h4>Register</h4>
                    <p>Songwriters and collaborators can register their split information from their phone or desktop and for free. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-icon">
                    <div class="stop">2</div>
                    <h4>Verify</h4>
                    <p>All collaborators receive a notification to negotiate, cross check and sign off on their split easily. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-icon">
                    <div class="stop">3</div>
                    <h4>Communicate</h4>
                    <p>Once agreed, the synchronized information gets sent to everyone involved.  </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-icon">
                    <div class="stop">4</div>
                    <h4>Finalize</h4>
                    <p>The publisher can then register your work correctly and you can collect your money. If a song is chosen or used by a third party, SongSplits will help identify, credit and contact you for usage license and payment.  </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection