<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .jumbotron {
            padding: 0rem;
            padding-top: 2rem;
            background-color: #e2edff;
        }
        #projects {
            background-color: #e2edff;
        }
    </style>
    <title>Bobby Sutanto | Portfolio</title>
</head>
<body>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Bobby Sutanto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ ($title === "Home") ? 'active' : '' }} ">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item {{ ($title === "About") ? 'active' : '' }} ">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item {{ ($title === "Projects") ? 'active' : '' }} ">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
        </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    
    <!-- JUMBOTRON -->
    <section class="jumbotron text-center text-dark">
        <img src="img/foto.png" alt="Bobby Sutanto" width=200 class="img-thumbnail rounded-circle">
        <h1 class="display-4">Bobby Sutanto, S.Kom</h1>
        <p class="lead">Software Developer | IT Support</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block;"><path fill="#ffffff" fill-opacity="1" d="M0,192L60,186.7C120,181,240,171,360,181.3C480,192,600,224,720,224C840,224,960,192,1080,186.7C1200,181,1320,203,1380,213.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
    <!-- END JUMBOTRON -->
    
    
    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2 class>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-4">
                    <p>Lulusan S1 Teknik Informatika dari Universitas Kristen Petra tahun 2002-2006, dengan lebih dari 15 tahun pengalaman kerja. Sejak tahun 2006 menerima pesanan pembuatan software untuk berbagai kebutuhan usaha, seperti rental dvd, toko sepeda, bahan bangunan, alat tulis, emas, sparepart motor, babyshop, dll. </p>
                </div>
                <div class="col-4">
                    <p>Selain bekerja sebagai freelance programmer, pada tahun 2007 juga bekerja pada sebuah perusahaan PT. Surabaya Agung Industri Pulp & Kertas, bekerja dalam sebuah team IT yang beranggotakan ±15 orang, bertugas sebagai programmer bertanggung jawab membuat, mengimplementasikan... <a href="\about">read more</a></p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block;"><path fill="#e2edff" fill-opacity="1" d="M0,224L60,234.7C120,245,240,267,360,256C480,245,600,203,720,192C840,181,960,203,1080,224C1200,245,1320,267,1380,277.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
    <!-- END ABOUT -->
    
    <!-- PROJECTS -->
    <section id="projects">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col">
                    <h2>My Projects</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ $post["img"] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post["title"] }}</h5>
                                <p class="card-text">{!! $post["body"] !!}</p>
                                <a href="/{{ $post["slug"] }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block;"><path fill="#0D6EFD" fill-opacity="1" d="M0,160L60,160C120,160,240,160,360,186.7C480,213,600,267,720,266.7C840,267,960,213,1080,176C1200,139,1320,117,1380,106.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
    <!-- END PROJECTS -->
    
    @include('partials.footer')
    
</body>
</html>


