
// menu


// menu end
/* chart.js chart examples */

// chart colors
var colors = ['#007bff', '#28a745', '#333333', '#c3e6cb', '#dc3545', '#6c757d'];

/* 3 donut charts */
var donutOptions = {
    cutoutPercentage: 85,
    legend: { position: 'bottom', padding: 5, labels: { pointStyle: 'circle', usePointStyle: true } }
};

// donut 1
var chDonutData1 = {
    labels: ['Bootstrap', 'Popper', 'Other'],
    datasets: [
        {
            backgroundColor: colors.slice(0, 3),
            borderWidth: 0,
            data: [74, 11, 40]
        }
    ]
};

var chDonut1 = document.getElementById("chDonut1");
if (chDonut1) {
    new Chart(chDonut1, {
        type: 'pie',
        data: chDonutData1,
        options: donutOptions
    });
}

// donut 2
var chDonutData2 = {
    labels: ['Wips', 'Pops', 'Dags'],
    datasets: [
        {
            backgroundColor: colors.slice(0, 3),
            borderWidth: 0,
            data: [40, 45, 30]
        }
    ]
};
var chDonut2 = document.getElementById("chDonut2");
if (chDonut2) {
    new Chart(chDonut2, {
        type: 'pie',
        data: chDonutData2,
        options: donutOptions
    });
}

// donut 3
var chDonutData3 = {
    labels: ['Angular', 'React', 'Other'],
    datasets: [
        {
            backgroundColor: colors.slice(0, 3),
            borderWidth: 0,
            data: [21, 45, 55, 33]
        }
    ]
};
var chDonut3 = document.getElementById("chDonut3");
if (chDonut3) {
    new Chart(chDonut3, {
        type: 'pie',
        data: chDonutData3,
        options: donutOptions
    });
}
// jadlospis day
// current date
let today = new Date();
let dd = String(today.getDate()).padStart(2, '0');
let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
let yyyy = today.getFullYear();

today = dd + '/' + mm;
document.getElementById('actual').innerHTML = today;
// tommorow
function nextDayDate() {
    // get today's date then add one
    var nextDay = new Date();
    nextDay.setDate(nextDay.getDate() + 1);

    var month = nextDay.getMonth() + 1;
    var day = nextDay.getDate();


    if (month < 10) { month = "0" + month }
    if (day < 10) { day = "0" + day }

    return day + '/' + month;
};
document.getElementById('tomorrow').innerHTML = nextDayDate();

function threeDayDate() {
    // get today's date then add one
    let threeDay = new Date();
    threeDay.setDate(threeDay.getDate() + 2);

    let month = threeDay.getMonth() + 1;
    let day = threeDay.getDate();


    if (month < 10) { month = "0" + month }
    if (day < 10) { day = "0" + day }

    return day + '/' + month;
};
document.getElementById('three').innerHTML = threeDayDate();

function fourDayDate() {
    // get today's date then add one
    let fourDay = new Date();
    fourDay.setDate(fourDay.getDate() + 3);

    let month = fourDay.getMonth() + 1;
    let day = fourDay.getDate();


    if (month < 10) { month = "0" + month }
    if (day < 10) { day = "0" + day }

    return day + '/' + month;
};
document.getElementById('four').innerHTML = fourDayDate();

function fiveDayDate() {
    // get today's date then add one
    let fiveDay = new Date();
    fiveDay.setDate(fiveDay.getDate() + 4);

    let month = fiveDay.getMonth() + 1;
    let day = fiveDay.getDate();


    if (month < 10) { month = "0" + month }
    if (day < 10) { day = "0" + day }

    return day + '/' + month;
};
document.getElementById('five').innerHTML = fiveDayDate();

function sixDayDate() {
    // get today's date then add one
    let sixDay = new Date();
    sixDay.setDate(sixDay.getDate() + 5);

    let month = sixDay.getMonth() + 1;
    let day = sixDay.getDate();


    if (month < 10) { month = "0" + month }
    if (day < 10) { day = "0" + day }

    return day + '/' + month;
};
document.getElementById('six').innerHTML = sixDayDate();

function sevenDayDate() {
    // get today's date then add one
    let sevenDay = new Date();
    sevenDay.setDate(sevenDay.getDate() + 6);

    let month = sevenDay.getMonth() + 1;
    let day = sevenDay.getDate();


    if (month < 10) { month = "0" + month }
    if (day < 10) { day = "0" + day }

    return day + '/' + month;
};
document.getElementById('seven').innerHTML = sevenDayDate();

// end
// WHR calculator

var A = document.getElementById("plec");
var B = document.getElementById("talia");
var C = document.getElementById("biodra");

A.addEventListener('option', WHR);
B.addEventListener('input', WHR);
C.addEventListener('input', WHR);
function WHR() {
    var one = parseFloat(B.value) || 0;
    var two = parseFloat(C.value) || 0;
    let ans = one / two;
    if ((A.value === "val1" && ans >= '0.8') || (A.value === "val2" && ans >= '1')) {
        document.getElementById('showWHR').innerHTML = "Masz predyspozycje do otyłości typu jabłko";
    } else {
        document.getElementById('showWHR').innerHTML = "Masz predyspozycje do otyłości typu gruszka";
    };
    // if (A.value === "val2" && ans >= '1') {
    //     document.getElementById('showWHR').innerHTML = "Masz predyspozycje do otyłości typu jabłko";
    // } else {
    //     document.getElementById('showWHR').innerHTML = "Masz predyspozycje do otyłości typu gruszka";
    // }
    console.log(ans);
    console.log(A.value);
}
//
// send to php

// function sendTo() {
//     rate = WHR.ans;
//     if (ans !== '') {
//         $.ajax({
//             url: "index.php",
//             type: "POST",
//             dataType: 'json',
//             data: {
//                 rate: rate
//             },
//             cache: false,
//             success: function (dataResult) {
//                 var dataResult = JSON.parse(dataResult);
//                 if (dataResult.statusCode == 200) {
//                     document.getElementById("com").innerHTML = "Wynik został zapisany"
//                 }
//                 else if (dataResult.statusCode == 201) {
//                     alert("Error occured !");
//                 }

//             }
//         });
//     }

// day of week

var d_names = ["Niedziela", "Poniedziałek", "Wtorek", "Środa",
    "Czwartek", "Piątek", "Sobota"];

let myDate = new Date();
let curr_day = myDate.getDay();
let myDay = d_names[curr_day];

console.log(myDay);

document.getElementById('calendar-day').innerHTML = myDay;

// change day prev

// function prevChange() {
//     // get today's date then add one
//     d_names
//     let prev = new Date();

//     prev.setDate(prev.getDay() - 1);

//     let prevDay = prev.toDateString();
//     document.getElementById('calendar-day').innerHTML = prevDay;
//     console.log(prevDay);
// };

// function nextChange() {
//     // get today's date then add one
//     d_names
//     let next = new Date();

//     next.setDate(next.getDay() - 1);

//     let nextDay = next.toDateString();
//     document.getElementById('calendar-day').innerHTML = nextDay;
//     console.log(nextDay);
// };
const monthNames = ["Styczeń", "Luty", "Marzec", "Kwiecień",
    "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesień", "Październik", "Listopad", "Grudzień"];


const d = new Date();


document.getElementById('month').innerHTML = monthNames[d.getMonth()] + '</br>' + yyyy;