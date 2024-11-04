window.addEventListener("load", function () {
  setTimeout(function () {
    // Sembunyikan loading
    document.getElementById("loading1").style.display = "none";

    // Tampilkan landing page
    document.getElementById("landing-page").style.display = "block";
  }, 1000); // Tampilkan loading minimal 1 detik

  // Tambahkan event listener untuk tombol "Explore"
  document
    .getElementById("explore-site")
    .addEventListener("click", function () {
      document.getElementById("landing-page").style.display = "none"; // Sembunyikan landing page
      document.getElementById("login-page").style.display = "block"; // Tampilkan login page
    });

  // Tambahkan event listener untuk tombol "Skip"
  document.getElementById("skip-login").addEventListener("click", function () {
    document.getElementById("login-page").style.display = "none"; // Sembunyikan login page
    document.getElementById("main-content").style.display = "block"; // Tampilkan konten utama
  });
});
