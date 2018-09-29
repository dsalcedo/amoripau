<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Layouts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    @yield('css')
</head>
<body>
<div id="head">
    <img src={{ asset('images/Header.png') }} id="imgHead">
    <img src={{ asset('images/Buscador_icono.png') }} id="iconobs">
    <img src={{ asset('images/Facebook_icono.png') }} id="iconofb">
    <img src={{ asset('images/Instagram_icono.png') }} id="iconoig">

    <div id="menu">
            <a href="" class="space">INICIO</a>
            <a href="" class="space">NOSOTROS</a>
            <a class="space" data-toggle="collapse" href="#menudes" role="button" aria-expanded="false" aria-controls="menudes">PRODUCTOS</a>
            <a href="" class="space">MI CUENTA</a>
            <a href="" class="space">MI CARRITO</a>
            <a href="" class="space">DISTRIBUIDOR</a>

    </div>
    <div class="collapse" id="menudes">
       <img src={{asset('images/Footer.png')}} id="imgDes">
        <a href="" class="space2">ARETES</a>
        <a href="" class="space2">ANILLOS</a>
        <a href="" class="space2">COLLARES</a>
        <a href="" class="space2">DIJES</a>
        <a href="" class="space2">PULSERAS</a>
        <a href="" class="space2">NUEVA COLECCIÓN</a>
        <a href="" class="space2">EDICIÓN LIMITADA</a>
        <a href="" class="space2">CABALLEROS</a>
        <a href="" class="space2">CATÁLOGO</a>
    </div>
</div>

@yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@yield('javascript')

</body>
@yield('footer')
<footer>
    <label id="bga">Diseñado por Big Bang Asociados 2018</label>
    <label id="ayp">© Amor i Pau 2018</label>
    <img src={{asset('images/Amor_i_pau_logo_blanco.png')}} id="logoblanco">
    <img src={{asset('images/Facebook_icono.png')}} id="iconofb2">
    <img src={{asset('images/Instagram_icono.png')}} id="iconoig2">
    <img src={{asset('images/Footer.png')}} id="foot">
</footer>
</html>
