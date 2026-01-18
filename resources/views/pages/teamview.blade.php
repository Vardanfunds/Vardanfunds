@extends('layouts.app')
@section('content')
    <!-- TEAM HEADER -->
    <div class="container-fluid about bg-light py-3 py-lg-5">
        <div class="container py-3 py-lg-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 col-xl-12 wow fadeInRight text-center text-lg-start" data-wow-delay="0.3s">
                    <h4 class="text-primary">{{ $teamsModel->name }}</h4>
                </div>
            </div>
        </div>


        <!-- PROFILE SECTION -->
        <div class="container mb-5">
            <div class="row align-items-start">

                <!-- LEFT IMAGE -->
                <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                    <img src="{{ asset($teamsModel->img) }}" style="width:260px; max-width:100%; border-radius:4px;">
                </div>

                <div class="col-md-8">
                    <div class="profile-description">
                       {!! $teamsModel->description !!}
                    </div>
                </div>

            </div>
        </div>
    @endsection
