@extends('layouts.app')
@section('content')

<!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h4 class="text-primary">Partner & Associate</h4>
                        <div class="row">
                           
                                 @isset($newspaper)
                                    @foreach ($newspaper as $key=> $item)
                                    <div class="col-lg-3 mb-4">
                                       
                                            <img src="{{ $item->partner }}" style="width:210px; height:210px;" alt="Team Image"/>
                                  
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