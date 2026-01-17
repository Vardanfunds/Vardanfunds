@extends('layouts.app')
@section('content')

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">Newsletter</h4>
                    <div class="row">

                        @isset($newspaper)
                            @foreach ($newspaper as $key => $item)
                               
                                <div class="col-lg-3 d-flex flex-column align-items-center text-center" style="margin-top: 50px">
                                    <a href="{{ asset($item->file) }}" class="text-dark" target="_blank">
                                        <img src="{{ $item->img ? asset($item->img) : asset('assets/img/newsletter.png') }}"
                                            class="img-fluid mb-2"
                                            style="width:210px; height:210px;"
                                            alt="Team Image"/>
                                    </a>
                                    <h5 class="mt-2">
                                        <a href="{{ asset($item->file) }}" class="text-dark" target="_blank">
                                            {{ $item['name'] }}
                                        </a>
                                    </h5>
                                </div>

                            @endforeach
                        @endisset
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- About End -->

@endsection
