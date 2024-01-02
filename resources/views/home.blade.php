@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

    {{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <strong>Selamat datang</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zaini.com</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>1
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}"> --}}

    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <!-- header desain -->
    {{-- <header class="header">
        <a href="{{ '/mahasiswa' }}" class="logo">STMIK.co<span style="color: rgb(0, 204, 255);">.id</span></a>
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">

            <a href="#" class="active">Home</a>
            {{-- <a href="#" class="active">Home</a> --}}
            {{-- <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portofolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <a href="{{ '/login' }}">Login</a>
            <a href="{{ '/register' }}">Register</a>
        </nav>
        
    </header> --}}
    <!-- header desain end -->



    <!-- home secrion -->
    <section class="home" id="home">


        <div class="home-content">
            <h3>Hello it's me</h3>
            <h1 class="text-animate">Zain Banana</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p class="texts">Teknologi hanyalah alat. Namun, untuk menjadikan anak-anak bisa saling bekerjasama dan termotivasi, guru adalah yang paling penting.</p>

            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-tiktok' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
            </div>



            <a href="#about" class="btn">Download</a>
        </div>

        <div class="home-img">
            <img src="{{asset('asset/img/pf2.png')}}" width="100" height="200" alt="">
        </div>
        <!-- <div class="services-iconTop">
            <a href="#about"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    <!-- home secrion end -->


    <!-- about section -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="asset/img/nmax/nmax (4).png" width="600" height="600" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3 class="h3">Frontend Gobloker!</h3>
            <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan hal yang menakjubkan dengan alat-alat itu.</p>

            <a href="#services" class="btn">Read More</a>
        </div>
        <!-- <div class="services-iconTop">
            <a href="#services"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    <!-- about section end-->


    <!-- services section -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code-alt"></i>
                <h3>Web Developmen</h3>
                <p>Lorem ipsum dolor sit amet. repellat placeat repudiandae veniam incidunt distinctio!</p>
                    <a href="#portofolio" class="btn">Read More</a>
                </p>
            </div>

            <div class="services-box">
                <i class="bx bxs-paint"></i>
                <h3>Desain grafis</h3>
                <p>Lorem ipsum dolor sit amet. repellat placeat repudiandae veniam incidunt distinctio!</p>

                    <a href="#portfolio" class="btn">Read More</a>
                </p>
            </div>

            <div class="services-box">
                <i class="bx bxs-bar-chart-alt-2"></i>
                <h3>Marketing</h3>
                <p>Lorem ipsum dolor sit amet. repellat placeat repudiandae veniam incidunt distinctio!</p>
                    <a href="#portfolio" class="btn">Read More</a>
                </p>
            </div>
        </div>
        <!-- <div class="services-iconTop">
            <a href="#portofolio"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    <!-- services section end -->


    <!-- portofolio section -->
    <section class="portofolio" id="portofolio">
        <h2 class="heading">Last's <span>Project</span></h2>

        <div class="portofolio-container">
            <div class="portofolio-box">
                <img src="asset/img/bg1.jpeg" width="400" height="200" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#contact"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="asset/img/bg2.jpeg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="asset/img/bg3.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="asset/img/bg4.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="asset/img/bg5.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="asset/img/bg6.jpeg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <!-- <div class="footer-iconTop">
                <a href="#contact"><i class="bx bx-down-arrow-alt"></i></a>
            </div> -->
            </div>
    </section>
    <!-- portofolio section end-->


    <!-- contact section -->
    <section class="contact" id="contact">
        <img src="asset/img/pt/poto (2).png" width="300" height="300" alt="">
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder=": Nama anda">
                <input type="email" name="" id="" placeholder=": Nama@gmail.com">
            </div>
            <div class="input-box">
                <input type="number" placeholder=": +62 XXX XXX XXX">
                <input type="text" name="" id="" placeholder=": Email subjek">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder=": Pesan anda"></textarea>
            <input type="submit" name="" id="" value="send Message" class="btn">
        </form>

    </section>
    <!-- contact section end-->


    <!-- footer -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Codehal | all Right Reserved</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>
    <!-- footer end-->


    <!-- scroll -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- scroll -->


    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- typed js -->
    <script src="asset/js/main.js"></script>
</body>
</html>


@endsection
