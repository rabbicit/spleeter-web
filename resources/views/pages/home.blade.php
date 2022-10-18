@extends('layouts/main')
@section('content')
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>Split</span> your music.</h2>
								<p>Split any song into Vocals, Instrumental, Bass, Drums, Piano. High-quality stem splitting based on the world's #1 AI-powered technology.</p>
								<a href="#" class="site-btn">Upload Now</a>
							</div>
						</div>
						<div class="col-lg-6">
                            <div class="upload_froms @if ($musics != '') alreadyhave @endif">
                                <form name="mediaUploadform"  id="mediaUploadform" method="post" enctype="multipart/form-data" action="{{url('store-data')}}">
                                    @csrf
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div id="upload-done" class="alert alert-success" style="display: none">
                                        <strong>Split song uploaded successfully. </strong>
                                    </div>


                                    @if($musics != '')
                                        @foreach ($musics as $music)
                                            <div class="music_list">
                                                <div class="add-new-music">
                                                    <h3>Music List</h3>
                                                    <a href="#" class="add_new">Add new Music</a>
                                                </div>
                                                <div class="d-flex " style="align-items: center;">
                                                    <p class="track-list-font">{{$music->name}} - Bass</p>
                                                    <audio controls class="">
                                                        <source src="{{$music->downloadfiles}}/bass.wav" type="audio/wav">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <a href="{{$music->downloadfiles}}/bass.wav">Download</a>
                                                </div>
                                                <div class="d-flex " style="align-items: center;">
                                                    <p class="track-list-font">{{$music->name}} - Drums</p>
                                                    <audio controls class="">
                                                        <source src="{{$music->downloadfiles}}/drums.wav" type="audio/wav">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <a href="{{$music->downloadfiles}}/drums.wav">Download</a>
                                                </div>
                                                <div class="d-flex " style="align-items: center;">
                                                    <p class="track-list-font">{{$music->name}} - Vocals</p>
                                                    <audio controls class="">
                                                        <source src="{{$music->downloadfiles}}/vocals.wav" type="audio/wav">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <a href="{{$music->downloadfiles}}/vocals.wav">Download</a>
                                                </div>
                                                <div class="d-flex " style="align-items: center;">
                                                    <p class="track-list-font">{{$music->name}} - Piano</p>
                                                    <audio controls class="">
                                                        <source src="{{$music->downloadfiles}}/piano.wav" type="audio/wav">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <a href="{{$music->downloadfiles}}/piano.wav">Download</a>
                                                </div>
                                                <div class="d-flex " style="align-items: center;">
                                                    <p class="track-list-font">{{$music->name}} - Other</p>
                                                    <audio controls class="">
                                                        <source src="{{$music->downloadfiles}}/other.wav" type="audio/wav">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <a href="{{$music->downloadfiles}}/other.wav">Download</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    
                                    <div class="drop-files">
                                        <div class="uploading-loader" style="display: none;">
                                            <div class="loading-wave">
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                                <div class="obj-wave"></div>
                                            </div>
                                        </div>
                                        <div class="choose-name">
                                            <p>Choose your file</p>
                                        </div>
                                        <div class="upload-icon">
                                            <svg width="130" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="256" width="256"/><polyline fill="none" points="86 82 128 40 170 82" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/><line fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="128" x2="128" y1="152" y2="40"/><path d="M216,152v56a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V152" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/></svg>
                                        </div>
                                        <div class="choose-files">
                                            <div class="upload-select">
                                                <select name="type" id="">
                                                    <option value="vocal">Vocal</option>
                                                    <option value="drums">Drums</option>
                                                    <option value="bass">Bass</option>
                                                    <option value="piano">Piano</option>
                                                </select>
                                            </div>
                                            <div class="upload-button">
                                                <input type="file" name="file" id="upload_file" style="display: none">
                                                <label for="upload_file">Select File</label>
                                            </div>
                                            <div class="submit-button">
                                                <button type="submit" id="submit" class="site-btn">Upload for review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
 <script>

    $("body").on("click","#submit",function(e){
        $(this).parents("form").ajaxForm(options);
    });
    var options = { 
        beforeSubmit: function(a, jq) { 
            $('.uploading-loader').fadeIn();
        },
        complete: function(response){
            $('.uploading-loader').fadeOut();
            if($.isEmptyObject(response.responseJSON.error)){
                // alert('Image Upload Successfully.');
                $('#upload-done').fadeIn();
                setTimeout(() => {
                    document.location.reload();
                }, 3000);
            }else{
                printErrorMsg(response.responseJSON.error);
            }
        }
    };


    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }

    </script>
@endsection