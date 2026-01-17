@extends('layouts.app')
@section('content')
<style>
.team-card {
    position: relative;
    width: 210px;
    height: 210px;
    overflow: hidden;
    border-radius: 20px;
}



/* Overlay */
.team-overlay {
    position: absolute;
    inset: 0;
    background: rgba(187, 190, 194, 0.9) ;  /* dark blue overlay */
    color: #41464b;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    opacity: 0;
    transition: all 0.4s ease;
}

/* Hover effect */
.team-card:hover .team-overlay {
    opacity: 1;
}

/* Text styling */
.team-overlay .designation {
    font-size: 1rem;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 8px;
}

.team-overlay .name {
    font-size: 18px;
    font-weight: 700;
}

</style>
<!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">Portfolio</h4>
                        <div class="row">
                           
                                 @isset($newspaper)
                                    @foreach ($newspaper as $key=> $item)
                                  <div class="col-lg-3" style="margin-top: 50px;">
                                            <div class="team-card">
                                                <img src="{{ $item->img }}" style="width:210px; height:210px;" alt="Team Member">

                                                <div class="team-overlay">
                                                    <p class="designation">{{ $item['name'] ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                @endisset
                           
                        </div>
                        
                     </div>

                </div>
            </div>
        </div>
<!-- About End -->

@endsection