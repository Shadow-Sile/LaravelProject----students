@extends('layouts.master')

@section('title', 'Alumnos')

@section('content')

<div class="card-header py-3 px-4 d-flex justify-content-between align-items-center bg-primary">
    <h5 class="fw-semibold mb-0 text-white">
        <i class="bi bi-people-fill me-2"></i>Panel Administrativo — Alumnos
    </h5>
</div>

<div class="my-3"></div>

<div class="table-responsive">
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle mb-0">
            <thead>
                <tr style="background-color: #343a40; color: rgb(255, 255, 255);">
                    <th class="ps-4 py-3">#</th>
                    <th class="py-3">Nombre</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Dirección</th>
                    <th class="py-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($estudiant as $estudiante)
                <tr>
                    <td class="ps-4 text-muted fw-semibold">{{ $estudiante->id }}</td>
                    <td class="fw-semibold">{{ $estudiante->name }}</td>
                    <td class="text-muted">{{ $estudiante->email }}</td>
                    <td class="text-muted">{{ $estudiante->address }}</td>
                    <td class="text-center">

                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('students.show', $estudiante->id) }}"
                               class="btn btn-info btn-sm text-white"
                               style="width: 34px; height: 34px; padding: 0; display:flex; align-items:center; justify-content:center;"
                               title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>
                            
                            <a href="{{url('/students/edit/' . $estudiante->id)}}"
                               class="btn btn-warning btn-sm text-white"
                               style="width: 34px; height: 34px; padding: 0; display:flex; align-items:center; justify-content:center;"
                               title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <!--//si la ruta tiene parámetros, se pasan como segundo argumento en forma de array ['id' => 1], que es el id del estudiante que toque-->
                            <form action="{{ route('students.destroy', [$estudiante->id]) }}" method="POST">
                            
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        style="width: 34px; height: 34px; padding: 0; display:flex; align-items:center; justify-content:center;"
                                        title="Eliminar">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">
                        <i class="bi bi-people fs-1 d-block mb-2"></i>
                        No hay alumnos registrados
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection