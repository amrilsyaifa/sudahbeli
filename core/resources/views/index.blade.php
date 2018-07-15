<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url ('css/bootstrap.min.css')}}" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{url ('font/css/font-awesome.min.css')}}">

    <!--CSS -->
  <link rel="stylesheet" href="{{url ('css/style.css')}}"

    <title>Sudah Beli</title>
  </head>
  <body>
        <div id="app">
            {{-- navbar --}}
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
                <div class="container">
                    <a class="navbar-brand" href="#">Sudah Beli</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kategori
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input id="cari"type="text" class="form-control" placeholder="Cari Belanja di Sini" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-outline-light my-2 my-sm-0 jarak"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-outline-light my-2 my-sm-0" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masuk</button>
                                    <form id="form-masuk" class="dropdown-menu p-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Email / Username / No Handphone">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                            <label class="form-check-label" for="dropdownCheck2">Ingat Saya</label>
                                            <a href="">Lupa Password</a>
                                        </div>
                                        <button type="submit" class="btn btn-info form-control">Sign in</button>
                                    </form>
                                <button class="btn btn-light my-2 my-sm-0" type="submit">Daftar</button>
                            </div>
                        </div>  
                    </div>
                </div>
            </nav>
            {{-- close Navbar --}}
        </div>

        {{-- jumbotron slide --}}

        <div id="jumbotron" class="jumbotron jumbotron-fluid">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- close jumbotron slide --}}

        {{-- image thumbnail --}}
        
        <div class="container">
            <div class="row">
                <h2>Top Shopping</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x asssssssssssas asssssssssssss asaaaa asss asasasa asas asasas as </p>
                    <p>Rp. 1.500.000</p>
                </div>        
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>
                <div class="col-lg-3 gambar">
                    <img src="https://www.arjunaelektronik.com/wp-content/uploads/2018/05/VIVO-Y71-1-200x192.jpg" alt="..." class="img-thumbnail">
                    <p>Xiaomi redmi 4x</p>
                    <p>Rp. 1.500.000</p>
                </div>        
            </div>
        </div>

        {{-- Close image thumbnail --}}

    <!-- Optional JavaScript -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{url('popper.min.js')}}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{url('js/bootstrap.min.js')}}" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>