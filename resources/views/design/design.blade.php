<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet/less" type="text/css" href="{{ 'assets/less/headding.less' }}" /> --}}
    <link rel="stylesheet" href="{{ 'assets/css/navigation.css' }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    {{-- <link rel="stylesheet" href="{{'assets/fonts/Montserrat/Montserrat.ttf'}}"> --}}
    @yield('links')
    <title>Document</title>
</head>

<body>

    <div class="body-conter">

        <div class="backgroud-yellow">
            <img src="{{ url('assets/imgs/background/bg.png') }}" alt="" class="background-yellow">

        </div>


        @yield('icons')










    <header>
        <nav>
            <div class="nav-logo-page"> <img src="{{ url('assets/imgs/logo/logo.png') }}" alt=""> </div>
            <div class="nav-information-page">
                <div class="nav-hompage">
                    <a href="{{ url('/') }}">Trang chủ</a>
                </div>
                <div class="nav-event">
                    <a href="{{ url('/events') }}">Sự kiện</a>
                </div>
                <div class="nav-contact">
                    <a href="{{ url('/contact') }}">  Liên hệ </a>
                </div>

            </div>
            <div class="nav-number">
                <img src="{{ url('assets/imgs/icons/Frame 21.png') }}" alt="">
                <p>28291393401</p>
            </div>
        </nav>
    </header>
    <footer>

    </footer>
</body>
@yield('js')
</html>
