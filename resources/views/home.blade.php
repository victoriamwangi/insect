@extends('layouts.front')

@section('title', 'Homepage')
@section('content')

    <div class="showcase">
        <div class="showcase-inner">
            <div class="showcase-text">
                <h1 class="display mb-5">Kiharu Smart Farming</h1>
                <h4 class="display my-3"> Ukulima bora wa kisasa </h4>
                <p class="lead">
                    Your maize farm is infested by pests that you don't understand or dont know the pesticide?
                    Click the button below to scan the pest and know the name of the insect as well as the insecticides to use on the farm!
                </p>

                <a class="btn" href="/scans/create" style="background: orangered;">Scan</a>
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

    <section class="about bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 d-lg-none">
                    <img src="{{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="txt-box shadow-sm">
                    {{-- <h4>Maize Farming</h4> --}}
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat modi eius
                        optio
                        quod doloremque unde ullam ab, laboriosam aliquam harum nostrum tempore mollitia quasi ad, quos
                        officia
                        quae maxime sapiente?</p>
                </div>
                <div class="col-md-4 d-none d-lg-block"></div>
                <div class="col-md-8 img-box d-none d-lg-block"
                    style="background:#fff url({{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }})"></div>
                   
            </div>
            <div class="row">
                <div class="col-md-8 img-box d-none d-lg-block"
                    style="background:#fff url({{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }})"></div>
              
                <div class="col-md-4 d-none d-lg-block"></div>
                <div class="col-12 d-lg-none">
                    <img src="{{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="txt-box shadow-sm even">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat modi eius
                        optio
                        quod doloremque unde ullam ab, laboriosam aliquam harum nostrum tempore mollitia quasi ad, quos
                        officia
                        quae maxime sapiente?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-lg-none">
                    <img src="{{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="txt-box shadow-sm">
                    <h4></h4>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat modi eius
                        optio
                        quod doloremque unde ullam ab, laboriosam aliquam harum nostrum tempore mollitia quasi ad, quos
                        officia
                        quae maxime sapiente?</p>
                </div>
                <div class="col-md-4 d-none d-lg-block"></div>
                <div class="col-md-8 img-box d-lg-block"
                    style="background:#fff url({{ asset('img/natalia-terskaya-W0pdzJmTXyE-unsplash.jpg') }})"></div>
            </div>
            
        </div>
    </section>
@endsection
