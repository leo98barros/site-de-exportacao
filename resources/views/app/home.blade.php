@extends('layouts.app')

@section('body')
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="d-block w-100" alt="..." style="max-height: 200px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Autenticidade</h5>
                    <p>Quadros para quem busca destacar seus gostos por cada ambiente.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="d-block w-100" alt="..." style="max-height: 200px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Qualidade</h5>
                    <p>Material dos melhores fornecedores e pintura de longa duração</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="d-block w-100" alt="..." style="max-height: 200px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Elegância</h5>
                    <p>Estilo e sofisticação para quem tem.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-7">
                <h2 class="featurette-heading">Artístico</h2>
                <p class="lead">Cópias em tamanho original de obras clássicas de diversos movimentos artísticos.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{ asset('img/produtos/PS-3.jpg') }}" alt="Generic placeholder image">
            </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Futebol</h2>
                <p class="lead">Retratos de jogadores e de grandes momentos do futebol brasileiro e internacional.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="{{ asset('img/produtos/FB-3.jpg') }}" alt="Generic placeholder image">
            </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading">Paisagem</h2>
                <p class="lead">Quadros de paisagens em alta qualidade de impressão com diversos tamanhos.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{ asset('img/produtos/AR-1.jpg') }}" alt="Generic placeholder image">
            </div>
        </div>
    </div>
@endsection
