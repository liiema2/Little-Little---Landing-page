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

                    <div class="information-ticket">
                        <div><label for="">Số tiền thanh toán</label><input type="text"></div>
                        <div><label for="">Số lượng vé</label><input type="text"> vé</div>
                        <div><label for="">Ngày sử dụng</label><input type="text"></div>
                    </div>
                    <div class="information-ticket-use">

                        <label for="">Thông tin liên hệ</label>
                        <input type="text">
                    </div>
                    <div class="information-ticket-use number">

                        <label for="">Điện thoại</label>
                        <input type="text">
                    </div>
                    <div class="information-ticket-use">

                        <label for="">Email</label>
                        <input type="text">
                    </div>

                </div>





            </div>

            <div class="conter-body-right">
                <img src="{{ url('assets/imgs/background/Group (1).png') }}" alt="">
                <div class="conter-body-right-form">
                    <form action="">
                        <div><label for="">Số thẻ</label><input type="text"></div>
                        <div><label for="">Họ và tên chủ thẻ</label><input type="text"></div>
                        <div class="date"> <div><label for="">Ngày hết hạn</label><input type="text"></div><div><button><img src="{{ url('assets/imgs/icons/Frame (4).png') }}" alt=""></button></div></div>
                        <div class="cvv"><label for="">CVV/CVC</label><input type="text"></div>
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
    <header>
        <nav>
            <div class="nav-logo-page"> <img src="{{ url('assets/imgs/logo/logo.png') }}" alt=""> </div>
            <div class="nav-information-page">
                <div class="nav-hompage">
                    Trang chủ
                </div>
                <div class="nav-event">
                    Sự kiện
                </div>
                <div class="nav-contact">
                    Liên hệ
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

</html>
