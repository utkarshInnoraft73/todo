<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .roboto-thin {
      font-family: "Roboto", sans-serif;
      font-weight: 100;
      font-style: normal;
    }

    .roboto-light {
      font-family: "Roboto", sans-serif;
      font-weight: 300;
      font-style: normal;
    }

    .roboto-regular {
      font-family: "Roboto", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .roboto-medium {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-style: normal;
    }

    .roboto-bold {
      font-family: "Roboto", sans-serif;
      font-weight: 700;
      font-style: normal;
    }

    .roboto-black {
      font-family: "Roboto", sans-serif;
      font-weight: 900;
      font-style: normal;
    }

    .roboto-thin-italic {
      font-family: "Roboto", sans-serif;
      font-weight: 100;
      font-style: italic;
    }

    .roboto-light-italic {
      font-family: "Roboto", sans-serif;
      font-weight: 300;
      font-style: italic;
    }

    .roboto-regular-italic {
      font-family: "Roboto", sans-serif;
      font-weight: 400;
      font-style: italic;
    }

    .roboto-medium-italic {
      font-family: "Roboto", sans-serif;
      font-weight: 500;
      font-style: italic;
    }

    .roboto-bold-italic {
      font-family: "Roboto", sans-serif;
      font-weight: 700;
      font-style: italic;
    }

    .roboto-black-italic {
      font-family: "Roboto", sans-serif;
      font-weight: 900;
      font-style: italic;
    }

    .container404 {
      padding: 10px 60px;
      text-align: center;
      background-color: #eff1f9;
    }

    .text-404 {
      font-size: 300px;
      font-weight: bolder;
    }

    .text-msg {
      font-size: 40px;
      position: relative;
      bottom: 120px;

    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
        </ul>
      </div>
      <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
  </nav>
  <div class="container404">
    <div>
      <p class="text-404 roboto-black-italic">404</p>
      <p class="text-msg roboto-medium">Page not found.</p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
