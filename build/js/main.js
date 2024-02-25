const burgerBtn = document.getElementById('burger-btn');
const overlay = document.getElementById('overlay');
const close = document.getElementById('close');
const menuItems = document.getElementById('menu-list').querySelectorAll('.menu-item');

const toggleMenu = () => {
   const modal = document.getElementById('modal');
   modal.classList.toggle('hidden');
};

menuItems.forEach((item) => item.addEventListener('click', toggleMenu));

burgerBtn.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);
close.addEventListener('click', toggleMenu);
