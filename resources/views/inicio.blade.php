<!DOCTYPE html>
<html>
<head>
  <title>Crud</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background: #D7D7D7">
  <br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 250px;margin-right: 250px;">
  <a class="navbar-brand" href="#"><strong> Inicio </strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('users') }}"><strong>Empleados</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('articulos') }}"><strong>Articulos</strong></a>
      </li>
      <li class="nav-item dropdown" style="margin-left: 400px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <strong>{{ Auth::user()->name }}</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
        </form>
      </li>
    </ul>

  </div>
</nav>


    <section id="main-content" >
      <section class="wrapper">

          <div class="main-chart" style="text-align: center;">
            <!--CUSTOM CHART START -->
            <br>
            <div class="border-head">
              <h3 style="color: #060606"><strong> @yield('title')</strong></h3>
            </div>
            <hr>
            <br><br>
            
              <!-- SERVER STATUS PANELS -->
              @yield('contenido')
              
              <!--/ col-md-4 -->
          </div>

      </section>
    </section>
    

</body>
</html>