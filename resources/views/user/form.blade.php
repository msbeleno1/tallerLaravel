@extends('layout')
@section('title','New user')
@section('header','New user')
@section('content')

    <form action="{{ route('user.save') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $list[1]->id }}" required>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="{{ @old('name') ? @old('name') : $list[1]->name}}">
            </div>
        </div>
		@error('name')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label">Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="{{ @old('email') ? @old('email') : $list[1]->email}}">
            </div>
        </div>
        @error('email')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="row mb-3">
            <label for="cost" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" value="{{ @old('password') ? @old('password') : $list[1]->password}}">
            </div>
        </div>
        @error('password')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Area</label>
            <div class="col-sm-10">
                <select class="form-control" name="area" id="area">
                    @if ($list[1]->id == 0)
                            <option value="" selected>Seleccione...</option>
                    @else
                            <option value="">Seleccione...</option>
                    @endif
                    @foreach ($list[0] as $area)       
                        @if ($area->id == $list[1]->area_id)
                            <option value="{{$area->id}}" selected>{{$area->name}}</option>                            
                        @elseif ($area->id != $list[1]->area_id)
                            <option value="{{$area->id}}">{{$area->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        @error('area_id')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror

        <div class="row mb-3 justify-content-end">
            <a href="/users" class="btn btn-secondary col-1 m-1">Cancelar</a>
            <button type="submit" class="btn btn-success col-1 m-1">Guardar</button>
        </div>
    </form>
@endsection