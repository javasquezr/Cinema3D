@extends('layouts.app')

@section('title', 'Editar Registro - Cinema3D')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h1 class="h4 mb-0">Editar registro #{{ $registro->id}}</h1>
        </div>

        <div class="card-body">
            @include('registros._form')
        </div>
    </div>
@endsection