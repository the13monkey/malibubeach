@extends('layouts.header')

@section('content')

<div class="position-relative overflow-hidden p-2 p-md-5 mt-0 text-center bg-light">
        <div class="col-md-9 mx-auto my-0">
            <h1 class="display-4 font-weight-normal">Malibu Beach Oceanfront Property</h1>
            <p class="lead font-weight-normal">Pick up a property to learn details.</p>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100">
        <div class="text-center overflow-hidden col col-lg-6 bg-center pt-5 pb-5" style="background-image:url('img/roomsample1.jpg');">
            <div class="my-3 py-3 pt-5 pb-5">
                <a href="{{ route('lot') }}" class="text-dark">
                    <h2 class="display-5 pt-5 pb-5 bg-trans border border-white">1.2-acre Lot</h2>
                </a>
            </div>
        </div>
        <div class="text-center overflow-hidden col col-lg-6 bg-center pt-5 pb-5" style="background-image:url('img/roomsample2.jpg')">
            <div class="my-3 p-3 pt-5 pb-5">
                <a href="{{ route('house') }}" class="text-dark">
                    <h2 class="display-5 pt-5 pb-5 bg-trans border border-white">5,300-sq.ft. House</h2>
                </a>
            </div> 
        </div>
    </div>

@endsection