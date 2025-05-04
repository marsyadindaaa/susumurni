<section className="bg-white py-12 px-4 md:px-16">
  {/* Header */}
  <header className="flex justify-between items-center mb-10 border-b pb-4 reveal">
    <h1 className="text-2xl font-bold text-orange-500">
      Kedai <span className="text-black">Susu</span>
    </h1>
    <nav className="hidden md:flex gap-6 text-gray-700 font-medium">
      <a href="#">Beranda</a>
      <a href="#menu">Menu</a>
      <a href="#tentang">Tentang</a>
      <a href="#kontak">Kontak</a>
    </nav>
    <button className="md:hidden text-2xl" id="menuToggle">☰</button>
  </header>

  {/* Main Content */}
  <div className="flex flex-col md:flex-row gap-10">
    {/* Hero Section */}
    <div className="flex-1 bg-orange-50 p-6 rounded-xl shadow-md reveal" style={{ transitionDelay: "0.1s" }}>
      <h2 className="text-4xl font-extrabold leading-tight mb-4">
        NIKMATI <span className="text-orange-500">SUSU MURNI</span>
        <br /> DARI <span className="text-black">KEDAI SUYOG</span>
      </h2>
      <p className="text-gray-600">
        Buka setiap hari dari jam 14.00 sampai 22.00 WIB.
      </p>
      <div className="mt-6 relative w-full max-w-md reveal" style={{ transitionDelay: "0.2s" }}>
        <img
          src="/images/suyog.jpg"
          alt="Kedai Susu Murni"
          className="w-full rounded-xl shadow-lg"
        />
        <div className="absolute top-4 left-4 bg-white shadow-md rounded-md px-4 py-2 text-sm font-medium">
          🥛 Susu Murni
        </div>
        <div className="absolute bottom-4 right-4 bg-white shadow-md rounded-md px-4 py-2 text-sm font-medium">
          🍞 Roti Bakar
        </div>
      </div>
    </div>

    {/* Menu Section */}
    <div className="flex-1 bg-orange-50 p-6 rounded-xl shadow-md text-center reveal" id="menu" style={{ transitionDelay: "0.3s" }}>
      <h3 className="text-xl font-semibold mb-4">Menu Kedai</h3>
      <img
        src="/images/menu%20suyog.jpg"
        alt="Menu Kedai Susu Murni"
        className="rounded-lg shadow-md w-full max-w-md mx-auto cursor-pointer hover:scale-105 transition-transform"
        onClick={() => setModalOpen(true)}
      />
    </div>
  </div>

  {/* Kontak */}
  <div className="text-center py-12 bg-orange-50 mt-10 reveal" id="kontak" style={{ transitionDelay: "0.4s" }}>
    <h3 className="text-xl font-bold mb-2">Hubungi Kami</h3>
    <p className="mb-4 text-gray-600">Jika tertarik memesan, silakan hubungi via WhatsApp:</p>
    <a href="https://wa.me/6289517627375" className="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full">
      Chat via WhatsApp
    </a>
  </div>

  {/* Modal Zoom */}
  {modalOpen && (
    <div
      className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
      onClick={() => setModalOpen(false)}
    >
      <img
        src="/images/menu%20suyog.jpg"
        alt="Full Menu"
        className="max-w-3xl w-full rounded-lg shadow-xl border-4 border-white"
      />
    </div>
  )}

  <footer className="text-center text-sm text-gray-400 mt-10 reveal" style={{ transitionDelay: "0.5s" }}>
    Copyright © 2025 Kedai Susu Murni. All rights reserved.
  </footer>

  <style jsx>{`
    .reveal {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }
  `}</style>
</section>
