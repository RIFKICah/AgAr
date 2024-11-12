<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgAr</title>
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"
    />
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
        text-decoration: none;
      }

      body {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--bg);
      }

      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
      }

      .navbar-logo img {
        height: 4rem;
      }

      .hero {
        padding: 5%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        background-color: var(--bg);
      }

      .card {
        width: 90%;
        max-width: 50rem;
        border-radius: 15px;
        overflow: hidden;
        background-color: white;
        margin: 20px auto;
        border: 2px solid rgba(0, 0, 0, 0.25);
      }

      .card-content {
        padding: 20px;
        text-align: center;
      }

      .weather-info {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
      }

      .humidity,
      .temperature {
        font-size: 1.3rem;
        color: #333;
      }

      .round-button {
        width: 60px;
        height: 60px;
        background-color: white;
        color: #61a3ba;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        bottom: 20px;
        right: 40px;
      }

      #no-data p {
        text-align: center;
        color: #666;
        font-size: 1.3rem;
      }
    </style>
  </head>
  <body>
    <!-- Main Content -->
    <div id="main-content">
      <nav class="navbar">
        <a href="#home" class="navbar-logo"><img src="{{ asset('logo_agar.png') }}" alt="Logo" /></a>
        <div class="navbar-nav">
          <a href="#setting" id="setting"><i data-feather="settings"></i></a>
        </div>
      </nav>

      <section class="hero" id="home">
        <main class="content">
          <div class="card">
            <div class="card-content">
              <div class="weather-info">
                <img
                  src="logo.png"
                  alt="Weather Logo"
                  class="weather-logo"
                />
                <div class="humidity" id="humidity">Humidity: <span>60%</span></div>
                <div class="temperature" id="temperature">Temperature: <span>22°C</span></div>
              </div>
            </div>
          </div>

          <div id="data-container"></div>

          <div id="no-data" style="display: none;">
            <i data-feather="cpu" class="no-data-icon"></i>
            <p>No Devices Added</p>
          </div>

          <button class="round-button">
            <i data-feather="plus"></i>
          </button>
        </main>
      </section>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
