@extends('layout')
@section('title','Users list')
@section('header','Users list')
@section('header-botton')
  <div class="d-inline">
    <a href="{{ route('user.form', ['id'=>0])}}" class="btn btn-primary">Nuevo usuario</a>
  </div>
@endsection
@section('content')
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Area</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($listUsers[0] as $user)
            <tr>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                @foreach ($listUsers[1] as $area)
                  @if ($user->area_id == $area->id)
                    <td>{{$area->name}}</td>
                  @endif
                @endforeach
                <td>
                    <a href="{{ route('user.form',['id'=>$user->id]) }}" class="btn btn-primary">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  
@endsection