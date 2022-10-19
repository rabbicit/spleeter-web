@extends('layouts/admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Blog Posts</h4>
                        @if(Session::has('success'))
                            <div class="alert alert-danger">{{Session::get('success')}}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post )
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td class="action-buttons"> 
                                            <form action="{{ route('deleteblog', ['id' => $post->id]) }}" method="POST">
                                                @csrf 
                                                <a href="{{ route('admin.editblog', ['blogid' => $post->id]) }}"><i class="mdi mdi-table-edit"></i></a> 
                                                <button type="submit" title="delete" title="Edit post"><i class="mdi mdi-delete-forever"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        {{ $posts->links() }}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection