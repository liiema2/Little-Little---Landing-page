function buttonDate() {
    //hiện ẩn lịch



    const buttonPreviousMonth = document.getElementById("button-previous-month");
    buttonPreviousMonth.addEventListener("click", () => {
      // Decrease the month by 1
    //   getmothyears()
      month--;
      if (month < 0) {
        // If the month is less than January, decrease the year by 1 and set the month to December
        years--;
        month = 12;
      }
      // Update the calendar with the new year and month values
      createCalendar(years, month);
    });
        const buttonNextMonth = document.getElementById("button-next-month");
        buttonNextMonth.addEventListener("click", () => {
          // Increase the month by 1
        //   getmothyears()
          month++;
          if (month > 12) {
            // If the month exceeds December, increase the year by 1 and reset the month to January
            years++;
            month = 1;
          }
          // Update the calendar with the new year and month values
          createCalendar(years, month);
        });



    // year.getFullYear();
    // year.getMonth()+1;
    const year = new Date();
    var years =year.getFullYear();
    // console.log(years);
    var month =year.getMonth()+1;
    console.log(month);
    var nextMonth =document.getElementById('button-next-month');
    var previousmonth =document.getElementById('button-previous-month');
    // if (

    const button = document.getElementsByClassName("button-date")[0];
    const calendar = document.getElementsByClassName(
        "from-ticket-service-date-calendar"
    )[0];
    button.addEventListener("click", function () {
        if (calendar.style.display === "none") {
            calendar.style.display = "block";
        } else {
            calendar.style.display = "none";
        }
    });



    getmothyears(years,month);
    createCalendar(years, month);
    getdatetoday();

}
function getdatetoday() {
    const date = new Date();
    var days = date.getDate();
    // console.log(days);
    var tds = document.getElementsByTagName("td");
    console.log(tds);
    // Kiểm tra và thêm class cho td tương ứng với ngày hiện tại
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].innerHTML == days) {
            tds[i].classList.add("from-ticket-service-date-calendar--today");
            break;
        }
    }
}
function getmothyears(years, month) {
    //lấy tháng năm dán vào lịch
    month=month-1;
    // const today = new Date();
    const options = { year: "numeric", month: "long" };
    const formatter = new Intl.DateTimeFormat("vi-VN", options);

    // console.log(formatter.format(today));
    const my = document.getElementById("calendar-month-year");
    my.innerHTML = formatter.format(new Date(years, month));
    // a=formatter.format(new Date(years));
    // console.log( a);

}



buttonDate();



// const today = new Date();
// const firstDayOfMonth = new Date(today.getFullYear(), today.getMonth(), 1);
// const dayOfWeek = firstDayOfMonth.toLocaleString('vi-VN', { weekday: 'long' }); // Lấy thứ của ngày đầu tiên trong tháng

// console.log(`${dayOfWeek}, ${firstDayOfMonth.getDate()}`);

function createCalendar(year, month) {
  // month = month+1;
    getmothyears(year,month);
console.log(month);
  const weeks = [];
  const monthNames = [
    "Tháng 1",
    "Tháng 2",
    "Tháng 3",
    "Tháng 4",
    "Tháng 5",
    "Tháng 6",
    "Tháng 7",
    "Tháng 8",
    "Tháng 9",
    "Tháng 10",
    "Tháng 11",
    "Tháng 12"
  ];
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month , 0);
  const numDays = lastDay.getDate();

  // Add empty cells before the first day of the month
  for (let i = 0; i < firstDay.getDay(); i++) {
    weeks.push("<td></td>");
  }

  // Add cells for each day of the month
  for (let i = 1; i <= numDays; i++) {
    const date = new Date(year, month, i);
    const dateStr = `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
    weeks.push(`<td data-date="${dateStr}">${i}</td>`);
  }

  // Add empty cells after the last day of the month
  for (let i = lastDay.getDay(); i < 6; i++) {
    weeks.push("<td></td>");
  }

  // Create the calendar HTML
  const calendarHtml = `
    <table>
      <thead>
        <tr>
          <th>CN</th>
          <th>T2</th>
          <th>T3</th>
          <th>T4</th>
          <th>T5</th>
          <th>T6</th>
          <th>T7</th>
        </tr>
      </thead>
      <tbody>
        <tr>${weeks.slice(0, 7).join("")}</tr>
        <tr>${weeks.slice(7, 14).join("")}</tr>
        <tr>${weeks.slice(14, 21).join("")}</tr>
        <tr>${weeks.slice(21, 28).join("")}</tr>
        <tr>${weeks.slice(28, 35).join("")}</tr>
        <tr>${weeks.slice(35, 42).join("")}</tr>
      </tbody>
    </table>
  `;

  // Add the calendar HTML to a container element
  const container = document.getElementById("calendar-container");
  container.innerHTML = calendarHtml
  const cells = container.querySelectorAll("td");

// Add a click event listener to each cell
cells.forEach((cell) => {
  cell.addEventListener("click", () => {
    // Get the value of the clicked cell
    const day = cell.innerHTML;

    // Get the current year and month
    // const currentYear = new Date().getFullYear();
    // const currentMonth = new Date().getMonth();

    // Format the date as "dd/mm/yyyy"
    const date = `${day}/${month}/${year}`;

    console.log(month);
    // Set the value of the input element
    const input = document.getElementById("date-input");
    input.value = date;
  });
});

}






