<header>
    <nav class="main-navigation container">
        <a class="img-home-link" href=" {{ route('comics') }} ">

            <img src=" {{ asset( 'img/dc-logo.png' ) }} " alt="DC logo">
        </a>

        <ul class="nav-ul">
            <li class="active">
                <a href=" {{ route('comics') }} ">comics</a>
            </li>
            <li>
                <a href=" {{ route('news') }} ">news</a>
            </li>
        </ul>
    </nav>
</header>