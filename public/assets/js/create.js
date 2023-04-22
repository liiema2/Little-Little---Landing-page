// function createTickets(ticket) {
//     // Lấy ra phần tử form-ticket để chèn các thẻ div
//     var formTicket = document.getElementById('form-ticket');

//     // Lặp qua từng vé và tạo các thẻ div
//     for (var i = 1; i <= ticket; i++) {
//       // Tạo div tổng quát
//       var divTicket = document.createElement('div');
//       divTicket.className = 'ticket';

//       // Tạo div chứa hình ảnh
//       var divImg = document.createElement('div');
//       divImg.className = 'ticket-img';
//       var img = document.createElement('img');
//       img.src = '{{ url("assets/imgs/icons/image 3.png") }}';
//       img.alt = '';
//       divImg.appendChild(img);
//       divTicket.appendChild(divImg);

//       // Tạo div chứa tên vé
//       var divName = document.createElement('div');
//       divName.className = 'ticket-name';
//       divName.textContent = 'AlT202150' + i;
//       divTicket.appendChild(divName);

//       // Tạo div chứa loại vé
//       var divGate = document.createElement('div');
//       divGate.className = 'ticket-namegate';
//       divGate.textContent = 'Vé cổng';
//       divTicket.appendChild(divGate);

//       // Tạo div chứa dấu chấm
//       var divDot = document.createElement('div');
//       divDot.className = 'ticket-dot';
//       divDot.textContent = '---';
//       divTicket.appendChild(divDot);

//       // Tạo div chứa ngày sử dụng
//       var divDate = document.createElement('div');
//       divDate.className = 'ticket-date';
//       divDate.textContent = 'Ngày sử dụng: 31/05/2021';
//       divTicket.appendChild(divDate);

//       // Tạo div chứa ảnh đánh dấu
//       var divMark = document.createElement('div');
//       var markImg = document.createElement('img');
//       markImg.src = '{{ url("assets/imgs/icons/tick1.png") }}';
//       markImg.alt = '';
//       divMark.appendChild(markImg);
//       divTicket.appendChild(divMark);

//       // Thêm divTicket vào formTicket
//       formTicket.appendChild(divTicket);
//     }
//   }
//   createTickets( {{ticket}} );
