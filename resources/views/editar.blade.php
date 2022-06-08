@extends('layouts.app')

@section('content')
        <div id="divtotal" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <form action="{{route('guardar', $editar->id)}}" method="post">
                {{ csrf_field() }}
                <img src='{{$editar->imagen}}' id="imgeditar">
                <br>
                <br>
              <label for="nombre">Nombre:</label>
              <input type="text" placeholder="{{$editar->nombre}}" name="nombre" id="nombre">
              <br><br>
              <label for="marca">Marca:</label>
              <input type="text" placeholder="{{$editar->marca}}" name="marca" id="marca">
              <br><br>
              <label for="precio">Precio:</label>
              <input type="text" placeholder="{{$editar->precio}}" name="precio" id="precio">
              <br><br>
              <label for="precio">Imagen(url):</label>
              <input type="text" placeholder="{{$editar->imagen}}" name="imagen" id="imagen">
              <br><br><br>
              <button class="button-36"><a href="{{route('menu')}}">Volver</a></button> <button class="button-36" type="submit">Guardar</button>
           
        </div>
@endsection