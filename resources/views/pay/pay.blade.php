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
                    <form action="{{route('pays')}}" id="form-pay"  >
                        @csrf
                    {{-- <form action="{{route('pays')}}" id="name_card_family"> --}}
                    <div class="information-ticket">
                        <div><label for="">Số tiền thanh toán</label><input type="text" name="payment_amount" value="{{ number_format($number_ticket * 50000, 0, ',', '.') }} VND"></div>
                        <div><label for="">Số lượng vé</label><input value="{{$number_ticket}}" name="number_ticket" type="text"> vé</div>
                        <div><label for="">Ngày sử dụng</label><input name="date_use" value="{{$date_use_ticket}} "type="text"></div>
                    </div>
                    <div class="information-ticket-use">

                        <label for="">Thông tin liên hệ</label>
                        <input type="text" name="infomation_use" value="{{$name}}">
                    </div>
                    <div class="information-ticket-use number">

                        <label for="">Điện thoại</label>
                        <input type="text" name="phone" value="{{$number_phone}}">
                    </div>
                    <div class="information-ticket-use">

                        <label for="">Email</label>
                        <input type="text" name="email" value="{{$email}}">
                    </div>
                {{-- </form> --}}
                </div>





            </div>

            <div class="conter-body-right">
                <img src="{{ url('assets/imgs/background/Group (1).png') }}" alt="">
                <div class="conter-body-right-form">

                        <div><label for="">Số thẻ</label><input name="number_card" id="number_card"  required type="number"></div>
                        <div><label for="" >Họ và tên chủ thẻ</label><input name="name_card"  required type="text"></div>
                        <div class="date"> <div><label for="">Ngày hết hạn</label><input  required name="expiry_card" id="date-input"  type="text" value="{{$date_use_ticket}}"></div><div><button type="button" class="button-date"><img src="{{ url('assets/imgs/icons/Frame (4).png') }}" alt=""></button></div></div>
                        <div class="cvv"><label for="">CVV/CVC</label><input type="text" value="***"></div>
                       <div class="submit" ><button id="button_submit" type="submit">Thanh toán</button></div>


                </div>

            </div>
        </form>
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
    <div class="error-pay" id="error" style="display:none" >
        <div><img src="{{url('assets/imgs/icons/Disappointed emoji Face.png')}}" alt=""></div>
        <div class="header-error"></div>
        <div class="body-error">Hình như đã có lỗi xảy ra khi thanh toán... <br>
            Vui lòng kiểm tra lại thông tin liên hệ, thông tin thẻ và thử lại.</div>
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
<script rel="stylesheet" src="{{ 'assets/js/error.js' }}"> </script>

</html>
