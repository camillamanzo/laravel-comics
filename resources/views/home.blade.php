@extends('layouts.main')

@section('content')
    <main>

        <!-- jumbo section with full width background -->
        <section class="jumbotron">
        
        </section>

        <!-- current series section with v-for on cards-->
        <section class="cards-container">
            @include('cards', ['comics_files' => config('my_comics')])
        </section>

        <!-- info section with v-for on elements -->
        <section class="info">

        </section>
    </main>
@endsection