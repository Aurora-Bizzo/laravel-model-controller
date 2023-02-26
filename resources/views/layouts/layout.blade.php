<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body>
    <header class="container-xl">
        <div class="navbar">
            <div class="logo">
                <a href="#">
                    <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="DC comics">
                </a>
            </div>
            <nav>
                <ul>
                    @foreach($menu as $index => $item)
                        <li><a class='header_a' href="{{ $item }}">{{ $index }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div>
                <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2">
                    <input class="mr-3 w-75" type="text" placeholder="Search"
                      aria-label="Search">
                    <i class="fas fa-search search_icon" aria-hidden="true"></i>
                </form>
            </div>
        </div>
    </header>

    <div class="jumbotron"></div>
    
    @yield('content')

    <footer>
        <div class="middle-footer">
            <div class="container-xl">
                <div class="row">
                    <div class="column">
                        <h5>DC COMICS</h5>
                        <ul>
                            @foreach($dc_comics_footer as $index => $item)
                                <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                            @endforeach
                        </ul>
                        <h5>SHOP</h5>
                        <ul>
                            @foreach($shop_footer as $index => $item)
                                <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="column">
                        <h5>DC</h5>
                        <ul>
                            @foreach($dc_footer as $index => $item)
                                <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="column">
                        <h5>SITES</h5>
                        <ul>
                            @foreach($sites_footer as $index => $item)
                            <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                 </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container-xl">
                <div class="row">
                    <div class="col-6">
                        <button><strong>SIGN-UP NOW!</strong></button>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><strong>FOLLOW US</strong></li>
                            <li>
                                <img src="./resources/img/footer-facebook.png" alt="">
                            </li>
                            <li>
                                <img src="src/assets/img/footer-twitter.png" alt="">
                            </li>
                            <li>
                                <img src="src/assets/img/footer-youtube.png" alt="">
                            </li>
                            <li>
                                <img src="src/assets/img/footer-pinterest.png" alt="">
                            </li>
                            <li>
                                <img src="src/assets/img/footer-periscope.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>