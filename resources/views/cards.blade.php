<div class="comic-wrapper">
    <nav>
        <div class="blue-bg curr-series">
            current series
        </div>

        <ul>

            {{-- foreach on comics_files --}}
            @foreach ($comics_files as $file)

                {{-- @dump($file) --}}
                <li>
                    <a href="#">
                        <div class="single-comic">

                            {{-- adding figure --}}
                            <figure class="thumb">
                                <img src="{{ $file['thumb'] }}" alt=" {{$file['series'] }}">
                            </figure>

                            {{-- adding title --}}
                            <h3>{{ $file['series'] }}</h3>
                        </div> 
                    </a>
                </li>

            @endforeach
        </ul>

        <div class="my_btn-container">
            <button class="blue-bg my_btn">load more</button>
        </div>
        
    </nav>
</div>