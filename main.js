
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

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("ulasanForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      const nama = document.getElementById("nama").value.trim();
      const ulasan = document.getElementById("ulasan").value.trim();

      if (!nama || !ulasan) {
        alert("Nama dan Ulasan wajib diisi!");
        return;
      }

   

      const card = document.createElement("div");
      card.className = "card-ulasan";
      card.innerHTML = `
      <p>"${ulasan}"</p>
      <h4>– ${nama}</h4>
      <button onclick="this.parentElement.remove()">Hapus</button>
    `;

      container.appendChild(card);
      this.reset();
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const ulasanContainer = document.getElementById("ulasanContainer");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  nextBtn.addEventListener("click", () => {
    ulasanContainer.scrollBy({ left: 300, behavior: "smooth" });
  });

  prevBtn.addEventListener("click", () => {
    ulasanContainer.scrollBy({ left: -300, behavior: "smooth" });
  });
});
