@extends('design.design')
@section('links')
<link rel="stylesheet" href="{{ 'assets/css/event.css' }}">
@endsection
@section('icons')
<div class="event">

<img src="{{ url('assets/imgs/background/Group (4).png') }}" alt="">
</div>
<div class="content-name">Sự kiện 1</div>
<div class="design-event-left">
    <img src="{{ url('assets/imgs/icons/Frame (5).png') }}" alt="">
</div>
<div class="design-event-right">
    <img src="{{ url('assets/imgs/icons/Frame (6).png') }}" alt="">
</div>
<div class="background-event">
    <img src="{{ url('assets/imgs/background/khung chứa vé (1).png') }}" alt="">


    <div class="background-event-conter">

        <div class="background-event-conter-price">
            <img src="{{ url('assets/imgs/icons/Frame 47.png') }}" alt="">
            <div class="background-event-conter-date"> <img src="{{ url('assets/imgs/icons/calendar.png') }}" alt="">30/05/2021 - 01/06/2021</div>
            <div class="background-event-name">Dầm sen park</div>
            <div class="background-event-price">25.000 VND</div>
        </div>
        <div class="information-evnet-number1">

            <p> <div>Lorem Ipsum</div>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.</p>
        </div>
        <div class="information-evnet-number2">

            <img src="{{ url('assets/imgs/icons/Frame 48.png') }}" alt="">
            Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, </p>
        </div>
        <div class="information-evnet-number3">


            Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
            <img src="{{ url('assets/imgs/icons/Frame 48.png') }}" alt="">
        </div>
    </div>
</div>
@endsection
