@extends('layouts.headerpending')

@section('content')

<div class="position-relative overflow-hidden p-2 p-md-5 mt-0 text-center bg-light">
        <div class="col-md-9 mx-auto my-0">
            <h5 class="display-4">Request Access Code</h5>
            <p class="lead font-weight-normal">Thank you for your interest in our project. To gain full access to the webiste, you will need an access code. Please fill in the information below and our administrator will send you your access code ASAP.</p>
        </div>
    </div>

    <form class="container px-md-5 mt-5 mb-5" method="POST" action="{{ route('register') }}">

    @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstname">First name <span class="text-muted">(Required)</span></label>
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="" value="{{ old('firstname') }}" required>
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastname">Last name <span class="text-muted">(Required)</span></label>
                <input type="text" class="form-control @error ('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="" value="{{ old('lastname') }}" required>
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Required)</span></label>
            <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" placeholder="you@example.com" autocomplete="email" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control @error ('phone') is-invalid @enderror" id="phone" placeholder="(123) 456-7890" name="phone" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address">Address Line 1</label>
            <input type="text" class="form-control" id="address1" placeholder="1234 Main St" name="address1">
            <div class="invalid-feedback">
                Please enter your mailing address.
            </div>
        </div>

        <div class="mb-3">
            <label for="address2">Address Line 2</label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="address2">
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Country <span class="text-muted">(Required)</span></label>
                <select class="custom-select d-block w-100 @error ('country') is-invalid @enderror" id="country" required name="country">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">State <span class="text-muted">(Required)</span></label>
                <select class="custom-select d-block w-100 @error ('state') is-invalid @enderror" id="state" required name="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Zip <span class="text-muted">(Required)</span></label>
                <input type="text" class="form-control @error ('zip') is-invalid @enderror" id="zip" placeholder="" required name="zip">
                @error('zip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row" style="display: none"> 
            <div class="col-md-3 mb-3">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required value="{{ str_random(20) }}">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="col-md-3 mb-3">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="rawpass">Raw Password</label>
                <input type="text" class="form-control" id="rawpass" placeholder="Raw Password" required name="rawpass">
            </div>
            <div class="col-md-3 mb-3">
                <label for="approved">Approved</label>
                <input type="text" class="form-control" id="approved" placeholder="Approved" required value="0" name="approved">
            </div>
        </div>
            
        <button class="btn btn-primary btn-lg btn-block mt-5" type="submit">Request access code</button>
    </form>



@endsection
