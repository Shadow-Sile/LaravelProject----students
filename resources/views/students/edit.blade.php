@extends('layouts.master')

@section('title', 'Alumnos')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Modificar estudiante
            </div>
            <div class="card-body" style="padding:30px">


                <form action="{{ route('students.update', $estudiante->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{$estudiante->name}}" class="form-control @error('name') is-invalid @enderror" value="{{ old( 'name' ) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror           
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{$estudiante->email}}" class="form-control  @error('email') is-invalid @enderror" value="{{ old( 'email' ) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror 
                    </div>


                    <div class="form-group">
                        <label for="address" >Dirección</label>
                        <input type="text" name="address" id="address" value="{{$estudiante-> address}}" class="form-control  @error('address') is-invalid @enderror" value="{{ old( 'address' ) }}">
                    @error('address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar estudiante
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection
