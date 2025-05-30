
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

// Form ulasan dinamis
document.getElementById('ulasanForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const nama = document.getElementById('nama').value;
  const ulasan = document.getElementById('ulasan').value;

  const container = document.getElementById('ulasanBaru');

  const card = document.createElement('div');
  card.className = 'card-ulasan';
  card.innerHTML = `<p>"${ulasan}"</p><h4>– ${nama}</h4>`;

  container.appendChild(card);

  // Reset form
  this.reset();
});

