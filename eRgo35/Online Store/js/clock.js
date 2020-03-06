// Analog Clock
const clockStart = () => {
    var now = new Date(),
        diff = difference(time, now),
        degSec = (sec + diff) / 60 * 360,
        degMin = (min + diff ) / 3600 * 360,
        degHour = (hour + diff) / 43200 * 360;
    
    $('.second').css(rotate(degSec));
    $('.minute').css(rotate(degMin));
    $('.hour').css(rotate(degHour));

    setTimeout(clockStart, 1000);
}

const difference = (d1, d2) => Math.round(Math.abs(d2.getTime() - d1.getTime()) / 1000);

const rotate = deg => { return {'transform': 'rotate(' + deg + 'deg)'} };

var time = new Date(),
    sec = time.getSeconds(),
    min = time.getMinutes() * 60 + sec,
    hour = time.getHours() % 12 * 3600 + min;

clockStart();

// Digital Clock
const fix = e => (e < 10) ? e = "0" + e : e;

const clock = () => {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    h = fix(h);
    m = fix(m);
    s = fix(s);
    $("#timeNum").html(h + ":" + m + ":" + s);
    var t = setTimeout(clock, 500);
}