@extends('layouts/admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Blog</h4>
                        @if(Session::has('success'))
                            <div class="alert alert-success">Post added successfully</div>
                        @endif
                        <form method="POST" action="{{ route('addnewblog') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title" required>
                                @error('title')
                                    <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label><br>
                                <input type="file" name="thumbnail" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Short Description</label>
                                <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" cols="8" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Long Description</label>
                                <textarea class="form-control" name="lndescription" id="exampleTextarea1" rows="4" cols="8"></textarea>
                            </div>
                            <button type="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection