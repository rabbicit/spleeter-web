@extends('layouts/main')
@section('content')
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Contact us</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na aliqua.</p>
						<form method="post" action="{{ url('contacy/email') }}" class="contact-from">
                            @if (count($errors) > 0)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <div>{{ $error }}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ session::get('success') }}
                                </div>
                            @endif
                            
                            @csrf

							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" name="email" placeholder="Your e-mail">
								</div>
								<div class="col-md-12">
									<input type="text" name='subject' placeholder="Subject">
									<textarea placeholder="Message" name="message"></textarea>

                                    @if (env('GOOGLE_RECAPTCHA_KEY'))
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                                        </div>
                                    @endif

									<div class="text-center">
									    <button type="submit" class="site-btn">send message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

    @endsection