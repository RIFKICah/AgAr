window.addEventListener("load", function () {
  setTimeout(function () {
    // Sembunyikan loading screen
    document.getElementById("loading1").style.display = "none";

    // Tampilkan landing page
    document.getElementById("landing-page").style.display = "block";
  }, 1000); // Tampilkan loading minimal 1 detik

  // Event listener untuk tombol "Explore"
  document
    .getElementById("explore-site")
    .addEventListener("click", function () {
      document.getElementById("landing-page").style.display = "none"; // Sembunyikan landing page
      document.getElementById("login-page").style.display = "block"; // Tampilkan login page
    });

  // Dummy untuk menentukan apakah ada data atau tidak
  let dataExists = false; // Ubah ke 'true' jika data ada

  if (!dataExists) {
    document.getElementById("data-container").style.display = "none";
    document.getElementById("no-data").style.display = "block";
  } else {
    document.getElementById("data-container").style.display = "block";
    document.getElementById("no-data").style.display = "none";
  }
});

const saveButtonIoT = document.querySelector(".save-btn");

saveButtonIoT.addEventListener("click", () => {
  window.location.href = "device.html";
});

const saveButtonDevice = document.querySelector(".save-btn-device");

saveButtonDevice.addEventListener("click", () => {
  window.location.href = "device.html";
});
