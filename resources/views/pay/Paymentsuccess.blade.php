@extends('design.design')
@section('links')
<link rel="stylesheet" href="{{ 'assets/css/paymentsuccess.css' }}">
@endsection
@section('icons')
<div class="event">

{{-- <img src="{{ url('assets/imgs/background/Group (4).png') }}" alt=""> --}}
</div>
<div class="content-name">Thanh toán thanh công</div>

<div class="background-event">
    <img src="{{ url('assets/imgs/background/khung chứa vé (1).png') }}" alt="">


    <div class="background-event-conter">


        <div class="background-event-button-img button-previous" id="previuos-button">
            <img src="{{ url('assets/imgs/icons/previous btn new.png') }}" alt="">
        </div>
        <div class="form-ticket" id="form-ticket">


        </div>


        <div class="background-event-button-img next-button" id="next-button">
            <img src="{{ url('assets/imgs/icons/next btn.png') }}" alt="">
        </div>

    </div>
    <div class="nmber_ticket">

        <div>Số lượng vé {{$ticket}}</div>
        <div>số lượng trang

            <?php
$a=1;
echo $a.'/';

             ?>
{{
    floor($ticket / 4)+1
}}

    </div>



    </div>
</div>
<div class="conter-lasa-img">
    <img src="{{ url('assets/imgs/icons/Alvin_Arnold_Votay1 1.png') }}" alt="">
</div>
@endsection
@section('js')
<script >
    var ticket = @json($ticket);
console.log(ticket);
var dem=1;

function createTickets(ticket) {
    // Lấy ra phần tử form-ticket để chèn các thẻ div
    var formTicket = document.getElementById('form-ticket');

    // Lặp qua từng vé và tạo các thẻ div
    for (var i = 1; i <= ticket; i++) {
      // Tạo div tổng quát
      var divTicket = document.createElement('div');
      divTicket.className = 'ticket';

      // Tạo div chứa hình ảnh
      var divImg = document.createElement('div');
      divImg.className = 'ticket-img';
      var img = document.createElement('img');
      img.src = '{{ url("assets/imgs/icons/image 3.png") }}';
      img.alt = '';
      divImg.appendChild(img);
      divTicket.appendChild(divImg);

      // Tạo div chứa tên vé
      var divName = document.createElement('div');
      divName.className = 'ticket-name';
      divName.textContent = 'AlT202150' + i;
      divTicket.appendChild(divName);

      // Tạo div chứa loại vé
      var divGate = document.createElement('div');
      divGate.className = 'ticket-namegate';
      divGate.textContent = 'Vé cổng';
      divTicket.appendChild(divGate);

      // Tạo div chứa dấu chấm
      var divDot = document.createElement('div');
      divDot.className = 'ticket-dot';
      divDot.textContent = '---';
      divTicket.appendChild(divDot);

      // Tạo div chứa ngày sử dụng
      var divDate = document.createElement('div');
      divDate.className = 'ticket-date';
      divDate.textContent = 'Ngày sử dụng: 31/05/2021';
      divTicket.appendChild(divDate);

      // Tạo div chứa ảnh đánh dấu
      var divMark = document.createElement('div');
      var markImg = document.createElement('img');
      markImg.src = '{{ url("assets/imgs/icons/tick1.png") }}';
      markImg.alt = '';
      divMark.appendChild(markImg);
      divTicket.appendChild(divMark);

      // Thêm divTicket vào formTicket
      formTicket.appendChild(divTicket);
    }
  }

//   var tickets = document.querySelectorAll('.ticket');
//   if
  createTickets( ticket );
  var hiddenCount = 0; // Khởi tạo biến đếm ban đầu

  var button_right = document.getElementById('next-button');
  var button_left = document.getElementById('previuos-button');
  var elements = document.getElementsByClassName('ticket');
  var dem=0;
  var count = Math.floor(elements.length/4);

  console.log(count,'new');
  button_right .onclick = () => {
 if(dem!=count)
{
    var elements = document.getElementsByClassName('ticket');

var remainingCount = elements.length - hiddenCount;
var hideCount = Math.min(4, remainingCount); // Tính số lượng phần tử cần ẩn đi
  var number =hiddenCount + hideCount;
  console.log(hideCount,'hie');
for (var i = hiddenCount; i < number; i++) {
  // console.log(hiddenCount + hideCount);
  console.log(elements.length,'t');
  if(elements.length-hiddenCount<5)
  break;

  elements[i].style.display = 'none';

}
hiddenCount += hideCount;
dem++;

}
else
dem==0;

}
button_left.onclick = () => {

    if(dem!=0)
    dem--;

  var elements = document.getElementsByClassName('ticket');
  var showCount = Math.min(4, hiddenCount); // Tính số lượng phần tử cần hiển thị
  hiddenCount -= showCount; // Giảm biến đếm đi showCount

  for (var i = hiddenCount; i < hiddenCount + showCount; i++) {
    elements[i].style.display = 'inline-block';
  }

}

</script>

@endsection
