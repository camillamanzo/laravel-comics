@extends('layouts.main')

@section('title', 'comic')

@section('content')

    <section class="jumbotron">
            
    </section>
    
    {{-- blue banner --}}
    <div class="blue-banner"></div>

    <section class="comic-container">

        {{-- img on position absolute --}}
        <figure class="comic-img-wrapper">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </figure>
        
        {{-- div on flex --}}
        <div class="comic-info-wrapper">

            {{-- info on the comic --}}
            <div class="comic-info">
                    <h1>{{ $comic['title'] }}</h1>

                <div class="availability-wrapper">
                    <span>U.S. Price {{ $comic['price'] }}</span>
                    <span>available</span>
                    <span>Check Availability</span>
                </div>

                <p>{{ $comic['description'] }}</p>
            </div>

            {{-- advert of the comic --}}
            <div class="advert-wrapper">
                <h3>Advertisement</h3>
                <figure>
                    <img src="/images/advert-pic.jpg" alt="" alt="advert pic">
                </figure>
            </div>

        </div>
    </section>

    <section class="info-container">

        {{-- div on flex --}}
        <div class="info-wrapper">

            {{-- talent section --}}
            <div class="talent">
                <h3>Talent</h3>
                <hr>
                <div class="my_between">

                    <div class="title">
                        Art by:
                    </div>

                    <div class="info">
                        {{-- foreach to get to elements in artists array --}}
                        @foreach ($comic['artists'] as $artist)
                            <span>
                                {{ $artist . ', ' }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="my_between">
                    
                    <div class="title">
                        Written by: 
                    </div>

                    <div class="info">
                        {{-- foreach to get to elements in writers array --}}
                        @foreach ($comic['writers'] as $writer)
                            <span>
                                {{ $writer . ', ' }}
                            </span>
                        @endforeach
                    </div>
                </div>
                <hr>
            </div>

            {{-- specs section --}}
            <div class="specs">
                <h3>Specs</h3>
                <hr>
                <div class="my_between">
                    <div class="title">
                        Series:
                    </div>
                    <div class="info">
                        {{ $comic['series'] }}
                    </div>
                </div>
                <hr>
                <div class="my_between">
                    <div class="title">
                        U.S. price:
                    </div>
                    <div class="info">
                        {{ $comic['price'] }}
                    </div>
                </div>
                <hr>
                <div class="my_between">
                    <div class="title">
                        On Sale Date: 
                    </div>
                    <div class="info">
                        {{ $comic['sale_date'] }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection