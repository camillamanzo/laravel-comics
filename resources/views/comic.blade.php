@extends('layouts.main')

@section('title', 'comic')

@section('content')
    <div class="comic-container">

        {{-- img on position absolute --}}
        <div>
            <img src="" alt="">
        </div>
        
        {{-- div on flex --}}
        <div>

            {{-- info on the comic --}}
            <div>
                <h1></h1>
                <span></span>
                <span></span>
                <p></p>
            </div>

            {{-- advert of the comic --}}
            <div>
                <h3></h3>
                <img src="" alt="">
            </div>

            {{-- div on flex --}}
            <div>

                {{-- talent section --}}
                <div class="talent">
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

                {{-- specs section --}}
                <div class="specs">
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
    </div>
@endsection