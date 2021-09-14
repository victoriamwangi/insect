@extends('layouts.front')

@section('title', 'Homepage')
@section('content')

    <div class="showcase">
        <div class="showcase-inner">
            <div class="showcase-text">
                <h1 class="display mb-5">Some Big welcome text</h1>
                <h4 class="display my-3">Some subheading welcome text</h4>

                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae assumenda animi, rerum officia nemo
                    voluptatem, est error nisi similique, quod ducimus dolores sit sint fugit iure laboriosam aliquid?
                    Nihil, laudantium!
                </p>

                <a class="btn" style="background: orangered;">Scan</a>
            </div>
            <div class="social-media">
                <nav class="nav justify-content-center align-items-center px-4 py-3 rounded">
                    <a class="nav-link social" href="#"> <i class="fab fa-whatsapp" aria-hidden="true"></i> </a>
                    <a class="nav-link social" href="#"> <i class="fab fa-facebook" aria-hidden="true"></i> </a>
                    <a class="nav-link social" href="#"> <i class="fab fa-instagram" aria-hidden="true"></i> </a>
                </nav>
            </div>
        </div>
    </div>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="txt-box shadow-sm">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat modi eius
                        optio
                        quod doloremque unde ullam ab, laboriosam aliquam harum nostrum tempore mollitia quasi ad, quos
                        officia
                        quae maxime sapiente?</p>
                </div>
                <div class="col-md-4 d-none d-lg-block"></div>
                <div class="col-md-8 img-box"
                    style="background:#fff url({{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }})"></div>
            </div>
            <div class="row">
                <div class="col-md-8 img-box"
                    style="background:#fff url({{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }})"></div>
              
                <div class="col-md-4 d-none d-lg-block"></div>
                <div class="txt-box shadow-sm even">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat modi eius
                        optio
                        quod doloremque unde ullam ab, laboriosam aliquam harum nostrum tempore mollitia quasi ad, quos
                        officia
                        quae maxime sapiente?</p>
                </div>
            </div>
        </div>
    </section>
@endsection
