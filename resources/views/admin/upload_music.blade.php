@extends('layouts/admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Music</h4>
                        @if(Session::has('success'))
                            <div class="alert alert-success">Music has been uploaded successfully</div>
                        @endif
                        <form method="POST" action="{{ route('music.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Track Title</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title" required>
                                @error('title')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Track image</label><br>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Track mp3 or WAV</label><br>
                                <input type="file" name="trackfile" required>
                                @error('trackfile')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="track_type">Track type</label>
                                <select name="track_type" id="track_type" class="form-control">
                                    <option value="Drums">Drums</option>
                                    <option value="Samples">Samples</option>
                                    <option value="Vocals">Vocals</option>
                                    <option value="Instrumentals">Instrumentals</option>
                                    <option value="Bass/808">Bass/808</option>
                                    <option value="SFX">SFX</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bpm">Bpm (Beats per minute) </label>
                                <input type="text" class="form-control" id="bpm" name="bpm" placeholder="Bpm (Beats per minute)">
                                @error('bpm')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="key">Key (Optional)</label>
                                <input type="text" class="form-control" id="key" name="key" placeholder="Key">
                                @error('bpm')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="genry">Genre</label>
                                <input type="text" class="form-control" id="genry" name="genry" placeholder="Genre">
                                @error('genry')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4" cols="8"></textarea>
                            </div>
                            <button type="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection