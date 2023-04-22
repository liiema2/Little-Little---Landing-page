@extends('design.design')
@section('links')
<link rel="stylesheet" href="{{ 'assets/css/events.css' }}">
@endsection
@section('icons')
<div class="event">

<img src="{{ url('assets/imgs/background/Group (4).png') }}" alt="">
</div>
<div class="content-name">Sự kiện nổi bật</div>
<div class="design-event-left">
    <img src="{{ url('assets/imgs/icons/Frame (5).png') }}" alt="">
</div>
<div class="design-event-right">
    <img src="{{ url('assets/imgs/icons/Frame (6).png') }}" alt="">
</div>
<div class="background-event">



    <div class="background-event-button-img">
        <img src="{{ url('assets/imgs/icons/previous btn new.png') }}" alt="">
    </div>
    <div class="events-1">
        <img src="{{ url('assets/imgs/icons/Rectangle 1.png') }}" alt="">
        <div class="name"> Sự kiên 1</div>
        <div class="name-park">Đầm sen park</div>
        <div class="date"><img src="{{ url('assets/imgs/icons/calendar.png') }}" alt=""> 30/05/2021 - 01/06/2021</div>
        <div class="price">25.000 VND</div>
       <a href="{{ url('/event') }}"><div class="more"> xem chi tiết</div></a>
    </div>
    <div class="events-1">
        <img src="{{ url('assets/imgs/icons/Rectangle 1.png') }}" alt="">
        <div class="name"> Sự kiên 2</div>
        <div class="name-park">Đầm sen park</div>
        <div class="date"><img src="{{ url('assets/imgs/icons/calendar.png') }}" alt=""> 30/05/2021 - 01/06/2021</div>
        <div class="price">25.000 VND</div>
       <a href="{{ url('/event') }}"><div class="more">xem chi tiết</div></a>
    </div>
    <div class="events-1">
        <img src="{{ url('assets/imgs/icons/Rectangle 1 (1).png') }}" alt="">
        <div class="name"> Sự kiên 3</div>
        <div class="name-park">Đầm sen park</div>
        <div class="date"><img src="{{ url('assets/imgs/icons/calendar.png') }}" alt=""> 30/05/2021 - 01/06/2021</div>
        <div class="price">50.000 VND</div>
       <a href="{{ url('/event') }}"><div class="more">xem chi tiết</div></a>
    </div>
    <div class="events-1">
        <img src="{{ url('assets/imgs/icons/Rectangle 1 (2).png') }}" alt="">
        <div class="name"> Sự kiên 4</div>
        <div class="name-park">Đầm sen park</div>
        <div class="date"><img src="{{ url('assets/imgs/icons/calendar.png') }}" alt=""> 30/05/2021 - 01/06/2021</div>
        <div class="price">55.000 VND</div>
       <a href="{{ url('/event') }}"><div class="more">xem chi tiết</div></a>
    </div>
    <div class="background-event-button-img">
        <img src="{{ url('assets/imgs/icons/next btn.png') }}" alt="">
    </div>


</div>
@endsection
