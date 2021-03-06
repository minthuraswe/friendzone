@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> 
          
            <div class="card bg-info text-light">
                <div class="card-header text-center" style="font-size:20px;">{{ __('Change Password') }}</div>
               
                <div class="card-body">
                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('changepassword.update', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                            <input id="password" type="password" class="form-control border @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password" 
                             data-toggle="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input data-toggle="password" id="password-confirm" type="password" class="form-control border" name="new_pass" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input data-toggle="password" id="password-confirm" type="password" class="form-control border" name="new_pass_confirm" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success border">
                                    {{ __('Update') }}
                                </button>
                                <a href="/dashboard" class="btn btn-danger border">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

