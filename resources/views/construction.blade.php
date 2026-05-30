<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Under Construction</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #1f2937, #111827);
      color: white;
      overflow: hidden;
    }

    .container {
      text-align: center;
      padding: 40px;
      max-width: 700px;
      animation: fadeIn 1.5s ease;
    }

    .icon {
      font-size: 90px;
      margin-bottom: 20px;
      animation: bounce 2s infinite;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      letter-spacing: 2px;
    }

    p {
      font-size: 1.1rem;
      color: #d1d5db;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .progress-box {
      width: 100%;
      height: 14px;
      background: rgba(255,255,255,0.15);
      border-radius: 50px;
      overflow: hidden;
      margin-bottom: 25px;
    }

    .progress-bar {
      width: 70%;
      height: 100%;
      background: linear-gradient(90deg, #facc15, #f59e0b);
      border-radius: 50px;
      animation: loading 3s infinite;
    }

    .btn {
      display: inline-block;
      padding: 12px 28px;
      border: 2px solid #facc15;
      color: #facc15;
      text-decoration: none;
      border-radius: 30px;
      transition: 0.3s ease;
      font-weight: bold;
    }

    .btn:hover {
      background: #facc15;
      color: #111827;
      transform: scale(1.05);
    }

    .background-shape {
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,0.05);
      animation: float 6s infinite ease-in-out;
    }

    .shape1 {
      width: 220px;
      height: 220px;
      top: 10%;
      left: 10%;
    }

    .shape2 {
      width: 320px;
      height: 320px;
      bottom: 5%;
      right: 10%;
      animation-delay: 2s;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    @keyframes loading {
      0% {
        width: 10%;
      }
      50% {
        width: 75%;
      }
      100% {
        width: 10%;
      }
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-20px);
      }
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2.2rem;
      }

      p {
        font-size: 1rem;
      }

      .icon {
        font-size: 70px;
      }
    }
  </style>
</head>
<body>
  <div class="background-shape shape1"></div>
  <div class="background-shape shape2"></div>

  <div class="container">
    <div class="icon">🚧</div>
    <h1>Website Under Construction</h1>
    <p>
      We're working hard to bring you something amazing.
      Our website is currently under construction and will be launching soon.
    </p>

    <div class="progress-box">
      <div class="progress-bar"></div>
    </div>

    <a href="/ds-admin" class="btn">Notify Me</a>
  </div>
</body>
</html>
