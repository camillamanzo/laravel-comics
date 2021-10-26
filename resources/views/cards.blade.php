<div class="comic-wrapper">
    <nav>
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
    </nav>
</div>