import './scss/main.scss';

let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.header__nav');
menuBtn.addEventListener('click', function () {
  menuBtn.classList.toggle('active');
  menu.classList.toggle('active');
});


let swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const popup = document.querySelector('.popup');
const popupCloseElement = document.querySelector('.popup__close');
const popupOpenElement = document.querySelectorAll('.btn-entry');
const popupSendInfo = document.querySelector('.form');

const closePopup = () => {
  popup.classList.remove('popup_opened');
  document.removeEventListener('keydown', closeByEscape);
};
popupCloseElement.addEventListener('click', () => {
  closePopup();
})
const openPopup = () => {
  popup.classList.add('popup_opened');
  document.addEventListener('keydown', closeByEscape);
};
popupOpenElement.forEach(button => {
  button.addEventListener('click', () => {
    openPopup();
  });
});

function closeByEscape(evt) {
  if (evt.key === 'Escape') {
    const openedPopup = document.querySelector('.popup_opened');
    closePopup(openedPopup);
  }
};

const formPlace = document.getElementById('form-place');


formPlace.addEventListener("submit", function (e) {
  e.preventDefault();
  const name = document.getElementById("name-input").value;
  const email = document.getElementById("email-input").value;

  fetch("send_email.php", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
      },
      body: JSON.stringify({ name, email }),
  })
  .then(response => response.json())
  .then(data => {
      console.log(data);
      popupSendInfo.addEventListener('submit', closePopup);
  })
  .catch(error => {
      console.error("Произошла ошибка:", error);
  });
});