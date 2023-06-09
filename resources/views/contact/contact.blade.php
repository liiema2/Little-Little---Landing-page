@extends('design.design')
@section('links')
<link rel="stylesheet" href="{{ 'assets/css/contact.css' }}">
@endsection
@section('icons')
<div class="content-name">Liên hệ</div>

<div class="contact-form">

    <div>
        <img src="{{ url('assets/imgs/background/Group (5).png') }}" alt="">
        <div class="contact-form-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </p>
            <form action="{{route('contacted')}}">
                <div class="name-use"> <input type="text" name="usename" id="" placeholder="Tên"> <input type="text" name="email" placeholder="Email"></div>
                <div class="name-number"> <input type="text" name="phone" id="" placeholder="Số điện thoại"> <input type="text" name="address" placeholder="Địa chỉ"></div>
                    <textarea placeholder="Lời nhắn" name="message" id="" cols="30" rows="10"></textarea>
                <div class="button-submit"><button>Gửi liên hệ</button></div>
                </form>
        </div>

    </div>
    <div>
        <div> <img src="{{ url('assets/imgs/background/Group (6).png') }}" alt="">
                <div class="address">
                    <div><img src="{{ url('assets/imgs/icons/adress 1 (1).png') }}" alt=""></div>
                    <div>Địa chỉ:
                      <div>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</div>
                    </div>
                </div>
        </div>
        <div> <img src="{{ url('assets/imgs/background/Group (6).png') }}" alt="">
                <div class="address">
                    <div><img src="{{ url('assets/imgs/icons/Group (9).png') }}" alt=""></div>
                    <div>Email:
                      <div>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</div>
                    </div>
                </div>
        </div>
        <div> <img src="{{ url('assets/imgs/background/Group (6).png') }}" alt="">
                <div class="address">
                    <div><img src="{{ url('assets/imgs/icons/Group (10).png') }}" alt=""></div>
                    <div>Điện thoại:
                      <div>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</div>
                    </div>
                </div>
        </div>



    </div>
</div>

</div>
<div class="conter-lasa-img">
    <img src="{{ url('assets/imgs/icons/Alex_AR_Lay_Do shadow 1.png') }}" alt="">
</div>
@endsection
