<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ambulance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <style>
      * {
        font-family: 'Poppins', sans-serif;
      }

      .h-font {
        font-family: 'Roboto', sans-serif;
      }

      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        background-color: darkcyan;
      }

      main {
        flex: 1;
        margin-top: -100px;
        display: flex;
        justify-content: center;
      }

      #content,
      #samping {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0 auto;
        padding: 100px;
      }

      .card1 {
        box-shadow: 0 2px 8px 2px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 20px;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
        width: 70%;
      }

      #landing {
        width: 100%;
      }

      footer {
        text-align: center;
        padding: 5px;
        color: #fff;
        background-color: rgba(0, 0, 0, .8);
      }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-3 shadow-sm sticky-top">
  <div class="container-fluid d-flex align-items-center">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
      <span style="color: royalblue;">EMERG</span> <span style="color: black;">LINK</span>
    </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2 fw-bold fs-5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 fw-bold fs-5" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5 fw-bold fs-5" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Landing -->
<main>
<div id="landing" class="content-container d-flex justify-content-center align-items-center">
    <div class="d-flex align-items-center">
      <div id="content">
        <article class="card1">
          <h2>Lectus</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Nisl condimentum id venenatis a condimentum. Sit amet
            cursus sit amet dictum sit amet. Enim neque volutpat ac tincidunt vitae. Mi quis hendrerit
            dolor magna eget est lorem ipsum. Lectus urna duis convallis convallis tellus id interdum.
            Platea dictumst quisque sagittis purus sit amet volutpat consequat. Dignissim cras tincidunt
            lobortis feugiat vivamus at. Nisi porta lorem mollis aliquam ut porttitor. Pretium vulputate
            sapien nec sagittis aliquam malesuada bibendum. Et molestie ac feugiat sed lectus vestibulum.
            Lacus sed turpis tincidunt id aliquet risus.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Elementum integer enim neque volutpat ac tincidunt vitae.
            Pellentesque massa placerat duis ultricies lacus sed turpis. Orci nulla pellentesque dignissim
            enim. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
          </p>
        </article>
      </div>
      
      <div id="samping">
      <aside>
        <article class="card2">
        <img src="image/paint.png" alt="squid"/>
        </article>
      </aside>
      </div>
    </div>
  <div>

</main>
<footer>
      <p>Lorem ipsum dolor sit amet, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.
         &#169; 2023, Lorem ipsum</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>