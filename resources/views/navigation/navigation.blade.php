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


    <title>Document</title>
</head>

<body>

    <div class="body-conter">

        <div class="backgroud-yellow">
            <img src="{{ url('assets/imgs/background/bg.png') }}" alt="" class="background-yellow">

        </div>

        <div class="logo-damsen">
            <img src="{{ url('assets/imgs/logo/image 2.png') }}" alt="">
        </div>
        <div class="name-logo">
            Đầm sen <div>park</div>
        </div>
        <div class="icons-left">
            <img src="{{ url('assets/imgs/icons/18451 [Converted]-06 1.png') }}" alt="">
        </div>
        <div class="icons-bottom">
            <img src="{{ url('assets/imgs/icons/18451 [Converted]-04 1.png') }}" alt="">
        </div>
        <div class="icons-top-yellow">
            <img src="{{ url('assets/imgs/icons/18451 [Converted]-03 1.png') }}" alt="">
        </div>
        <div class="icons-top-yellow-red">
            <img src="{{ url('assets/imgs/icons/18451 [Converted]-02 1.png') }}" alt="">
        </div>
        <div class="icons-top-children">
            <img src="{{ url('assets/imgs/icons/render fix hair 1.png') }}" alt="">
        </div>
        <div class="icons-right">
            <img src="{{ url('assets/imgs/icons/18451 [Converted]-05 1.png') }}" alt="">
        </div>
        <div class="icons-bottom-right">
            <img src="{{ url('assets/imgs/icons/18451 [Converted]-03 2.png') }}" alt="">
        </div>
        <div class="conter-body">

            <div class="conter-body-left">
                <img src="{{ url('assets/imgs/background/Group.png') }}" alt="">
                <div class="conter-body-left-infomation">
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                        volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                    </div>
                    <br>
                    <div>Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis
                        molestie lectus consequat a.</div>
                </div>
                <div class="conter-body-left-infomation-star">
                    <div class="conter-body-left-infomation-star--text">
                        <img src="{{ url('assets/imgs/icons/Group (3).png') }}" alt="">
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                    </div>
                    <div class="conter-body-left-infomation-star--text">
                        <img src="{{ url('assets/imgs/icons/Group (3).png') }}" alt="">
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                    </div>
                    <div class="conter-body-left-infomation-star--text">
                        <img src="{{ url('assets/imgs/icons/Group (3).png') }}" alt="">
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                    </div>
                </div>





            </div>

            <div class="conter-body-right">
                <img src="{{ url('assets/imgs/background/Group (1).png') }}" alt="">
                <div class="conter-body-right-form">
                    <form action="{{route('pay')}}">

                        <div class="from-ticket-service"> <input type="text" name="name_ticket" value="Gói gia đình"> <button type="button"><img src="{{ url('assets/imgs/icons/Frame (3).png') }}" alt=""></button>
                        </div>
                        <div class="from-ticket-service-date">
                            <div>
                                <input type="text" name="number_ticket" placeholder="Số lượng vé" required>
                                <input type="text" class="date" name="date_use_ticket"  id="date-input" placeholder="Ngày sử dụng" required>
                            </div>

                            <button type="button" class="button-date"><img src="{{ url('assets/imgs/icons/Frame (4).png') }}" alt=""></button>

                        </div>

                        <div class="from-ticket-service-use-infomation">
                            <input type="text" name="name" placeholder="Họ và tên" required>
                            <input type="text" name="number_phone" placeholder="Số điện thoại"required>
                            <input type="text" name="email"  placeholder="Địa chỉ email"required>
                            <button type="submit">Đặt vé</button>
                        </div>

                    </form>
                </div>

            </div>
            <div class="conter-body-between">
                <img src="{{ url('assets/imgs/background/Vector.png') }}" alt="">
            </div>
            <div class="conter-body-ticket">
                <img src="{{ url('assets/imgs/background/Group 1.png') }}" alt="">
            </div>
        </div>
        <div class="conter-lasa-img">
            <img src="{{ url('assets/imgs/icons/Lisa_Arnold_Lay_Do_F2 3 (1).png') }}" alt="">
        </div>
    </div>
    <div class="from-ticket-service-date-calendar" style="display:none ">
        <div> <img id="button-previous-month" src="{{url('assets/imgs/icons/Previous.png')}}" alt=""> <div id="calendar-month-year"></div> <img  id="button-next-month"src="{{url('assets/imgs/icons/Next.png')}}" alt=""> </div>
        <div id="calendar-container">

        </div>
    </div>
    <header>
        <nav>
            <div class="nav-logo-page"> <img src="{{ url('assets/imgs/logo/logo.png') }}" alt=""> </div>
            <div class="nav-information-page">
                <div class="nav-hompage">
                    <a href=""> Trang chủ</a>
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
<script rel="stylesheet" src="{{ 'assets/js/date.js' }}"> </script>
</html>

