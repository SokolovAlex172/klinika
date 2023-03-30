let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.header__nav');
menuBtn.addEventListener('click', function(){
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
const popupOpenElement = document.querySelector('.btn-entry');
const popupSendInfo = document.querySelector('.form');

const closePopup = () => {
  popup.classList.remove('popup_opened');
  document.removeEventListener('keydown', closeByEscape);
};
popupCloseElement.addEventListener('click',() => {
  closePopup();
})
const openPopup = () => {
  popup.classList.add('popup_opened');
  document.addEventListener('keydown', closeByEscape);
};
popupOpenElement.addEventListener('click',() => {
  openPopup();
});
function closeByEscape(evt) {
  if (evt.key === 'Escape') {
    const openedPopup = document.querySelector('.popup_opened');
    closePopup(openedPopup);
  }
};
popupSendInfo.addEventListener('submit', closePopup);




