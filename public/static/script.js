const cookieIdle = 2;
const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.querySelector('#count');
const price = document.querySelector('#price');
const payment = document.querySelector('#payment');

const seatPrice = document.querySelector('.seat');
let ticketPrice = +seatPrice.dataset.price;

const populateUI = () => {
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if (selectedSeats !== null && selectedSeats.length > 0) {
        seats.forEach((seat, index) => {
            if (selectedSeats.indexOf(index) > -1) {
                seat.classList.add('selected');
            }
        });
    }
};

populateUI();

const updateSelectedSeatsCount = () => {
    const selectedSeats = document.querySelectorAll('.row .selected');
    const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

    localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

    const selectedSeatsCount = selectedSeats.length;

    count.innerText = selectedSeatsCount;
    price.innerText = selectedSeatsCount * ticketPrice;
};

container.addEventListener('click', e => {
    if (
        e.target.classList.contains('seat') &&
        !e.target.classList.contains('occupied')
    ) {
        e.target.classList.toggle('selected');
        if (e.target.classList.contains('selected') && getCookie('selected') == null) {
            createCookie('selected', e.target.dataset.nr, cookieIdle);
        } else {
            deleteCookie('selected');
        }

        updateSelectedSeatsCount();
    }

});

const createCookie = (name, value, minutes) => {
    let expires;
    if (minutes) {
        const date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        expires = "; expires="+date.toUTCString();
    } else {
        expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
}

const deleteCookie = (name) => {
    const expires = 'Thu, 01 Jan 1970 00:00:00 UTC';
    document.cookie = name+"="+expires+"; path=/";
}

const getCookie = (name) => {
    const cookie = document.cookie;
    const prefix = name + "=";
    let begin = cookie.indexOf("; " + prefix);
    let end;
    if (begin === -1) {
        begin = cookie.indexOf(prefix);
        if (begin !== 0) return null;
    } else {
        begin += 2;
        end = document.cookie.indexOf(";", begin);
        if (end === -1) {
            end = cookie.length;
        }
    }

    return decodeURI(cookie.substring(begin + prefix.length, end));
}

