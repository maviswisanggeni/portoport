const btnPopUp= document.querySelector('.btn-popup');


// if windows is scrolling down then trasform: translateY(100px) for btnBack and if windows is scrolling up then change animation goToTop for btnBack
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        btnPopUp.style.transform = 'translateY(0px)';
        btnPopUp.style.animation = 'goToTop 0.5s ease-in-out';
    } else {
        btnPopUp.style.transform = 'translateY(100px)';
        btnPopUp.style.animation = 'goToBottom 0.5s ease-in-out';
    }
    prevScrollpos = currentScrollPos;
}