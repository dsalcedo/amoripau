@extends('layouts.dashboard')




@section('css')
    <link rel="stylesheet" href="css/paginaprincipal.css">
@endsection

@section('content')

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner"  >
        <div class="carousel-item active" >
            <img src= {{asset('images/Slider_2.png')}} slide" alt="First slide" id="imgCarr">
        </div>
        <div class="carousel-item">
            <img src= {{asset('images/Slider_2_2.png')}} slide" alt="Second slide" id="imgCarr">
        </div>
        <div class="carousel-item">
            <img src= {{asset('images/Slider_2_3.png')}} slide" alt="Third slide" id="imgCarr">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div></div>
    <img src={{ asset('images/Ornamento_separador.png') }} id="ornamento1"><br>
    <div class="row">


        <div>
            @foreach($producto as $produ)
                <div class="col-md-4">
                <div>
                    @isset($produ->primeraImagen()->ruta)
                    <img class="card-img-top" src="{{asset('img/'.$produ->primeraImagen()->ruta)}}"  alt="Card image cap">
                    <div class="card-body">
                        <img src={{asset('images/Ornamento_separador_rosa.png')}} id="ornamento2">
                        <p class="card-text">Collar con dije de mariposa</p>
                        <p>$190.00</p>
                    </div>
                        @endisset
                </div>
            </div>

            @endforeach
        </div><br>
    </div>
    <img src={{ asset('images/Ornamento_separador.png') }} id="ornamento1"><br>
    <div class="row">
        <div class="col-md-3">
            <ul>
                <h5 class="subt">Sobre Amor i Pau</h5>
                <li>Preguntas frecuentes</li>
                <li>Cómo cuidar tus prendas</li>
                <li>Catálogo en línea</li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <h5 class="subt">Productos Amor i Pau</h5>
                <li>Piezas limitadas</li>
                <li>Nueva colección</li>
                <li>Prendas con descuento</li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <h5 class="subt">Avisos de privacidad</h5>
                <li>Política de privacidad</li>
                <li>Política de cookies</li>
                <li>Términos y condiciones</li>
            </ul>
        </div>
        <div class="col-md-3">
            <ul>
                <h5 class="subt">Registrarme</h5>
                <li>Cliente</li>
                <li>Distribuidor</li>
                <input type="text">
            </ul>
        </div>
    </div>
@endsection
@section('Footer')
@endsection

@section('javascript')
@endsection

