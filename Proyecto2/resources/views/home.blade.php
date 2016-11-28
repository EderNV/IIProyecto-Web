@extends('layouts.app')

@section('content')


@endsection

@section('aside')
<style>
    body{
        background: url("{{ asset('img/fibra.jpg') }}") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .home{
        background-color: black;
        color: white;
        height: 100px;
        padding: 0 20px;
        line-height: 100px;
        bottom: 10px;
        position: absolute;
        bottom: 10px;
    }

    .nombre{
        width: 20%;
        text-align: right;
    }

    .descripcion{
        width: 80%;
        text-align: left;
        opacity: 0.7;
        left: 20%;
    }

    h1, h3{
        display: inline-block;
        vertical-align: middle;
        line-height: normal;
    }

</style>

<div class="home nombre">
    <h1>BienesCR</h1>
</div>
<div class="home descripcion">
    <h3>El mejor sitio de bienes raíces de Costa Rica</h3>
</div>
@endsection
