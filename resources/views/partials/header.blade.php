<header>
    <div class="container">
        <div class="dc-power">

        </div>

        <nav>
            <ul>
                <li><a href="/"><img src="/images/dc-logo.png" alt=""></a></li>
                @foreach ($header_links as $link)
                    <li class="{{ request() -> routeIs ($link) ? 'active' : '' }}">
                        <a href="{{ ($link) }}">{{ $link }}</a>
                    </li>
                @endforeach
                <li><input type="search" placeholder="Search"></li>
            </ul>
            <ul>
            </ul>
        </nav>
    </div>
</header>