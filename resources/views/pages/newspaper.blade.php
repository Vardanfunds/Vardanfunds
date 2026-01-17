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
                               
                                <div class="col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center text-center">
                                    <div class="mb-3 position-relative" style="width: 100%; max-width: 240px;">
                                        <a href="{{ asset($item->file) }}" class="d-block text-dark shadow-sm rounded overflow-hidden" target="_blank" style="transition: transform 0.3s; display: block;">
                                            <img src="{{ $item->img ? asset($item->img) : asset('assets/img/newsletter.png') }}"
                                                class="img-fluid w-100"
                                                style="aspect-ratio: 210/297; object-fit: cover; object-position: top;"
                                                alt="{{ $item['name'] }}"/>
                                        </a>
                                    </div>
                                    <h5 class="mt-0" style="font-size: 1rem;">
                                        <a href="{{ asset($item->file) }}" class="text-dark text-decoration-none" target="_blank">
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
