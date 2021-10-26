@extends('layouts.main')

@section('title', 'comic')

@section('content')
    <section class="jumbotron">
            
    </section>

    {{-- @dump($comic) --}}
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
                <span>U.S. Price {{ $comic['price'] }}</span>
                <span>Check Availability</span>
                <p>{{ $comic['description'] }}</p>
            </div>

            {{-- advert of the comic --}}
            <div class="advert">
                <h3>Advertisement</h3>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>

            {{-- div on flex --}}
            <div>

                {{-- @dump($comic['artists']) --}}

                {{-- talent section --}}
                    <div class="talent">
                        <hr>
                        <div>
                            <h3>Talent</h3>
                            <span class="title">
                                Art by:
                            </span>

                            {{-- foreach to get to elements in artists array --}}
                            @foreach ($comic['artists'] as $artist)
                                <span class="info">
                                    {{ $artist . ', ' }}
                                </span>
                            @endforeach
                        </div>
                        <hr>
                        <div>
                            <span class="title">
                                Written by: 
                            </span>

                            {{-- foreach to get to elements in writers array --}}
                            @foreach ($comic['writers'] as $writer)
                                <span class="info">
                                    {{ $writer . ', ' }}
                                </span>
                            @endforeach
                        </div>
                        <hr>
                    </div>

                {{-- specs section --}}
                <div class="specs">
                    <h3>Specs</h3>
                    <hr>
                    <div>
                        <span class="title">
                            Series:
                        </span>
                        <span class="info">
                            {{ $comic['series'] }}
                        </span>
                    </div>
                    <hr>
                    <div>
                        <span class="title">
                            U.S. price:
                        </span>
                        <span class="info">
                            {{ $comic['price'] }}
                        </span>
                    </div>
                    <hr>
                    <div>
                        <span class="title">
                            On Sale Date: 
                        </span>
                        <span class="info">
                            {{ $comic['sale_date'] }}
                        </span>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
    </section>
@endsection