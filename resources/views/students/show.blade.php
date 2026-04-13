@extends('layouts.master')

@section('title', 'Ver Alumno')

@section('content')

<div class="row justify-content-center mt-4">
    <div class="col-12 col-md-6">

        {{-- Card principal --}}
        <div class="card border-0 shadow-sm rounded-4">

            {{-- Header azul --}}
            <div class="card-header bg-primary rounded-top-4 py-3 px-4">
                <h5 class="text-white fw-semibold mb-0">
                    <i class="bi bi-person-fill me-2"></i>Detalle del alumno
                </h5>
            </div>

            {{-- Cuerpo --}}
            <div class="card-body px-4 py-4">

                {{-- Avatar + nombre --}}
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center"
                         style="width:56px;height:56px;font-size:1.4rem;color:var(--bs-primary);font-weight:700;flex-shrink:0;">
                        {{ strtoupper(substr($estudiante->name, 0, 1)) }}
                    </div>
                    <div>
                        <div class="text-muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.06em;font-weight:600;">Nombre</div>
                        <div class="fw-semibold fs-5">{{ $estudiante->name }}</div>
                    </div>
                </div>

                <hr class="my-3">

                {{-- Email --}}
                <div class="mb-3 d-flex align-items-start gap-2">
                    <i class="bi bi-envelope text-primary mt-1"></i>
                    <div>
                        <div class="text-muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.06em;font-weight:600;">Email</div>
                        <div class="text-dark">{{ $estudiante->email }}</div>
                    </div>
                </div>

                {{-- Dirección --}}
                <div class="d-flex align-items-start gap-2">
                    <i class="bi bi-geo-alt text-primary mt-1"></i>
                    <div>
                        <div class="text-muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.06em;font-weight:600;">Dirección</div>
                        <div class="text-dark">{{ $estudiante->address }}</div>
                    </div>
                </div>

            </div>

            {{-- Footer con botones --}}
            <div class="card-footer bg-white border-0 px-4 pb-4 pt-0 d-flex gap-2">
                <a href="{{ url('/students/edit/' . $estudiante->id) }}" class="btn btn-warning btn-sm text-white">
                    <i class="bi bi-pencil me-1"></i>Editar
                </a>
                <a href="/students" class="btn btn-light btn-sm border">
                    <i class="bi bi-chevron-left me-1"></i>Volver
                </a>
            </div>

        </div>

    </div>
</div>

@endsection