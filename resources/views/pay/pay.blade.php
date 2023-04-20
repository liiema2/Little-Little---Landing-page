<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet/less" type="text/css" href="{{ 'assets/less/headding.less' }}" /> --}}
    <link rel="stylesheet" href="{{ 'assets/css/navigation.css' }}">
    <link rel="stylesheet" href="{{ 'assets/css/pay.css' }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    {{-- <link rel="stylesheet" href="{{'assets/fonts/Montserrat/Montserrat.ttf'}}"> --}}

    <title>Document</title>
</head>

<body>

    <div class="body-conter">

        <div class="backgroud-yellow">
            <img src="{{ url('assets/imgs/background/bg.png') }}" alt="" class="background-yellow">

        </div>


        <div class="conter-body">

            <div class="conter-body-left">
                <img src="{{ url('assets/imgs/background/Group.png') }}" alt="">
                <div class="conter-body-left-infomation-pay">
                    <form action="">
                    <div class="information-ticket">
                        <div><label for="">Số tiền thanh toán</label><input type="text" value="{{ number_format($number_ticket * 50000, 0, ',', '.') }} VND"></div>
                        <div><label for="">Số lượng vé</label><input value="{{$number_ticket}}" type="text"> vé</div>
                        <div><label for="">Ngày sử dụng</label><input value="{{$date_use_ticket}}"type="text"></div>
                    </div>
                    <div class="information-ticket-use">

                        <label for="">Thông tin liên hệ</label>
                        <input type="text" value="{{$name}}">
                    </div>
                    <div class="information-ticket-use number">

                        <label for="">Điện thoại</label>
                        <input type="text" value="{{$number_phone}}">
                    </div>
                    <div class="information-ticket-use">

                        <label for="">Email</label>
                        <input type="text"value="{{$email}}">
                    </div>
                </form>
                </div>





            </div>

            <div class="conter-body-right">
                <img src="{{ url('assets/imgs/background/Group (1).png') }}" alt="">
                <div class="conter-body-right-form">
                    <form action="">
                        <div><label for="">Số thẻ</label><input type="text"></div>
                        <div><label for="">Họ và tên chủ thẻ</label><input type="text"></div>
                        <div class="date"> <div><label for="">Ngày hết hạn</label><input  id="date-input"  type="text" value="{{$date_use_ticket}}"></div><div><button type="button" class="button-date"><img src="{{ url('assets/imgs/icons/Frame (4).png') }}" alt=""></button></div></div>
                        <div class="cvv"><label for="">CVV/CVC</label><input type="text" value="***"></div>
                       <div class="submit"><button>Thanh toán</button></div>
                    </form>

                </div>

            </div>
            <div class="conter-body-between">
                <img src="{{ url('assets/imgs/background/Vector.png') }}" alt="">
            </div>
            <div class="conter-body-ticket">
                <img src="{{ url('assets/imgs/background/Group 2.png') }}" alt="">
            </div>
            <div class="conter-body-ticket-famly">
                <img src="{{ url('assets/imgs/background/Group 1 (1).png') }}" alt="">
            </div>
        </div>
        <div class="conter-lasa-img">
            <img src="{{ url('assets/imgs/icons/Trini_Arnold_Votay1 2.png') }}" alt="">
        </div>
    </div>
    <div class="from-ticket-service-date-calendar" style="display:none">
        <div> <img id="button-previous-month" src="{{url('assets/imgs/icons/Previous.png')}}" alt=""> <div id="calendar-month-year"></div> <img  id="button-next-month"src="{{url('assets/imgs/icons/Next.png')}}" alt=""> </div>
        <div id="calendar-container">

        </div>
    </div>
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
<script rel="stylesheet" src="{{ 'assets/js/date.js' }}"> </script>
</html>
