document.addEventListener('DOMContentLoaded', function () {
    console.log('popup script ok');

    let contactBtn = document.querySelector('.email');
    let popup = document.querySelector('.popup-wrapper');
    let overlay = document.querySelector('.popup-overlay');
    let popupWindow = document.querySelector('.contact-popup');

    console.log(contactBtn);

    contactBtn.addEventListener('click', function(){
        popupWindow.classList.add('active');
    });

    overlay.addEventListener('click', function(){
        popupWindow.classList.remove('active');
    });
    popup.addEventListener('click', function (event) {
        event.stopPropagation(); // This prevents the event from bubbling up to the overlay
    });


});