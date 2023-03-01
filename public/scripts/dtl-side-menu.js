const btnSubtract = document.querySelector('.btn-subtract');
const btnComment = document.querySelector('.btn-comment');
const btnShare = document.querySelector('.btn-share');
const btnInfo = document.querySelector('.btn-info');
const btnLike = document.querySelector('.btn-heart');

// if windows scroll is greater than 100px, change style of buttons transform: translateY(0px);
window.addEventListener('scroll', () => {
    if (window.scrollY > 220) {
        btnComment.style.transform = 'translateY(0px)';
        btnShare.style.transform = 'translateY(0px)';
        btnInfo.style.transform = 'translateY(0px)';
        btnLike.style.transform = 'translateY(0px)';
    } else {
        btnComment.style.transform = 'translateY(-70px)';
        btnShare.style.transform = 'translateY(-140px)';
        btnInfo.style.transform = 'translateY(-210px)';
        btnLike.style.transform = 'translateY(-280px)';
    }
});


// if subtract button is clicked, go to top page and smooth scroll
btnSubtract.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});