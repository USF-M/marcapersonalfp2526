@extends('layouts.master')

@section('content')

    <h1>Vista detalle proyecto {{$proyecto['nombre']}}</h1>

    <div class="container">
        <div class="row">

            <div class="col-4">

                <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>

            </div>
            <div class="col-8">

                <h1>Nombre: {{$proyecto['nombre']}}</h1>
                <p>
                    <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                        http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                    </a>
                </p>
                <h2>Dominio: {{$proyecto['dominio']}}</h2>
                <h3>Docente ID: {{$proyecto['docente_id']}}</h3>
                <h6>Fecha inicio: {{$proyecto['metadatos']['fecha_inicio']}}</h6>
                <h6>Fecha fin: {{$proyecto['metadatos']['fecha_fin']}}</h6>
                <h6>Calificacion: {{$proyecto['metadatos']['calificacion']}}</h6>
                @if($proyecto['metadatos']['calificacion'] < 5)
                    <h6>Estado: <span style="color:red">Proyecto suspenso</span></h6>
                    <button style="background-color:blue !important">Aprobar proyecto</button>
                @endif
                @if($proyecto['metadatos']['calificacion'] >= 5)
                    <h6>Estado: <span style="color:blue">Proyecto aprobado</span></h6>
                    <button style="background-color:red !important">Suspender proyecto</button>
                @endif

                <a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getEdit'], ['id' => $id] ) }}" class="button alt">Editar el Proyecto</a>
                <a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getIndex']) }}" class="button alt">Volver al Inicio</a>

            </div>
        </div>
    </div>

@stop

