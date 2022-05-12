<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <body style="background-image:linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);">
        <title>Document</title>
</head>
<body>
    <nav class="border-bottom shadow navbar navbar-scroll navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="asset/logobumi.png" height="70" alt="" loading="lazy" />
                <a href="http://www.freepik.com"></a>
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                <a class="nav-link"></a>
              <li class="nav-item me-2">
                <a class="nav-link active" aria-current="page" href="{{ route('home')}}">HOME</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link active" aria-current="page" href="{{ route('getCreatePage')}}">INPUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('getBooks')}}">VIEW</a>
              </li>
            </ul>

            {{-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success me-2" type="submit">Search</button>
            </form> --}}
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger me-2">logout</button>
            </form>
          </div>
        </div>
      </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>


</html>


