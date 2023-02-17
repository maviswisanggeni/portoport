const insporationMenu = document.querySelector('.inspiration-menu');
const arrowDown = document.querySelector('.arrow-down');
const dropdownMenu = document.querySelector('.dropdown-menu');
const dropdownItems = document.querySelectorAll('.dropdown-menu__items');
const btnBePro = document.querySelector('.btn-be-pro');
const proContent = document.querySelector('.btn-be-pro .content');

insporationMenu.addEventListener('click', () => {
    arrowDown.classList.toggle('arrow-up');
    dropdownMenu.classList.toggle('show');
    dropdownItems.forEach(item => {
        item.classList.toggle('show');
    });
});

dropdownMenu.addEventListener('mouseleave', () => {
    arrowDown.classList.remove('arrow-up');
    dropdownMenu.classList.remove('show');
    dropdownItems.forEach(item => {
        item.classList.remove('show');
    });
});

// if btnPro is hover, then change proContent style transform translateY(15px) to translateY(-50px)
btnBePro.addEventListener('mouseover', () => {
    proContent.style.transform = 'translateY(-32px)';
});

// if btnBePro is not hover, then change txtBePro to Be Pro!
btnBePro.addEventListener('mouseleave', () => {
    proContent.style.transform = 'translateY(15px)';
});

console.log(proContent);