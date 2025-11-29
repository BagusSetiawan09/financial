<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Financial Management</title>

  <!-- Fonts -->
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
      font-family: Arial, sans-serif;
      background: #121212;
      color: #fff;
    }

    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
    }

    .hero span {
      display: inline-block;
      padding: 10px 25px;
      border: 1px solid #fff;
      border-radius: 50px;
      font-size: 0.8rem;
      letter-spacing: 1px;
      margin-bottom: 10px;
      opacity: 0;
      animation: slideIn 1s ease forwards;
    }

    /* ===== JUDUL DENGAN GRADIENT INTERAKTIF ===== */
    .hero h2 {
      font-family: 'Orbitron', sans-serif;
      font-size: 5rem;
      font-weight: 800;
      letter-spacing: 4px;
      text-transform: uppercase;
      margin: 25px 0;

      background: linear-gradient(
        120deg,
        #005eff,
        #00c6ff,
        #6a00ff
      );
      background-size: 200% 200%;
      background-position: 50% 50%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;

      transition: background-position 0.1s ease-out;
      cursor: default;
      opacity: 0;
      animation: slideIn 1s ease 0.3s forwards;
    }

    .hero p {
      font-size: 1.2rem;
      line-height: 1.6;
      margin-bottom: 60px;
      opacity: 0;
      animation: slideIn 1s ease 0.5s forwards;
    }

    .btn,
    .btn-primary {
      display: inline-block;
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 1.1rem;
      text-decoration: none;
      transition: all 0.3s ease;
      opacity: 0;
      animation: slideIn 1s ease 0.8s forwards;
    }

    .btn {
      border: 2px solid #fff;
      color: #fff;
      margin-right: 20px;
    }

    .btn:hover {
      background: #fff;
      color: #000;
    }

    .btn-primary {
      border: 2px solid #005eff;
      background: #005eff;
      color: #fff;
    }

    .btn-primary:hover {
      background: #003ecb;
    }

    /* ===== ANIMASI MASUK ===== */
    @keyframes slideIn {
      from {
        transform: translateY(40px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    /* Media queries for responsiveness */ /* Large screens (desktops) */ 
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
      .btn-primary { 
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
      .btn-primary { 
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
      .btn-primary { 
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
      .btn-primary { 
        font-size: 1rem; 
        padding: 10px 30px; 
      } 
    }
  </style>
</head>
<body>

  <section class="hero">
    <div>
      <span>Make managing your finances easier</span>

      <h2 id="gradient-title">Financial Management</h2>

      <p>
        Never wonder where your money went again. Track every income and expense easily
        to <br>keep your budget balanced and your mind at ease.
      </p>

      <a href="{{ url('/admin') }}" class="btn">Get Started</a>
      <a href="https://github.com/BagusSetiawan09/financial" class="btn-primary" target="_blank">
        Visit GitHub
      </a>
    </div>
  </section>

  <!-- ===== SCRIPT GRADIENT INTERAKTIF ===== -->
  <script>
    const title = document.getElementById('gradient-title');

    title.addEventListener('mousemove', (e) => {
      const rect = title.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;
      title.style.backgroundPosition = `${x}% ${y}%`;
    });

    title.addEventListener('mouseleave', () => {
      title.style.backgroundPosition = '50% 50%';
    });
  </script>

</body>
</html>
