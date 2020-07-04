<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('/assets/style.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>



    <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
        <a class="navbar-brand" href="#">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/logo_white.png" width="30" height="30" alt="logo">
          BootstrapBay
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-list-2">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('allpost.index') }}">All Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ route('create.create') }}">CreatePost</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('create.index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
              </li>
          </ul>
        </div>
      </nav>
      @yield('content')
    </body>
          
      </head>