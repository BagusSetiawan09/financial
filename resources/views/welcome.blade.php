<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Management</title>
  <!-- Mengimpor font Orbitron dari Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #121212;
      color: white;
    }
    .navbar {
      padding: 20px 0;
      text-align: center;
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 3px;
      color: white;
    }
    .hero {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 0 20px;
      opacity: 0;
      animation: slideInBottom 1s forwards;
    }
    .hero span {
      font-size: 0.8rem;
      color: #ffffff;
      font-family: 'Helvetica', sans-serif;
      letter-spacing: 1px;
      padding: 10px 20px;
      background-color: transparent;
      display: inline-block;
      border: #ffffff 1px solid;
      border-radius: 50px;
      opacity: 0;
      animation: slideInBottom 1s 0.3s forwards;
    }
    .hero h2 {
      color: #005eff;
      font-size: 4rem;
      font-weight: bold;
      margin-top: 20px;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 4px;
      font-family: 'Orbitron', sans-serif;
      opacity: 0;
      animation: slideInBottom 1s 0.5s forwards;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 70px;
      font-family: 'Arial', sans-serif;
      opacity: 0;
      animation: slideInBottom 1s 0.7s forwards;
    }
    .btn {
      padding: 15px 40px;
      font-size: 1.2rem;
      color: white;
      background-color: transparent;
      border: 2px solid white;
      cursor: pointer;
      border-radius: 50px;
      text-decoration: none;
      font-family: 'Roboto', sans-serif;
      opacity: 0;
      animation: slideInBottom 1s 1s forwards;
      margin-right: 20px;
    }

    .btn1 {
      padding: 15px 40px;
      font-size: 1.2rem;
      color: white;
      background-color: #005eff;
      cursor: pointer;
      border-radius: 50px;
      text-decoration: none;
      font-family: 'Roboto', sans-serif;
      opacity: 0;
      animation: slideInBottom 1s 1s forwards;
      margin-right: 20px;
    }
    /* Define the slide-in bottom animation */
    @keyframes slideInBottom {
      0% {
        transform: translateY(50px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
    /* Media queries for responsiveness */
    /* Large screens (desktops) */
    @media (min-width: 1200px) {
      .hero h2 {
        font-size: 5rem;
      }
      .hero p {
        font-size: 1.1rem;
      }
      .btn {
        font-size: 1rem;
      }
      .btn1 {
        font-size: 1rem;
      }
    }
    /* Medium screens (tablets) */
    @media (min-width: 768px) and (max-width: 1199px) {
      .hero h2 {
        font-size: 4rem;
      }
      .hero p {
        font-size: 1.4rem;
      }
      .btn {
        font-size: 1.3rem;
      }
        .btn1 {
            font-size: 1.3rem;
        }
    }
    /* Small screens (mobile devices) */
    @media (max-width: 767px) {
      .hero {
        height: auto;
        padding: 50px 20px;
      }
      .hero h2 {
        font-size: 3rem;
      }
      .hero p {
        font-size: 0.5rem;
        margin-bottom: 30px;
      }
      .btn {
        font-size: 1rem;
        padding: 12px 35px;
      }
    .btn1 {
        font-size: 1rem;
        padding: 12px 35px;
    }
    }
    /* Extra small screens (very small mobile devices) */
    @media (max-width: 480px) {
      .hero h2 {
        font-size: 2.5rem;
      }
      .hero p {
        font-size: 1rem;
      }
      .btn {
        font-size: 1rem;
        padding: 10px 30px;
      }
      .btn {
        font-size: 1rem;
        padding: 10px 30px;
      }
    }
  </style>
</head>
<body>

  <div class="hero">
    <div>
      <span>Make managing your finances easier</span>
      <h2>FINANCIAL MANAGEMENT</h2>
      <p>Never wonder where your money went again. Track every income and expense easily to keep <br>your budget balanced and your mind at ease.</p>
      <a href="{{ url('/admin') }}" class="btn">Get Started</a>
      <a href="https://github.com/BagusSetiawan09/financial" class="btn1" target="_blank">Visit GitHub</a>
    </div>
  </div>

</body>
</html>