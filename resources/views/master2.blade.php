<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class = "container">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">5026221094 - Darrell Athaya Refaldi</a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                  </li>

                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Database
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/pegawai">Pegawai</a>
                      <a class="dropdown-item" href="#">Link 2</a>
                      <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                  </li>
                </ul>
            </nav>
        </div>
    </body>
</html>
