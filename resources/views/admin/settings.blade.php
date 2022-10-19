@extends('layouts/admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
                
                        @if(Session::has('success'))
                            <div class="alert alert-success">Post added successfully</div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Update Password</h4>
                                        <p class="card-description"> Ensure your account is using a long, random password to stay secure. </p>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Current Password</label>
                                                <input type="password" name="old-password" class="form-control" id="exampleInputUsername1" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">New password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                                <input type="password" name="password-confirm" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Update password</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Update email</h4>
                                        <p class="card-description"> Ensure your account is using a long, random password to stay secure. </p>
                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputUsername2">Old Email</label>
                                                
                                                    <input type="email" class="form-control" id="exampleInputUsername2" placeholder="Old email">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">New Email</label>
                                                
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="New Email">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Confirm Email</label>
                                                
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Confirm Email">
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Update email</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
    </div>
@endsection