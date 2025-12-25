@extends('layouts.app')
@section('content')

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 col-xl-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">Vardan Ceqube</h4>
                    <div class="row">

                        @isset($newspaper)
                            @foreach ($newspaper as $key => $item)
                                <div class="col-lg-3 mb-4 d-flex flex-column align-items-center text-center">
                                    <a href="{{ asset($item->file) }}" class="text-dark" target="_blank">
                                    <img src="{{ $item->img ? asset($item->img) : asset('admin/assets/img/fund.png') }}"
                                        class="img-fluid mb-2" style="width:210px; height:210px;" /></a>

                                    <h5 class="mt-2">
                                        <a href="{{ asset($item->file) }}" class="text-dark" target="_blank">
                                             @if ($item['type'] == 1) 
                                                Vardan Ceqube
                                            @else
                                                Vardan-Venus
                                            @endif
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
