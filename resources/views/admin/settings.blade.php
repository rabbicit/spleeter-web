@extends('layouts/admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Password</h4>
                        <p class="card-description"> Ensure your account is using a long, random password to stay secure. </p>
                        @if ($errors->updatePassword->any())
                        <div class="notification reject fl-wrap alert alert-danger">
                            <ul>
                            @foreach ($errors->updatePassword->all() as $error)
                                    <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="forms-sample" method="POST" action="{{ route('user-password.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputUsername1">Current Password</label>
                                <input type="password" name="current_password" class="form-control" id="exampleInputUsername1" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">New password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
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
                        
                        @if ($errors->updateProfileInformation->any())
                        <div class="notification reject fl-wrap alert alert-danger">
                            <ul>
                            @foreach ($errors->updateProfileInformation->all() as $error)
                                    <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="forms-sample" method="POST" action="{{route('user-profile-information.update')}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputUsername2">Name</label>
                                    <input type="test" class="form-control" name="name" id="exampleInputUsername2" placeholder="Name" value="{{ Auth::user()->name }}">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email</label>
                                
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail2" value="{{ Auth::user()->email }}" placeholder="Email">
                                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                                        <p class="text-sm mt-2">
                                            {{ __('Your email address is unverified.') }}
                        
                                            <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900" wire:click.prevent="sendEmailVerification">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>
                        
                                        @if ($this->verificationLinkSent)
                                            <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    @endif
                                
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection