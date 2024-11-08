<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgAr</title>
 <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <!-- Font-->
    <style>
      :root {
  --primary: #000000;
  --bg: rgb(255, 255, 221);
}

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
}

body {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Poppins", sans-serif;
  background-color: var(--bg); /* Background halaman */
}

/* navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.4rem 7%;
  background-color: rgba(255, 255, 221, 0);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}

.navbar .navbar-logo {
  font-size: 2rem;
  font-weight: 700;
  color: #ffff;
}

.navbar-logo img {
  height: 4rem;
}

.navbar .navbar-logo span {
  color: #ffff;
}

.navbar .navbar-nav a {
  color: black;
  margin: 0 0.5rem;
}

.navbar .navbar-nav a:hover {
  color: rgb(110, 110, 110);
}

/* Media Queries*/
/* laptop*/
@media (max-widht: 1366px) {
  html {
    font-size: 75%;
  }
}
/* tablet*/

@media (max-widht: 758px) {
  html {
    font-size: 65%;
  }
}
/* mobile phone*/

@media (max-widht: 450px) {
  html {
    font-size: 55%;
  }
}

/* Fullscreen loading screen */
#loading1 {
  position: fixed;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, #ccffcc 0%, #87ceeb 50%);
  display: flex;
  flex-direction: column;
  justify-content: center; /* Tetap di tengah secara vertikal */
  align-items: center;
  z-index: 9999; /* Tambahkan padding kecil jika perlu */
}

#loading1 p {
  font-family: "Poppins", sans-serif;
  font-size: 1rem;
  color: rgba(0, 0, 0);
  padding: 1.4rem 7%;
  margin-top: 10rem; /* Hapus margin jika tidak perlu */
  z-index: 2;
}

#loading1 img {
  background-color: #0057b300;
  margin-top: 5rem;
  width: 20rem;
  height: auto;
  padding: 0.5rem 2%;
  z-index: 2;
}

/* Spinner styling */
.spinner {
  border: 5px solid #f3f3f3;
  border-top: 5px solid #3498db;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  animation: spin 1s linear infinite;
}

/* Spinner animation */
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Hide main content initially */
#main-content {
  display: none;
}

/* Styling untuk loading logo */
.loading-logo {
  height: 10rem;
  background-color: var(--bg);
}

#landing-page {
  display: flex; /* Menggunakan flexbox */
  flex-direction: column; /* Susun elemen dalam kolom */
  align-items: center; /* Pusatkan secara horizontal */
  justify-content: center; /* Pusatkan secara vertikal */
  height: 100vh; /* Mengisi tinggi viewport */
  padding: 50px; /* Ruang di dalam kontainer */
  box-sizing: border-box; /* Memastikan padding termasuk dalam ukuran */
  text-align: center;
}

#landing-page img {
  background-color: #0057b300;
  margin-top: 5rem;
  width: 80%; /* Mengatur lebar menjadi 80% dari elemen induknya agar responsif */
  max-width: 20rem; /* Membatasi lebar maksimum untuk layar besar */
  height: auto; /* Mempertahankan rasio aspek gambar */
  padding: 0.5rem 2%;
  z-index: 2;
}

#landing-page h1 {
  margin-top: 3rem;
  color: #61a3ba;
  font-size: 34;
  font-family: "Poppins", sans-serif;
}

#landing-page p {
  margin-top: 2rem;
  color: #61a3ba;
  font-size: 1rem;
}
#landing-page span {
  margin-top: 0;
  color: #61a3ba;
  font-size: 1rem;
}

#explore-site {
  margin-left: auto;
  margin-right: auto;
  display: block; /* Membuat button tampil sebagai blok */
  margin-top: 4rem; /* Jarak atas dari elemen sebelumnya */
  padding: 5px 44px; /* Padding dalam button */
  font-size: 1rem; /* Ukuran font */
  background-color: #ffffff; /* Warna latar belakang */
  color: #9a7e6f; /* Warna teks */
  border: none; /* Tanpa border */
  border-radius: 5px; /* Sudut melingkar */
  cursor: pointer; /* Menunjukkan bahwa ini adalah tombol yang dapat diklik */
  border: 2px solid black; /* Stroke hitam di sekitar button */
}

#explore-site:hover {
  background-color: #61a3ba; /* Warna latar belakang saat hover */
}

#skip-login {
  padding: 10px 20px;
  font-size: 1rem;
  background-color: #6c757d; /* Warna latar belakang untuk tombol Skip */
  color: white; /* Warna teks */
  border: none; /* Tanpa border */
  border-radius: 5px; /* Sudut melingkar */
  cursor: pointer; /* Menunjukkan bahwa ini adalah tombol yang dapat diklik */
}

#skip-login:hover {
  background-color: #5a6268; /* Warna latar belakang saat hover */
}

.oval {
  position: absolute;
  width: 552vw; /* Lebar oval 50% dari lebar viewport */
  height: 928vh; /* Tinggi oval 80% dari tinggi viewport */
  border-radius: 50%; /* Membuat bentuk oval */
  background: linear-gradient(to bottom, #f5f5dc, #ffffff);
  top: 10rem; /* Posisi dari atas */
  z-index: 1; /* Pastikan oval berada di belakang */
  left: 50%; /* Memposisikan oval di tengah */
  transform: translateX(
    -50%
  ); /* Menggeser oval ke kiri sebesar setengah lebar oval */
}

.hero {
  padding: 5%;
  min-height: 100vh;
  display: flex;
  justify-content: center; /* Pusatkan secara vertikal */
  position: relative;
  top: 3rem;

  background-color: var(--bg);
}

/* Card Style */
.card {
  width: 90%; /* Lebar card responsif */
  max-width: 50rem; /* Batas maksimum lebar card */
  border-radius: 15px; /* Membuat sudut membulat */
  overflow: hidden;
  background-color: white;
  margin: 20px auto; /* Mengatur margin agar card berada di tengah */
  border: 2px solid rgba(0, 0, 0, 0.25);
}

/* icon di dalam card */

.card-lokasi {
  padding: 5%;
  border-bottom: 0.1rem solid rgb(148, 148, 148);
}

.card-lokasi a {
  align-items: start;
  color: black;
  margin: 0 0.5rem;
}

.card-lokasi span {
  position: relative;
  left: 10px;
}
/* Konten di dalam card */

.card-content {
  padding: 20px;
  text-align: center;
  position: relative; /* Membuat posisi relatif untuk elemen anak */
}

.card-namalokasi {
  align-items: start;
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 10px;
}

.card-text {
  font-size: 1rem;
  color: #666;
  margin-bottom: 20px;
}

.card-button {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.card-button:hover {
  background-color: #0056b3;
}

/* Responsivitas */
@media (min-width: 1024px) {
  html {
    font-size: 130%;
  }
  .card {
    width: 150%; /* Lebar lebih besar pada layar besar */
    max-width: 900px; /* Memperbesar batas maksimum lebar card */

    justify-content: center;
  }

  .weather-logo {
    width: 100px; /* Ukuran logo cuaca lebih besar */
  }

  .humidity,
  .temperature {
    font-size: 1.5rem; /* Ukuran font lebih besar */
  }
}

@media (min-width: 758px) {
  html {
    font-size: 130%;
  }
  .card {
    width: 130%; /* Lebar penuh pada layar kecil */
    padding: 10px;
  }

  .weather-logo {
    width: 60px; /* Ukuran logo cuaca lebih kecil pada layar kecil */
  }

  .humidity,
  .temperature {
    font-size: 1.3rem; /* Ukuran font lebih kecil */
  }
}

@media (max-width: 450px) {
  .card {
    width: 100%; /* Lebar lebih besar pada layar besar */
  }

  .card {
    padding: 5px; /* Padding lebih kecil pada layar sangat kecil */
  }

  .humidity,
  .temperature {
    font-size: 1rem; /* Ukuran font lebih kecil lagi */
  }
}
/* css cuaca */

.weather-info {
  display: flex; /* Menggunakan flexbox untuk tata letak */
  align-items: flex-start; /* Pusatkan vertikal dari atas */
  justify-content: space-between; /* Ruang antar elemen */
  margin-bottom: 15px; /* Jarak antara info cuaca dan konten lainnya */
}

.weather-logo {
  width: 80px; /* Ukuran logo cuaca */
  height: auto; /* Tinggi otomatis untuk proporsional */
  margin-right: 15rem; /* Jarak antara logo dan informasi lainnya */
  border-right: 0.1rem solid rgb(148, 148, 148);
}

.humidity {
  position: absolute; /* Mengatur posisi kelembapan secara absolut */
  right: 10px; /* Jarak dari kanan */
  top: 10px; /* Jarak dari atas */
  font-size: 1.3rem; /* Ukuran font */
  color: #333; /* Warna teks */
}

.temperature {
  position: absolute; /* Mengatur posisi suhu secara absolut */
  right: 10px; /* Jarak dari kanan */
  top: 40%;
  bottom: 10px; /* Jarak dari bawah */
  font-size: 1.3rem; /* Ukuran font */
  color: #333; /* Warna teks */
}

/* button bulat*/

.round-button {
  width: 60px; /* Ukuran tombol bulat */
  height: 60px; /* Sama dengan lebar untuk membuatnya bulat */
  background-color: white; /* Warna latar belakang tombol */
  color: #61a3ba; /* Warna ikon */
  border: 2px solid rgba(0, 0, 0, 0.25);

  border-radius: 50%; /* Membuat tombol bulat */
  display: flex;
  justify-content: center; /* Pusatkan ikon secara horizontal */
  align-items: center; /* Pusatkan ikon secara vertikal */
  cursor: pointer;
  position: relative;
  margin: 20px auto; /* Membuat tombol berada di tengah secara horizontal */
  transition: background-color 0.3s ease;
  position: fixed; /* Menempel pada layar */
  bottom: 20px; /* Jarak dari bawah layar */
  right: 40px;
}

.round-button:hover {
  background-color: #0056b3; /* Ubah warna saat di-hover */
}

/* Ukuran ikon */
.round-button i {
  font-size: 12px;
}

/*no data data kosong dan cpu belum terkoneksi*/
.no-data-icon {
  width: 80px;
  height: 80px;
  color: #666; /* Warna ikon */
  display: block;
  margin: 80px auto;
}

#no-data p {
  text-align: center;
  color: #666;
  font-size: 1.3rem;
}
    </style>
  </head>
 <!-- Icon-->
 <script src="https://unpkg.com/feather-icons"></script>
 <!-- Icon-->
  <body>

    <!-- Loading Screen -->
    <div id="loading1">
        <img src="{{ asset('logo_agar.png') }}" alt="Logo" class="loading-logo">
        <p>Powerd by Indobot</p>
        <div class="oval"></div>
        
        
    </div>

    <div id="landing-page" style="display: block;"> <!-- Ubah menjadi 'block' untuk melihat tampilannya -->
        <img src="{{ asset('landingpage.png') }}" alt="img" class="loading-page">
        <h1>Smart Farming</h1>
        <p>Enhancing agriculture</p>
        <span>with innovative solutions</span>
        <button id="explore-site">Explore</button> <!-- Pastikan button ini ada di dalam landing-page -->
    </div>
    
    <!--navbar-->

    <div id="main-content" style="display: none;">
        <nav class="navbar">
            <!--logo and setting-->
            <a href="#home" class="navbar-logo"><img src="logo.png" alt="Logo" class="navbar-image"></a>
            <div class="navbar-nav">
                <a href="#setting" id="setting"><i data-feather="settings"></i></a>
            </div>
    
        </nav>
        <!--hero-->
        <section class="hero" id="home">
          <main class="content">
            <div class="card">
              <div class="card-lokasi">
                <a href="#lokasi" id="lokasi">
                  <i data-feather="map-pin"></i>
                  <span class="card-namalokasi">Sumbersari Jember</span>
                </a>
              </div>
              
              <div class="card-content">
                <div class="weather-info">
                  <img src="logo.png" alt="Weather Logo" class="weather-logo"> <!-- Ganti dengan logo cuaca yang sesuai -->
                  <div class="humidity" id="humidity">Humidity: <span>60%</span></div>
                  <div class="temperature" id="temperature">Temperature: <span>22°C</span></div>
                </div>
              </div>
          </div>

          <div id="data-container">
            <!-- Data content goes here -->
          </div>
          
          <!-- Placeholder for "no data" message -->
          <div id="no-data" style="display: none;">
            <i data-feather="cpu" class="no-data-icon"></i>
            <p>No Devices Added</p>
          </div>

          <button class="round-button">
            <i data-feather="plus"></i>
          </button>

          </main>

        </section>

<!--hero-->
        
    </div>
<!--navbar-->




    <!-- Icon-->
    <script>
        feather.replace();
      </script>


    <!-- Loading Page Script -->
    <script>
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

  // ke Login 
    document
    .getElementById("explore-site").addEventListener("click", function () {
    window.location.href = "/login"; // Arahkan ke /login
  });

  // Tambahkan event listener untuk tombol "Skip"
  document.getElementById("skip-login").addEventListener("click", function () {
    document.getElementById("login-page").style.display = "none"; // Sembunyikan login page
    document.getElementById("main-content").style.display = "block"; // Tampilkan konten utama
  });
});

// Dummy query result (true if data exists, false if no data)
let dataExists = false; // Ubah ke 'true' untuk mensimulasikan data tersedia

if (!dataExists) {
  document.getElementById("data-container").style.display = "none";
  document.getElementById("no-data").style.display = "block";
  feather.replace(); // Menjalankan Feather Icon
} else {
  document.getElementById("data-container").style.display = "block";
  document.getElementById("no-data").style.display = "none";
}
    </script>
  </body>
</html>
