@extends('layouts.main')

@section('title', 'comic')

@section('content')
    <section class="jumbotron">
            
    </section>
    {{-- [
        "title" => "Action Comics #1000: The Deluxe Edition",
        "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
        "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
        "price" => "$19.99",
        "series" => "Action Comics",
        "sale_date" => "2018-10-02",
        "type" => "comic book",
        "artists" => [
            "José Luis García-López",
            "Clay Mann",
            "Rafael Albuquerque",
            "Patrick Gleason",
            "Dan Jurgens",
            "Joe Shuster",
            "Neal Adams",
            "Curt Swan",
            "John Cassaday",
            "Olivier Coipel",
            "Jim Lee"
        ], --}}
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

                {{-- talent section --}}
                <div class="talent">
                    <div>
                        <h3>Talent</h3>
                        <span class="title">

                        </span>
                        <span class="info">

                        </span>
                    </div>
                    <div>
                        <span class="title">

                        </span>
                        <span class="info">
                            
                        </span>
                    </div>
                </div>

                {{-- specs section --}}
                <div class="specs">
                    <h3>Specs</h3>
                    <div>
                        <span class="title">

                        </span>
                        <span class="info">
                            
                        </span>
                    </div>
                    <div>
                        <span class="title">

                        </span>
                        <span class="info">
                            
                        </span>
                    </div>
                    <div>
                        <span class="title">

                        </span>
                        <span class="info">
                            
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection