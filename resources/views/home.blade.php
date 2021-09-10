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


@endsection
