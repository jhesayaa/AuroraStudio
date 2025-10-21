<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aurora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
  body {
  background-image: url("{{ asset('publicimage/background.jpeg') }}");
  background-size: cover;
  background-attachment: fixed;
  }

  .navbar-custom {
    background: linear-gradient(70deg, rgb(135,206, 250) 20%, rgb(0,191,255));
  }

  .navbar-brand img {
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
  }

  .navbar-brand-text {
    font-size: 20px;
    font-weight: bold;
    margin-left: 10px;
  }

  .nav-link {
    font-size: 20px;
  }
</style>
<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-custom">
      <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('img/aurorastudio.jpg') }}" alt="Logo">
            <span class="navbar-brand-text">Aurora PhotoStudio</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  @if(Auth::check())
                      <li class="nav-item"><a class="nav-link" href="/booking">Booking</a></li>
                      <li class="nav-item"><a class="nav-link" href="/infopesanan">Details</a></li>
                      <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>
  @yield('content')
</body>
</html>
