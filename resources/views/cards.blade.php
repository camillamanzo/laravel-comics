<header>
    <div class="container">
        <div class="dc-power">

        </div>

        <nav>
            <ul>
                <li><a href="/"><img src="../../../public/images/dc-logo.png" alt=""></a></li>
                @foreach ($comics_files as $file)
                @dump($file)
                    <li>
                        <a href="#">
                            <div class="single-comic">
                                <img src="" alt="">
                                <h3>{{ $file['series'] }}</h3>
                            </div> 
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>