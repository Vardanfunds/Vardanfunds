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

    <div class="row gy-5 justify-content-center">
        @isset($teamsModel)
            @foreach ($teamsModel as $key=> $item) 
                <!-- Row 1 -->
                <div class="col-6 col-md-4">
                    <img src="{{ asset($item->img) }}" style="width:210px; height:210px;" alt="Team Image">
                    <div class="text-danger mt-2" style="font-size:13px; font-weight:600;"><a href="{{ ('team/view').'/'.$item['id'] }}" style="color:black">{{ $item['name'] }}</a></div>
                </div>
            @endforeach
        @endisset
       
       
      
    </div>
</div>


@endsection