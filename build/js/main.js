const burgerBtn = document.getElementById('burger-btn');
const overlay = document.getElementById('overlay');
const close = document.getElementById('close');

const toggleMenu = () => {
   const modal = document.getElementById('modal');
   modal.classList.toggle('hidden');
};

burgerBtn.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);
close.addEventListener('click', toggleMenu);
