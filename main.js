
  function toggleMenu() {
    const nav = document.getElementById('navbar');
    nav.classList.toggle('show');
  }
// Tombol scroll ke atas
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Tampilkan tombol saat scroll
window.onscroll = function () {
  const btn = document.getElementById("scrollTopBtn");
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};
