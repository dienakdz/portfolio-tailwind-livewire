const html = document.documentElement;
const btn = document.getElementById('theme-toggle');
const iconSun = document.getElementById('icon-sun');
const iconMoon = document.getElementById('icon-moon');

btn.addEventListener('click', () => {
  html.classList.toggle('dark');
  
  // Hiển thị icon tương ứng
  iconSun.classList.toggle('hidden');
  iconMoon.classList.toggle('hidden');
});
