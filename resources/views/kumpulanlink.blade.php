<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kumpulan Link Tugas PWEB</title>

  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Quicksand:wght@500&family=Rubik:wght@500&display=swap" rel="stylesheet">

  <style>
    body {
      background: radial-gradient(ellipse at top left, #0f2027, #203a43, #2c5364);
      color: #fff;
      font-family: 'Rubik', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .container-custom {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.1);
      width: 100%;
      max-width: 1000px;
      text-align: center;
    }

    h1 {
      font-family: 'Orbitron', sans-serif;
      background: linear-gradient(90deg, #00ffe0, #00bfff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 600;
      margin-bottom: 1rem;
      text-transform: uppercase;
      font-size: calc(1.8rem + 1.5vw);
    }

    h3 {
      font-family: 'Quicksand', sans-serif;
      color: #cccccc;
      margin-bottom: 2.5rem;
      font-size: calc(1rem + 0.5vw);
    }

    .task-link {
      display: inline-block;
      text-decoration: none;
      text-align: center;
      background: #0f172a;
      color: #00ffe0;
      border: 2px solid #00ffe0;
      padding: 1rem 1.5rem;
      border-radius: 12px;
      font-size: calc(0.9rem + 0.2vw);
      font-family: 'Rubik', sans-serif;
      font-weight: 500;
      position: relative;
      transition: all 0.3s ease;
      overflow: hidden;
      z-index: 1;
      width: 100%;
    }

    .task-link::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: linear-gradient(120deg, #00ffe0, #00bfff);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
      z-index: -1;
    }

    .task-link:hover::before {
      transform: scaleX(1);
    }

    .task-link:hover {
      color: #0f172a;
      box-shadow: 0 0 10px #00ffe0, 0 0 20px #00bfff;
    }
  </style>
</head>
<body>

  <div class="container container-custom">
    <h1>Kumpulan Link Tugas PWEB</h1>
    <h3>Nama: I Putu Febryan K | NRP: 5026231116 | Kelas: PWEB-C</h3>

    <div class="row text-center">
      <!-- Tugas 1 - 4 -->
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('pertama')}}" class="task-link" target="_blank">Tugas 1</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('kedua')}}" class="task-link" target="_blank">Tugas 2</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('ketiga')}}" class="task-link" target="_blank">Tugas 3</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('keempat')}}" class="task-link" target="_blank">Tugas 4</a>
      </div>

      <!-- Tugas 5 - 9 -->
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('kelima')}}" class="task-link" target="_blank">Tugas 5</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('keenam')}}" class="task-link" target="_blank">Tugas 6</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('ketujuh')}}" class="task-link" target="_blank">Tugas 7</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('kedelapan')}}" class="task-link" target="_blank">Tugas 8</a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="{{url('tugasets')}}" class="task-link" target="_blank">Tugas ETS</a>
      </div>
    </div>

  </div>
</body>
</html>
