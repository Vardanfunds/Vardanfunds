@extends('layouts.app')
@section('content')

<!-- TEAM HEADER -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">Team</h4>
                    </div>
                </div>
            </div>


<!-- TEAM GRID -->
<div class="container py-5 text-center">

    <div class="row g-4"> <!-- Added gap -->
        @isset($teamsModel)
            @foreach ($teamsModel as $key => $item) 
                <div class="col-6 col-md-4 col-lg-3"> <!-- Added col-lg-3 for better desktop view -->
                    <div class="team-item">
                        <div class="team-img-wrapper">
                            <a href="{{ ('team/view').'/'.$item['id'] }}">
                                <img src="{{ asset($item->img) }}" class="img-fluid w-100 team-image" alt="{{ $item['name'] }}">
                            </a>
                        </div>
                        <div class="mt-3 text-center">
                            <h5 class="team-name mb-0">
                                <a href="{{ ('team/view').'/'.$item['id'] }}" class="text-dark text-decoration-none">{{ $item['name'] }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
</div>


@endsection