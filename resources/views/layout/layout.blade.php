<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/colreorder/2.0.3/css/colReorder.dataTables.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css" rel="stylesheet">
         
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/colreorder/2.0.3/js/dataTables.colReorder.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>

        
        <script src="https://kit.fontawesome.com/3ab26b6439.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function (){
                $('#table').DataTable({
                    responsive : true,
                    "sDom": 'Lfrtlip' ,
                    ordering: true,
                    order: [[0, 'asc']],
                });
            });
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body class="wrapper">
    <div class="preloader">
        <img src="{{ asset('aurora.jpg') }}" alt="AdminLTELogo" height="60" width="60">
    </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
    <a href="/dashboard" class="navbar-brand">
      <span class="brand-text font-weight-light">AuroraStudio</span>
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a href="{{ url('photographers') }}" class="nav-link">Photographers</a>
        </li>
        <li class="nav-item  d-sm-inline-block">
            <a href="{{ url('photography_sessions') }}" class="nav-link">Sessions</a>
        </li>
        <li class="nav-item  d-sm-inline-block">
            <a href="{{ url('bookings') }}" class="nav-link">Bookings</a>
        </li>
        <li class="nav-item  d-sm-inline-block">
            <a href="{{ url('images') }}" class="nav-link">Images</a>
        </li>
        <li class="nav-item  d-sm-inline-block">
            <a href="{{ route('login.logout') }}" class="nav-link">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  
    <div class="container mt-5">
        @yield('navbaradmin')
    </div>
</body>
</html>
<style>
  .main-header{
    margin-left: 0 !important;
    padding-left: 30px !important; 
  }
  .preloader{
    justify-content: center;
    align-items: center;
  }
</style>